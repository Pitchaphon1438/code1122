
<?php

    require('connect.php');

    $fist_name = $_POST['fist_name'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $details = $_POST['details'];

    $sql = "INSERT INTO order(fist_name,tel,address,details)VALUES('$fist_name','$tel','$address','$details')";

    $result = mysqli_query($connect,$sql);

    if($result){
        echo "บันทึกข้อมูลเรียบร้อย";
    }
    else{
        echo mysqli_errors($connect);
    }


?>