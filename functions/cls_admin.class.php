<?php
	class cls_admin{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function adduser($customer_id,$name,$usertype,$username,$upassword){
			
			$yes = 2;
			
			$res = $this->con()->query("SELECT username From user where username='$username'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("	INSERT into user (register_id, username, password, name, type) values ('$customer_id', '$username', '$upassword', '$name', '$usertype')");
			return $result;
			
			
		}
		
		public function show_adminuser(){
			$result = $this->con()->query("select * from user order by id desc");
			return $result;
		}
		public function view_user_id($userid){
			$result = $this->con()->query("select * from user where id='$userid'");
			return $result;
		}
		public function user_update($customer_id,$fullname,$usertype,$username,$id){
			$result = $this->con()->query("update user set register_id='$customer_id', username='$username', name='$fullname', type='$usertype' where id='$id'");
			return $result;
		}
		public function changeuser($customer_id,$usertype,$uid){
			$result = $this->con()->query("update user set register_id='$customer_id', type='$usertype' where id='$uid'");
			return $result;
		}

		public function view_user_all(){
			$result = $this->con()->query("select * from user where type='Employee'");
			return $result;
		}

		public function user_delete($userid){
			$result = $this->con()->query("DELETE FROM user Where id='$userid'");
			return $result;
		}
		public function usermenualocation_delete($userid){
			$result = $this->con()->query("DELETE FROM tbl_menualocation Where user_id='$userid'");
			return $result;
		}
		
	}
?>