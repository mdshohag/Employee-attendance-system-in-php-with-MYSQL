<?php
	
	require_once('functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
    
   /* $departmentid = $_POST['departmentid'];
    $staffcode = $_POST['staffcode'];
    $selectMonth = $_POST['selectMonth'];
    $selectYear = $_POST['selectYear'];
	*/
	
    
    
 
 
require('fpdf.php');

class PDF extends FPDF
{

function Header()
{	
    $this->Image('logo.png',10,6,15);
    $this->SetFont('Arial','B',14);
    $this->Cell(276,5,'Attendance Report',0,0,'C');
    $this->Ln(7);
	
}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,5,$this->PageNo(),0,0,'R');
}

function headerTable($db){
	 $empid = $_GET['staffcode'];
	
	$this->SetFont('Times','',12);
	$employeeid = $db->query("SELECT * FROM  tbl_employee WHERE card_id='$empid'");
	
	$data =  $employeeid->fetch_assoc();
	
	$this->Cell(76,6, $data['fullname'],0,1,'C');
	$this->Cell(65,6, 'RDTL- '.$data['card_id'],0,1,'C');
	$this->Ln(3);
		
	$this->SetFont('Times','B',12);
	$this->Cell(40,6,'Date',1,0,'C');
	$this->Cell(40,6,'In Time',1,0,'C');
	$this->Cell(40,6,'Out Time',1,0,'C');
	$this->Cell(50,6,'Total Buty',1,0,'C');
	$this->Cell(76,6,'Remarks',1,0,'C');
	$this->Ln();
}
function viewTable($db){
	
	$departmentid = $_GET['departmentid'];
    $staffcode = $_GET['staffcode'];
    $selectMonth = $_GET['selectMonth'];
    $selectYear =$_GET['selectYear'];
	
	$this->SetFont('Times','',12);
	
	 $department = $db->query("SELECT DATE(in_time) as dueDATE, in_time, out_time, TIMEDIFF(out_time,in_time) as dutytime, comment FROM hr_emp_daily_attendance a LEFT JOIN tbl_employee b ON b.card_id = a.br_id LEFT JOIN tbl_department d ON b.department = d.id WHERE d.id='$departmentid' And a.br_id='$staffcode' And YEAR(a.in_time)=' $selectYear' AND MONTH(a.in_time)='$selectMonth'");
     

        $firsttime=true;

       while($row =  $department->fetch_assoc())
        {
		$dueDATE = $row['dueDATE'];
        $intime =  date("g:ia", strtotime($row['in_time']));
        $outtime = date("g:ia", strtotime($row['out_time']));


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
       

        
		
		
	$this->Cell(40,6,$dueDATE,1,0,'C');
	$this->Cell(40,6,$intime,1,0,'C');
	$this->Cell(40,6,$outtime,1,0,'C');
	$this->Cell(50,6,$dutytime,1,0,'C');
	$this->Cell(76,6, $row['comment'],1,0,'C');
	$this->Ln();	
		
		 }
		

           
}
  

}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable($db);
$pdf->viewTable($db);
$pdf->Output();
?>