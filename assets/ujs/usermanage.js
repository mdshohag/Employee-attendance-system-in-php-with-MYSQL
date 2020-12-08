$(function(){
	$("#usercreate").submit(function(e){
		e.preventDefault();
		//alert('ok');
		var name = $('[name="fullname"]').val();
		
		var usertype = $('[name="usertype"]').val();
		var username = $('[name="username"]').val();
		var upassword = $('[name="upassword"]').val();
		
		if(name == ""){
				alertify.error('Please Enter Full Name');
				
				return false;
			}
		
		if(usertype == ""){
				alertify.error('Please Select User Type');
				return false;
			}
		if(username == ""){
				alertify.error('Please Enter User Name');
				return false;
			}
		if(upassword == ""){
				alertify.error('Please Enter Password');
				return false;
			}
			
		if (upassword.length < 6) {
			alertify.error("Password must be between 6 characters"); 
			return false;
		}
				
		
		$.ajax({
			type:"post",
			url:"post_url/post_adduser.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				
				//alert('ok');
				
				if(res == 1){
					
					alertify.success('Success');
					
					location.href='index.php?pge=usercreate';
				}else if(res == 2){
					alertify.error('Exist User');
				}else{
					alertify.error('Not inserted');
					//alertify.success('Success');
					
					//location.href='adduser.php';
				}
			  
			},error:function(){
				alertify.error('Error on Ajax');
			}     
		})
	});
})


$(function(){
	$("#edituser").submit(function(e){
		e.preventDefault();
		//alert('ok');
		//return false;
		var fullname = $('[name="fullname"]').val();
		var username = $('[name="username"]').val();
		var usertype = $('[name="usertype"]').val();

		if(fullname == ""){
				alertify.error('ful Name is empty');
				
				return false;
			}
		
		if(username == ""){
				alertify.error('User Name is empty');
				
				return false;
			}
		if(usertype == ""){
				alertify.error('Select User Type');
				
				return false;
			}
		
		$.ajax({
			type:"post",
			url:"post_url/post_updateuser.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				
				//alert(res);
				
				if(res == 1){
					
					alertify.success('Success');
					
					location.href='index.php?pge=usermanage';
				}else{
					alertify.error('Not Update');
					//alertify.success('Success');
					
					//location.href='ss.php';
				}
			  
			},error:function(){
				alertify.error('Error on Ajax');
			}     
		})
	});
})

$(".user_delete").click(function(){
	var userid=$(this).attr('user_id');
	//alert(root_id);
	//return false;
	var confirm = alertify.confirm('Are you sure want to delete User').set('onok', function(closeEvent){  
		//alertify.alert(root_id);
	 var dataString ='user_id='+userid;
	 
	 $.ajax({
	  type:"post",
	  url:"post_url/user_delete.php",
	  data:dataString,
	  success:function(res){
		location.href='index.php?pge=usermanage';
	  }
	  ,error:function(){
	   alert('Error on Ajax');
	  }
	  	  
	 });

   });
	 confirm.set({'title':'User'});
});