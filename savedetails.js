	$('#sub').click(
	function(e){
		var reg_name = /^[A-Z][a-z]*$/;
		var reg_mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var mob_no = /^[0-9]{10}$/;
		var name = $("#name").val();
		var mail = $("#mail").val();
		var phone = $("#phone").val();
		var Class = $("#Class").val();
		var description = $("#description").val();

		if(name=="")
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>First name cant be empty</b></p>");
			$("#name").focus();
		}

		else if(mail=="")
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>Email id cant be empty</b></p>");
			$("#mail").focus();
		} 

		else if(!mail.match(reg_mail))
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>Enter valid email id</b></p>");
			$("#mail").focus();
		} 

		else if(phone=="")
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>Mobile no. cant be empty</b></p>");
			$("#phone").focus();
		} 

		else if(!phone.match(mob_no))
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>Enter valid mobile number</b></p>");
			$("#phone").focus();
		}

		else if(Class=="")
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>Class cant be empty</b></p>");
			$("#Class").focus();
		}

		else if(description=="")
		{
			$("#status").html("<p style='color:red !important;' role='alert'><b>Description cant be empty</b></p>");
			$("#description").focus();
		}

		else
		{
			var dataString = 'name='+ name + '&mail=' + mail + '&phone=' + phone + '&Class=' + Class + '&description='+ description;
			$.ajax(
			{
				type: "post",
				url: "feedback_submit.php",
				data: dataString,
				cache:false,
				beforeSend:function()
				{
					$("#status").html("<p><i class='fa fa-spinner' aria-hidden='true'></i>Loading...Please Wait</p>")
				},
				success:function(msg){
					var response = String(msg);
					if(response=="success")
					{
						$("#status").html("<p style='color:green !important;' role='alert'><i class='fa fa-check' aria-hidden='true'></i>&nbsp;&nbsp;" + msg + "</p>")
					}
					else
					{
						$("#status").html("<p style='color:red !important;' role='alert'><b>Failed to Submit Response</b></p>")
					}	
				}
			}
			);
		}
		e.preventDefault();
	}
	);