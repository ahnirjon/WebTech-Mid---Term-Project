<?php


$uid=$_POST['username'];
$pass=$_POST['password'];
$flag=0;
$getId=" ";

if($uid=="admin" && $pass=="admin")
{
//header("location:adminhomepage.php");
//header("location:adminhomepage.php");
header("location:adminhomepage.php"."?userName=".$uid);

}
else{



$myfile = fopen("RegUsers.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {

$getId=fgets($myfile) ;

if ((strpos($getId, ':uid:'.$uid) !== false)&&(strpos($getId, ':pass:'.$pass) !== false)) {

$flag=1;
    //echo 'true';
break;
}

 // echo $getId . "<br>";
}
fclose($myfile);


if($flag==1){
echo $getId . "<br>";
echo "Loggedin";

header("location:homePage.php"."?userName=".$uid);
}
else{

	echo "Wrong Username Or Password";
	header("location:login.php"."?userName=".$uid);
}



}
?> 
