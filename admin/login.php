
 <link rel="stylesheet" href="registation/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="registation/css/style.css">

<form action="login.php" method="POST">
	
	
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="registation/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="registration.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>

                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">

                                <input type="submit" name="submit" id="signin" class="form-submit" value="Login"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</section>

</form>
  <script src="registation/vendor/jquery/jquery.min.js"></script>
    <script src="registation/js/main.js"></script>
<?php
	session_start();

	include_once 'Crud.php';
	
	$crud = new Crud();
  if(isset($_POST['submit'])){
	  
	  $email = $_POST['email'];
	  $password = md5($_POST['password']);
	  
	  
	  $query = "select * from user where email='$email' AND password='$password'";
	
	  $result = $crud->getData($query);
	if($result) {
		foreach($result as $res){
			$email = $res['email'];
			$name = $res['name'];
		}
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		header("Location:admin/dashboard.php");
	}else{
		echo "Login Problem";
	}
	
	
	
  }
	
	
?>
