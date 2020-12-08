<?php
 session_start();
    require_once('functions/cls_dbconfig.php');
    function __autoload($classname){
      require_once("functions/$classname.class.php");
    }


error_reporting(0);
    
    $db = new cls_dbconfig();
   $cls_employee = new cls_employee();
    
    $seletmonth = $_GET['selectMonth'];
    $seletyear = $_GET['selectYear'];
    
  $monthview = $cls_employee->employee_monthly_view($seletmonth, $seletyear);

?>


   <style type="text/css" media="print">
  
   	
  @page { size: landscape; }
  
  
   .div-full
    {
		transform: rotate(270deg) translate(-276mm, 0);
    transform-origin: 0 0;
		}
	
	
.table {
    display: table;
    border-spacing: 1px;
	
}
tr>td{
	display: table-cell;
   
}




   </style>

<div class="div-full">

<div class="middle">
	<center><br><br>
       <table class="table" width="1920" border="1">
            <tbody>

           <tr>
			 	
			 	<td rowspan="2">ID</td>
			 	<td rowspan="2">Name</td>
			 <?php

				

				
					while($month_reports = $monthview->fetch_assoc())
					{
						  	$dueDATEs = $month_reports['dueDATEs'];
					       
						?>
			 	<td colspan="2">

			 		<span style="padding-left: 28px;" ><?php echo $dueDATEs; ?></span>

			 	</td>

			 	<?php
			 		}
			 	?>
			 </tr>
		<tr>
			 <?php

				$monthview = $cls_employee->employee_monthly_view($seletmonth, $seletyear);

				
					while($month_reports = $monthview->fetch_assoc())
					{
						  	$dueDATEs = $month_reports['dueDATEs'];
					       
						?>
			 	<td>
			 		InTime
			 	</td>
			 	<td>			 		
			 		OutTime
			 	</td>

			 	<?php
			 		}
			 	?>
			 </tr>	 
		</thead>

		<tbody>
			

			<?php 

					$counter = 0;
					$i = 1;

					$employeeviewdata= $cls_employee->show_all_employee_data();


					while($employeedata = $employeeviewdata->fetch_assoc())
					{
						 
						$id = $employeedata['card_id'];

						$attendance = $cls_employee->employee_monthly_attendance($seletmonth, $seletyear, $id);
						

			 ?>

			
			<tr>
				
				<td>
					RDTL- <?php echo $employeedata['card_id']; ?>
					<input type="hidden" name="enterdate[]" value="<?php echo $seletdate; ?>">
					<input type="hidden" name="empid[]" value="<?php echo $employeedata['id']; ?>">
					<input type="hidden" name="card_id[]" value="<?php echo $employeedata['card_id']; ?>">
					
				</td>
				<td><?php echo $employeedata['fullname']; ?></td>
				
						<?php
						while($month_report = $attendance->fetch_assoc())
					{
						  	$dueDATE = $month_report['dueDATE'];
					        $intime = dateTotime($month_report['in_time']);
					        $outtime = dateTotime($month_report['out_time']);


					        $start_time = new DateTime($month_report['in_time']);
					        $since_start = $start_time->diff(new DateTime($month_report['out_time']));
					        $dutytime = "";
					        if($month_report['dutytime']!="")
					        {
					            $dutytime=explode(":",$month_report['dutytime']);
					            $dutytime=$dutytime[0]." hours ".$dutytime[1]." minutes";
					        }
					        $dutytime= $since_start->format("%H Hours %I Minutes");
					        $hiddenData="";
					        if($firsttime==true)
					        {
					            $hiddenData="<input type='hidden' id='udate' value='".$dueDATE."'></td>";
					            $firsttime=false;
					        }
					        // if($row['out_time']=="")
					        if($month_report['out_time']==$month_report['in_time'])
					        {
					            $dutytime="N/A";
					            $na = '<span style="color:;">'.'N/A'.'</span>';

					            $outtime=$na;
					           
					        }

					        $atd_status = $month_report['atd_status'];

						?>
						<td><?php 

						if ($atd_status=="1") {
							 echo $intime; 
						}elseif($atd_status=="2"){
							
							echo '<span style="color:#b38600;">'.$intime.'</span>';

						}else{
							echo '<span style="color:;">'.'N/A'.'</span>';
						}
						
						


						?></td>

							<td>
							
							   <?php echo $outtime; ?>
							 	
							 </td>
						
					<?php } 


      

					?>
					
				
				</tr>
			 <?php

			  $counter++;
			
				}     function dateTotime($dateTotime)
        {
            $time="";
            if($dateTotime!="")
            {
                $exp=explode(" ",$dateTotime);
                $time=$exp[1]." ".$exp[2];
            }

            return $time;

        }

		
			?>


   </tbody>
</table>

</center>
</div>

							
<script type="text/javascript">
window.print();
</script>


