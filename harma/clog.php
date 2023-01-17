<?php
$u=$_GET['username'];
$p=$_GET['password'];
 
$connection=mysqli_connect('localhost','root','','pharma');
$command="SELECT * FROM signupinfo where username='$u'";
$result=mysqli_query($connection,$command);
if($result->num_rows >0){
    $command="SELECT * FROM signupinfo where username='$u' and password='$p'";
$result=mysqli_query($connection,$command);
if($result->num_rows >0){
    echo"log in succesfully";
    if(isset($_GET['remember'])){
        setcookie("user" ,$u ,  time()+2000000);
      
}
else{
    setcookie("user", $u , time()+10);
  
}
echo "<script>alert('Log in succesfully...!')</script>";
echo "<script>window.location = 'index.php'</script>";
}
else{
    setcookie('error','wrong password', time()+5);
    header('Location:http://localhost/dashboard/harma/login.php');
} 
}
else{
    setcookie('error','wrong username', time()+5);
    header('Location:http://localhost/dashboard/harma/login.php');
}

?>