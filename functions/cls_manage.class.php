<?php
	class cls_manage{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		


		public function addroster($rostername,$starttime,$endtime,$user_id){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$yes = '2';
			$res = $this->con()->query("SELECT roster_name From tbl_roster where roster_name='$rostername'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("	insert into tbl_roster (roster_name, start_time, end_time, create_by, create_date) values ('$rostername', '$starttime', '$endtime', '$user_id', '$todate')");
			return $result;

		}


		public function show_roster(){
			 $result = $this->con()->query("SELECT * From tbl_roster");
			return $result;
		}

		public function roster_data_id($rosterid){
			 $result = $this->con()->query("SELECT * From tbl_roster where id='$rosterid'");
			return $result;
		}

		public function updateroster($rostername,$starttime,$endtime,$user_id,$rosterid){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$result = $this->con()->query("Update tbl_roster set roster_name='$rostername', start_time='$starttime', end_time='$endtime', lastupdate_by='$user_id', lastupdate_date='$todate' where id='$rosterid'");
			return $result;
		}

		public function addleave($leavename,$totalday,$user_id){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$yes = '2';
			$res = $this->con()->query("SELECT leave_name From tbl_leave where leave_name='$leavename'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("	insert into tbl_leave (leave_name, total_day, create_by, create_date) values ('$leavename', '$totalday', '$user_id', '$todate')");
			return $result;

		}


		public function show_leave(){

			 $result = $this->con()->query("SELECT * from tbl_leave");
			return $result;

		}

		public function show_leave_id($leaveid){
			 $result = $this->con()->query("SELECT * from tbl_leave where id='$leaveid'");
			return $result;
		}

		public function updateleave($leavename,$totalday,$user_id,$leaveid){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$result = $this->con()->query("Update tbl_leave set leave_name='$leavename', total_day='$totalday', update_by='$user_id', lastupdate_date='$todate' where id='$leaveid'");
			return $result;


		}

		public function rosterdataview(){

			$result = $this->con()->query("SELECT * From tbl_roster");
			return $result;

		}
		
		public function statusdataview(){

			$result = $this->con()->query("SELECT * From tbl_status");
			return $result;

		}


		public function view_roster_id($menuid,$emid){
			$result = $this->con()->query("SELECT * From tbl_rosterassign where roster_id='$menuid' and employee_id='$emid'");
			return $result;
		}

		public function view_status_id($stuid,$emid){

			$result = $this->con()->query("SELECT * From tbl_rosterassign where status='$stuid' and employee_id='$emid'");
			return $result;
			
		}

		public function add_rosterassign($employeeid,$card_id,$rosterid,$status_id,$user_id){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			 $result = $this->con()->query("SELECT * FROM tbl_rosterassign WHERE employee_id='$employeeid' AND card_no = '$card_id'");

			 $count = $result->num_rows;
			//$r="9";
			if($count == 0){
			
            $result = $this->con()->query("	insert into tbl_rosterassign (employee_id, card_no, roster_id, create_by, create_date,status) values ('$employeeid', '$card_id', '$rosterid', '$user_id', '$todate','$status_id')");
			return $result;

			}else{
				 
				$resut=$this->con()->query("UPDATE tbl_rosterassign SET roster_id ='$rosterid', lastupdate_by='$user_id', lastupdate_date='$todate', status = '$status_id' WHERE employee_id='$employeeid' AND card_no='$card_id'");
				return $resut;
			}


		}

		public function adddepartment($department,$user_id){

			$yes = '2';
			$res = $this->con()->query("SELECT name_department From tbl_department where name_department='$department'");
			$count = $res->num_rows;
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("	insert into tbl_department (name_department, create_id) values ('$department', '$user_id')");
			return $result;

		}

		public function show_department(){

			$result = $this->con()->query("SELECT * From tbl_department");
			return $result;

		}

		public function department_data($departmentid){
			$result = $this->con()->query("SELECT * From tbl_department where id='$departmentid'");
			return $result;
		}

		public function editdepartment($department,$user_id,$departmentid){

			$result = $this->con()->query("Update tbl_department set name_department='$department', update_id='$user_id' where id='$departmentid'");
			return $result;

		}

		public function show_employee($depart_id){

			$result = $this->con()->query("SELECT * From tbl_employee where department='$depart_id'");
			return $result;

		}


		public function view_employee_name($employee_id){

			$result = $this->con()->query("SELECT * From tbl_employee where id='$employee_id'");
			return $result;
		}

		public function leaveassign($employeeid,$departid,$leaveid,$leave_to,$leave_from,$description,$user_id){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$result = $this->con()->query("	insert into tbl_leaveassign(employee_id, department_id, leave_id, leave_to, leave_from, note, create_id, createdate) values ('$employeeid', '$departid', '$leaveid', '$leave_to', '$leave_from', '$description', '$user_id', '$todate')");

			return $result;
		}


		public function leaveassignview(){
			$result = $this->con()->query("SELECT tbl_leaveassign.*, tbl_employee.fullname,tbl_department.name_department,tbl_leave.leave_name FROM tbl_leaveassign JOIN tbl_employee ON tbl_leaveassign.employee_id=tbl_employee.id JOIN tbl_department ON tbl_leaveassign.department_id=tbl_department.id JOIN tbl_leave ON tbl_leaveassign.leave_id=tbl_leave.id");
			return $result;
		}


		public function view_leaveassign($leaveid){
			$result = $this->con()->query("SELECT tbl_leaveassign.*, tbl_employee.fullname, tbl_employee.card_id,tbl_department.name_department,tbl_leave.leave_name FROM tbl_leaveassign JOIN tbl_employee ON tbl_leaveassign.employee_id=tbl_employee.id JOIN tbl_department ON tbl_leaveassign.department_id=tbl_department.id JOIN tbl_leave ON tbl_leaveassign.leave_id=tbl_leave.id where tbl_leaveassign.id='$leaveid'");
			return $result;
		}

		public function leaveassignedit($employeeid,$departid,$leaveid,$leave_to,$leave_from,$description,$user_id,$leaveassignid){


			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$result = $this->con()->query("Update tbl_leaveassign set employee_id='$employeeid', department_id='$departid', leave_id='$leaveid', leave_to='$leave_to', leave_from='$leave_from', note='$description', update_id='$user_id', updatedate='$todate' where id='$leaveassignid'");

			return $result;

		}

		public function view_employee_department($departmentid,$staffcode){

			$result = $this->con()->query("SELECT * FROM tbl_employee where department='$departmentid' And card_id='$staffcode'");

			return $result;

		}
		public function view_employee_department_attendance($departmentid,$staffcode,$selectMonth,$selectYear){

			$result = $this->con()->query("SELECT DATE(in_time) as dueDATE, in_time, out_time, TIMEDIFF(out_time,in_time) as dutytime, comment FROM hr_emp_daily_attendance a LEFT JOIN tbl_employee b ON b.card_id = a.br_id LEFT JOIN tbl_department d ON b.department = d.id WHERE d.id='$departmentid' And a.br_id='$staffcode' And YEAR(a.in_time)='$selectYear' AND MONTH(a.in_time)='$selectMonth'");

			return $result;
		}


		


		public function add_officeholidays($holidaytitle,$holiday_date,$description,$user_id){

			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate  = new DateTime('now', $from);
			$currDate->setTimezone($to);
			$todate = $currDate->format('Y/m/j H:i:s');
			//$todate = $currDate->format('Y-m-j');

			$result = $this->con()->query("	insert into tbl_holiday(title, holidaydates, notes, create_id, create_date) values ('$holidaytitle', '$holiday_date', '$description', '$user_id', '$todate')");

			return $result;
		}


}

?>

