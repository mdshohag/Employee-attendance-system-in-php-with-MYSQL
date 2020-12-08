$(function(){
	$("#submenu").submit(function(e){
		e.preventDefault();
		//alert('ok');
		var mainmenuname = $('[name="mainmenuname_id"]').val();
		var submenuname = $('[name="submenuname"]').val();
		
		if(mainmenuname == ""){
				alertify.error('Please Select Main Menu Name');
				
				return false;
			}
		if(submenuname == ""){
				alertify.error('Please Enter Sub Menu Name');
				
				return false;
			}		
		
				
		
		$.ajax({
			type:"post",
			url:"post_url/post_submenu.php",
			data:new FormData(this),
			contentType: false,
			cache:false,
			processData:false,
			success:function(res){
				
				//alert('ok');
				
				if(res == 1){
					
					alertify.success('Success');
					
					location.href='index.php?pge=submenu';
				}else if(res == 2){
					alertify.error('Exist Sub Menu');
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