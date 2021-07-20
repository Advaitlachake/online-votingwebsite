<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Admin | Voting System</title>


	<?php include('./header.php'); ?>
	<?php
	session_start();
	if (isset($_SESSION['login_id']))
		header("location:index.php?page=home");
	?>

</head>
<style>
	body {
		width: 100%;
		height: calc(100%);

		/*background: #007bff;*/
	}

	main#main {
		width: 100%;
		height: calc(100%);
		background: white;
	}

	#anime {
		width: 100px;
		height: 80px;
		background-color: red;
		position: relative;
		animation: myfirst 2s linear 5s infinite alternate;
	}

	@keyframes myfirst {
		0% {
			background-color: red;
			left: 0px;
			top: 0px;
		}

		25% {
			background-color: yellow;
			left: 200px;
			top: 0px;
		}

		50% {
			background-color: blue;
			left: 200px;
			top: 150px;
		}

		75% {
			background-color: green;
			left: 0px;
			top: 150px;
		}

		100% {
			background-color: red;
			left: 0px;
			top: 0px;
		}
	}

	#login-right {
		position: absolute;
		right: 0;
		top: 0;
		width: 40%;
		height: calc(100%);
		background: white;
		background-image: url("indianflag.jpg"), url("forgot_back.jpg");
		background-position: center top, center bottom;
		background-size: 620px 200px, 620px 600px;
		background-repeat: no-repeat, no-repeat;
		display: flex;
		align-items: center;
	}

	#login-left {
		position: absolute;
		left: 0;
		width: 60%;
		height: calc(100%);
		background: #00000061;
		display: flex;
		align-items: center;
		background-image: url("modirally.webp"), url("onlinevoting.jpeg"), url("forgot_back.jpg");
		background-repeat: no-repeat, no-repeat, no-repeat;
		background-position: top left, bottom left, top right;
		background-size: 60% 50%, 60% 50%, 40% 100%;
	}

	.rainbow {
		background-color: orange;
		border-radius: 4px;
		color: red;
		cursor: pointer;
		align-items: center;
		padding-right: 30px;
		padding-top: 30px;
		text-align: center;




	}

	.first {
		margin: 0;
		position: absolute;
		top: 30%;
		left: 80%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		padding: 10px 32px;
	}

	.second {
		margin: 0;
		position: absolute;
		top: 40%;
		left: 80%;
		transform: translate(-50%, -50%);
		padding: 10px 24px;
	}

	.third {
		margin: 0;
		position: absolute;
		top: 50%;
		left: 80%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		padding: 10px 26px;
	}

	.fourth {
		margin: 0;
		position: absolute;
		top: 60%;
		left: 80%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		padding: 10px 30px;
	}

	.fifth {
		margin: 0;
		position: absolute;
		top: 70%;
		left: 80%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		padding: 10px 30px;
	}

	.sixth {
		margin: 0;
		position: absolute;
		top: 80%;
		left: 80%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		padding: 10px 34px;
	}

	.seventh {
		margin: 0;
		position: absolute;
		top: 90%;
		left: 80%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		padding: 10px 26px;
	}

	.rainbow-1:hover {
		background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
		animation: slidebg 5s linear infinite;
	}

	#login-right .card {
		margin: auto
	}

	}

	.card_id {
		margin: 0;

		padding-top: 100px;
	}
</style>

<body>


	<main id="main" class=" alert-info">
		<div id="login-left">
			<h3 style="padding-left:580px;padding-bottom:500px; font-family:Great Vibes;color:black;"> View the BIODATA of the Contesting Candidates </h3>
			<a class="rainbow first rainbow-1" onclick="location.href='/voting/Candidate_Info/SM.html'">Shivraj Modi</a>
			<a class="rainbow second rainbow-1" onclick="location.href='/voting/Candidate_Info/SG.html'"> Shivani Gandhi </a>
			<a class="rainbow third rainbow-1" onclick="location.href='/voting/Candidate_Info/SP.html'">Sandeep Patel</a>
			<a class="rainbow fourth rainbow-1" onclick="location.href='/voting/Candidate_Info/HS1.html'">Harshal Shah</a>
			<a class="rainbow fifth rainbow-1" onclick="location.href='/voting/Candidate_Info/SD.html'">Shivam Dube</a>
			<a class="rainbow sixth rainbow-1" onclick="location.href='/voting/Candidate_Info/RP.html'">Riyan Parag</a>
			<a class="rainbow seventh rainbow-1" onclick="location.href='/voting/Candidate_Info/RS.html'">Rahul Sharma </a>
		</div>

		
		<div id="login-right">
			<div class="card col-md-8">
				<div class="card_id">
					<form id="login-form">
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							<input type="text" id="username" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<input type="password" id="password" name="password" class="form-control">
						</div>
						<center> <button id="login-btn" class="btn-sm btn-block btn-wave col-md-4 btn-primary" type="submit">Login</button></center>

					</form>
					<br>
					<center> <button class="btn-sm btn-block btn-wave col-md-4 btn-primary" onclick="location.href='forgotpass.php'">Forgot Password</button></center>
				</div>
				<div id="anime">
					<label>Voting is live</label>
				</div>

			</div>


	</main>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
$( document ).ready(function() {
  // Handler for .ready() called.

  $('#login-form').submit(function(e) {
		e.preventDefault() //prevents default form action
		$('#login-btn').attr('disabled', true).html('Logging in...');
		if ($(this).find('.alert-danger').length > 0)
			$(this).find('.alert-danger').remove();
			console.log($(this).serialize());
		$.ajax({
			url: 'ajax.php?action=login',
			method: 'POST',
			data: $(this).serialize(),
			error: err => {
				console.log(err)
				$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success: function(resp) {
				if (resp == 1) {
					location.href = 'index.php?page=home';
				} else if (resp == 2) {
					location.href = 'voting.php';
				} else {
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	
	})

});
	
</script>

</html>