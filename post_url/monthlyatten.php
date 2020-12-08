<?php


	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();

	$cls_employee = new cls_employee();

	$seletmonth = $_POST['months'];

	$seletyear = $_POST['years'];

	//$seletdate = '2019-03-23 09:00:00';

  error_reporting(0);



?>
													

 <div class="row">
		<div class="col-xs-12">
			

			<div class="clearfix">
				<div class="pull-right tableTools-container"></div>
			</div>
			<div class="table-header">
				
			</div>

			<!-- div.table-responsive -->

			<!-- div.dataTables_borderWrap -->
			<div>
		<br>
		<br>
		<div class="col-sm-4 col-sm-offset-4">
				<!-- <input type="submit" class="btn btn-sm btn-success" value="Print"> -->
		</div>
      
  		<table class="table table-bordered">
		<thead>
		<tr><td>
		 <a href="print_month.php?&&selectMonth=<?php echo  $seletmonth; ?>&&selectYear=<?php echo  $seletyear; ?>" target="_blank" class="btn btn-danger btn-sm"> Prints</a>
		 </td></tr>
			<tr>
			 	
			 	<td rowspan="2">ID</td>
			 	<td rowspan="2">Name</td>
			 <?php

				$monthview = $cls_employee->employee_monthly_view($seletmonth, $seletyear);

				
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
		

		</div>
	</div>
</div>

				<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

			<!-- page specific plugin scripts -->
		<script src="assets/js/jquery-ui.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		
		<script src="assets/alert/alertify.min.js"></script>
		<script src="assets/ujs/menualocation.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

				$( "#datepicker" ).datepicker({
					 dateFormat: 'yy-mm-dd',
					showOtherMonths: true,
					selectOtherMonths: false,
					//isRTL:true,
				
					
					/*
					changeMonth: true,
					changeYear: true,
					
					showButtonPanel: true,
					beforeShow: function() {
						//change button colors
						var datepicker = $(this).datepicker( "widget" );
						setTimeout(function(){
							var buttons = datepicker.find('.ui-datepicker-buttonpane')
							.find('button');
							buttons.eq(0).addClass('btn btn-xs');
							buttons.eq(1).addClass('btn btn-xs btn-success');
							buttons.wrapInner('<span class="bigger-110" />');
						}, 0);
					}
			*/


				});
				    


				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
			
			
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})

	
		</script>
