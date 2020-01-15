<?php
    $con = mysqli_connect('localhost:3306','findbetterplace','findbetterplace', 'findbetterplace') or die("could not connect to DB");


//    $sql = "INSERT INTO caselist (address, casedetail, miseryIndex, user_id) VALUES ('123121212', '4562323', '21', '23')";

//    mysqli_query($con, $sql);

//    echo "done";
    $address = $_POST['address'];
    $casedetail = $_POST['casedetail'];
    $miseryIndex = $_POST['miseryIndex'];
    $user_id = $_POST['user_id'];

//    echo $address;
//    echo "---";
//    echo $casedetail;
//    echo "---";
//    echo $miseryIndex;
//    echo "---";
//    echo $user_id;

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