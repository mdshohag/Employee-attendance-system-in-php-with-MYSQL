$(function(){
		
		$("#employeecreate").submit(function(e){
			e.preventDefault();
			
			var fullname = $('[name="fullname"]').val();
			var department = $('[name="department"]').val();
			var designation = $('[name="designation"]').val();
			var emp_id = $('[name="emp_id"]').val();
			var mobile = $('[name="mobile"]').val();
			var emp_email = $('[name="emp_email"]').val();
			var gender = $('[name="gender"]').val();
			var religion = $('[name="religion"]').val();
			var fathername = $('[name="fathername"]').val();
			
			
			if(fullname == ""){
					alertify.error('Please Enter Full name');
					return false;
				}
			if(department == ""){
					alertify.error('Please Enter Department');
					return false;
				}
			if(designation == ""){
					alertify.error('Please Enter Designation');
					return false;
				}
			if(emp_id == ""){
					alertify.error('Please Enter Employee ID');
					return false;
				}
			if(mobile == ""){
					alertify.error('Please Enter Mobile Number');
					return false;
				}
			if(emp_email == ""){
					alertify.error('Please Enter Email');
					return false;
				}
			if(gender == ""){
					alertify.error('Please Enter Gender');
					return false;
				}
			if(religion == ""){
					alertify.error('Please Enter Religion');
					return false;
				}
			if(fathername == ""){
					alertify.error('Please Enter Father Name');
					return false;
				}
			

			$.ajax({
				type:"post",
				url:"post_url/post_employee.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
					
						//alert('A email has been sent to email for future Processing');
						window.location.href = "index.php?pge=employee_view&&idno="+emp_id;
						//location.href='employee.php';
						
					}else if(res == 2){
						alertify.error('Exist Already Employee Id');
					}else if(res == 3){
						alertify.error('Exist Already Mobile');
					}else if(res == 4){
						alertify.error('Exist Already Email');
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
	$("#editemployee").submit(function(e){
		e.preventDefault();
		//alert(ok);
		//return false;
		
		var fullname = $('[name="fullname"]').val();
		var designation = $('[name="designation"]').val();
		var emp_id = $('[name="emp_id"]').val();
		var mobile = $('[name="mobile"]').val();
		var emp_email = $('[name="emp_email"]').val();
		var gender = $('[name="gender"]').val();
		var religion = $('[name="religion"]').val();
		var fathername = $('[name="fathername"]').val();
		
		
		if(fullname == ""){
				alertify.error('Please Enter Full name');
				return false;
			}
		if(designation == ""){
				alertify.error('Please Enter Designation');
				return false;
			}
		if(emp_id == ""){
				alertify.error('Please Enter Employee ID');
				return false;
			}
		if(mobile == ""){
				alertify.error('Please Enter Mobile Number');
				return false;
			}
		if(emp_email == ""){
				alertify.error('Please Enter Email');
				return false;
			}
		if(gender == ""){
				alertify.error('Please Enter Gender');
				return false;
			}
		if(religion == ""){
				alertify.error('Please Enter Religion');
				return false;
			}
		if(fathername == ""){
				alertify.error('Please Enter Father Name');
				return false;
			}
	
		$.ajax({
			type:"post",
			url:"post_url/post_editemployee.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				//alert(res);
				//return false;
				if(res == 1){
					//alert('A email has been sent to email for future Processing');
					//window.location.href = "index.php?pge=employee_view&&mobile="+mobile;
					//location.href='employee.php';
					window.history.go(-1);
				}else{
					alertify.error('NOT Data Update');
				}
			},error:function(){
				alert('Please try again');
			}     
		})
	});
})

$(function(){
		
		$("#employe_education").submit(function(e){
			e.preventDefault();
			
			$.ajax({
				type:"post",
				url:"post_url/post_education.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(usertype);
					//return false;
					if(res >= 1){
						location.href = location.href;
						alertify.success('Successful');
						
					}else if(res == 2){
						alertify.error('Exam/Degree Title Already Exist');
					}else{
						alertify.error('NOT insert');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})


$(function(){
		
		$("#updateeducation").submit(function(e){
			e.preventDefault();
			//alert(ok);
			//return false;

			var examname = $('[name="examname"]').val();
			var institutename = $('[name="institutename"]').val();
			var result = $('[name="result_type"]').val();
			var passing = $('[name="passing"]').val();
			
			if(examname == ""){
					alertify.error('Exam/Degree Title Field is Empty');
					return false;
				}
			if(institutename == ""){
					alertify.error('Institute Name Field is Empty');
					return false;
				}
			if(result == ""){
					alertify.error('Result Field is Empty');
					return false;
				}
			if(passing == ""){
					alertify.error('Passing Field is Empty');
					return false;
				}

			$.ajax({
				type:"post",
				url:"post_url/post_editeducation.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res == 1){
						//location.href = location.href;
						alertify.success('Successful');
						window.history.go(-1);
					}else{
						alertify.error('NOT Update');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})

$(function(){
	
	$("#employe_emergency").submit(function(e){
		e.preventDefault();
	
		$.ajax({
			type:"post",
			url:"post_url/post_emergency.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				//alert(usertype);
				//return false;
				if(res >= 1){
					location.href = location.href;
					alertify.success('Successful');
					
				}else{
					alertify.error('NOT insert');
				}
			},error:function(){
				alertify.error("Please try again");
			}     
		})
	});
})

$(function(){
		
		$("#updateEmergency").submit(function(e){
			e.preventDefault();
		
			$.ajax({
				type:"post",
				url:"post_url/post_editemergency.php",
				data:new FormData(this),
				contentType: false,
				cache:false,
				processData:false,
				success:function(res){
					//alert(res);
					//return false;
					if(res >= 1){
							alertify.success('Successful');
						window.history.go(-1);
						
					}else{
						alertify.error('NOT Update');
					}
				},error:function(){
					alertify.error("Please try again");
				}     
			})
		});
	})


$(function(){
   
   $('[name="employee_id"]').on('change',function(e){
	e.preventDefault();
	
	var employeeid = $('[name="employee_id"]').val();
	
	
	 var dataString ='employeeid='+employeeid;
	// alert(dataString);
	//return false;
	$.ajax({
	 type:"post",
	 url:"post_url/select_employee.php",
	 data:dataString,
	 success:function(res){
		//alert(res);
		//return false;
	   //$("#employeewiew").empty();
	   $("#employeewiew").html(res);
	 },error:function(){
	  alert('Error on Ajax');
	 }     
	})
   });
  })

$(function(){
   
   $('[name="departmentid"]').on('change',function(e){
	e.preventDefault();
	
	var departmentid = $('[name="departmentid"]').val();
	
	
	 var dataString ='departmentid='+departmentid;
	// alert(dataString);
	//return false;
	$.ajax({
	 type:"post",
	 url:"post_url/select_employee_code.php",
	 data:dataString,
	 success:function(res){
		//alert(res);
		//return false;
	   //$("#employeewiew").empty();
	   $("#staffcode").html(res);
	 },error:function(){
	  alert('Error on Ajax');
	 }     
	})
   });
  })