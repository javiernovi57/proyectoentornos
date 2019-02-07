<?php
session_name('juego');
session_start();
if (isset($_POST['1vs1'])){
	header('location: resenraya.php', true, 302);
}
if (isset($_POST['1vsPC'])){
	header('location: esenraya.php', true, 302);
}
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="STYLESHEET" type="text/css" href="Css.css">
        <title>menu</title>
    </head>
    <body>
	<div class="container">
	<h1><img id="x" src="bx.gif" style="width:5%"> tres en raya <img id="o" src="ro.gif" style="width:5%"></h1>
	<center><div class="text-center">
		<form method="post" action="menu.php">
        
            <input class="btn" name="1vs1" type="submit" value="1vs1">
			<br>
			<br>
			<input class="btn" name="1vsPC" type="submit" value="1vsPC">

        </form>
		</div></div></center>
    </body>
</html>