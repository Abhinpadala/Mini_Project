
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylereg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript">
       function check(){
        alert('Registration Successfull');
        return false;
       }
     </script>
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registrationdb.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">name</span>
            <input type="text" placeholder="Enter your name"  name="name"required>
          </div>
          <div class="input-box">
            <span class="details">username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">email</span>
            <input type="email" placeholder="Enter your email"name="email" required>
          </div>
          <div class="input-box">
            <span class="details">phonenumber</span>
            <input type="tel" placeholder="Enter your number" pattern="[0-9]{10}" name="phonenumber" required>
          </div>
          <div class="input-box">
            <span class="details">password</span>
            <input type="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[A-Z]).{8,}" title="must contain at least one number,one small character,one capital character,one special character" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">confirmpassword</span>
            <input type="password" placeholder="Confirm your password" name="confirmpassword" required>
          </div>
        </div>
       
        <div class="button">
          <input type="submit" name="submit" onclick="check()" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
