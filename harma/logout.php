<?php
setcookie("user",'', time()-10);
header('Location:http://localhost/dashboard/harma/index.php');
?>