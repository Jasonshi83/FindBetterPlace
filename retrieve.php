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
//        echo '[{"address":"aaa","casedetail":"bbb","miseryIndex":"5","user_id":"1"},{"address":"aaa","casedetail":"bbb","miseryIndex":"5","user_id":"1"},{"address":"aaa","casedetail":"bbb","miseryIndex":"5","user_id":"1"},{"address":"webebreb","casedetail":"","miseryIndex":"5","user_id":"3"},{"address":"123121212","casedetail":"4562323","miseryIndex":"21","user_id":"23"},{"address":"123121212","casedetail":"4562323","miseryIndex":"21","user_id":"23"},{"address":"abc","casedetail":"ced","miseryIndex":"10","user_id":"1"},{"address":"abc","casedetail":"ced","miseryIndex":"10","user_id":"1"},{"address":"test","casedetail":"ttttttttt","miseryIndex":"12","user_id":"12"},{"address":"test","casedetail":"ttttttttt","miseryIndex":"122222","user_id":"12222"},{"address":"test","casedetail":"TT","miseryIndex":"7658","user_id":"222"},{"address":"city","casedetail":"TTTTTT","miseryIndex":"7658","user_id":"222"},{"address":"dfadf","casedetail":"dfdsf","miseryIndex":"11","user_id":"2"}]';
        echo $json;
//        var_dump($json);
//        var_dump('{"address":"aaa","casedetail":"bbb","miseryIndex":"5","user_id":"1"}');
//        var_dump($data);
//        echo $data;

    } else {
        echo "Reading failed";
    }
?>