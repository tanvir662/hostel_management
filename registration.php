



<
	
	<link rel="stylesheet" href="registation/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="registation/css/style.css">


	<form action="registration.php" method="POST">
	<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="registation/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
</form>
	<script src="registation/vendor/jquery/jquery.min.js"></script>
    <script src="registation/js/main.js"></script>




<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		
		$result = $crud->execute("INSERT into user(name,email,password) VALUES('$name','$email','$password')");
		
		if($result){
			// $_SESSION['email'] = $email;
			// $_SESSION['name'] = $name;
			header("Location:index.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>