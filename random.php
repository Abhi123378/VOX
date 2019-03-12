<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css"> <meta charset="utf-8">
    
    <!---<link rel="stylesheet" type="text/css" href="style3.css">
    --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Overlock">
    <title>VOX - Sign Up</title>
    <script src="script.js"></script>
</head>
<body>
<div class='login'>
    <form action="random.php" method="POST">
  <h2>Sign in</h2>
  <input name='username' placeholder='Username' type='text'/>
  <input id='pw' name='password' placeholder='Password' type='password'/>
  <div class='remember'>
    <input checked='' id='remember' name='remember' type='checkbox'/>
    <label for='remember'></label>Remember me
  </div>
  <input type='submit' value='Sign in'/>
  <a class='forgot' href='#'>Forgot your password?</a>
</div>
</form>
<?php 

</body>
</html>