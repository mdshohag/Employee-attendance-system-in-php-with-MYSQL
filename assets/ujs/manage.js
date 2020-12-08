$(function(){
		
		$("#rostercreate").submit(function(e){
			e.preventDefault();
			
			var rostername = $('[name="rostername"]').val();
			var starttime = $('[name="starttime"]').val();
			var endtime = $('[name="endtime"]').val();
			
			
			if(rostername == ""){
					alertify.error('Please Enter Roster name');
					return false;
				}
			if(starttime == ""){
					alertify.error('Start time field is empty');
					return false;
				}
			if(endtime == ""){
					alertify.error('End time field is empty');
					return false;
				}
			
			

			$.ajax({
				type:"post",
				url:"post_url/post_rostercreate.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=rostercreate';

					}else if(res == 2){
						alertify.error('Exist Already Roster name');
					}else{
						alertify.error('NOT Save Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})


$(function(){
		
		$("#rosterupdate").submit(function(e){
			e.preventDefault();
			
			var rostername = $('[name="rostername"]').val();
			var starttime = $('[name="starttime"]').val();
			var endtime = $('[name="endtime"]').val();
			
			
			if(rostername == ""){
					alertify.error('Please Enter Roster name');
					return false;
				}
			if(starttime == ""){
					alertify.error('Start time field is empty');
					return false;
				}
			if(endtime == ""){
					alertify.error('End time field is empty');
					return false;
				}
			
			

			$.ajax({
				type:"post",
				url:"post_url/post_rosterupdate.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=rostercreate';
						
					}else{
						alertify.error('NOT Update Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})


$(function(){
		
		$("#leavecreate").submit(function(e){
			e.preventDefault();
			
			var leavename = $('[name="leavename"]').val();
			var totalday = $('[name="totalday"]').val();
			
			
			if(leavename == ""){
					alertify.error('Please Enter Leave');
					return false;
				}
			if(totalday == ""){
					alertify.error('Please Enter total day');
					return false;
				}
			
			

			$.ajax({
				type:"post",
				url:"post_url/post_leavecreate.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=leavecreate';

					}else if(res == 2){
						alertify.error('Exist Already Leave');
					}else{
						alertify.error('NOT Save Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})

$(function(){
		
		$("#leaveupdate").submit(function(e){
			e.preventDefault();
			
			var leavename = $('[name="leavename"]').val();
			
			
			if(leavename == ""){
					alertify.error('Please Leave is empty');
					return false;
				}
			
			

			$.ajax({
				type:"post",
				url:"post_url/post_leaveupdate.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=leavecreate';
						
					}else{
						alertify.error('NOT Update Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})



$(function(){
	$("#rosterassignid").submit(function(e){
		e.preventDefault();
	
	//	alert('ok');
	//	return false;
				
		$.ajax({
			type:"post",
			url:"post_url/post_rosterassign.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){

					//alert(res);

					if(res >= 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=rosterassign';
						
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

$(function(){
		
		$("#departmentcreate").submit(function(e){
			e.preventDefault();
			
			var department = $('[name="v"]').val();
						
			if(department == ""){
					alertify.error('Please Enter Department name');
					return false;
				}
	
			$.ajax({
				type:"post",
				url:"post_url/post_department.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=departmentcreate';

					}else if(res == 2){
						alertify.error('Exist Already Department name');
					}else{
						alertify.error('NOT Save Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})


$(function(){
		
		$("#editdepartment").submit(function(e){
			e.preventDefault();
			
			var department = $('[name="department"]').val();
			
			if(department == ""){
					alertify.error('Please Enter Department name');
					return false;
				}

			$.ajax({
				type:"post",
				url:"post_url/post_departmentupdate.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=departmentcreate';
						
					}else{
						alertify.error('NOT Update Data');
					}
				
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})


$(function(){
   
   $('[name="departid"]').on('change',function(e){
	e.preventDefault();
	
	var depart_id = $('[name="departid"]').val();
	
	
	 var dataString ='depart_id='+depart_id;
	// alert(dataString);
	//return false;
	$.ajax({
	 type:"post",
	 url:"post_url/select_department.php",
	 data:dataString,
	 success:function(res){
		//alert(res);
		//return false;
	   //$("#employeeview").empty();
	   $("#employeeview").html(res);
	 },error:function(){
	  alert('Error on Ajax');
	 }     
	})
   });
  })

$(function(){
   
   $('[name="employeeid"]').on('change',function(e){
	e.preventDefault();
	
	var employeeID = $('[name="employeeid"]').val();

	//alert(employeeID);
	
	
	 var dataString ='employee_id='+employeeID;
	// alert(dataString);
	//return false;
	$.ajax({
	 type:"post",
	 url:"post_url/select_employeename.php",
	 data:dataString,
	 success:function(res){
		//alert(res);
		//return false;
	   //$("#employeename").empty();
	   $("#employeename").html(res);
	 },error:function(){
	  alert('Error on Ajax');
	 }     
	})
   });
  })


$(function(){
		
		$("#leaveentry").submit(function(e){
			e.preventDefault();
			
			var departid = $('[name="departid"]').val();
			var employeeid = $('[name="employeeid"]').val();
			var leaveid = $('[name="leaveid"]').val();
			var leave_to = $('[name="leave_to"]').val();
			var leave_from = $('[name="leave_from"]').val();
			var description = $('#description').val();
			
			if(departid == ""){
					alertify.error('Please select Department');
					return false;
				}
			if(employeeid == ""){
					alertify.error('Please select Employee ID');
					return false;
				}
			if(leaveid == ""){
					alertify.error('Please select Leave Type');
					return false;
				}
			if(leave_to == ""){
					alertify.error('Please Enter To Date');
					return false;
				}
			if(leave_from == ""){
					alertify.error('Please Enter From Date');
					return false;
				}
			if(description == ""){
					alertify.error('Please Enter Description');
					return false;
				}
			

			$.ajax({
				type:"post",
				url:"post_url/post_leaveassign.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=leaveassign';

					}else{
						alertify.error('NOT Save Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})

$(function(){
		
		$("#leaveentryedit").submit(function(e){
			e.preventDefault();
			
			var departid = $('[name="departid"]').val();
			var employeeid = $('[name="employeeid"]').val();
			var leaveid = $('[name="leaveid"]').val();
			var leave_to = $('[name="leave_to"]').val();
			var leave_from = $('[name="leave_from"]').val();
			var description = $('#description').val();
			
			if(departid == ""){
					alertify.error('Please select Department');
					return false;
				}
			if(employeeid == ""){
					alertify.error('Please select Employee ID');
					return false;
				}
			if(leaveid == ""){
					alertify.error('Please select Leave Type');
					return false;
				}
			if(leave_to == ""){
					alertify.error('Please Enter To Date');
					return false;
				}
			if(leave_from == ""){
					alertify.error('Please Enter From Date');
					return false;
				}
			if(description == ""){
					alertify.error('Please Enter Description');
					return false;
				}
			
			$.ajax({
				type:"post",
				url:"post_url/post_leaveassignedit.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=leaveassignmanage';

					}else{
						alertify.error('NOT Update Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})

$(function(){
	$("#deptmentview").submit(function(e){
			e.preventDefault();
		
		var departmentid = $('[name="departmentid"]').val();
		var staffcode = $('[name="staffcode"]').val();
		var selectMonth = $('[name="selectMonth"]').val();
		var selectYear = $('[name="selectYear"]').val();
		
		if(departmentid == ""){
					alertify.error('Select Department is emplty');
					return false;
				}
		if(staffcode == ""){
					alertify.error('Select Staffcode is emplty');
					return false;
				}
		if(selectMonth == ""){
					alertify.error('Select Month is emplty');
					return false;
				}
		if(selectYear == ""){
					alertify.error('Select Year is emplty');
					return false;
				}

		var dataString ='departmentid='+departmentid+'&staffcode='+staffcode+'&selectMonth='+selectMonth+'&selectYear='+selectYear;
			//alert(dataString);
			//return false;
		$.ajax({
			type:"post",
			url:"post_url/empDeptDetailview.php",
			data:dataString,
			success:function(res){
				//alert(res);
				//return false;
				//$("#result").empty();
				$("#viewdepartment").html(res);
			},error:function(){
				alert('Javascript Loading Problem');
			}
		})
	});
})

$(function(){
		
		$("#holiday").submit(function(e){
			e.preventDefault();

			
			var holidaytitle = $('[name="holidaytitle"]').val();
			var holiday_date = $('[name="holiday_date"]').val();
			
			
			if(holidaytitle == ""){
					alertify.error('Please Select Office Holiday Reason');
					return false;
				}
			if(holiday_date == ""){
					alertify.error('Please Enter holiday date');
					return false;
				}
			$.ajax({
				type:"post",
				url:"post_url/post_officeholidays.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						alertify.success('Success');
					
						location.href='index.php?pge=officeholidays';

					}else{
						alertify.error('NOT Save Data');
					}
				
				  
				},error:function(){
					alert('Please try again');
				}     
			})
		});
	})