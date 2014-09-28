<html>
<head>
	<title></title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="menu-top">
		<div class="container">
			<ul class="menu">
				<li><a href="_admin/login">Login</a></li>
				<li><a href="_admin/user">Signup</a></li>
			</ul>
		</div>
	</nav>
	<div class="bluepane">
		<div class="container">
			<h1 class="heading-name text-center">QR CODES</h1>
			<em class="heading-description text-center">the most popular technology to bridge the physical-digital gap</em>
	</div>
	</div>
	<div class="main-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-offset-1">
					<form role="form">
					  <div class="form-group">
					    <label for="first_name" class="lb-size">First Name:</label>
					    <input type="text" class="form-control f-control-size" id="first_name" placeholder="First Name">
					  </div>
					  <div class="form-group">
					    <label for="last_name" class="lb-size">Last Name:</label>
					    <input type="text" class="form-control f-control-size" id="last_name" placeholder="Last Name">
					  </div>
					  <div class="form-group">
					    <label for="phone_number" class="lb-size">Phone number:</label>
					    <input type="text" class="form-control f-control-size" id="phone_number" placeholder="phone">
					  </div>
					  <input type="button" id="qr_generate" value="Generate" class="btn btn-success pull-right btn-lg">
					</form>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="qr-image"></div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="_admin/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
	  function img_create(src, alt, title) {
	      var ua = window.navigator.userAgent;
	      var msie = ua.indexOf('MSIE ');

	      var img= msie? new Image() : document.createElement('img');
	      img.src= src;
	      if (alt!=null) img.alt= alt;
	      if (title!=null) img.title= title;
	      return img;
	  }
	  
	  $("#qr_generate").click(function(){
	    var base_uri = "http://chart.apis.google.com/chart";

	    var first_name       = document.getElementById("first_name").value;
	    var last_name       = document.getElementById("last_name").value;
	    var phone_number    = document.getElementById("phone_number").value;

	    var uri = base_uri + "?cht=qr&chs=220x220&chl=BEGIN:VCARD\nVERSION:2.1\nN:" + last_name + ";" + first_name + "\nFN:" + first_name + " " + last_name + "\nTEL;WORK;VOICE:" + phone_number + "\nEND:VCARD&choe=UTF-8&chld=L";

	    var oImage = img_create(encodeURI(uri), "Loading...", first_name);
	    var oImageWrapper = document.getElementsByClassName("qr-image")[0];
	    oImageWrapper.appendChild(oImage);
	  });
	</script>
</body>
</html>