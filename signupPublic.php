<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  echo "Your session is running " . $_SESSION['loginUser'];
  }

		$userType = $_POST['userType'];
		$userID = $_SESSION['loginUser'];
		$fullname = $_SESSION['fullname'];
		$contact = $_SESSION['contact'];
		$email = $_SESSION['email'];
		$address = $_SESSION['address'];	
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
		$code = $_SESSION['referralID'];
		


		$unique = uniqid('', true);
		$uniq = substr($unique, strlen($unique) - 4, strlen($unique));  

if (!empty($code)) {
   $result = mysqli_query($conn, "SELECT codeCount FROM 1milliontraders WHERE userID = '$code'");
     while($res = mysqli_fetch_array($result)) {
      
      $codeCount = $res['codeCount'];  


 if ($userType == 'Silver') {
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password, userType) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password', '$userType'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code'); UPDATE 1milliontraders SET codeCount = codeCount+1 WHERE userID =  '$code';";
} else if ($userType == 'Gold') {
	$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password', '$userType', '10'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code'); UPDATE 1milliontraders SET codeCount = codeCount+2 WHERE userID =  '$code';";
} else if ($userType == 'Diamond') {
		$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password', '$userType', '20'); INSERT INTO referral (userID, code) VALUES ('$userID', '$code'); UPDATE 1milliontraders SET codeCount = codeCount+10 WHERE userID =  '$code';";
}

} 
} else if ($code == ""){ 
	 if ($userType == 'Silver') {
$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password, userType) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password', '$userType');";
} else if ($userType == 'Gold') {
	$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password', '$userType', '10');";
} else if ($userType == 'Diamond') {
		$sql = "INSERT INTO 1milliontraders (userID, fullname, contact, email, address, username, password, userType, codeCount) VALUES ('$userID', '$fullname', '$contact',  '$email', '$address', '$username', '$password', '$userType', '20');";
}
}



if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully ";
	session_start();
	$_SESSION['loginUser'] =$userID ;
	$_SESSION['referralID'] = $code;
	echo 'session create'.$_SESSION['loginUser'];
	header("Location: http://localhost/teamProject/checkoutPublic.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
//	echo"<script> alert('This email has been used')</script>";
//	echo '<script>history.back();</script>';
	
}	


$conn->close();
?>
	