
<html>
<head>
    <title>Add Users</title>
</head>

<style>

body {
    background: black;
	color: white;
}
</style>

<body>
<center>
    <h1>Tambahkan Data</h1>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php


    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        
        include_once("config.php");

        
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        
        echo "User added successfully<br>";
    }
    ?>
    <a href="loginsukses.php">Go to Home</a><br>
    <a href="penyewaan.php">Melihat Hasil</a>
    </center>
</body>
</html>