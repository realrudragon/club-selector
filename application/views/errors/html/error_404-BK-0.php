<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
  background: #fafafa;
  font-family: Arial, sans-serif;
  /* line-height: 1.6; */
}

h2 {
  margin-top: 0;
}

.card {
  padding: 40px;
  background: #fff;
  /* max-width: 360px; */
  max-width: 90%;
  border-radius: 10px;
  margin: 60px auto;
}

.highlight {
  font-weight: bold;
  color: #294;
}

.shadow1 {
  box-shadow: 0 5px 10px rgba(154,160,185,.05), 0 15px 40px rgba(166,173,201,.2);
}

.shadow2 {
  box-shadow: 0 7px 30px -10px rgba(150,170,180,0.5);
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 8px 0px 0px 2px;
}

</style>
</head>
<body>
	<div class="card shadow2" id="container">
		<h2><?php echo $heading; ?></h2>
		<pre>
			<?php echo $message; ?>
		</pre>
	</div>
</body>
</html>
