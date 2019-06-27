<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "
http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>NewContact</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form action="form.php" method="post" name="forma">
<i>login<br></i>
<input type="text" name="login" size="17" required ><br>
<i>Email<br></i>
<input type="email" name="email" size="17" required ><br>
<i>pass<br></i>
<input type="text" name="pass" size="17" required ><br>
<i>re-pass<br></i>
<input type="text" name="repass" size="17" required ><br>
<i>hmp-url<br></i>
<input type="text" name="hpgurl" size="17" ><br>
<div class="g-recaptcha" data-sitekey="6LfjdygUAAAAAF_grPFREoyIdluAkPu5rhm0QI5e" required ></div><br>
<span class='msg'><?php echo $msg; ?></span><br>


<input type="submit" name="button" size="25">
</form>
</body>
</html>



