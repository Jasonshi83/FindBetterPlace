<?php
    $json = '';
    $data = array();

    class CaseObj
    {
        public $address;
        public $casedetail;
        public $miseryIndex;
        public $user_id;
    }

    $con = mysqli_connect('localhost:3306','findbetterplace','findbetterplace', 'findbetterplace') or die("could not connect to DB");
    $result = $con->query("SELECT * from caselist");
    if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $case = new CaseObj();
            $case->address = $row["address"];
            $case->casedetail = $row["casedetail"];
            $case->miseryIndex = $row["miseryIndex"];
            $case->user_id = $row["user_id"];
            $data[] = $case;
        }
        $json = json_encode($data);
//        echo $json;
//        echo '{"address":"aaa","casedetail":"bbb","miseryIndex":"5","user_id":"1"}';
        echo $json;
//        echo "hello world";
    } else {
        echo "Reading failed";
    }
?>