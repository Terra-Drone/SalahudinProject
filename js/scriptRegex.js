$(document).ready(function(){
			$.ajax({
				url: 'action.php',
				method: 'post',
				data: 'action=checkCookie'
			}).done(function(result){
				if(result) {
					console.log(result)
					var data = JSON.parse(result);
					$('#email').val(data.email);
					$('#pwd').val(data.pass);
				}
			})
			
			/***REGEX Sign Up***/
			//name
			$('#fname').keyup(function(){
				var regexp = /^[a-zA-Z ]+$/;
				if(regexp.test($('#fname').val())) {
					$('#fname').closest('.form-group').removeClass('has-error');
					$('#fname').closest('.form-group').addClass('has-success');
				} else {
					$('#fname').closest('.form-group').addClass('has-error');
				}
			})
			
			//Phone number
			$('#mobile').keyup(function(){
				var regexp = /^[0-9]{10}$/;
				if(regexp.test($('#mobile').val())) {
					$('#mobile').closest('.form-group').removeClass('has-error');
					$('#mobile').closest('.form-group').addClass('has-success');
				} else {
					$('#mobile').closest('.form-group').addClass('has-error');
				}
			})
			
			//Email
			$('#uemail').keyup(function(){
				var regexp = /^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,4}$/;
				if(regexp.test($('#uemail').val())) {
					$('#uemail').closest('.form-group').removeClass('has-error');
					$('#uemail').closest('.form-group').addClass('has-success');
				} else {
					$('#uemail').closest('.form-group').addClass('has-error');
				}
			})
			
			//Password
			$('#pass').keyup(function(){
				var regexp = /^[a-zA-Z0-9]{8,50}$/;
				if(regexp.test($('#pass').val())) {
					$('#pass').closest('.form-group').removeClass('has-error');
					$('#pass').closest('.form-group').addClass('has-success');
				} else {
					$('#pass').closest('.form-group').addClass('has-error');
				}
			})
			
			//Confirm Password
			$('#cfm_pass').keyup(function(){
				var regexp = /^[a-zA-Z0-9]{6,50}$/;
				if(regexp.test($('#cfm_pass').val())) {
					if($('#cfm_pass').val() == $('#pass').val()) {
						$('#cfm_pass').closest('.form-group').removeClass('has-error');
						$('#cfm_pass').closest('.form-group').addClass('has-success');
					} else {
						$('#cfm_pass').closest('.form-group').addClass('has-error');
					}
				} else {
					$('#cfm_pass').closest('.form-group').addClass('has-error');
				}
			})
			
			//Register
			$('#register').click(function(event){
				event.preventDefault();
				var formData = $('#sign-up-frm').serialize();
				console.log(formData);
				$.ajax({
					url: 'action.php',
					method: 'post',
					data: formData + '&action=register'
				}).done(function(result){
					$('.alert').show();
					$('#result').html(result);
				})
			})
			
			
			/***REGEX Sign In***/
			//Email
			$('#email').keyup(function(){
				var regexp = /^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,4}$/;
				if(regexp.test($('#email').val())) {
					$('#email').closest('.form-group').removeClass('has-error');
					$('#email').closest('.form-group').addClass('has-success');
				} else {
					$('#email').closest('.form-group').addClass('has-error');
				}
			})
			
			//Password
			$('#pwd').keyup(function(){
				// var regexp = new RegExp(/^[a-zA-Z]+$/);
				var regexp = /^[a-zA-Z0-9]{6,50}$/;
				if(regexp.test($('#pwd').val())) {
					$('#pwd').closest('.form-group').removeClass('has-error');
					$('#pwd').closest('.form-group').addClass('has-success');
				} else {
					$('#pwd').closest('.form-group').addClass('has-error');
				}
			})
			
			//Login
			$('#login').click(function(event){
				event.preventDefault();
				var formData = $('#sign-in-frm').serialize();
				console.log(formData);
				$.ajax({
					url: 'action.php',
					method: 'post',
					data: formData + '&action=login'
				}).done(function(result){
					console.log(result);
					var data = JSON.parse(result);
					$('.alert').show();
					if(data.status == 0) {
						$('#result').html(data.msg);
					} else {
						document.location = 'welcome.php';
					}
					
				})
			})
			
			//Reset Password
			$('#reset').click(function(event){
				event.preventDefault();
				var formData = $('#forgot-pass-frm').serialize();
				console.log(formData);
				$('#loader').show();
				$.ajax({
					url: 'action.php',
					method: 'post',
					data: formData + '&action=resetPass'
				}).done(function(result){
					$('#loader').hide();
					console.log(result);
					var data = JSON.parse(result);
					$('.alert').show();
					if(data.status == 0) {
						$('#result').html(data.msg);
					} else {
						$('#result').html(data.msg);
					}
					
				})
			})
		})