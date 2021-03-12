<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
    table, th, td{
        border: 2px solid black;
        border-collapse: collapse;
        
    }
    th, td{
        padding:10px;
    }
</style>
</head>
<body>
    <?php
    include ("connect.php");
    error_reporting(0);
    $query = "SELECT * FROM dummy_table";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total!=0){
        ?>
        <table>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th colspan= "2">Operations</th>
            </tr>
        
            <?php
            while($result = mysqli_fetch_assoc($data))
            {
                echo "<tr>
                        <td>".$result['id']."</td>
                        <td>".$result['name']."</td>
                        <td>".$result['age']."</td>
                        <td><a href= 'update.php?dmId=$result[id]&dmName=$result[name]&dmAge=$result[age]'>Edit</a></td>
                        <td><a href= 'delete.php?dmId=$result[id]' onclick= 'return checkdelete()'>Delete</a></td>
                    </tr>";       
            }
    } else {
         echo "no records found";
      }
            
        ?>
        </table>
<script>
function checkdelete(){
    return confirm('Are you sure you want to delete this data??');
}
</script>
    
</body>
</html>


