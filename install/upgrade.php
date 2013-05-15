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
error_reporting(0);
session_start();
include("custom.class.php");
$mysql_database=$_SESSION['db'];
$dbUser=$_SESSION['username'];
$dbPass=$_SESSION['password'];
$dbconn = mysql_connect($_SESSION['server'],$_SESSION['username'],$_SESSION['password']) or die() ;

mysql_select_db($mysql_database);
$proceed=mysql_query("SELECT name,value
FROM app
WHERE value='4.6' OR value='4.7' OR value LIKE '4.8%' OR value='4.9' OR value='5.0'");
$proceed=mysql_fetch_assoc($proceed);
if(!$proceed)
{
    $proceed=mysql_query("SELECT name,value
    FROM APP
    WHERE value='4.6' OR value='4.7' OR value LIKE '4.8%' OR value='4.9' OR value='5.0'");
    $proceed=mysql_fetch_assoc($proceed);
}
$version=$proceed['value'];
if($proceed['name']){
        
                    $dummyFile = "dummy.txt";
                    $fpt = fopen($dummyFile, 'w');

                    if ($fpt == FALSE)
                    {
                        die(show_error1());
                    }
                    else
                    {
                        unlink($dummyFile);
                    }
                    fclose($fpt);
    
	$date_time=date("m-d-Y");
    $Export_FileName=$mysql_database.'_'.$date_time.'.sql';
	$myFile = "upgrade.sql";
    executeSQL($myFile);
	//backup_db($mysql_database,$Export_FileName);
	        exec("mysqldump -n -t -c --skip-add-locks --skip-disable-keys --skip-triggers --user $dbUser --password=$dbPass $mysql_database > $Export_FileName");

                    $res_student_field='SHOW COLUMNS FROM '.table_to_upper('students',$version).' WHERE FIELD LIKE "CUSTOM_%"';

	$objCustomStudents=new custom($mysql_database);
	$objCustomStudents->set($res_student_field,'students');
	
	$res_staff_field='SHOW COLUMNS FROM '.table_to_upper('staff',$version).' WHERE FIELD LIKE "CUSTOM_%"';
	$objCustomStaff=new custom($mysql_database);
	$objCustomStaff->set($res_staff_field,'staff');
	
	mysql_query("drop database $mysql_database");
	mysql_query("CREATE DATABASE $mysql_database CHARACTER SET utf8 COLLATE utf8_general_ci");
	mysql_select_db($mysql_database);
	#$myFile = "opensis-4.5-schema-mysql.sql";
	#$myFile = "opensis-4.7-schema-mysql.sql";
        $myFile = "opensis-5.0-schema-mysql.sql";
    executeSQL($myFile);
	
	//execute custome field for student
	foreach($objCustomStudents->customQueryString as $query){
	mysql_query($query);
	}
	//execute custome field for satff
	foreach($objCustomStaff->customQueryString as $query){
	mysql_query($query);
	}
	
	#$myFile = "opensis-4.5-procs-mysql.sql";
                    $myFile = "opensis-5.0-procs-mysql.sql";
                    executeSQL($myFile);
//	mysql_query("ALTER TABLE user_profiles CHANGE `id` `id` INT( 8 ) NOT NULL");
                    //=====================For version prior than 4.9 only====================================
                    if($version!='5.0')
                    {
                        $Export_FileName=to_upper_tables_to_import($Export_FileName);
                    }
                    //=========================================================
                    exec("mysql --user $dbUser --password=$dbPass $mysql_database < $Export_FileName",$result,$status);
                    if($status!=0)
                    {
                        die(show_error1('db'));
                    }
                    if($version!='5.0')
                    {
                        unlink($Export_FileName);
                    }
                    $myFile = "opensis-5.0-trigger-mysql.sql";
                    executeSQL($myFile);
                    
	mysql_query("delete from app");
	$appTable="INSERT INTO `app` (`name`, `value`) VALUES
('version', '5.1'),
('date', 'October 16, 2012'),
('build', '02012011001'),
('update', '0'),
('last_updated', 'October 16, 2012')";
	mysql_query($appTable);
	$custom_insert=mysql_query("select count(*) from custom_fields where title in('Ethnicity','Common Name','Physician','Physician Phone','Preferred Hospital','Gender','Email','Phone','Language')");
	$custom_insert=mysql_fetch_array($custom_insert);
	$custom_insert=$custom_insert[0];
	if($custom_insert<9){
	$custom_insert="INSERT INTO `custom_fields` (`type`, `search`, `title`, `sort_order`, `select_options`, `category_id`, `system_field`, `required`, `default_selection`, `hide`) VALUES
('text', NULL, 'Ethnicity', 3, NULL, 1, 'Y', NULL, NULL, NULL),
('text', NULL, 'Common Name', 2, NULL, 1, 'Y', NULL, NULL, NULL),
('text', NULL, 'Physician', 6, NULL, 2, 'Y', NULL, NULL, NULL),
('text', NULL, 'Physician Phone', 7, NULL, 2, 'Y', NULL, NULL, NULL),
('text', NULL, 'Preferred Hospital', 8, NULL, 2, 'Y', NULL, NULL, NULL),
('text', NULL, 'Gender', 5, NULL, 1, 'Y', NULL, NULL, NULL),
('text', NULL, 'Email', 6, NULL, 1, 'Y', NULL, NULL, NULL),
('text', NULL, 'Phone', 9, NULL, 1, 'Y', NULL, NULL, NULL),
('text', NULL, 'Language', 8, NULL, 1, 'Y', NULL, NULL, NULL);";
mysql_query($custom_insert);
	}
	$login_msg=mysql_query("SELECT COUNT(*) FROM login_message WHERE 1");
	$login_msg=mysql_fetch_array($login_msg);
	$login_msg=$login_msg[0];
	if($login_msg<1){
	$login_msg="INSERT INTO `login_message` (`id`, `message`, `display`) VALUES
(1, 'This is a restricted network. Use of this network, its equipment, and resources is monitored at all times and requires explicit permission from the network administrator. If you do not have this permission in writing, you are violating the regulations of this network and can and will be prosecuted to the fullest extent of law. By continuing into this system, you are acknowledging that you are aware of and agree to these terms.', 'Y')";
mysql_query($login_msg);
	}
	
	$syear=mysql_fetch_assoc(mysql_query("select MAX(syear) as year, MIN(start_date) as start from school_years"));
	$_SESSION['syear']=$syear['year'];
                  $max_syear=$syear['year'];
                  $start_date=$syear['start'];
//=============================4.8.1 To 4.9===================================
if($version!='5.0' && $version!='4.9')
{
        $up_sql="INSERT INTO student_enrollment_codes(syear,title,short_name,type)VALUES
        (".$max_syear.",'Transferred out','TRAN','TrnD'),
        (".$max_syear.",'Transferred in','TRAN','TrnE'),
        (".$max_syear.",'Rolled over','ROLL','Roll'); ";
        mysql_query($up_sql) or die(show_error1());

        $up_sql ="INSERT INTO profile_exceptions (profile_id, modname, can_use, can_edit) VALUES
            (0, 'Scheduling/PrintSchedules.php','Y',NULL),
            (1, 'Scheduling/ViewSchedule.php', 'Y', NULL),
            (2, 'Scheduling/ViewSchedule.php', 'Y', NULL),
            (1, 'School_Setup/UploadLogo.php', 'Y', 'Y'); ";
        mysql_query($up_sql) or die(show_error1());

        $up_sql ="INSERT INTO program_config (program, title, value) VALUES
            ('MissingAttendance', 'LAST_UPDATE','".$start_date."'); ";
        mysql_query($up_sql) or die(show_error1());

        $up_sql ="UPDATE profile_exceptions SET modname='Scheduling/ViewSchedule.php' WHERE modname='Scheduling/Schedule.php' AND (profile_id=0 OR profile_id=3);";
        mysql_query($up_sql) or die(show_error1());
}
//====================================================================
	mysql_query("UPDATE schedule SET dropped='Y' WHERE end_date IS NOT NULL AND end_date < CURDATE() AND dropped='N'");
	header('Location: step5.php');
	unset($objCustomStudents);
	unset($objCustomStaff);
}else{
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/installer.css" />
</head>
<body>
<div class="heading2">Warning
<div style="height:270px;">
<br /><br />
 <table border="0" cellspacing="6" cellpadding="3" align="center">
            <tr>
			 <td colspan="2" align="center">
		<p>	The database you have chosen is not compliant with openSIS-CE ver 4.6 or 4.7 or 4.8X or 4.9 or 5.0 We are unable to proceed.</p>

<p>Click Retry to select another database, or Exit to quit the installation.
</p>
		</td>
			</tr>
            <tr>
            	<td colspan="2" style="height:100px;">&nbsp;</td>
            </tr>
			<tr>


  <td align="left"><a href="selectdb.php"><img src="images/retry.png"  alt="Retry"  border="0"/></a></td>
    <td align="right"><a href="step0.php" ><img src="images/exit.png" alt="Exit" border="0" /></a></td>


	          </tr>
	        </table>
</div>
</div>
</body>
</html>
<?php }

function executeSQL($myFile)
{	
	$sql = file_get_contents($myFile);
	$sqllines = explode("\n",$sql);
	$cmd = '';
	$delim = false;
	foreach($sqllines as $l)
	{
		if(preg_match('/^\s*--/',$l) == 0)
		{
			if(preg_match('/DELIMITER \$\$/',$l) != 0)
			{	
				$delim = true;
			}
			else
			{
				if(preg_match('/DELIMITER ;/',$l) != 0)
				{
					$delim = false;
				}
				else
				{
					if(preg_match('/END\$\$/',$l) != 0)
					{
						$cmd .= ' END';
					}
					else
					{
						$cmd .= ' ' . $l . "\n";
					}
				}
				if(preg_match('/.+;/',$l) != 0 && !$delim)
				{
					$result = mysql_query($cmd) or die(show_error1());
					$cmd = '';
				}
			}
		}
	}
}

function show_error1($msg='')
{
    if($msg=='')
        $msg='Application does not have permission to write into install directory.';
    elseif($msg=='db')
        $msg='Your database is not compatible with openSIS-CE<br />Please take this screen shot and send it to your openSIS representative for resolution.';
    $err .= "
<html>
<head>
<link rel='stylesheet' type='text/css' href='../styles/installer.css' />
</head>
<body>

<div style='height:280px;'>

<br /><br /><span class='header_txt'></span>

<div align='center'>
$msg
</div>
<div style='height:50px;'>&nbsp;</div>";
$err.="<div align='center'><a href='selectdb.php?mod=upgrade'><img src='images/retry.png' border='0' /></a> &nbsp; &nbsp; <a href='step0.php'><img src='images/exit.png' border='0' /></a></div>";
$err.="</div></body></html>";
echo $err;
}

function table_to_upper($table,$ver)
{
    if($ver!='5.0')
        $return=  strtoupper ($table);
    else
        $return=$table;
    return $return;
}

function to_upper_tables_to_import($input_file)
{
    $output_file='temp_opensis5.0.sql';
    $handle = @fopen($input_file, "r"); // Open file form read.
    $str='';
    if ($handle) {
        while (!feof($handle)) // Loop til end of file.
        {
            $buffer = fgets($handle, 4096); // Read a line.
            if(substr($buffer, 0,11)=='INSERT INTO')
            {
                $arr_line=explode(' ', $buffer);
                $arr_line[2]= strtolower($arr_line[2]);
                $str_line=implode(' ', $arr_line);
                $str .= $str_line;
            }
            else
            {
                $str .=$buffer;
            }
        }
        fclose($handle); // Close the file.
        //unlink($input_file);
        $f = fopen($output_file, "w"); 
    fwrite($f, $str); 
    }
    
    return $output_file;
}
?>
