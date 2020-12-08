$(function(){
	$("#menus").submit(function(e){
		e.preventDefault();
		//alert('ok');
		var menutitle = $('[name="menutitle"]').val();
		
		if(menutitle == ""){
				alertify.error('Please Enter Menu Title');
				
				return false;
			}
		
		
				
		
		$.ajax({
			type:"post",
			url:"post_url/post_menus.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				
				//alert('ok');
				
				if(res == 1){
					
					alertify.success('Success');
					
					location.href='index.php?pge=menus';
				}else if(res == 2){
					alertify.error('Exist Menu');
				}else{
					alertify.error('Not inserted');
					//alertify.success('Success');
					
					//location.href='ss.php';
				}
			  
			},error:function(){
				alertify.error('Error on Ajax');
			}     
		})
	});
})


$(function(){
	$("#ditemenu").submit(function(e){
		e.preventDefault();
		//alert('ok');
		var menutitle = $('[name="menutitle"]').val();
		
		if(menutitle == ""){
				alertify.error('Please Enter Menu Title');
				
				return false;
			}
		
		$.ajax({
			type:"post",
			url:"post_url/post_updatemenu.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				
				//alert(res);
				
				if(res == 1){
					
					alertify.success('Success');
					
					location.href='index.php?pge=menumanage';
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


$(function(){
   
   $('[name="user_id"]').on('change',function(e){
	e.preventDefault();
	
	var userid = $('[name="user_id"]').val();
	
	
	 var dataString ='userid='+userid;
	// alert(dataString);
	//return false;
	$.ajax({
	 type:"post",
	 url:"post_url/select_menu.php",
	 data:dataString,
	 success:function(res){
		//alert(res);
		//return false;
	   //$("#menuview").empty();
	   $("#menuview").html(res);
	 },error:function(){
	  alert('Error on Ajax');
	 }     
	})
   });
  })



$(".menu_delete").click(function(){
	var menuid=$(this).attr('menu_id');
	//alert(root_id);
	//return false;
	var confirm = alertify.confirm('Are you sure want to delete Menu').set('onok', function(closeEvent){  
		//alertify.alert(root_id);
	 var dataString ='menu_id='+menuid;
	 
	 $.ajax({
	  type:"post",
	  url:"post_url/menu_delete.php",
	  data:dataString,
	  success:function(res){
		location.href='index.php?pge=menumanage';
	  }
	  ,error:function(){
	   alert('Error on Ajax');
	  }
	  	  
	 });

   });
	 confirm.set({'title':'Menu'});
});