<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";


$e=$_GET['email'];
$ps=$_GET['password'];

$sql="SELECT email,pass FROM inscription WHERE email='$e'";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    
        if(($e==$row["email"])&&($ps==$row["pass"])){echo" bienvenue user";
        header('location: http://localhost/projet/html/profuser.html') ;}

        else{
            header('location: http://localhost/projet/html/conx.html') ; }

    }
  
}





mysqli_close($conn);



?>