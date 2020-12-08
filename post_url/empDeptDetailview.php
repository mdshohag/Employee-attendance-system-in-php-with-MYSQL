<?php
 session_start();
    require_once('../functions/cls_dbconfig.php');
    function __autoload($classname){
      require_once("../functions/$classname.class.php");
    }


error_reporting(0);
    
    $db = new cls_dbconfig();
    $cls_manage = new cls_manage();
    
    $departmentid = $_POST['departmentid'];
    $staffcode = $_POST['staffcode'];
    $selectMonth = $_POST['selectMonth'];
    $selectYear = $_POST['selectYear'];
    
    $view_department = $cls_manage->view_employee_department($departmentid,$staffcode);

?>

 <?php 
      
    while($departmentdata = $view_department->fetch_assoc())
        {

     ?>

<div class="row">
<div class="col-sm-3 padding-sm">
   <img class='img-thumbnail' src='employee_photo/<?php echo $departmentdata['employee_photo']; ?>' height='200px' width='200px'>

</div>

<div class="col-xs-6 col-sm-12 col-md-6 padding-sm">
        <table class="font-14" style="border: none; height: 200px">
            <tbody>
                <tr><td></td><td></td><td> <!-- <a href="print.php?&&departmentid=<?php echo $departmentid; ?>&&staffcode=<?php echo  $staffcode; ?>&&selectMonth=<?php echo  $selectMonth; ?>&&selectYear=<?php echo  $selectYear; ?>" target="_blank" class="btn btn-danger btn-sm"> Print</a> -->
                    <a href="print_report.php?&&departmentid=<?php echo $departmentid; ?>&&staffcode=<?php echo  $staffcode; ?>&&selectMonth=<?php echo  $selectMonth; ?>&&selectYear=<?php echo  $selectYear; ?>" target="_blank" class="btn btn-danger btn-sm"> Print</a>
                </td></tr>
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
            <tr>
                <td>
                    <strong>Account No: </strong>
                </td>
                <td> </td>
            </tr>
            <tr>
                 <td>
                     <strong>Join of Date: </strong>                                
                </td>
                <td> </td>
            </tr>
            </tbody>
         </table>
    </div>
</div>


 <table class="table" border="1">
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
   
    <tr>
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