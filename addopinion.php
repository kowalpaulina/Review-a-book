<?PHP
    $dbconnection['host']='127.0.0.1'; 
	$dbconnection['login']='root';
	$dbconnection['pass']='';
	$dbconnection['db_name']='review';
	$mysqli=@mysqli_connect($dbconnection['host'], $dbconnection['login'], $dbconnection['pass'], $dbconnection['db_name']);
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $now=date('Y-m-d H:i:s'); 
    
    $sql = "INSERT INTO reviews (name, lastname, email, message,date)
    VALUES('".$fname."' ,'".$lname."' ,'".$email."' ,'".$message."','".$now."')";
    
    $result=$mysqli->query($sql);
?>