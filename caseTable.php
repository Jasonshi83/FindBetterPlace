<!DOCTYPE html>
<html lang="en">
<head>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs3vxgxkjSJPQrWLos58EWNL1jMH48Kfo-->
    <!--&callback=initMap"-->
    <!--            async defer></script>-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/formSheet.css">
    <link rel="stylesheet" type="text/css" href="css/caseTableStyle.css">

    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            Home
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="caseTable.php">View All Cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="caseInput.html">Post Case</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="" id="caseList">
    <h1>Case List</h1>
</div>


<table class="table">
    <thead class="thead-dark">
    <tr class="">
        <th scope="col">ID</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">CASE DETAIL</th>
        <th scope="col">MISERY INDEX</th>
    </tr>
    </thead>
    <tbody>
<?php
$con = mysqli_connect('localhost:3306','findbetterplace','findbetterplace', 'findbetterplace') or die("could not connect to DB");
$sql = "SELECT id, address, casedetail, miseryIndex from caselist";
$result = $con -> query($sql);

if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
        echo "<tr><td>". $row["id"] ."</td><td>". $row["address"] ."</td><td>". $row["casedetail"] ."</td><td>". $row["miseryIndex"] ."</td></td>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}
?>

    </tbody>
</table>

</body>

<footer class="page-footer font-small blue pt-4">

    <div class="container-fluid text-center text-md-left">

        <div class="row">

            <div class="col-md-6 mt-md-0 mt-3">

                <h5 class="text-uppercase">FIND A BETTER PLACE TO LIVE</h5>
                <p>This Website is for people who wants to live in Wellington, information is only for reference</p>

            </div>

            <hr class="clearfix w-100 d-md-none pb-3">

            <div class="col-md-3 mb-md-0 mb-3">

                <h5 class="text-uppercase">More Information</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">View All Cases</a>
                    </li>
                    <li>
                        <a href="#!">Report Iusses</a>
                    </li>
                    <li>
                        <a href="#!">Contact Us</a>
                    </li>
                    <li>
                        <a href="#!">Know More About Us</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Follow Us</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!"></a>
                    </li>
                    <li>
                        <a href="#!">Twitter</a>
                    </li>
                    <li>
                        <a href="#!">Facebook</a>
                    </li>
                    <li>
                        <a href="#!">LinkedIn</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> AboringAI.com</a>
    </div>

</footer>
</html>