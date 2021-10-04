<script>
    $.ajax({             
	            type: "POST",          
		        enctype: 'multipart/form-data',  
		        url: "registers_update.php",        
		        data: data,          
		        processData: false,    
		        contentType: false,      
		        cache: false,           
		        timeout: 600000,  
		        beforeSend : function() {               
		            //alert('지갑 생성 중 입니다'); // 전송 전 실행 코드
		        },
		        success: function (data) { 
		        	$('body').html(data);
		            //alert("신청이 완료되었습니다.");           
		            $("#submits").prop("disabled", false);  
		            // $("#okModals").hide();
		            // $("#okModals input").val();
		            // location.reload(true); 

					if(check == money){
		             location.reload(true); 
					}
		        },          
		        error: function (e) {  
		            console.log("ERROR : ", e);     
		            $("#submits").prop("disabled", false);    
		            //alert("신청에 실패하였습니다.");      
		            // $("#okModals").hide();
		            // $("#okModals input").val();   
		            location.reload(true); 
		         }     
		    });
</script>