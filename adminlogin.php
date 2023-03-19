<!DOCTYPE html>
  <head>
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Admin Login Form</header>
        <form action="logincheck.php" method="POST">
          <div class="field">
            <span class="fam"></span>
            <input type="text" required placeholder="Username/Email id" name="username">
          </div>
          <div class="field space">
            <span class="fams"></span>
            <input type="password" class="pass-key" required placeholder="Password" name="password">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="field">
            <input type="submit" value="LOGIN">
          </div><br>
        </form>
        <div class="signup">Don't have account?
          <a href="jay.html">Signup Now</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
