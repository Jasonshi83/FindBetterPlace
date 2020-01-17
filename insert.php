<?php
    $con = mysqli_connect('localhost:3306','findbetterplace','findbetterplace', 'findbetterplace') or die("could not connect to DB");

    $address = $_POST['address'];
    $casedetail = $_POST['casedetail'];
    $miseryIndex = $_POST['miseryIndex'];
    $user_id = $_POST['user_id'];


    $sql = "INSERT INTO caselist (address, casedetail, miseryIndex, user_id) VALUES ('$address', '$casedetail', '$miseryIndex', '$user_id')";
//    mysqli_query($con, $sql)
    if(!mysqli_query($con, $sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        echo 'inserted';
    }
    header("refresh:2 ; url=index.html")
?>