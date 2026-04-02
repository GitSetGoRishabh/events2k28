$(document).ready(function(){

	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "backend/register.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data.trim() == "register_success") {
				window.location.href = "register_success.php";
				} else {
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
})






















