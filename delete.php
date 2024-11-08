<?php
include 'connection.php';

if(isset($_GET['delid'])){
    $delid=$_GET['delid'];
    $sql="DELETE FROM pt WHERE ID ='$delid'";
    $res=$conn->query($sql);

    if($res){
        echo "delete";
    }else{
        echo "not delete";
    }
}

?>
<<!DOCTYPE hmtl>
<html lang="eng">
    <head>
        <title>testing 3</title>
    </head>
    <body>
        <table border="1px" cellpadding="1px" cellspacing="1px">
            <tbody>
                <thead>
                    <tr>
                        <th>ID</th>  
                        <th>NAME</th>                        
                        <th>AGE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <?php
                $sql="SELECT * FROM pt";
                $result=$conn->query($sql);
                while($data=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['age'];?></td>
                    <td><a href="update.php?editid=<?php echo $data['id'];?>">EDIT<a></td>
                    <td><a href="delete.php?delid=<?php echo $data['id'];?>"
                    onclick="return confirm('do you want delete')">DELETE</></td>
                <tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>



<!--sorry sir for late my name is manoj singh negi -->