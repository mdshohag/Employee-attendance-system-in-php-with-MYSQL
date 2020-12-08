

<div class="main-content">
<div class="main-content-inner">
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>
		<li class="active">Monthly Attendance</li>
	</ul><!-- /.breadcrumb -->

</div>

<div class="page-content">
	<div class="row">

		<div class="col-xs-6 col-xs-offset-3">

			
				<form class="form-inline" id="monthlyAttendances" method="post" enctype="multipart/form-data">
					<div class="form-group">
			      		
						<select name="months" id="month" class="col-xs-12 col-sm-12">
						  <option value="">Select Month</option>
						    <option value="1" >January</option>
                            <option value="2" >February</option>
                            <option value="3" >March</option>
                            <option value="4" >April</option>
                            <option value="5" >May</option>
                            <option value="6" >June</option>
                            <option value="7" >July</option>
                            <option value="8" >August</option>
                            <option value="9" >September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
						</select>
						
			 		</div>
			 		<div class="form-group">
			      		
						<select name="years" id="month" class="col-xs-12 col-sm-12">
						  <option value="">Select Year</option>
						     <?php
                                date_default_timezone_set('Asia/Dhaka');
                                $StartYear= '2018';
                                $currentYear= date('Y');
                                for($i=$StartYear;$i<=$currentYear;$i++)
                                {
                                  
                                    echo "<option value='$i' >$i</option>";
                                }
                             ?>
						</select>
						
			 		</div>

			    <div class="form-group">
			       <button type="submit" class="btn btn-sm btn-success"> <i class="fa fa-search"></i> Search</button>
			    </div>
			</form>

				</div>	
			</div>

			<form id="add_atten" method="post">

			<div id="monthlyAttendance">

			</div>

			</form>


			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div>