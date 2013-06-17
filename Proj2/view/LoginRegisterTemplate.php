
<?php
$leftContent=' <form action="'.$dest. '"method="post">
		<fieldset> 
			<p> 
				<label for="user_name">Username</label> 
				<input type="text" id="user_name" name="user_name" value="" maxlength="20" /> 
			</p> 
			<p> 
				<label for="user_paswd">Password</label> 
				<input type="password" id="user_paswd" name="user_paswd" value="" maxlength="20" /> 
			</p> 
			<p> 
				<input type="submit" value="Login" /> 
			</p> 
		</fieldset> 
	</form> ';

require '../view/messageTemplate.php';
?>