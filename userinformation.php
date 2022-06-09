<?php  

$conn = mysqli_connect('localhost' , 'root');
if($conn){
    echo "Connection successful";
}
else{
    echo " No Connection";
}

mysqli_select_db($conn , 'loginform');
$email= $_POST['email'];
$pass= $_POST['pass'];

$sql= "insert into `user_details` (`email`, `pass`) values ('$email', '$pass')";
mysqli_query($conn , $sql);
?>