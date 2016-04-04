<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="logo">
			<!--<a href=""><img src="https://cdn2.perk.com/assets/perk2k16/images/perk-logo.png" width="90px" width="52px" ></a>-->
		</div>
</div>
<div class="main">
<div class="testbox">
  <h1>Registration</h1>
  <form action="/"> <hr>
  <label id="icon" for="name"><i class="icon-user "></i></label>
  <input type="text" name="prefix_first_name" id="prefix_first_name" placeholder="First Name" required/>
  
  <label id="icon" for="lname"><i class="icon-user"></i></label>
  <input type="text" name="prefix_last_name" id="prefix_last_name" placeholder="Last Name" required/>

  <label id="icon" for="name"><i class="icon-envelope"></i></label>
  <input type="text" name="prefix_email" id="prefix_email" placeholder="Email" required/>
   <p></p>
   <a href="#" class="button" onclick="registerUser('{{route('register')}}')">Register</a>
   
  </form>
</div>
</div>
<div class="footer"><div class="copyright">Designed & Developed By <a href=""></a></div></div>
</body>
<!-- Jquery 1.12.0 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- custom Js -->
<script src="../js/scripts.js"></script>
</html>