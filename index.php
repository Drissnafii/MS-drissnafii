<?php
require __DIR__ . '/config/Connection.php';
?> 

<div class="ContainerAll">

<div class="w3-center">


<h1>Contact Form</h1>

<form action="send.php" method="POST"> 

	<label for="firstname">First Name:</label><br>
	<input type="text" id="firstname" name="firstname" require><br><br>

	<label for="lastname">Last Name:</label><br>
	<input type="text" id="lastname" name="lastname" require><br><br>

	<label for="email">Email:</label><br>
	<input type="email" id="email" name="email" require><br><br>

	<label for="pass">Password:</label><br>
	<input type="password" id="pass" name="pass" require><br><br>

	<input type="submit" name="submit" value="Submit">
</form>
</div>

</body>
</html>