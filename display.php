<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >


    <!-- JavaScript Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-6 left">
            </div>
    
            <div class="col-sm-6 right">
                <div class="id_card">
                    <div class="card card-width">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="card-img-top mt-3 img-logo d-block mx-auto" src="img/logo.jpg" alt="cgc">
                                <div class="student-image">
                                    <img class="mt-3 stu-img" src="img/logo.jpg" alt="Card image">
                                    <p class="card-text text-center mt-5 mb-3">Director</p>
                                </div>
                            </div>
                            <div class="col-sm-10 right-detail">
                                <div class="school-name text-center">
                                    <p><span class="lib">IDENTITY-CUM-LIBRARY CARD</p></span>
                                    <h1>Chandigarh School of Business</h1>
                                    <h4>Jhanjeri, (Mohali)</h4>
                                </div>
                                <div class="main-detail ms-3 mt-3">
                                    <?php
                                        $conn = mysqli_connect("localhost", "root", "", "cgcicard");
                                        // Check connection
                                        if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                        }
                                        if(isset($_POST['submit'])){
                                            $Roll = $_POST['rollcode'];
                                        }
                                        $sql = "SELECT * FROM student where `roll`=$Roll ";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                        echo 
                                            "<p>Name : ". $row["student_name"]. "</p>
                                            <p>Father Name : ". $row["father_name"]. "</p>
                                            <div class='row'>
                                                <div class='col-sm-6'><p>Sem : ". $row["semester"]. "</p></div>
                                                <div class='col-sm-6'><p>Roll No. : ". $row["roll"]. "</p></div>
                                                <div class='col-sm-6'><p>Branch : ". $row["branch"]. "</p></div>
                                                <div class='col-sm-6'><p>Session : ". $row["ession"]. "</p></div>
                                            </div>
                                            <p>Address : ". $row["ddress"]. "</p>"
                                        ;
                                        }
                                        } else { echo "Aree Yaar kya kar rahe ho? sahi Details fill kro"; }
                                        $conn->close();
                                    ?>
                                     <p class="text-end me-5 mt-3 mb-3">Students Sign</p>";
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
