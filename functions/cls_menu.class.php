<?php
	class cls_menu{
		public function con(){
			$connect = new cls_dbconfig();
			return $connect->connection();
		}
		public function menus_add($menutitle,$parent_id,$pagename,$customer_id){
			
			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate     = new DateTime('now', $from);
			$currDate->setTimezone($to);
			//$currDate->format('Y/m/j H:i:s');
			$todate = $currDate->format('Y-m-j');
			
			$yes = 2;
			
			$res = $this->con()->query("SELECT title From tbl_menus where title='$menutitle'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			
			
            $result = $this->con()->query("	insert into tbl_menus (title, parent_id, page, create_id, create_date, status) values ('$menutitle', ". (($parent_id=='')?"NULL":("'".$parent_id."'")) .", ". (($pagename=='')?"NULL":("'".$pagename."'")) .", '$customer_id', '$todate', '1')");
			return $result;
		}

		public function view_menus(){
			$result = $this->con()->query("select * from tbl_menus");
			return $result;
		}

		public function view_menus_all(){
			$result = $this->con()->query("select * from tbl_menus");
			return $result;
		}


		public function add_menualocation($client_id,$user_id,$menuid){

			$yes = 'exit';
			
			$res = $this->con()->query("SELECT user_id, menu_id From tbl_menualocation where user_id='$user_id' AND menu_id='$menuid'");
			$count = $res->num_rows;
			
			if($count != 0){
				return $yes;
				return false;
			}
			
            $result = $this->con()->query("	insert into tbl_menualocation (create_id, user_id, menu_id, status) values ('$client_id','$user_id', '$menuid', '1')");
			return $result;

		}

		public function view_all_null_menu(){
			$result = $this->con()->query("select * from tbl_menus");
			return $result;
		}

		public function parent_data($pr_id){
			$result = $this->con()->query("SELECT * FROM tbl_menus WHERE id='$pr_id'");
			return $result;
		}
		
		public function view_menu_id($menuid){
			$result = $this->con()->query("SELECT * FROM tbl_menus WHERE id='$menuid'");
			return $result;
		}


	public function menu_update($menutitle,$parent_id,$pagename,$customer_id,$id){
			
			$from = new DateTimeZone('GMT');
			$to   = new DateTimeZone('Asia/Dhaka');
			$currDate     = new DateTime('now', $from);
			$currDate->setTimezone($to);
			//$currDate->format('Y/m/j H:i:s');
			$todate = $currDate->format('Y-m-j');

			
            $result = $this->con()->query(" UPDATE tbl_menus SET title='$menutitle', parent_id=".(($parent_id=='')?"NULL":("'".$parent_id."'")) .", page='$pagename', create_id='$customer_id', lastmodify_date='$todate', status='1' WHERE id='$id' ");
			return $result;

		}

		public function menu_delete($menuid){
			$result = $this->con()->query("DELETE FROM tbl_menus Where id='$menuid'");
			return $result;
		}
		public function menualocation_delete($menuid){
			$result = $this->con()->query("DELETE FROM tbl_menualocation Where menu_id='$menuid'");
			return $result;
		}

		public function view_permission_menu($userid,$menuid){
			$result = $this->con()->query("SELECT * FROM tbl_menualocation WHERE tbl_menualocation.menu_id IN (SELECT tbl_menus.id FROM tbl_menus ) AND  tbl_menualocation.user_id='$userid' AND tbl_menualocation.menu_id='$menuid'");
			return $result;
		}

		public function status_updatemenualocation($client_id,$userid,$menuid){

            $result = $this->con()->query("DELETE FROM tbl_menualocation WHERE user_id='$userid' AND menu_id='$menuid' ");
			return $result;			
		}

		public function view_employee_data($employeeid){

			$result = $this->con()->query("SELECT * FROM tbl_employee WHERE card_id='$employeeid'");
			return $result;
		}

		
		
	}
?>