<?php 
	include("haut_inc.php");
?>

	<nav></nav>
	<main>
    <br>
		<h1 id="lo">Inscription </h1>
    <form class="form-3" method="post">

                    <p class="clearfix">
                        <label>Name  </label>
                        <input type="text" name="username"  >
                    </p>
                    <p class="clearfix">
                        <label>Password</label>
                        <input type="password" name="password"  >
                    </p>
                    
                    <p></p>
                    <br><p class="clearfix">
                        <label>email </label>
                        <input type="text" name="email" >
                    </p>
                    
                    <br>
                    <p class="clearfix">
                        <input type="submit" name="submit" value="submit">
                    </p>    
                    
                  
                </form>​

		
	</main>
<?php
	include("bas_inc.php");
?>	