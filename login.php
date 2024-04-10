<!DOCTYPE html>
<html>
  <head>
    <title>Novara FOOD_PLANET Registration</title>
    <link rel="stylesheet" href="./media/css/index.css" />
    
    <link rel="stylesheet" href="./media/css/signup.css" />
  </head>

  <body>
      <!-- Start Navigation  -->
      <?php 
        include('./import/navbar.php')  
      ?>
      <!-- End Navigation-->
      <!--Login Section-->
      <div class="bg-wrapper">
        <div class="auth-container">
            <div class="form-container">
                <h1 class="form-header">Sign up</h1>
                <input 
                    type="text"
                    class="input"
                    id='signup-email'
                    name="email"
                    placeholder="Email" />
                <input 
                    type="password"
                    class="input"
                    id='signup-password'
                    name="password"
                    placeholder="Password" />
                <button
                    type="submit"
                    onClick='signupInputHandler()'
                    class="form-button"
                >Login</button>
            </div>

            <div class="auth-nav">
                Don't have an account?
                <a class="" href="signup.html">
                    Sign Up
                </a>.
            </div>
        </div>
    </div>

    </body>
</html>
