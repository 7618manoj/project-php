<?php
include 'connection.php';

if(isset($_GET['editid'])){
    $editid=$_GET['editid'];
    $sql="SELECT * FROM pt WHERE ID ='$editid'";
    $edittre=$conn->query($sql);
    $editdata=mysqli_fetch_array($edittre);

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $age=$_POST['age'];

        $sql="UPDATE pt SET name='$name',age='$age' WHERE ID ='$editid'";
        $result=$conn->query($sql);

        if($result){
            echo "data update sucessful";
        }else{
            echo "error".$sql."<br>".$conn->connect_error;
        }
    }
}
?>

<!DOCTYPE hmtl>
<html lang="eng">
    <head>
        <title>testing 2</title>
    </head>
    <body>
        <form action="" method="POST">
            <lable>NAME</lable>
            <input type="text" name="name" placeholder="enter name" value="<?php echo $editdata['name'];?>"><br>
            <lable>AGE</lable>
            <input type="text" name="age" placeholder="enter age" value="<?php echo $editdata['age'];?>"><br>
            
            <input type="submit" name="submit" placeholder="submit"><br>
        </form>
    </body>
</html>
