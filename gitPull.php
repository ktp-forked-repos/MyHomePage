<html>
	<head>
	
	</head>
	<body>
	<h1> Git pulllll </h1>
	
	<?php
		$script="gitPull.sh";
		$message = shell_exec($script);
		echo $message;
	?>
	
	</body>
</html>
