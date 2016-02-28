<?php
include("haut_inc.php");
?>

	<nav></nav>
	<main>
		<section class="main">
				<form class="form-4">
				    <h1>Login </h1>
				    <p>
				        <label for="login">Username</label>
				        <input type="text" name="login" placeholder="Username" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='password' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="submit">
				    </p>       
				</form>​
			</section>
	

	</main>
	<?php
	include("bas_inc.php");
	?>
