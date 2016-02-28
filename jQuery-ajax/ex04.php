<?php
$email = ($_POST["email"]);

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
  http_response_code(400);
  echo("$email is not a valid email address");
}
else
{
  echo("$email is a valid email address");
}
?>
