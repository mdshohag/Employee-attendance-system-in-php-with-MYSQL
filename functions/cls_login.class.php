<?php
	class cls_login{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		
		public function customer_access($uname,$pass){
			$no = "no";
			$yes = "yes";
			
			$ss = md5($pass);
			
			$result = $this->con()->query("SELECT * FROM user WHERE username = '$uname' and password = '$ss'");
			$check = $result->num_rows;
			if($check == 0){
				return $no;
			}
			
			$row = $result->fetch_assoc();
			session_start();
			//$_SESSION['id'] = $row['id'];
			$_SESSION['customer_id'] = $row['id'];
			$_SESSION['customer_username'] = $row['username'];
			$_SESSION['customer_name'] = $row['name'];
			$_SESSION['customer_type'] = $row['type'];
			return $yes;
		}
		
	}
?>