<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage:</title>
</head>
<body>
    <?php
        $x = "Hello world 'Hi!' ";
        $x = 1;
        echo "This is inside php script: ",$x,"this is ", "That is",'something';

        function fun($x, $y, $z){
            $x = $x + 1;
            return $x+$y+$z;
        }

        echo "<button onclick='funjs(" . fun(1,3,2). ")'>" . fun(1,3,2) . "</button>";
    ?>



    <?php 
        $array = array("orange", "mango", "banana");
        $i = 0;
        for($i=0; $i<3;$i++){
    ?>


    <p> This p is gonna print <?php echo $i+1 ?>

    <?php
        }
    ?>


    <?php 
        $array = array("orange", "mango", "banana");
        $i = 0;
        for($i=0; $i<3;$i++){
         echo "<p> This p is gonna print ",($i+1), "==>", $array[$i]; 
        }

    ?>


    <?php 
        $array = array("orange", "mango", "banana");
        $i = 0;
        foreach($array as $row){
         echo "<p> This p is gonna print ".$row; 
        }

    ?>

    <a href="./about.php">About</a>
    <a href="./student.php?fname=Golam&lname=Kibria">tudent</a>
    <script src="./sample.js"></script>
    
</body>
</html>