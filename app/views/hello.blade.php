<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perk Assignmets</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
			background:#364147;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<a href="http://laravel.com" title="Laravel PHP Framework"><img src="https://cdn2.perk.com/assets/perk2k16/images/perk-logo.png" alt="Laravel PHP Framework"></a>
		<h1>Built on the Power of Rewards</h1>
		<a href="{{route('registration')}}">Click here to register</a>
	</div>
</body>
</html>
