<?php

$user_validation = 1;
$user_id_validation = 1;
$password_validation = 1;

 $User_Id=$_POST['user_id'];
$Name=$_POST['name'];
 $Password=$_POST['password1'];
 $CPassword=$_POST['password2'];
 $Email=$_POST['email'];

//name validation

 if(ord($Name[0])<=122 && ord($Name[0])>=65 )
{
	if(str_word_count($Name)>=2){
$nameLen=strlen($Name);

for($i=0;$i<$nameLen;$i++)
{
	$flag=0;
	if(ord($Name[$i])>=65 && ord($Name[$i])<=90)  //A-Z
	{
		$flag=1;
	}
else if(ord($Name[$i])>=97 && ord($Name[$i])<=122)  //a-z
	{
		$flag=1;
	}
	else if(ord($Name[$i])==45 ||ord($Name[$i])==46 || ord($Name[$i])==32  ) //. & -
	{
		$flag=1;
	}
	else{
		
		$flag=0;
	}

if($flag==0)
{

	$user_validation=0;
		echo"Name is incorrect "."</br>";
	break;
}


}

}
else
{
	
	$n=ord($Name[0]);
		$user_validation=0;
	echo"Name is incorrect  (At Least Two Words)"."</br>";
}
}

else
{
	$n=ord($Name[0]);
		$user_validation=0;
	echo"Name is incorrect  (Can't Start With A Number)"."</br>";
	
}

//pass validation
if((strcmp($Password,$CPassword)==0))
{
	
	//echo "Password Confirmed";
}
else
{
	$password_validation=0;
	echo "Password Don't Match"."</br>";
}


//user Id validation

$myfile = fopen("RegUsers.txt", "r") or die("Unable to open file!");

// Output one line until end-of-file

while(!feof($myfile)) {

$g=fgets($myfile);

 if (strpos($g, ':uid:'.$User_Id) !== false)
{
$user_id_validation=0;
echo "User Id Already Exists";
}
else{}
}

fclose($myfile);









if($user_validation==1 && $password_validation===1 && $user_id_validation===1){
 $string=":uid:".$User_Id.":pass:".$Password.":name:".$Name.":email:".$Email."\r\n";

$myfile = fopen("RegUsers.txt", "a") or die("Unable to open file!");
//$txt = "Mickey Mouse\n";
fwrite($myfile, $string);
//fwrite($myfile, "</br>");
fclose($myfile);
header("location:login.php");

}
else
{
//header("location:reg.php");

}
?>