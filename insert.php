<?php include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $sql="INSERT INTO pt (name,age) VALUES('$name','$age')";

    if($conn->query($sql)===TRUE){
        echo "form submit";
    }
    else{
        echo"faild error" .$sql ."<br>" .$conn->error;
    }
}
?>

<!DOCTYPE hmtl>
<html lang="eng">
    <head>
        <title>testing</title>
    </head>
    <body>
        <form action="" method="POST">
            <lable>NAME</lable>
            <input type="text" name="name" placeholder="enter name"><br>
            <lable>AGE</lable>
            <input type="text" name="age" placeholder="enter age"><br>
            
            <input type="submit" name="submit" placeholder="submit"><br>
        </form>
    </body>
</html>