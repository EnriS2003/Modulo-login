<html>
<head>
<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body>
<?php
session_start();

if (isset($_SESSION['session_id'])) {
    $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    $session_id = htmlspecialchars($_SESSION['session_id']);
    
    printf("Benvenuto %s, il tuo session ID è -- %s --", $session_user, $session_id);
    echo "<br>";
} else {
    printf("Effettua il %s per accedere all'area riservata", '<a href="../login.html">login</a>');
}
?>
		<form class="bottone" action="logout.php">
 		 <button class="bottone" type="submit">LOGOUT</button>  
		</form>
</body>
</html>