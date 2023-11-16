<?php 

// echo "Hello word" . "<br>";

// //comparison operator

// $a = 10;
// $b = 20;
// $c = 20;
// $d = "10";
// $e = "20";
// /* this focus only on the value */

// echo "==" . var_dump($a == $b);
// echo "<br>";
// echo "!=" . var_dump($a != $b);
// echo "<br>";
// echo "Numerical: a==d" . var_dump($a == $d);
// echo "<br>";

// /* this focus on the value and datatype */
// $b = 20;
// $c = 20;
// echo " 20===20" .var_dump($b === $c);
// echo "<br>";
// echo "10!==20" . var_dump($a !== $b);
// echo "<br>";
// echo "10===20" .var_dump($a === $b);
// echo "<br>";
// echo "20==='20' " .var_dump($b === $e);

//preincrement and postincrement
// $x = 10;
// echo $x++; //postincrement: it output the value, then increase on second call
// echo "<br>";
// echo $x;
// echo "<br>";
// echo $x;
// echo "<br>";
// echo ++$x; //preincrement: it increase the var immediately
// echo "<br>";
// echo "<br>";
// echo $x--; //postdecrement: it output the value, then decrease on second call
// echo "<br>";
// echo $x;
// echo "<br>";
// echo --$x; //predecrement: it decrease the var immediately

// $num = 10;

// if($num%3 == 0){
//     if($num%4 == 0 ){
//         echo "num is divisible by 2 and 3";
//     }else{
//         echo "it is not";
//     }
// }
// else{
//     echo "it is ";
// }

//FUNCTION
// i can not access or use global var inside the function without using the global keyword in the function.
//i can not access the local var outside the the function.

// $a = 10;
// function paint($room = "office", $color = "red"){
//     return "the color of the  {$room} is {$color}";
// }

// echo paint() . "<br>";
// echo paint("bedroom","blue") . "<br>";
// echo paint("bedroom", null)  . "<br>" ;
// echo paint("bedroom")  . "<br>";
// echo paint(null, "blue")  . "<br>";


// echo "<pre>";
// $num = array(5,2,3,4);
// print_r($num) ;
// // adding val into an array
// $num[] = 6; 
// print_r($num) ;
// echo "<pre>";

//multidimensional array

echo "<pre>";
$num = [ 
    [5,2,3,4], 
    [3,2,1,8], 
    [2,5,8,9] 
];
print_r($num) ;
echo "<pre>";
echo $num[1][0];
?>