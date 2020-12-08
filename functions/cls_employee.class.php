<?php
	class cls_employee{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		


		public function add_employee($fullname, $department, $designation, $emp_id, $mobile, $emp_email, $gender, $naid, $birthid, $passport, $religion, $fathername, $mothername, $presentaddress, $permanentaddress, $pic, $user_id){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate     = new DateTime('now', $from);
			$currDate->setTimezone($to);
			//$currDate->format('Y/m/j H:i:s');
			$todate = $currDate->format('Y-m-j');

			$yes = '2';
			$res = $this->con()->query("SELECT card_id From tbl_employee where card_id='$emp_id'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}


			$yes = '3';
			$res = $this->con()->query("SELECT mobile From tbl_employee where mobile='$mobile'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}

			$yes = '4';
			$res = $this->con()->query("SELECT employee_email From tbl_employee where employee_email='$emp_email'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("	insert into tbl_employee (fullname, department, designation, card_id, mobile, employee_email, gender, national_id, birth_id, passport_id, religion, fathername, mothername, presentaddress, permanentaddress, employee_photo, user_id, create_data, status) values ('$fullname', '$department', '$designation', '$emp_id', '$mobile', '$emp_email', '$gender', '$naid', '$birthid', '$passport', '$religion', '$fathername', '$mothername', '$presentaddress', '$permanentaddress', '$pic', '$user_id', '$todate', '1')");
			return $result;

		}

		public function edit_employee($fullname, $designation, $emp_id, $mobile, $emp_email, $gender, $naid, $religion, $fathername, $mothername, $presentaddress, $permanentaddress, $user_id, $empid){

				$from = new DateTimeZone('GMT');
				$to   = new DateTimeZone('Asia/Dhaka');
				$currDate     = new DateTime('now', $from);
				$currDate->setTimezone($to);
				//$currDate->format('Y/m/j H:i:s');
				$todate = $currDate->format('Y-m-j');

				$result = $this->con()->query("update tbl_employee set fullname='$fullname', designation='$designation', card_id='$emp_id', mobile='$mobile', employee_email='$emp_email', gender='$gender', national_id='$naid', religion='$religion', fathername='$fathername', mothername='$mothername', presentaddress='$presentaddress', permanentaddress='$permanentaddress', user_id='$user_id', lastmodify_date='$todate' where id='$empid'");
				return $result;
		}
		
		public function employee_view_single_data($idno){

            $result = $this->con()->query("SELECT * FROM tbl_employee where card_id='$idno'");
			return $result;
		}
	
		public function employee_view_data($epmlid){

            $result = $this->con()->query("SELECT * FROM tbl_employee where id='$epmlid'");
			return $result;
		}

		public function employee_data_check($employee_id){

            $result = $this->con()->query("SELECT * FROM tbl_employee_education where employee_id='$employee_id'");
			return $result;
		}

		public function employee_contact_check($employee_id){

            $result = $this->con()->query("SELECT * FROM tbl_emergency where employee_id='$employee_id'");
			return $result;
		}

		public function employee_education_data($employee_id){

            $result = $this->con()->query("SELECT * FROM tbl_employee_education where employee_id='$employee_id'");
			return $result;
		}

		public function employee_emergency_data($employee_id){

            $result = $this->con()->query("SELECT * FROM tbl_emergency where employee_id='$employee_id'");
			return $result;
		}

		
		public function add_employee_education($user_id, $employee_id, $examname, $institutename, $board, $result, $marks, $cgpa, $scale, $passing){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate     = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');

			$yes = '2';
			$res = $this->con()->query("SELECT employee_id,examname From tbl_employee_education where employee_id='$employee_id' AND examname='$examname'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("insert into tbl_employee_education (user_id, employee_id, examname, institutename, board, result, marks, g_cgpa, Scale, passing_year, create_date) values ('$user_id', '$employee_id', '$examname', '$institutename', '$board', '$result', '$marks', '$cgpa', '$scale', '$passing', '$todate')");
			return $result;
		}

		public function add_employee_emergency($employee_id, $refname, $relaion, $mobile, $address, $user_id){

				$from = new DateTimeZone('GMT');
				$to   = new DateTimeZone('Asia/Dhaka');
				$currDate     = new DateTime('now', $from);
				$currDate->setTimezone($to);
				$todate = $currDate->format('Y/m/j H:i:s');

			$result = $this->con()->query("insert into tbl_emergency (employee_id, ref_name, relation, mobile, address, create_id, create_date) values ('$employee_id', '$refname', '$relaion', '$mobile', '$address', '$user_id', '$todate')");
			return $result;
		}

		
		public function show_all_employee_data(){
			$result = $this->con()->query("SELECT * from tbl_employee where status='1'");
			return $result;
		}

		public function employee_daily_attendance($seletdate,$id){

            $result = $this->con()->query("SELECT hr_emp_daily_attendance.emp_id, hr_emp_daily_attendance.br_id, hr_emp_daily_attendance.atd_status, hr_emp_daily_attendance.late_time, hr_emp_daily_attendance.atd_type, hr_emp_daily_attendance.in_time, hr_emp_daily_attendance.out_time, hr_emp_daily_attendance.comment, tbl_employee.fullname, tbl_employee.mobile FROM hr_emp_daily_attendance INNER JOIN tbl_employee ON hr_emp_daily_attendance.br_id = tbl_employee.card_id where date(hr_emp_daily_attendance.entry_date)='$seletdate' AND hr_emp_daily_attendance.br_id='$id'");
			return $result;
		}


		/*public function employee_monthly_attendance($seletmonth, $seletyear, $id){
			$result = $this->con()->query("SELECT * from hr_emp_daily_attendance where Month(in_time)='$seletmonth' AND Year(in_time)='$seletyear' AND br_id='$id'");
			return $result;			
		}*/


		public function employee_monthly_attendance($seletmonth, $seletyear, $id){

			$result = $this->con()->query("SELECT DATE(in_time) as dueDATE, in_time, out_time, TIMEDIFF(out_time,in_time) as dutytime, comment, atd_status FROM  hr_emp_daily_attendance where Month(in_time)='$seletmonth' AND Year(in_time)='$seletyear' AND br_id='$id'");

			return $result;
		}

		public function employee_monthly_view($seletmonth, $seletyear){
			$result = $this->con()->query("SELECT DATE(entry_date) as dueDATEs FROM  hr_emp_daily_attendance where Month(entry_date)='$seletmonth' AND Year(entry_date)='$seletyear' GROUP BY DATE(entry_date)");
			return $result;
		}

		public function show_employee(){
			$result = $this->con()->query("SELECT * from tbl_employee");
			return $result;
		}

		public function view_education_id($eduid){
			$result = $this->con()->query("SELECT * from tbl_employee_education where id='$eduid'");
			return $result;
		}

		public function update_employee_education($user_id, $examname, $institutename, $board, $result, $marks, $cgpa, $scale, $passing, $eduid){

			/*
			$yes = '2';
			$res = $this->con()->query("SELECT employee_id,examname From tbl_employee_education where employee_id='$employee_id' AND examname='$examname'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}
			*/
			
            $result = $this->con()->query("update tbl_employee_education set user_id='$user_id', examname='$examname', institutename='$institutename', board='$board', result='$result', marks='$marks', g_cgpa='$cgpa', Scale='$scale', passing_year='$passing' where id='$eduid'");
			return $result;
		}

		public function view_employee_id($employeeid){
			$result = $this->con()->query("SELECT * from tbl_employee where id='$employeeid'");
			return $result;
		}

		public function view_emergency_id($emrgid){
			$result = $this->con()->query("SELECT * from tbl_emergency where id='$emrgid'");
			return $result;
		}

		public function update_employee_emergency($user_id, $refname, $relaion, $mobile, $address, $emrgyid){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate     = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');

			$rest = $this->con()->query("update tbl_emergency set ref_name='$refname', relation='$relaion', mobile='$mobile', address='$address', update_id='$user_id', update_date='$todate' where id='$emrgyid' ");
			return $rest;
		}

		public function add_attendance($empid,$card_id,$late_time,$attendance_status,$atd_type,$in_time,$out_time,$comment,$admin_id,$enterdate){

				$from = new DateTimeZone('GMT');
				$to   = new DateTimeZone('Asia/Dhaka');
				$currDate     = new DateTime('now', $from);
				$currDate->setTimezone($to);
				$todate = $currDate->format('Y/m/j H:i:s');
				//$todate = $currDate->format('Y-m-j');


					$indatetime = $enterdate.' '.$in_time;
			  		$outdatetime = $enterdate.' '.$out_time;



			 $result = $this->con()->query("SELECT * FROM hr_emp_daily_attendance WHERE date(entry_date)='$enterdate' AND br_id = '$card_id' ");

			$count = $result->num_rows;
			//$r="9";
			if($count == 0){

				$result = $this->con()->query("insert into hr_emp_daily_attendance (emp_id, br_id, late_time, atd_status,in_time, out_time, atd_type, comment, entry_by, entry_date, last_update_by, last_update_date ) values ('$empid','$card_id','$late_time','$attendance_status','$indatetime','$outdatetime','$atd_type','$comment','$admin_id','$enterdate','$admin_id','$todate')");
				return $result;
				 
			}else{
				 
				$resut=$this->con()->query("UPDATE hr_emp_daily_attendance SET late_time='$late_time', atd_status = '$attendance_status', in_time = '$indatetime', out_time = '$outdatetime', comment='$comment' WHERE date(entry_date)='$enterdate' AND br_id='$card_id'");
				return $resut;
			}

		}

		public function view_employee_departmentid($departmentid){
			$result = $this->con()->query("SELECT * from tbl_employee where department='$departmentid'");
			return $result;
		}


		public function view_atd_device($seletdate,$id){

			$result= $this->con()->query("SELECT * FROM _atd_device_log WHERE date(CHECK_TIME)='$seletdate' AND CARD_NO='$id' GROUP BY CARD_NO ");
			return $result;
			//SELECT CARD_NO, min(ID) as minID, max(ID) as mxID, DATE(CHECK_TIME) as todate, TIME(CHECK_TIME) as totime FROM _atd_device_log WHERE date(CHECK_TIME)='2019-06-09' AND CARD_NO='3816'

			//SELECT min(ID) as IDd, max(ID) as mmxx, min(CHECK_TIME) as mintime, DATE(CHECK_TIME) as DATEs, min(TIME(CHECK_TIME)) as MINTIMEs, max(TIME(CHECK_TIME)) as MAXTIMEs FROM _atd_device_log WHERE date(CHECK_TIME)='2019-06-09' AND CARD_NO='3816'
		}

		public function view_atd($seletdate,$CARD){
			$result= $this->con()->query("SELECT min(ID) as minID, max(ID) as mxID FROM _atd_device_log WHERE date(CHECK_TIME)='$seletdate' AND CARD_NO='$CARD' ");
			return $result;
		}

		public function view_miniid($minid,$CARD){
			$result= $this->con()->query("SELECT * FROM _atd_device_log WHERE ID='$minid' AND _atd_device_log.CARD_NO IN (SELECT tbl_employee.card_id FROM tbl_employee ) AND _atd_device_log.CARD_NO='$CARD' ");
			return $result;
		}

		public function view_minmax($mdxid,$CARD){
			$result= $this->con()->query("SELECT * FROM _atd_device_log WHERE ID='$mdxid' AND _atd_device_log.CARD_NO IN (SELECT tbl_employee.card_id FROM tbl_employee ) AND _atd_device_log.CARD_NO='$CARD' ");
			return $result;
		}

	}
?>