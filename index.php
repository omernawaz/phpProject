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


// $message = "Hello World";

//echo strlen($message);

// echo strpos($message, 'W');

// echo strrpos($message, 'o');

// echo strrev($message);

// echo strtolower($message);

// echo strtoupper($message);

// echo ucwords(strtolower($message));

// echo str_replace('Wor', 'Ho', $message);

// echo substr($message, 5);

// echo str_starts_with($message, "Hello") ? "Yes" : "No";

// echo str_ends_with($message, "ld") ? "Yes" : "No";


// $message = "<script>alert('dont do this')</script>";

// $message = htmlspecialchars($message);

// printf("%s likes to %s<br>", "Omer", "code");
// echo $message;


// SUPERGLOBALS

/*
$_GET, information and arguements passed in the url or form
$_POST, information passed through form, not contained in the url but in the http request itself
$_COOKIE, variables passed through cookies, returns an array
$_SESSION, contains session information
$_ENV, information on environment variables
$_SERVER, info on the server environment
$_REQUEST, variables passed through url or form, can be used as an alternative to get and post
$_FILES, information about the files uploaded to the script

print_r($_SERVER);

*/

// if(isset($_POST['submit']))
// {
//     // $name = htmlspecialchars($_POST['name']);
//     // $age = htmlspecialchars($_POST['age']);

//     $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
//     $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);


//     echo $name . "<br>" . $age;
// }

// setcookie("name", "Omer", time() + 86400);

// echo $_COOKIE['name'];

//SESSIONS

session_start();

if(isset($_POST['submit']))
{
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    //$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    $password = $_POST['password'];

    if($name == 'Omer' && $password == 'test123') {
        $_SESSION['username'] = $name;
        header('Location: /phpProject/misc/dashboard.php');
    }
    else {
        echo "<script>alert('Invalid Password')</script>";
        echo "<a href='phpProjet/index.php'>Home</a>";
    }


    // echo $name . "<br>" . $age;
}




?>

<!-- <a href="<?php // echo $_SERVER['PHP_SELF'];?>?name=Omer&age=22">CLICK</a>  -->

<form action="<?php // echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text", name="name">
        
    </div>

    <div>
        <label for="password">Age: </label>
        <input type="text", name="password">
    </div>
    <input type="submit" value = "Submit", name="submit">
</form>

