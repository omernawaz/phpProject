<?php


//printing

// echo "Hello World";

// echo 'hello', 1.5;

//print_r([1,2,3]);


//variables

// $name = "Omer";
// $age = 22;
// $balance = 20.5;
// $grad = true;

// echo "$name is $age years old. They've got $balance balance, and graduated: ";

// var_dump($grad);


//conditionals

// $age = 20;

// if($age > 17)
// {
//     echo "Old Enough <br>";
// }
// else
// {
//     echo "Too young <br>";
// }

// $hour = date("H");

// if($hour < 12)
//     echo "Good Morning";
// else if($hour > 12 && $hour < 17)
//     echo "Good Afternoon";
// else 
//     echo "Good Evening";

// echo "<br>";

// $posts = ["First"];

// if(empty($posts))
//     echo "No Posts";
// else 
//     echo $posts[0];

// echo "<br>";

// $post = !empty($posts) ? $posts[0] : "No Posts";

// echo $post;

// $post = $posts[0] ?? "No Posts";

// echo $post;


// loops

// for($x = 1; $x <= 10; $x++)
// {
//     echo "X: " . $x . "<br>";
// }

// $x = 0;

// while($x < 10)
// {
//     echo "X: " . $x . "<br>";
//     $x++;
// }

// $posts = ["first post", "second post", "third post"];

// foreach($posts as $post)
// {
//     echo $post . "<br>";
// }

// $person = [
//     "first_name" => "Omer",
//     "second_name" => "Nawaz",
//     "email" => "Omer@gmail.com"
// ];

// foreach($person as $attribute => $value)
// {
//     echo $attribute . " = " . $value . "<br>";
// }

// $people = [
//         [
//             "first_name" => "Omer",
//             "second_name" => "Nawaz",
//             "email" => "Omer@gmail.com"
//         ],
//         [
//             "first_name" => "Bilal",
//             "second_name" => "Khan",
//             "email" => "Bilal@gmail.com"
//         ],
//         [
//             "first_name" => "Asad",
//             "second_name" => "Ullah",
//             "email" => "Asad@gmail.com"
//         ]
//     ];

// // foreach($people as $person)
// // {
// //     foreach($person as $attribute => $value)
// //     {
// //         echo $attribute . " = " . $value . "<br>";
// //     }
// // }

// var_dump(json_encode($people));

// function registerUser($email)
// {
//     echo $email . " registered";
// }

// registerUser("omer@gmail.com");

// function add($value_l = 1 , $value_r = 1)
// {
//     return $value_l + $value_r;
// }


// $sum = add();

// echo $sum;

// $subtract = function($v1, $v2) {
//     return $v1 - $v2;
// };

// echo $subtract(10,5);

// $multiply = fn($v1, $v2) => $v1 * $v2;

// echo $multiply(10,5);


// ARRAY FUNCTIONS;

// $students = ['first' => "ali", 'second' => "omer", 'third' => "mujtaba"];

// echo count($students);

// var_dump(in_array('ali', $students));

// $students['fourth'] = 'hussain';
// array_push($students,'haseeb');
// array_unshift($students, 'akbar');

// array_pop($students); //based on numerical index
// array_shift($students);  //based on numerical index too

// $chunked = array_chunk($students,2);

// print_r($chunked);

// $new_array = array();
// $new_array[] = 55;
// array_push($new_array, 1,512,322,11,3);

// print_r($new_array);

// $arr1 = [1,2,3];
// $arr2 = [4,5,6];

// $arr3 = array_merge($arr1,$arr2);
// $arr4 = [...$arr1, ...$arr2];

// $positions = ['first', 'second', 'third'];
// $students = ['omer', 'ali', 'farrukh'];

// $arr4 = array_combine($positions,$students);

// $arr4 = array_flip($arr4);
// $keys = array_keys($arr4);

// $values = array_values($arr4);

// function isPrime($number)
// {
//     if($number < 2)
//         return false;
//     if($number == 2)
//         return true;

//     for($div = 2; $div * $div < $number; $div++)
//     {
//         if($number % $div == 0)
//             return false;
//     }

//     return true;
// }

// $numbers = range(1,20);

// $mapped_numbers = array_map(fn($number) => "Number: " . $number, $numbers);

// $filtered_numbers = array_filter($numbers, fn($number) => isPrime($number));

// $sum = array_reduce($filtered_numbers, fn($carry,$number) => $carry + $number);

// print_r($sum);






?>

