<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

body {
    background: black;
	color: white;
}
</style>
<body>


<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
<center>
<body>
<h1>-Daftar Penyewaan Ps-</h1>
<br>


    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <br>
    <br>
    <br>
    <a href="add.php">Add New User</a><br>
    <a href="loginsukses.php">Kembali Ke Home</a><br/><br/>
    </center>
</body>
</html>




</body>
</html>

