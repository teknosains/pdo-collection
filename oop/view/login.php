<html>
	<p><h4>Login</h4></p>
	<form method="post" action="login.php">
		Username : 
		<p>
		<input type="text" name="username"/>
		</p>
		Password :
		<p>
		<input type="password" name="password"/>		
		</p>
		<input type="submit" name="submit" value="Login"/>	
	</form>

	<?php
		
		if(isset($_POST['submit'])){
		
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			require_once '../class/Factory.php';
			$account = Factory::getClass('userAccount');
			
			$user = $account->login($username,$password);
				
		}

	?>
</html>