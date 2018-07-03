

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="design.css" type="text/css" rel="stylesheet"/>
<?php include 'functions.php';?>
</head>
<body>


<div id="wrapper">
<div class="form_div_log">
<div class="form_div">
<p class="form_label">LOGIN FORM</p>
<form method="post" action="">
<p><input type="text" placeholder="Enter Mobile Number" name="number" maxlength="10"></p>
<p><input type="password" placeholder="Password" name="password"></p>
<p><input type="submit" value="LOGIN" name="btn_login"></p>
</form>
</div>
</div>

<div class="form_div_reg">
<div class="form_div">
<p class="form_label">SIGNUP FORM</p>
<form method="post" action="">
<p><input type="text" placeholder="Enter Name" name="name"></p>
<p><input type="text" placeholder="Enter Mobile Number" name="number" maxlength="10"></p>
<p><input type="text" placeholder="Enter Place" name="place"></p>
<p><input type="password" placeholder="Password" name="password"></p>
<p><input type="submit" value="SIGNUP" name="btn_register"></p>
</form>
</div>
</div>

</div>
</body>
</html>
