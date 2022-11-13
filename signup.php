<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="./signup.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form  action = "create_user.php" method="post" >
  <div class = "logo">
    <center>
      <img src = "icons/logo.png" position = "center">
    </center>
    
  </div>
  <div class="form-field">
    <input type="text" placeholder="Name " name = 'name' required/>
  </div>
  <div class="form-field">
    <input type="email" placeholder="Email " name = "mail" required/>
  </div>
  <div class="form-field">
    <input type="password" placeholder="Password" name = "pass" required/>                         
</div>
<div class="form-field" id="dob">
  <input type="text" placeholder="Date of Birth" name = "date" onfocus="(this.type='date')" onblur="(this.type='text')">
  </div>

<div class="form-field">
    <input type="text" placeholder="Phone Number" name = "phoneno" required/>
  </div>
  <div class="form-field">
    <input type="text" placeholder="City" name = "city" required/>
  </div>
  
  <div class="form-field">
  <button class="btn" type="submit" id="direct" onclick="isValid()" name = "but_submit" >Sign Up</button>
  </div>
  
</form>
<!-- partial -->
  
</body>
</html>
