<?php
 $fruits=array("apple","banana","orange","grapes");

 var_dump($fruits);
 var_dump($fruits[0]);
 echo $fruits[0];
 echo "<br>";
 print_r($fruits);
 echo sizeof($fruits);
 echo count($fruits);
    $img1="images/img1.jpg";
    $img2="images/img2.jpg";
    $img3="images/img3.jpg";
    $images=array($img1,$img2,$img3);
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item"><?php echo $fruits[0];?></li>
                    <li class="list-group-item"><?php echo $fruits[1];?></li>
                    <li class="list-group-item"><?php echo $fruits[2];?></li>
                    <li class="list-group-item"><?php echo $fruits[3];?></li>
                    </ol>
                </ol>



                <ul>
                    <?php 
                    for($i=0;$i<sizeof($fruits);$i++){
                        echo "<li>".$fruits[$i]."</li>";
                    }
                    echo "<br>"; 
                    echo "<hr>";     
                    foreach($fruits as $fruit){
                        echo "<li>".$fruit."</li>";
                    }
                    echo "<hr>"; 
                    $index=0;
                    while($index<sizeof($fruits)){
                        echo "<li>".$fruits[$index]."</li>";
                        $index++;
                    }
                    ?>
                </ul>

                <hr>

               
                
                <div class="container">
                    <div class="row">
                       
                            <?php
                            
                            foreach($images as $image){
                               echo '<div class="col-md-4">';
                                echo "<img src='$image' width='30%'>";
                              echo '</div>';  
                            }
                           
                            ?>
                        
                    </div>
                </div>
                
                
                
</body>
</html>