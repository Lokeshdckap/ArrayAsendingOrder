<?php
// Palindrome problem
// function reverseStr($input){
//     for($i = strlen($input) - 1; $i >= 0; $i--)
//     {
//       echo $input[$i];
//     }
// }
// reverseStr('malayalam');
// // reverse number

// function reverseNum($input){
//   for($i = count($input) - 1; $i >= 0; $i--)
//   {
//     echo $input[$i];
//   }
// }
// reverseNum([6,9,7,6,5]);


// for($x=0;$x<1;$x++){
//   $first = (string)readline('Enter your his name: ');
//   $second = (string)readline('Enter your her name: ');
// $arr1 = strtolower($first);
// $arr2 = strtolower($second);
// for ($i = 0; $i < strlen($arr1); $i++) {
//         for($j = 0; $j < strlen($arr2); $j++)
//         if($arr1[$i] == $arr2[$j]){
//           $arr1[$i] = $arr2[$j] = '/';
//         }
// }
// $arr1 = str_replace("/", "", $arr1);
// $arr2 = str_replace("/", "", $arr2);
// $count = strlen($arr1) + strlen($arr2);
// $pos =0;
// $flames="flames";
// $l=strlen($flames);
// for ($i = $l; $i>1 ; $i--) { 
//   $pos = ($count+$pos)%$i;
//   if($pos == 0){
//     $pos = $i - 1;
//   }
//   else{
//     $pos--;
//   }
//   $flames[$pos] = "/";
//   $flames = str_replace("/","",$flames);
// }
// $result1 = strtoupper($flames);
// switch ($result1) {
//   case "F":
//     echo "Your are Friends";
//     break;
//   case "L":
//     echo "Your are Lovers";
//     break;
//   case "A":
//     echo "Your are Affection";
//     break;
//   case "M":
//     echo "Your are Married";
//     break;
//   case "E":
//     echo "Your are Enemy";
//     break;  
//   default:
//     echo "Your are Sister";
// }
// }


// $array = [1,2,5];

// for($i=0;$i<count($array);$i++){
//    print_r($array);
// }

$array = [4,1,2,5];
// echo $n;
for ($i = 0; $i < count($array)-1; $i++) {
    for ($j = 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $arr = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $arr;
             print_r($array);
        }
    }
}

// $array = [1,5,6];
// $res =[];
// for($i =0;$i<count($array);$i++){

//   if($array[$i] < $array[$i+1]){
//   die();
//   }
//   // else if($array[$i] < $array[$i+1]){
  
//   // }
//   else{
//     $temp_num1 = $array[$i];
//     $temp_num2 =  $array[$i+1];
//     $array[$i] = $temp_num2;
//     $array[$i+1] = $temp_num1;
//     // array_push($res,$array);
//   }
   
//   array_push($res,$array);
//   print_r($res);
//   // die();
// }














// 1. Declare the array
// 2. loop the array using count method because its array
// 3. if needed this nethod to slove using another loop
// 4. use the print_r or echo what output will come?
// 5. compare the two indexs  if this lesser or greater looped array 
// 6. two looped values to check the condition
// 7. inter change the array index


// https://www.skillpundit.com/php/php-1to50.php
























































































































































// $pos=0;
// while($l>1)
// {
//   // echo $l;
// 	$pos=($count+$pos)%$l;
// 	if($pos == 0){
//         $pos=$l-1;  
//         // break;
//   }
//     else{
//         $pos--;
//     }
//     // echo $pos."\n";

// 	$flames[$pos] = "/"; 
//     $flames= str_replace("/", "", $flames);
//     // echo $flames."\n";
// 	$l=strlen($flames);
// }
// $result=strtoupper($flames);

?>
