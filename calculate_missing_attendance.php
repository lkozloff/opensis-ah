<?php
error_reporting(0);
include('Redirect_root.php');
include 'Warehouse.php';
include 'data.php';
$syear = $_SESSION['UserSyear'];
$flag=FALSE;
$RET=DBGet(DBQuery("SELECT SCHOOL_ID,SCHOOL_DATE,COURSE_PERIOD_ID,TEACHER_ID,SECONDARY_TEACHER_ID FROM missing_attendance WHERE SYEAR='".  UserSyear()."' LIMIT 0,1"));
 if (count($RET))
{
     $flag=TRUE;
 }
$last_update=DBGet(DBQuery("SELECT VALUE FROM program_config WHERE PROGRAM='MissingAttendance' AND TITLE='LAST_UPDATE'"));
$last_update=$last_update[1]['VALUE'].'<br>';
DBQuery("INSERT INTO missing_attendance(SCHOOL_ID,SYEAR,SCHOOL_DATE,COURSE_PERIOD_ID,PERIOD_ID,TEACHER_ID,SECONDARY_TEACHER_ID) SELECT s.ID AS SCHOOL_ID,acc.SYEAR,acc.SCHOOL_DATE,cp.COURSE_PERIOD_ID,cp.PERIOD_ID,".  db_case(array("tra.course_period_id=cp.course_period_id AND acc.school_date<tra.assign_date",'true','tra.pre_teacher_id','cp.teacher_id'))." AS TEACHER_ID,cp.SECONDARY_TEACHER_ID " .
                                    "FROM attendance_calendar acc " .
                                    "INNER JOIN marking_periods mp ON mp.SYEAR=acc.SYEAR AND mp.SCHOOL_ID=acc.SCHOOL_ID " .
                                    " AND acc.SCHOOL_DATE BETWEEN mp.START_DATE AND mp.END_DATE " .
                                    "INNER JOIN course_periods cp ON cp.MARKING_PERIOD_ID=mp.MARKING_PERIOD_ID AND cp.DOES_ATTENDANCE='Y' AND cp.CALENDAR_ID=acc.CALENDAR_ID " .
                                    "LEFT JOIN teacher_reassignment tra ON (cp.course_period_id=tra.course_period_id) " .
                                    "INNER JOIN school_periods sp ON sp.SYEAR=acc.SYEAR AND sp.SCHOOL_ID=acc.SCHOOL_ID AND sp.PERIOD_ID=cp.PERIOD_ID " .
                                    " AND (sp.BLOCK IS NULL AND position(substring('UMTWHFS' FROM DAYOFWEEK(acc.SCHOOL_DATE) FOR 1) IN cp.DAYS)>0 " .
                                    "   OR sp.BLOCK IS NOT NULL AND acc.BLOCK IS NOT NULL AND sp.BLOCK=acc.BLOCK) " .
                                    "INNER JOIN schools s ON s.ID=acc.SCHOOL_ID " .
                                    "INNER JOIN schedule sch ON sch.COURSE_PERIOD_ID=cp.COURSE_PERIOD_ID AND sch.START_DATE<=acc.SCHOOL_DATE " .
                                    "AND (sch.END_DATE IS NULL OR sch.END_DATE>=acc.SCHOOL_DATE ) ".
                                    "LEFT JOIN attendance_completed ac ON ac.SCHOOL_DATE=acc.SCHOOL_DATE AND ac.STAFF_ID=cp.TEACHER_ID AND ac.PERIOD_ID=sp.PERIOD_ID " .
                                    "WHERE acc.SYEAR='".$syear."'" .
                                    " AND (acc.MINUTES IS NOT NULL AND acc.MINUTES>0) " .
                                    " AND acc.SCHOOL_DATE<='".date('Y-m-d')."' " .
                                                                            " AND acc.SCHOOL_DATE> '".$last_update."'".
                                                                            " AND ac.STAFF_ID IS NULL " .
                                    "GROUP BY s.TITLE,acc.SCHOOL_DATE,cp.TITLE,cp.COURSE_PERIOD_ID,cp.TEACHER_ID ");
//
DBQuery("UPDATE program_config SET VALUE='".date('Y-m-d')."'WHERE PROGRAM='MissingAttendance' AND TITLE='LAST_UPDATE'");
DBQuery('CALL TEACHER_REASSIGNMENT()');
$RET=DBGet(DBQuery("SELECT SCHOOL_ID,SCHOOL_DATE,COURSE_PERIOD_ID,TEACHER_ID,SECONDARY_TEACHER_ID FROM missing_attendance WHERE SYEAR='".  UserSyear()."' LIMIT 0,1"));
 if (count($RET) && $flag==FALSE)
{
     echo '<span style="display:none">NEW_MI_YES</span>';
 }
if(count($RET))
echo '<br/><table><tr><td width="38"><img src="assets/icon_ok.png" /></td><td valign="middle"><span style="font-size:14px;">Missing attendance data list created.</span></td></tr></table>';
//else
//    echo '<br/><table><tr><td width="38"><img src="assets/icon_ok.png" /></td><td valign="middle"><span style="font-size:14px;">There are no missing attendance.</span></td></tr></table>';

?>
