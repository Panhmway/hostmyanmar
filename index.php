<?php
//  echo "<i>Hello World!</i>" ."PHP is working!";

// $name="Htet Lin Aung";
// $email="jokejoke186@gmail.com";
// $age=22;

// $img1="images/img1.jpg";
// $img2="images/img2.jpg";
// $img3="images/img3.jpg";

$test1="<h4>This text has a line underneath it 1</h4>";
$test2="<h4>This text has a line underneath it 2</h4>";
$test3="<h4>This text has a line underneath it 3</h4>";

$p="<p>This is a paragraph Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto in molestias tenetur! Unde consequatur harum atque dolorem debitis exercitationem aut est sed ullam voluptatem, cumque, officiis nisi? Optio, excepturi id?</p>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <style>
            body{
                background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            }
    </style>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --> -->
</head>
<body>


<!-- 
    <section>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?php echo $name ;?></td>
                <td><?php echo $age ;?></td>
                <td><?php echo $email ;?></td>
                </tr>
            </tbody>
            </table>

    </section> -->


<h1 class="text-center text-white mb-4">In The News</h1>
    <div class="container">
    <div class="row">
        <div class="col">
         <div class=" ms-5 mb-3"><img src="images/img1.jpg" alt="" width="300px" height="350px"></div>
        <div class="text-center text-white text-decoration-underline mt-3"><?php echo $test1 ;?></div>
        <div class="text-center text-white mt-5 fw-light"><?php echo $p ;?></div>
        </p>
        </div>
        <div class="col">
        <div class=" ms-5 mb-3"><img src="images/img2.jpg" alt=""  width="300px" height="350px"></div>
        <div class="text-center text-white text-decoration-underline mt-3"><?php echo $test2 ;?></div>
        <div class="text-center text-white mt-5 fw-light"><?php echo $p ;?></div>
        </p>
        </div>
        <div class="col">
         <div class=" ms-5 mb-3"><img src="images/img3.jpg" alt=""  width="300px" height="350px"></div>
        <div class="text-center text-white text-decoration-underline mt-3"><?php echo $test3 ;?></div>
        
        <div class="text-center text-white mt-5 fw-light"><?php echo $p ;?></div>
        </p>
        
        </div>
    </div>
    </div>

<script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>
</html>