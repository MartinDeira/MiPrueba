<?php
// ALL PATHS BELOW ARE RELATIVE TO THE DIRECTORY WHERE YOU HAVE INSTALLED vAuthenticate
$resultpage = "vAuthenticate.php";	// THIS IS THE PAGE THAT WOULD CHECK FOR AUTHENTICITY
$admin = "admin/index.php";	// THIS IS THE PATH TO THE ADMIN INTERFACE
$informes = "informes/listado.php";	// THIS IS THE PATH TO THE INFORMES INTERFACE
$success = "members/index.php";	// THIS IS THE PAGE TO BE SHOWN IF USER IS AUTHENTICATED
$failure = "failed.php";	// THIS IS THE PAGE TO BE SHOWN IF USERNAME-PASSWORD COMBINATION DOES NOT MATCH
$nopol = "login.php?pol=no";	// THIS IS THE PAGE TO BE SHOWN IF not check politica

// The $_SERVER['HTTP_HOST'] takes care of the root directory of the web server
// This makes it possible to implement the script even on IP-based systems.
// For name-based systems, just think of $_SERVER['HTTP_HOST'] as the domain name
// example: $_SERVER['HTTP_HOST'] will have to be www.yourdomain.com
// For IP-based systems, this will replace the IP address
// example: $_SERVER['HTTP_HOST'] will have to be 66.199.47.5
$changepassword = "http://" . $_SERVER['HTTP_HOST'] . "/chgpwd.php"; // Path to change password file
$changepasswordsec = "http://" . $_SERVER['HTTP_HOST'] . "/chgpwdsec.php"; // Path to change password file
$login = "http://" . $_SERVER['HTTP_HOST'] . "/login.php"; // Path to page with the login box
$logout = "http://" . $_SERVER['HTTP_HOST'] . "/logout.php"; // Path to logout page
$inicio = "http://" . $_SERVER['HTTP_HOST'] . "/index.html"; // Path to logout page

// DB SETTINGS
$dbhost = "localhost";	// Change this to the proper DB Host name
$dbusername = "root"; 	// Change this to the proper DB User
$dbpass = "martin00";	// Change this to the proper DB User password
$dbname	= "uaidb"; 	// Change this to the proper DB Name
$dbnameplan = "plan";
$dbdispo = "dispo";      // 

?>
