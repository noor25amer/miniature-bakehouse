<?php
$name = $_REQUEST['fname'];
$email=$_REQUEST['mail'];
$phone=$_REQUEST['phone'];
$pass=$_REQUEST['pass'];
?>
<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">

<title>The Bake Corner🧁</title>
<link rel="stylesheet" href="stylesheet3.css">
</head>
<body>
<nav>
<ul>
    <li><a href="index.html">Home🤍</a></li>
    <li><a href="signin.html">Sign up!🧁</a></li>
    <li><a href="data.php">Details🍰</a></li>
</ul>
 </nav>
 <h2> <3Your details </h2>
 <div class="t">
 <table border='1'>
<tr>
    <th>Name</th><th>E-mail</th><th>Contact</th><th>Password</th>
</tr>
<tr>
    <td><?php echo $name;?></td><td><?php echo $email;?></td><td><?php echo $phone;?></td><td><?php echo $pass; ?></td>
</tr>

 </table>  
 <button type="submit"> <a href="index.html">OK!🍦</a></button>
 </div> 
 <div>
 <footer >
    ❤Thankyou for visiting our page!
 </footer> 
 </div>   
</body>