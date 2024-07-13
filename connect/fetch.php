<?php
$conn = mysqli_connect("localhost","root","","DepForm");
$query = "SELECT * FROM DepFormTbl";
$result = mysqli_query($conn,$query);
if($result){
    echo "Connected Successfuly!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">NUMBER</th>

        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "
        <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['number']."</td>
        </tr>
            ";
        }
        ?>
        
    </table>
    <br>
    <button><a href="../index.html">Back</a></button>
</body>
</html>