<?php

if(!isset($_GET["page"]) || $_GET['page']== 'index')
{
	echo $twig->render("view/layouts/index.tpl" ,array());
}
else if(isset($_GET["page"]) && $_GET['page']== 'inscription')
{
	include("controllers/inscriptioncontroller.php");
}
else if(isset($_GET["page"]) && $_GET['page']== 'login')
{
	include("controllers/logincontroller.php");
}

?>