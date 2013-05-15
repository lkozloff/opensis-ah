<?php
#**************************************************************************
#  openSIS is a free student information system for public and non-public
#  schools from Open Solutions for Education, Inc. web: www.os4ed.com
#
#  openSIS is  web-based, open source, and comes packed with features that
#  include student demographic info, scheduling, grade book, attendance,
#  report cards, eligibility, transcripts, parent portal,
#  student portal and more.
#
#  Visit the openSIS web site at http://www.opensis.com to learn more.
#  If you have question regarding this system or the license, please send
#  an email to info@os4ed.com.
#
#  This program is released under the terms of the GNU General Public License as
#  published by the Free Software Foundation, version 2 of the License.
#  See license.txt.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
#***************************************************************************************
/*$_SESSION['sname']=$_REQUEST['sname'];
    $school_beg_date=explode("-",$_REQUEST['beg_date']);
    $school_end_date=explode("-",$_REQUEST['end_date']);
    $_SESSION['user_school_beg_date']=$school_beg_date[2].'-'.$school_beg_date[0].
    '-'.$school_beg_date[1];
    $_SESSION['user_school_end_date']=$school_end_date[2].'-'.$school_end_date[0].
    '-'.$school_end_date[1];
$_SESSION['syear']=$school_beg_date[2];
    $_SESSION['nextyear'] = $school_beg_date[2]+1;
*/
$text = "
--
-- Dumping data for table `app`
--



INSERT INTO `app` (`name`, `value`) VALUES
('version', '5.2'),
('date', 'April 22, 2013'),
('build', '22042013002'),
('update', '1'),
('last_updated', 'April 22, 2013');


--
-- Dumping data for table `address`
--


--
-- Dumping data for table `attendance_calendar`
--


--
-- Dumping data for table `attendance_calendars`
--


--
-- Dumping data for table `attendance_codes`
--



--
-- Dumping data for table `config`
--


--
-- Dumping data for table `courses`
--


--
-- Dumping data for table `course_periods`
--


--
-- Dumping data for table `course_subjects`
--


--
-- Dumping data for table 'custom_fields'
--

INSERT INTO `custom_fields` (`id`, `type`, `search`, `title`, `sort_order`, `select_options`, `category_id`, `system_field`, `required`, `default_selection`, `hide`) VALUES
(1, 'text', NULL, 'Ethnicity', '3', NULL, '1', 'Y', NULL, NULL, NULL),
(2, 'text', NULL, 'Common Name', '2', NULL, '1', 'Y', NULL, NULL, NULL),
(3, 'text', NULL, 'Physician', '6', NULL, '2', 'Y', NULL, NULL, NULL),
(4, 'text', NULL, 'Physician Phone', '7', NULL, '2', 'Y', NULL, NULL, NULL),
(5, 'text', NULL, 'Preferred Hospital', '8', NULL, '2', 'Y', NULL, NULL, NULL),
(6, 'text', NULL, 'Gender', '5', NULL, '1', 'Y', NULL, NULL, NULL),
(7, 'text', NULL, 'Email', '6', NULL, '1', 'Y', NULL, NULL, NULL),
(8, 'text', NULL, 'Phone', '9', NULL, '1', 'Y', NULL, NULL, NULL),
(9, 'text', NULL, 'Language', '8', NULL, '1', 'Y', NULL, NULL, NULL);

--
-- Dumping data for table `eligibility`
--


--
-- Dumping data for table `eligibility_activities`
--


--
-- Dumping data for table `eligibility_completed`
--


--
-- Dumping data for table `gradebook_assignments`
--


--
-- Dumping data for table `gradebook_assignment_types`
--


--
-- Dumping data for table `gradebook_grades`
--


--
-- Dumping data for table `portal_notes`
--


--
-- Dumping data for table `profile_exceptions`
--

INSERT INTO profile_exceptions (profile_id, modname, can_use, can_edit) VALUES
(1, 'Students/Student.php&category_id=6', 'Y', 'Y'),
(2, 'Students/Student.php&category_id=6', 'Y', NULL),
(0, 'Students/Student.php&category_id=6', 'Y', NULL),
(3, 'Students/Student.php&category_id=6', 'Y', NULL),
(1, 'Users/User.php&category_id=5', 'Y', 'Y'),
(2, 'Users/User.php&category_id=5', 'Y', NULL),
(0, 'School_Setup/Schools.php', 'Y', NULL),
(0, 'School_Setup/Calendar.php', 'Y', NULL),
(0, 'Students/Student.php', 'Y', NULL),
(0, 'Students/Student.php&category_id=1', 'Y', NULL),
(0, 'Students/Student.php&category_id=3', 'Y', NULL),
(0, 'Students/ChangePassword.php', 'Y', NULL),
(0, 'Scheduling/ViewSchedule.php', 'Y', NULL),
(0, 'Scheduling/PrintSchedules.php','Y',NULL),
(0, 'Scheduling/Requests.php', 'Y', 'Y'),
(0, 'Grades/StudentGrades.php', 'Y', NULL),
(0, 'Grades/FinalGrades.php', 'Y', NULL),
(0, 'Grades/ReportCards.php', 'Y', NULL),
(0, 'Grades/Transcripts.php', 'Y', NULL),
(0, 'Grades/GPARankList.php', 'Y', NULL),
(0, 'Attendance/StudentSummary.php', 'Y', NULL),
(0, 'Attendance/DailySummary.php', 'Y', NULL),
(0, 'Eligibility/Student.php', 'Y', NULL),
(0, 'Eligibility/StudentList.php', 'Y', NULL),
(1, 'School_Setup/PortalNotes.php', 'Y', 'Y'),
(1, 'School_Setup/Schools.php', 'Y', 'Y'),
(1, 'School_Setup/Schools.php?new_school=true', 'Y', 'Y'),
(1, 'School_Setup/CopySchool.php', 'Y', 'Y'),
(1, 'School_Setup/MarkingPeriods.php', 'Y', 'Y'),
(1, 'School_Setup/Calendar.php', 'Y', 'Y'),
(1, 'School_Setup/Periods.php', 'Y', 'Y'),
(1, 'School_Setup/GradeLevels.php', 'Y', 'Y'),
(1, 'School_Setup/Rollover.php', 'Y', 'Y'),
(1, 'School_Setup/Courses.php', 'Y', 'Y'),
(1, 'School_Setup/CourseCatalog.php', 'Y', 'Y'),
(1, 'School_Setup/PrintCatalog.php', 'Y', 'Y'),
(1, 'School_Setup/PrintCatalogGradeLevel.php', 'Y', 'Y'),
(1, 'School_Setup/PrintAllCourses.php', 'Y', 'Y'),
(1, 'School_Setup/UploadLogo.php', 'Y', 'Y'),
(1, 'School_Setup/TeacherReassignment.php', 'Y', 'Y'),
(1, 'Students/Student.php', 'Y', 'Y'),
(1, 'Students/Student.php&include=General_Info&student_id=new', 'Y', 'Y'),
(1, 'Students/AssignOtherInfo.php', 'Y', 'Y'),
(1, 'Students/AddUsers.php', 'Y', 'Y'),
(1, 'Students/AdvancedReport.php', 'Y', 'Y'),
(1, 'Students/AddDrop.php', 'Y', 'Y'),
(1, 'Students/Letters.php', 'Y', 'Y'),
(1, 'Students/MailingLabels.php', 'Y', 'Y'),
(1, 'Students/StudentLabels.php', 'Y', 'Y'),
(1, 'Students/PrintStudentInfo.php', 'Y', 'Y'),
(1, 'Students/PrintStudentContactInfo.php', 'Y', 'Y'),
(1, 'Students/GoalReport.php', 'Y', 'Y'),
(1, 'Students/StudentFields.php', 'Y', 'Y'),
(1, 'Students/AddressFields.php', 'Y', 'Y'),
(1, 'Students/PeopleFields.php', 'Y', 'Y'),
(1, 'Students/EnrollmentCodes.php', 'Y', 'Y'),
(1, 'Students/Upload.php?modfunc=edit', 'Y', 'Y'),
(1, 'Students/Upload.php', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=1', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=3', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=2', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=4', 'Y', 'Y'),
(1, 'Students/EnrollmentReport.php', 'Y', 'Y'),
(1, 'Students/StudentReenroll.php', 'Y', 'Y'),
(1, 'Users/User.php', 'Y', 'Y'),
(1, 'Users/User.php&category_id=1', 'Y', NULL),
(1, 'Users/User.php&staff_id=new', 'Y', 'Y'),
(1, 'Users/AddStudents.php', 'Y', 'Y'),
(1, 'Users/Preferences.php', 'Y', 'Y'),
(1, 'Users/UserAdvancedReport.php', 'Y', 'Y'),
(1, 'Users/Profiles.php', 'Y', 'Y'),
(1, 'Users/Exceptions.php', 'Y', 'Y'),
(1, 'Users/UserFields.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Grades/InputFinalGrades.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Grades/Grades.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Attendance/TakeAttendance.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Attendance/Missing_Attendance.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Eligibility/EnterEligibility.php', 'Y', 'Y'),
(1, 'Scheduling/Schedule.php', 'Y', 'Y'),
(1, 'Scheduling/Requests.php', 'Y', 'Y'),
(1, 'Scheduling/MassSchedule.php', 'Y', 'Y'),
(1, 'Scheduling/MassRequests.php', 'Y', 'Y'),
(1, 'Scheduling/MassDrops.php', 'Y', 'Y'),
(1, 'Scheduling/ScheduleReport.php', 'Y', 'Y'),
(1, 'Scheduling/RequestsReport.php', 'Y', 'Y'),
(1, 'Scheduling/UnfilledRequests.php', 'Y', 'Y'),
(1, 'Scheduling/IncompleteSchedules.php', 'Y', 'Y'),
(1, 'Scheduling/AddDrop.php', 'Y', 'Y'),
(1, 'Scheduling/PrintSchedules.php', 'Y', 'Y'),
(1, 'Scheduling/PrintRequests.php', 'Y', 'Y'),
(1, 'Scheduling/PrintClassLists.php', 'Y', 'Y'),
(1, 'Scheduling/PrintClassPictures.php', 'Y', 'Y'),
(1, 'Scheduling/Courses.php', 'Y', 'Y'),
(1, 'Scheduling/Scheduler.php', 'Y', 'Y'),
(1, 'Grades/ReportCards.php', 'Y', 'Y'),
(1, 'Grades/CalcGPA.php', 'Y', 'Y'),
(1, 'Grades/Transcripts.php', 'Y', 'Y'),
(1, 'Grades/TeacherCompletion.php', 'Y', 'Y'),
(1, 'Grades/GradeBreakdown.php', 'Y', 'Y'),
(1, 'Grades/FinalGrades.php', 'Y', 'Y'),
(1, 'Grades/GPARankList.php', 'Y', 'Y'),
(1, 'Grades/ReportCardGrades.php', 'Y', 'Y'),
(1, 'Grades/ReportCardComments.php', 'Y', 'Y'),
(1, 'Grades/FixGPA.php', 'Y', 'Y'),
(1, 'Grades/EditReportCardGrades.php', 'Y', 'Y'),
(1, 'Grades/EditHistoryMarkingPeriods.php', 'Y', 'Y'),
(1, 'Grades/HistoricalReportCardGrades.php', 'Y', 'Y'),
(1, 'Attendance/Administration.php', 'Y', 'Y'),
(1, 'Attendance/AddAbsences.php', 'Y', 'Y'),
(1, 'Attendance/AttendanceData.php?list_by_day=true', 'Y', 'Y'),
(1, 'Attendance/Percent.php', 'Y', 'Y'),
(1, 'Attendance/Percent.php?list_by_day=true', 'Y', 'Y'),
(1, 'Attendance/DailySummary.php', 'Y', 'Y'),
(1, 'Attendance/StudentSummary.php', 'Y', 'Y'),
(1, 'Attendance/TeacherCompletion.php', 'Y', 'Y'),
(1, 'Attendance/DuplicateAttendance.php', 'Y', 'Y'),
(1, 'Attendance/AttendanceCodes.php', 'Y', 'Y'),
(1, 'Attendance/FixDailyAttendance.php', 'Y', 'Y'),
(1, 'Eligibility/Student.php', 'Y', 'Y'),
(1, 'Eligibility/AddActivity.php', 'Y', 'Y'),
(1, 'Eligibility/StudentList.php', 'Y', 'Y'),
(1, 'Eligibility/TeacherCompletion.php', 'Y', 'Y'),
(1, 'Eligibility/Activities.php', 'Y', 'Y'),
(1, 'Eligibility/EntryTimes.php', 'Y', 'Y'),
(1, 'Tools/LogDetails.php', 'Y', 'Y'),
(1, 'Tools/DeleteLog.php', 'Y', 'Y'),
(1, 'Tools/Backup.php', 'Y', 'Y'),
(1, 'Tools/Rollover.php', 'Y', 'Y'),
(1, 'Students/Upload.php', 'Y', 'Y'),
(1, 'Students/Upload.php?modfunc=edit', 'Y', 'Y'),
(1, 'Scheduling/ViewSchedule.php', 'Y', NULL),
(2, 'School_Setup/Schools.php', 'Y', NULL),
(2, 'School_Setup/MarkingPeriods.php', 'Y', NULL),
(2, 'School_Setup/Calendar.php', 'Y', NULL),
(2, 'Students/Student.php', 'Y', NULL),
(2, 'Students/AddUsers.php', 'Y', NULL),
(2, 'Students/AdvancedReport.php', 'Y', NULL),
(2, 'Students/Student.php&category_id=1', 'Y', NULL),
(2, 'Students/Student.php&category_id=3', 'Y', NULL),
(2, 'Students/Student.php&category_id=4', 'Y', 'Y'),
(2, 'Users/User.php', 'Y', NULL),
(2, 'Users/User.php&category_id=1', 'Y', NULL),
(2, 'Users/User.php&category_id=2', 'Y', NULL),
(2, 'Users/Preferences.php', 'Y', NULL),
(2, 'Scheduling/Schedule.php', 'Y', NULL),
(2, 'Scheduling/PrintSchedules.php', 'Y', NULL),
(2, 'Scheduling/PrintClassLists.php', 'Y', NULL),
(2, 'Scheduling/PrintClassPictures.php', 'Y', NULL),
(2, 'Grades/InputFinalGrades.php', 'Y', NULL),
(2, 'Grades/ReportCards.php', 'Y', NULL),
(2, 'Grades/Grades.php', 'Y', NULL),
(2, 'Grades/Assignments.php', 'Y', NULL),
(2, 'Grades/AnomalousGrades.php', 'Y', NULL),
(2, 'Grades/Configuration.php', 'Y', NULL),
(2, 'Grades/ProgressReports.php', 'Y', NULL),
(2, 'Grades/StudentGrades.php', 'Y', NULL),
(2, 'Grades/FinalGrades.php', 'Y', NULL),
(2, 'Grades/ReportCardGrades.php', 'Y', NULL),
(2, 'Grades/ReportCardComments.php', 'Y', NULL),
(2, 'Attendance/TakeAttendance.php', 'Y', NULL),
(2, 'Attendance/DailySummary.php', 'Y', NULL),
(2, 'Attendance/StudentSummary.php', 'Y', NULL),
(2, 'Eligibility/EnterEligibility.php', 'Y', NULL),
(2, 'Scheduling/ViewSchedule.php', 'Y', NULL),
(3, 'Attendance/StudentSummary.php', 'Y', NULL),
(3, 'Attendance/DailySummary.php', 'Y', NULL),
(3, 'Eligibility/Student.php', 'Y', NULL),
(3, 'Eligibility/StudentList.php', 'Y', NULL),
(3, 'School_Setup/Schools.php', 'Y', NULL),
(3, 'School_Setup/Calendar.php', 'Y', NULL),
(3, 'Students/Student.php', 'Y', NULL),
(3, 'Students/Student.php&category_id=1', 'Y', NULL),
(3, 'Students/Student.php&category_id=3', 'Y', 'Y'),
(3, 'Users/User.php', 'Y', NULL),
(3, 'Users/User.php&category_id=1', 'Y', 'Y'),
(3, 'Users/Preferences.php', 'Y', NULL),
(3, 'Scheduling/ViewSchedule.php', 'Y', NULL),
(3, 'Scheduling/Requests.php', 'Y', 'Y'),
(3, 'Grades/StudentGrades.php', 'Y', NULL),
(3, 'Grades/FinalGrades.php', 'Y', NULL),
(3, 'Grades/ReportCards.php', 'Y', NULL),
(3, 'Grades/Transcripts.php', 'Y', NULL),
(3, 'Grades/GPARankList.php', 'Y', NULL),
(3, 'Users/User.php&category_id=2', 'Y', NULL),
(3, 'Users/User.php&category_id=3', 'Y', NULL),
(1, 'School_Setup/system_preference.php', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=5', 'Y', 'Y'),
(1, 'Grades/HonorRoll.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Grades/ProgressReports.php', 'Y', 'Y'),
(1, 'Users/User.php&category_id=2', 'Y', NULL),
(1, 'Grades/HonorRollSetup.php', 'Y', 'Y'),
(2, 'School_Setup/Courses.php', 'Y', NULL),
(2, 'School_Setup/CourseCatalog.php', 'Y', NULL),
(2, 'School_Setup/PrintCatalog.php', 'Y', NULL),
(2, 'School_Setup/PrintAllCourses.php', 'Y', NULL),
(2, 'Students/Student.php&category_id=5', 'Y', 'Y'),
(3, 'Students/ChangePassword.php', 'Y', NULL),
(3, 'Scheduling/StudentScheduleReport.php', 'Y', NULL),
(0, 'Users/User.php', 'Y', NULL),
(0, 'Users/Preferences.php', 'Y', NULL),
(0, 'Users/User.php&category_id=1', 'Y', NULL),
(0, 'Users/User.php&category_id=2', 'Y', NULL),
(0, 'Scheduling/StudentScheduleReport.php', 'Y', NULL),
(1, 'Grades/AdminProgressReports.php', 'Y', 'Y');

--
-- Dumping data for table `program_config`
--
INSERT INTO program_config (syear, school_id, program, title, `value`) VALUES
(NULL, NULL, 'Currency', 'US Dollar (USD)', '1'),
(NULL, NULL, 'Currency', 'British Pound (GBP)', '2'),
(NULL, NULL, 'Currency', 'Euro (EUR)', '3'),
(NULL, NULL, 'Currency', 'Canadian Dollar (CAD)', '4'),
(NULL, NULL, 'Currency', 'Australian Dollar (AUD)', '5'),
(NULL, NULL, 'Currency', 'Brazilian Real (BRL)', '6'),
(NULL, NULL, 'Currency', 'Chinese Yuan Renminbi (CNY)', '7'),
(NULL, NULL, 'Currency', 'Danish Krone (DKK)', '8'),
(NULL, NULL, 'Currency', 'Japanese Yen (JPY)', '9'),
(NULL, NULL, 'Currency', 'Indian Rupee (INR)', '10'),
(NULL, NULL, 'Currency', 'Indonesian Rupiah (IDR)', '11'),
(NULL, NULL, 'Currency', 'Korean Won  (KRW)', '12'),
(NULL, NULL, 'Currency', 'Malaysian Ringit (MYR)', '13'),
(NULL, NULL, 'Currency', 'Mexican Peso (MXN)', '14'),
(NULL, NULL, 'Currency', 'New Zealand Dollar (NZD)', '15'),
(NULL, NULL, 'Currency', 'Norwegian Krone  (NOK)', '16'),
(NULL, NULL, 'Currency', 'Pakistan Rupee  (PKR)', '17'),
(NULL, NULL, 'Currency', 'Philippino Peso (PHP)', '18'),
(NULL, NULL, 'Currency', 'Saudi Riyal (SAR)', '19'),
(NULL, NULL, 'Currency', 'Singapore Dollar (SGD)', '20'),
(NULL, NULL, 'Currency', 'South African Rand  (ZAR)', '21'),
(NULL, NULL, 'Currency', 'Swedish Krona  (SEK)', '22'),
(NULL, NULL, 'Currency', 'Swiss Franc  (CHF)', '23'),
(NULL, NULL, 'Currency', 'Thai Bhat  (THB)', '24'),
(NULL, NULL, 'Currency', 'Turkish Lira  (TRY)', '25'),
(NULL, NULL, 'Currency', 'United Arab Emirates Dirham (AED)', '26'),
('".$_SESSION['syear']."',1, 'MissingAttendance', 'LAST_UPDATE','".date('Y-m-d',  strtotime($_SESSION['user_school_beg_date']))."'),
(2010, 1, 'eligibility', 'START_DAY', '1'),
(2010, 1, 'eligibility', 'START_HOUR', '8'),
(2010, 1, 'eligibility', 'START_MINUTE', '00'),
(2010, 1, 'eligibility', 'START_M', 'AM'),
(2010, 1, 'eligibility', 'END_DAY', '5'),
(2010, 1, 'eligibility', 'END_HOUR', '16'),
(2010, 1, 'eligibility', 'END_MINUTE', '00'),
(2010, 1, 'eligibility', 'END_M', 'PM');


--
-- Dumping data for table `program_user_config`
--
INSERT INTO program_user_config (user_id, program, title, `value`) VALUES
('1','Preferences','THEME','Blue'),
('1','Preferences','MONTH','M'),
('1','Preferences','DAY','j'),
('1','Preferences','YEAR','Y'),
('1','Preferences','HIDDEN','Y'),
('1','Preferences','CURRENCY','1');


--
-- Dumping data for table `report_card_comments`
--


--
-- Dumping data for table `report_card_grades`
--


--
-- Dumping data for table `report_card_grade_scales`
--


--
-- Dumping data for table `schedule`
--


--
-- Dumping data for table `schools`
--



INSERT INTO `schools` (`syear`, `title`, `address`, `city`, `state`, `zipcode`, `area_code`, `phone`, `principal`, `www_address`, `e_mail`, `ceeb`, `reporting_gp_scale`) VALUES
(".$_SESSION['syear'].", '".$_SESSION['sname']."', '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL);


--
-- Dumping data for table `system_preference`
--

INSERT INTO system_preference (id, school_id, full_day_minute, half_day_minute) VALUES (1, 1, 300, 150);

--
-- Dumping data for table 'login_message'
--

INSERT INTO login_message (id, message, display) VALUES
(1, 'This is a restricted network. Use of this network, its equipment, and resources is monitored at all times and requires explicit permission from the network administrator. If you do not have this permission in writing, you are violating the regulations of this network and can and will be prosecuted to the fullest extent of law. By continuing into this system, you are acknowledging that you are aware of and agree to these terms.', 'Y');


--
-- Dumping data for table `school_gradelevels`
--


--
-- Dumping data for table `school_periods`
--




--
-- Dumping data for table `school_progress_periods`
--


--
-- Dumping data for table `school_quarters`
--



--
-- Dumping data for table `school_semesters`
--



--
-- Dumping data for table `school_years`
--

INSERT INTO `school_years` (`marking_period_id`, `syear`, `school_id`, `title`, `short_name`, `sort_order`, `start_date`, `end_date`, `post_start_date`, `post_end_date`, `does_grades`, `does_exam`, `does_comments`, `rollover_id`) VALUES
('1', '".$_SESSION['syear']."', '1', 'Full Year', 'FY', '1', '".$_SESSION['user_school_beg_date']."', '".$_SESSION['user_school_end_date']."', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `current_school_id`, `first_name`, `last_name`, `middle_name`, `username`, `password`, `profile`, `profile_id`) VALUES
(1, 1, 'Admin', 'Administrator', 'A', 'admin', md5('admin'), 'admin', 1);


--
-- Dumping data for table `staff_school_relationship`
--

INSERT INTO `staff_school_relationship` (`staff_id`, `school_id`, `syear`) VALUES
(1, 1, ".$_SESSION['syear'].");

--
-- Dumping data for table `staff_exceptions`
--

INSERT INTO staff_exceptions (user_id, modname, can_use, can_edit) VALUES
(1, 'School_Setup/PortalNotes.php', 'Y', 'Y'),
(1, 'School_Setup/Schools.php', 'Y', 'Y'),
(1, 'School_Setup/Schools.php?new_school=true', 'Y', 'Y'),
(1, 'School_Setup/CopySchool.php', 'Y', 'Y'),
(1, 'School_Setup/MarkingPeriods.php', 'Y', 'Y'),
(1, 'School_Setup/Calendar.php', 'Y', 'Y'),
(1, 'School_Setup/Periods.php', 'Y', 'Y'),
(1, 'School_Setup/GradeLevels.php', 'Y', 'Y'),
(1, 'School_Setup/Rollover.php', 'Y', 'Y'),
(1, 'Students/Student.php', 'Y', 'Y'),
(1, 'Students/Student.php&include=General_Info&student_id=new', 'Y', 'Y'),
(1, 'Students/AssignOtherInfo.php', 'Y', 'Y'),
(1, 'Students/AddUsers.php', 'Y', 'Y'),
(1, 'Students/AdvancedReport.php', 'Y', 'Y'),
(1, 'Students/AddDrop.php', 'Y', 'Y'),
(1, 'Students/Letters.php', 'Y', 'Y'),
(1, 'Students/MailingLabels.php', 'Y', 'Y'),
(1, 'Students/StudentLabels.php', 'Y', 'Y'),
(1, 'Students/PrintStudentInfo.php', 'Y', 'Y'),
(1, 'Students/StudentFields.php', 'Y', 'Y'),
(1, 'Students/AddressFields.php', 'Y', 'Y'),
(1, 'Students/PeopleFields.php', 'Y', 'Y'),
(1, 'Students/EnrollmentCodes.php', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=1', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=3', 'Y', 'Y'),
(1, 'Students/Student.php&category_id=2', 'Y', 'Y'),
(1, 'Users/User.php', 'Y', 'Y'),
(1, 'Users/User.php&category_id=1', 'Y', 'Y'),
(1, 'Users/User.php&staff_id=new', 'Y', 'Y'),
(1, 'Users/AddStudents.php', 'Y', 'Y'),
(1, 'Users/Preferences.php', 'Y', 'Y'),
(1, 'Users/Profiles.php', 'Y', 'Y'),
(1, 'Users/Exceptions.php', 'Y', 'Y'),
(1, 'Users/UserFields.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Grades/InputFinalGrades.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Grades/Grades.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Attendance/TakeAttendance.php', 'Y', 'Y'),
(1, 'Users/TeacherPrograms.php?include=Eligibility/EnterEligibility.php', 'Y', 'Y'),
(1, 'Scheduling/Schedule.php', 'Y', 'Y'),
(1, 'Scheduling/Requests.php', 'Y', 'Y'),
(1, 'Scheduling/MassSchedule.php', 'Y', 'Y'),
(1, 'Scheduling/MassRequests.php', 'Y', 'Y'),
(1, 'Scheduling/MassDrops.php', 'Y', 'Y'),
(1, 'Scheduling/ScheduleReport.php', 'Y', 'Y'),
(1, 'Scheduling/RequestsReport.php', 'Y', 'Y'),
(1, 'Scheduling/UnfilledRequests.php', 'Y', 'Y'),
(1, 'Scheduling/IncompleteSchedules.php', 'Y', 'Y'),
(1, 'Scheduling/AddDrop.php', 'Y', 'Y'),
(1, 'Scheduling/PrintSchedules.php', 'Y', 'Y'),
(1, 'Scheduling/PrintRequests.php', 'Y', 'Y'),
(1, 'Scheduling/PrintClassLists.php', 'Y', 'Y'),
(1, 'Scheduling/PrintClassPictures.php', 'Y', 'Y'),
(1, 'Scheduling/Courses.php', 'Y', 'Y'),
(1, 'Scheduling/Scheduler.php', 'Y', 'Y'),
(1, 'Grades/ReportCards.php', 'Y', 'Y'),
(1, 'Grades/CalcGPA.php', 'Y', 'Y'),
(1, 'Grades/Transcripts.php', 'Y', 'Y'),
(1, 'Grades/TeacherCompletion.php', 'Y', 'Y'),
(1, 'Grades/GradeBreakdown.php', 'Y', 'Y'),
(1, 'Grades/FinalGrades.php', 'Y', 'Y'),
(1, 'Grades/GPARankList.php', 'Y', 'Y'),
(1, 'Grades/FixGPA.php', 'Y', 'Y'),
(1, 'Attendance/Administration.php', 'Y', 'Y'),
(1, 'Attendance/AddAbsences.php', 'Y', 'Y'),
(1, 'Attendance/Percent.php', 'Y', 'Y'),
(1, 'Attendance/Percent.php?list_by_day=true', 'Y', 'Y'),
(1, 'Attendance/DailySummary.php', 'Y', 'Y'),
(1, 'Attendance/StudentSummary.php', 'Y', 'Y'),
(1, 'Attendance/TeacherCompletion.php', 'Y', 'Y'),
(1, 'Attendance/DuplicateAttendance.php', 'Y', 'Y'),
(1, 'Attendance/AttendanceCodes.php', 'Y', 'Y'),
(1, 'Attendance/FixDailyAttendance.php', 'Y', 'Y'),
(1, 'Eligibility/Student.php', 'Y', 'Y'),
(1, 'Eligibility/AddActivity.php', 'Y', 'Y'),
(1, 'Eligibility/StudentList.php', 'Y', 'Y'),
(1, 'Eligibility/TeacherCompletion.php', 'Y', 'Y'),
(1, 'Eligibility/Activities.php', 'Y', 'Y'),
(1, 'Eligibility/EntryTimes.php', 'Y', 'Y'),
(1, 'Grades/ReportCardComments.php', 'Y', 'Y'),
(1, 'Grades/ReportCardGrades.php', 'Y', 'Y'),
(1, 'Grades/EditReportCardGrades.php', 'Y', 'Y'),
(1, 'Grades/EditHistoryMarkingPeriods.php', 'Y', 'Y'),
(1, 'Grades/EditReportCardGrades.php', 'Y', 'Y'),
(1, 'Grades/EditHistoryMarkingPeriods.php', 'Y', 'Y'),
(1, 'Tools/Update.php', 'Y', 'Y'),
(1, 'Tools/InstallModule.php', 'Y', 'Y'),
(1, 'Tools/Backup.php', 'Y', 'Y'),
(1, 'Tools/Restore.php', 'Y', 'Y'),
(1, 'Tools/LogDetails.php', 'Y', 'Y'),
(1, 'Tools/DeleteLog.php', 'Y', 'Y');


--
-- Dumping data for table `staff_field_categories`
--

INSERT INTO staff_field_categories (id, title, sort_order, include, admin, teacher, parent, `none`) VALUES
(1, 'General Info', '1', NULL, 'Y', 'Y', 'Y', 'Y'),
(2, 'Schedule', '2', NULL, NULL, 'Y', NULL, NULL);

--
-- Dumping data for table `students`
--




--
-- Dumping data for table `students_join_users`
--


--
-- Dumping data for table `student_eligibility_activities`
--


--
-- Dumping data for table `student_enrollment`
--



--
-- Dumping data for table `student_enrollment_codes`
--

INSERT INTO student_enrollment_codes(syear,title,short_name,type)VALUES
(".$_SESSION['syear'].",'Transferred out','TRAN','TrnD'),
(".$_SESSION['syear'].",'Transferred in','TRAN','TrnE'),
(".$_SESSION['syear'].",'Rolled over','ROLL','Roll');
--
-- Dumping data for table `student_field_categories`
--

INSERT INTO student_field_categories (id, title, sort_order, include) VALUES
(1, 'General Info', '1', NULL),
(2, 'Medical', '3', NULL),
(3, 'Addresses & Contacts', '2', NULL),
(4, 'Comments', '4', NULL),
(5, 'Goals', '6', NULL);


--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`profile`, `title`) VALUES
('student', 'Student');
UPDATE  `user_profiles` SET  `id` =  '0' ;
ALTER TABLE  `user_profiles` AUTO_INCREMENT=1;

INSERT INTO `user_profiles` (`profile`, `title`) VALUES
('admin', 'Administrator'),
('teacher', 'Teacher'),
('parent', 'Parent');



";

	$sqllines = split("\n",$text);
	$cmd = '';
	foreach($sqllines as $l)
	{
		if(preg_match('/^\s*--/',$l) == 0)
		{
			$cmd .= ' ' . $l . "\n";
			if(preg_match('/.+;/',$l) != 0)
			{
				$result = mysql_query($cmd);
				$cmd = '';
			}
		}
	}

?>
