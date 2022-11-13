<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Travelingo || Travelling site</title>
  <link rel="stylesheet" href="login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action = "login.php" method = "post">
  <div class = "logo">
    <center>
      <img src = "icons/logo.png" position = "center">
    </center>
  </div>
  <div class="form-field">
    <input type="email" placeholder="Email " name ="mail" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="Password" name = "pass" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" id="direct" onclick="isValid()">Log in</button>
  </div>
  <div class="form-field" id = 'last_text'>
    <center>
      Don't have an account ? <br> <a href="signup.php" >Sign in</a>
    </center>
    
  </div>
</form>
<!-- partial -->
</body>
</html>
