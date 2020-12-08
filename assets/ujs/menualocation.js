$(function(){
	$("#menualocation").submit(function(e){
		e.preventDefault();
		//alert('ok');
		var user_id = $('[name="user_id"]').val();
		
		if(user_id == ""){
				alertify.error('Please select user name');
				
				return false;
			}
		
		$.ajax({
			type:"post",
			url:"post_url/post_menualocation.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){

					//alert(res);

					if(res >= 1){
					
						alertify.success('Success');
					
						//location.href='index.php?pge=menualocation';
						
						}else if(res == 'exit'){
							alertify.error('Exist menu alocation');
						}else{
						alertify.error('!NOT menu alocation');
						//location.href='index.php?pge=menualocation';
					}
				},error:function(){
				alertify.error('Error on Ajax');
			}     
		})
	});
})


$('.test').change(function(){
  if($(this).prop('checked'))
  {
   
   alert('ok');
  }
  else
  {
   alert('Not');
  }
 });


 $(".onoff").click(function(){
	var user_id=$(this).attr('user_id'); 
	var menuidin=$(this).attr('menuidin'); 
	//alert(menuidin);
	//return false;
	//var confirm = alertify.confirm('Are you sure want to allow Menu').set('onok', function(closeEvent){  
		//alertify.alert(root_id);
 	var dataString ='user_id='+user_id+"&menuidin="+menuidin; 
	// alert(dataString);
	 $.ajax({
	  type:"post",
	  url:"post_url/post_alocation.php",
	  data:dataString,
	  success:function(res){
		//location.href='index.php?pge=menumanage';
	  }
	  ,error:function(){
	   alert('Error on Ajax');
	  }
	  	  
	 });

   });
	// confirm.set({'title':'Menu'});
//});


 $(".onoffactive").click(function(){
	var userid=$(this).attr('userid'); 
	var upmenuid=$(this).attr('upmenuid'); 
	//alert(menuidin);
	//return false;
	//var confirm = alertify.confirm('Are you sure want to allow Menu').set('onok', function(closeEvent){  
		//alertify.alert(root_id);
 	var dataString ='userid='+userid+"&upmenuid="+upmenuid; 
		//alert(dataString);
		//return false;
	 $.ajax({
	  type:"post",
	  url:"post_url/post_updatealocation.php",
	  data:dataString,
	  success:function(res){
		//location.href='index.php?pge=menumanage';
	  }
	  ,error:function(){
	   alert('Error on Ajax');
	  }
	  	  
	 });

   });
	// confirm.set({'title':'Menu'});
//});

 