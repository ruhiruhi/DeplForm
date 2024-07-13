<?php
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];

$conn = new mysqli("localhost","root","","DepForm");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO DepFormTbl (name,email,number) VALUES (?,?,?)");
    $stmt->bind_param("ssi",$name,$email,$number);
    $stmt->execute();
    $stmt->close();
    echo "<button><a href='fetch.php'>Show Data</a></button>";
    $conn->close();
}

?>