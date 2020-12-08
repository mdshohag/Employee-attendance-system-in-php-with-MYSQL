
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Radisson LTD</span>
							Application &copy; 2019
							</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

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
		<script src="assets/ujs/menus.js"></script>
		<script src="assets/ujs/submenu.js"></script>
		<script src="assets/ujs/usermanage.js"></script>
		<script src="assets/ujs/menualocation.js"></script>
		<script src="assets/ujs/employee.js"></script>	
		<script src="assets/ujs/manage.js"></script>
		

		
		<script>
			$(function(){
				$("#signouts").click(function(e){
					e.preventDefault();
					//alert('ok');
					$.ajax({
						type:'post',
						url:'post_url/signout.php',
						success:function(res){
							//alert(res);
							if(res == '1'){
								location.href='index.php';
							}else{
								alertify.error('Error on Logout');
							}
						}
					})
				});
			})
			</script>
		<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add_author').click(function(){  
           i++;  
           $('#dynamic_fldss').append('<div id="row'+i+'"><br><div class="form-group"><div class="col-sm-offset-9 col-sm-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="Education">Exam/Degree Title <span class="required">*</span> </label><div class="col-sm-9"><input name="examname" id="examname" placeholder="Exam/Degree Title" class="col-xs-10 col-sm-7" required></div></div><div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="Institute">Institute Name <span class="required">*</span> </label><div class="col-sm-9"><input name="institutename" id="institutename" placeholder="Institute Name" class="col-xs-10 col-sm-7" required></div></div><div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="Board">Board <span class="required"></span> </label><div class="col-sm-9"><input name="board" id="doard" placeholder="Board" class="col-xs-10 col-sm-7"></div></div><div class="form-group" ><label class="col-sm-3 control-label no-padding-right" for="Asset_Type"> Result Type : <span class="required">*</span> </label><div class="col-sm-9"><select name="result_type" id="result_type" class="col-xs-10 col-sm-7" onchange="showDivp(this)" required><option value="">-- Select Result Type--</option><option value="cgpa">CGPA</option><option value="grade">Grade</option></select></div></div><div class="cgpa_div" style="display:none"><div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="Passing">CGPA</label><div class="col-sm-9"><input name="result" id="cgpa" placeholder="CGPA" class="col-xs-10 col-sm-7 cgpa" ></div></div></div><div class="grade_div" style="display:none"><div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="Passing">Grade</label><div class="col-sm-9"><input name="result" id="grade" placeholder="Grade" class="col-xs-10 col-sm-7 grade" ></div></div></div><div class="form-group"><label class="col-sm-3 control-label no-padding-right" for="Passing">Year of Passing </label><div class="col-sm-9"><input name="passing" id="passing" placeholder="Year of Passing" class="col-xs-10 col-sm-7" required></div></div> <div class="form-group" id="save_butn_t"><div class="col-sm-6 col-sm-offset-3"><button type="submit" class="btn btn-success">Save</button></div></div></div>'); 
			 //$("h1, h2, p").removeClass("blue");
		  // $("#save_butn_t").show();
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
		   $('#add_author').show();
      });
 });  
 </script>
 <script>
 $('#add_author').click( function () {
 //	alert('ok');
	$('#add_author').hide();
});

 $('#add_info').click( function () {
 //	alert('ok');
	$('#add_info').hide();
	$('#addeduc').css('visibility','visible');
	 $('#addeduc').show();
});


$(document).on('click', '.btn_close', function(){  
       
	   $('#add_info').show();
	   $('#addeduc').hide();

  });


$('#add_emergncy').click( function () {
 //	alert('ok');
	$('#add_emergncy').hide();
	$('#emergency').css('visibility','visible');
	 $('#emergency').show();
});

$(document).on('click', '.btn_close', function(){  
       
	   $('#add_emergncy').show();
	   $('#emergency').hide();

  });

</script>
<script type="text/javascript">
function showDivp(elem){
   if(elem.value == 'First Division Class'){
     document.getElementsByClassName('cgpa_div')[0].style.display = "block";
	 }

	if(elem.value == 'Second Division Class'){
     	document.getElementsByClassName('cgpa_div')[0].style.display = "block";
	 }
	 if(elem.value == 'Third Division Class'){
     	document.getElementsByClassName('cgpa_div')[0].style.display = "block";
	 }

	else if(elem.value == 'CGPA'){
      document.getElementsByClassName('cgpa_div')[0].style.display = "none";
	  document.getElementsByClassName('cgpa')[0].value = "";
	  }

	
     if(elem.value == 'CGPA'){
		document.getElementsByClassName('grade_div')[0].style.display = "block";
	 }
	  else if(elem.value == 'Third Division Class'){
		document.getElementsByClassName('grade_div')[0].style.display = "none";
		document.getElementsByClassName('grade')[0].value = "";
	  
	  }
	  else if(elem.value == 'Second Division Class'){
		document.getElementsByClassName('grade_div')[0].style.display = "none";
		document.getElementsByClassName('grade')[0].value = "";
	  
	  }
	 
	 else if(elem.value == 'First Division Class'){
		document.getElementsByClassName('grade_div')[0].style.display = "none";
		document.getElementsByClassName('grade')[0].value = "";
	  }

	   else if(elem.value == 'Appeared'){
		document.getElementsByClassName('grade_div')[0].style.display = "none";
		document.getElementsByClassName('grade')[0].value = "";
		
		document.getElementsByClassName('cgpa_div')[0].style.display = "none";
	 	document.getElementsByClassName('cgpa')[0].value = "";
	  }
	
	  
}
</script>
<script type="text/javascript">
	$(function(){
$('a[title]').tooltip();
});
	
</script>
 <script>	
		$(function(){
		$("#dailyreport").submit(function(e){
				e.preventDefault();
			var att_date = $('[name="att_date"]').val();
			
			if(att_date == ""){
						alertify.error('Date Field is emplty');
						return false;
					}

			var dataString ='date_date='+att_date;
			// alert(dataString);
			//return false;
			$.ajax({
				type:"post",
				url:"post_url/dailyattendanceReport.php",
				data:dataString,
				success:function(res){
					//alert(res);
					//return false;
					//$("#result").empty();
					$("#result").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
	})
	
    </script>

<script>	
		$(function(){
		$("#dailyatten").submit(function(e){
				e.preventDefault();
			var attendate = $('[name="attendate"]').val();
			
			if(attendate == ""){
						alertify.error('Date Field is emplty');
						return false;
					}

			var dataString ='date_date='+attendate;
			// alert(dataString);
			//return false;
			$.ajax({
				type:"post",
				url:"post_url/dailyatten.php",
				data:dataString,
				success:function(res){
					//alert(res);
					//return false;
					//$("#result").empty();
					$("#resultatten").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
	})
	
</script>
<script>	
		$(function(){
		$("#monthlyRport").submit(function(e){
			e.preventDefault();


			var months = $('[name="months"]').val();
			var years = $('[name="years"]').val();

			if(months == ""){
						alertify.error('Date Field is emplty');
						return false;
					}
			if(years == ""){
						alertify.error('Date Field is emplty');
						return false;
					}

			var dataString ='&months='+months+'&years='+years;
			// alert(dataString);
			//return false;
			$.ajax({
				type:"post",
				url:"post_url/monthlyatten.php",
				data:dataString,
				success:function(res){
					//alert(res);
					//return false;
					//$("#result").empty();
					$("#monthlyatten").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
	})
	
</script>
<script>	
		$(function(){
		$("#monthlyAttendances").submit(function(e){
			e.preventDefault();


			var months = $('[name="months"]').val();
			var years = $('[name="years"]').val();

			if(months == ""){
						alertify.error('Date Field is emplty');
						return false;
					}
			if(years == ""){
						alertify.error('Date Field is emplty');
						return false;
					}

			var dataString ='&months='+months+'&years='+years;
			// alert(dataString);
			//return false;
			$.ajax({
				type:"post",
				url:"post_url/monthlyattendance.php",
				data:dataString,
				success:function(res){
					//alert(res);
					//return false;
					//$("#result").empty();
					$("#monthlyAttendance").html(res);
				},error:function(){
					alert('Javascript Loading Problem');
				}
			})
		});
	})
	
</script>
<script>


	$(function(){
	$("#add_attendance").submit(function(e){
		e.preventDefault();
	
	//	alert('ok');
	//	return false;
				
		$.ajax({
			type:"post",
			url:"post_url/post_add_attendance.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){

					//alert(res);

					if(res >= 1){
					
						alertify.success('Success');
					
						//location.href='index.php?pge=menualocation';
						
						}else{
						alertify.error('Error');
						//location.href='index.php?pge=menualocation';
					}
				},error:function(){
				alertify.error('Error on Ajax');
			}     
		})
	});
})


</script>




		
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


					$( "#datepickerfrom" ).datepicker({
					 dateFormat: 'yy-mm-dd',
					showOtherMonths: true,
					selectOtherMonths: false,
					

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
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
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

		<script>
	    $(document).ready(function() {
	        $('#mytable').DataTable();
	    } );
	</script>

	<script>
	function logoloadValidation(){
    var fileInput = document.getElementById('photoup');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        fileInput.value = '';
        return false;
			}else{
				 if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
						//$('#restlogo').attr('src', e.target.result);
						$('#photoup + img').remove();
						$('#photoup').after('<img src="'+e.target.result+'" width="105" height="100" />');
                    }

                    reader.readAsDataURL(fileInput.files[0]);
                }
			}
		}
		$('#image-photo').change(function(){
			filesPreview(this);
		});
	</script>

		
	</body>
</html>
