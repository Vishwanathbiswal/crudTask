<?php
    include ("connect.php");
    error_reporting(0);
    $_GET['dmId'];
    $_GET['dmName'];
    $_GET['dmAge'];
?>

<html>
<head>
</head>
<body>
    <form action= "" method= "GET">
    Dummy ID:<br>
    <input type= "text" name= "id" value= "<?php echo $_GET['dmId']; ?>"/><br><br>
    New Name:<br>
    <input type= "text" name= "name" value= "<?php echo $_GET['dmName']; ?>"/><br><br>
    New Age:<br>
    <input type= "text" name= "age" value= "<?php echo $_GET['dmAge']; ?>"/><br><br>
    <input type= "submit" name= "submit" value= "Update Record"/>
    </form>
<?php
    if($_GET['submit']){
        $uptId = $_GET['id'];
        $uptName = $_GET['name'];
        $uptAge = $_GET['age'];

        $query= "UPDATE dummy_table SET name= '$uptName', age= '$uptAge' WHERE id= '$uptId'  ";
        $data= mysqli_query($conn, $query);
        if($data){
            echo "<font color='green'>record updated successfully. <a href= 'display.php'>check updated list here</a>";
        } else{
            echo "<font color='red'>record not updated. <a href= 'display.php'>check updated list here</a>";
        }
    } else{
        echo "<font color='blue'> click on update button";
    }
?>
</body>
</html>