<?php
// $server = '127.0.0.1';
//  $username = 'mabari';
//  $password = '';
  
//  $schema = 'teeshow_db';
//  $port = 3306;
 
//  $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


    // $host = "127.0.0.1";
    // $user = "mabari";                    
    // $pass = "";                                 
    // $db = "teeshow_db";                             
    // $port = 3306;                       
    
    // $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());


//Is given two arguments, the first being the filename second templateVars
function loadTemplate($filename, $templateVars) {
  extract($templateVars);
  ob_start();
  require $filename;
  $contents = ob_get_clean();
  return $contents;
}

function adminlogin($pdo, $username, $password) {
        $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = :username AND password = :password');

        $criteria = [
              'username' => $_POST['username'],
              'password' => ($_POST['password'])
            ];
        $stmt->execute($criteria);

        return $stmt;
}