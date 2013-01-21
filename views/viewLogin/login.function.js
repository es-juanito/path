$(document).ready(function(){
	$('#signIn').on('click', logIn);
	function logIn(){
		$.ajax({
			dataType: 'JSON',
			type: 'POST',
			data:{
				'a':'log'
			},
			success: function(result){
				if(result.result){
					console.log(result.result);
					document.form.submit();
				}

			}
		});
	}
});