<?php
 session_start();
    require_once('functions/cls_dbconfig.php');
    function __autoload($classname){
      require_once("functions/$classname.class.php");
    }


	error_reporting(0);
    
    $db = new cls_dbconfig();
    $cls_manage = new cls_manage();
    
    $departmentid = $_GET['departmentid'];
    $staffcode = $_GET['staffcode'];
    $selectMonth = $_GET['selectMonth'];
    $selectYear = $_GET['selectYear'];
    
    $view_department = $cls_manage->view_employee_department($departmentid,$staffcode);

?>

 <?php 
      
    while($departmentdata = $view_department->fetch_assoc())
        {

     ?>
   <style type="text/css" media="print">
   	
   	
   	@page {
    size: A4;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
   
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
	<center>
        <table style="border: none;">
            <tbody>

            <tr>
            	<td rowspan="4"><img src="logo.png" height="60" alt="Logo"></td>
            </tr>
                
            <tr>
                <td>
                    <strong>Name: </strong>
                </td>
                <td><?php echo $departmentdata['fullname']; ?> </td>
            </tr>
            <tr>
                <td style="width: 150px">
                    <strong>ID NO: RDTL- </strong>
                </td>
                <td>
                    <?php echo $departmentdata['card_id']; ?>
                    <input type="hidden" id="uuid" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Staff Designation: </strong>
                </td>
                <td><?php echo $departmentdata['designation']; ?></td>
            </tr>
            </tbody>
         </table>
     </center>
    </div><br>

<center>
 <table class="table" width="900" border="1">
    <tbody>
    <tr>
        <th>
            Date
        </th>
        <th>
            In Time
        </th>
        <th>
            Out Time
        </th>
        <th>
           Total Duty
        </th>
        <th>
           Remarks
        </th>

    </tr>

    <?php
}

     $department = $cls_manage->view_employee_department_attendance($departmentid,$staffcode,$selectMonth,$selectYear);
     

        $firsttime=true;

       while($row =  $department->fetch_assoc())
        {
        //$row =  $department->fetch_assoc();

        $dueDATE = $row['dueDATE'];
        $intime = dateTotime($row['in_time']);
        $outtime = dateTotime($row['out_time']);


        $start_time = new DateTime($row['in_time']);
        $since_start = $start_time->diff(new DateTime($row['out_time']));
        $dutytime = "";
        if($row['dutytime']!="")
        {
            $dutytime=explode(":",$row['dutytime']);
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
        if($row['out_time']==$row['in_time'])
        {
            $dutytime="N/A";
            $outtime="N/A";
           
        }

    ?>
   
    <tr style=" border: solid 1px #4f4b4b; padding: 2px; text-align: center;height: 30px">
        <td>
           <?php echo $dueDATE; ?>
           <?php echo $hiddenData; ?>
        </td>
        <td>
           <?php echo $intime; ?>
        </td>
        <td>
           <?php echo $outtime; ?>
        </td>
        <td>
          <?php echo $dutytime; ?>
        </td>
         <td>
          <?php echo $row['comment']; ?>
        </td>
    </tr>

    <?php
        
         
     }

          function dateTotime($dateTotime)
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


