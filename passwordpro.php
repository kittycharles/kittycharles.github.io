<?php

$username = "artlounge";
$password ="angelo12321";

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>

<method="post" action="staffloginconfirmed.html">
<p><label for="txtUsername">Username@</label>
	<br /><input type="text" title="enter your Username" name="txtPassword"  /></p>
	<p><label for="txtpassword">password:</label>
	<br /><input type="password" title="submit your password" name="txtPassword" /></p>
	
	
	<p><input type="submit" name="submit" Value="login" /></p>
	


<?php

}
else  {
	
	?>
	<p>this is the password protected page. Your private content goes here.</p>

<?php
	
}

?>