<?php
sesssion_start();
if(isset($_POST['save'])){
    extract($POST);
    include'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM administrator where Email='$email' and password='md5($pass)'");
    $sql=mysqli_query($conn,"SELECT * FROM student where Student's id ='$id' and password='md5($pass)'");
    $row=mysqli_fetch_array($sql);
    if(is_array($row)){
        $_SESSION["ID"]=$row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First Name"]=$row['First  Name'];
        $_SESSION["Last Name"]=$row['Last  Name'];
      
}alse{
    echo "Inavalid Email /ID /Password"
}
}
?>