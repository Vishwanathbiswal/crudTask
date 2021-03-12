<?php
    include ("connect.php");
    error_reporting(0);
?>

<html>
<head>
    <title>Insert</title>
</head>
<body>
    <form action= "" method= "GET">
    Dummy ID:<br>
    <input type= "text" name= "id" value=""/><br><br>
    Dummy Name:<br>
    <input type= "text" name= "name" value= ""/><br><br>
    Dummy Age:<br>
    <input type= "text" name= "age" value= ""/><br><br>
    <input type= "submit" name= "submit" value= "Insert Record"/>
    </form>
<?php
    if($_GET['submit']){

        $dmId = $_GET['id'];
        $dmName = $_GET['name'];
        $dmAge = $_GET['age'];

        if(empty($dmId)){
            echo "ID cannot be blank";
        } elseif(empty($dmName)){
            echo "Name cannot be blank";
        } elseif(empty($dmAge)){
            echo "Age cannot be blank";
        } elseif($dmId="" && $dmName="" && $dmAge=""){
            echo "All fields are required";
        } elseif(!preg_match('/^[0-9]*$/', $dmId)){
            echo "<h4 style='color:red;'>ID accepts only integers</h4><br>";
        } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$dmName)){
            echo "<h4 style='color:red;'>Only letters and white spaces are allowed in the name field</h4>";
        } else{
            $query= "INSERT INTO dummy_table values('$dmId','$dmName','$dmAge')";
            $data= mysqli_query($conn, $query);
            if($data){
                echo "<h4 style='color:green;'>Data inserted into the database</h4>";
            }
        }
        // if ($dmId!="" && $dmName!="" && $dmAge!=""){
        //     $query= "INSERT INTO dummy_table values('$dmId','$dmName','$dmAge')";
        //     $data= mysqli_query($conn, $query);

        //     if($data){
        //         echo "data inserted into database<br>";
        //     }
        // } else {
        //     echo "<h4 style='color:red;'>All fields are required</h4>";
        // }
        
    }
    // include ("display.php");
?>
</body>
</html>