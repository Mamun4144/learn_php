<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php

    // $color = "red";
    // echo "My car is " . $color . "<br>"; // currect
    // echo "My House is " . $Color . "<br>"; //wrong
    // echo "My boat is ". $COLOR. "<br>";// wrong
    




    // $x = 5;
    // $y = "john";
    
    // echo $x;
    // echo "<br>";
    // echo $y;
    
//     $txt = "My son";
//     echo  "I love $txt !";
//    echo " <br>";
    
//     $x = "5";
//     $y = "2";
//     echo $x+ $y;




// $age = 25;
// $name = "Mamun";
// $fruits = ["Mango", "Banana", "Apple"];

// var_dump($age);
// echo"<br>";
// var_dump($name);
// echo "<br>";
// var_dump($fruits);



 

?> 

<!-- <pre> -->

<?php 

// $x = $y = $z = "mango ";

// echo $x;
// echo $y;
// echo $z;

// var_dump(5);
// var_dump("mamun");
// var_dump("3.14");
// var_dump(true);
// var_dump([2, 3, 56]);
// var_dump(NULL);


?>
<!-- </pre> -->

<?php 


//  PHP Variables Scope

// $x = 5; // global scope
 
// function myTest() {
//     global $x;
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// } 
// myTest();

// echo "<p>Variable x outside function is: $x</p>";





// $x = 5;
// $y = 9;

// function myTest(){
//     global $x,$y;
//     $y = $x+$y;
// }
// myTest(); //run function
// echo "the rusult is ". $y; // output the new value for variable $y



// $a = 15;

// $b = 19;

// function mul(){
//     global $a, $b;
//     $b = $a+$b;
// }
// mul();
// echo"$b";


// $a = 10;
// $b = 15;

// function ko(){
//     $GLOBALS["c"] = $GLOBALS["b"] + $GLOBALS["a"];
// }
// ko();
// echo"$c";



// function run(){
//     static $a = 0;
//     echo "$a";
//     $a++;
// }
// run();
// echo "<br>";
// run();
// echo "<br>";
// run();
// echo "<br>";
// run();
// echo "<br>";

// $txt1 = "Learn PHP";
// $txt2 = "WEschool";
// echo "<h2>$txt1</h2>";
// echo "<p>Study PHP at $txt2 </p>";

// print "hello";
// echo "hello";




class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is a ". $this->color . " " . $this->model ."!";
    }
}

$myCar = new car("red","volbo");
var_dump($myCar);
?>














</body>

</html>