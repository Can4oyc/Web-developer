<?php

//echo "Hello world!";
//
//$a = "Hi";
//$b = "there!";
//
//echo "<br>";
//    
//echo $a . " " . $b;
//
//$a = 4;
//$b = 5;
//
//echo "<br>";
//
//echo $a + $b . "<br>";    
//echo $a - $b . "<br>";
//echo $a * $b . "<br>";
//echo $a / $b . "<br>";
//echo $a ** $b . "<br>";
//echo $a % $b . "<br>";
//
//if ($a > $b) {
//    echo "Больше " . $a;
//}
//else if ($b > $a) {
//    echo "Больше " . $b;
//}
//else {
//    echo "Значения равны";
//}   
//
//function summa($arg1, $arg2) {
//    return $arg1 + $arg2;
//}
//
//function diff($arg1, $arg2) {
//    return $arg1 - $arg2;
//}
//
//function mult($arg1, $arg2) {
//    return $arg1 * $arg2;
//}
//
//function splitt($arg1, $arg2) {
//    if ($arg2 == 0)
//        return "Делить на 0 нельзя";
//    return $arg1 / $arg2;
//}
//
//echo summa(20, 10);
//echo "<br>";
//echo diff(20, 10);
//echo "<br>";
//echo mult(20, 10);
//echo "<br>";
//echo splitt(20, 10);
//
//function math($arg1, $arg2, $operation) {
//    switch ($operation) {
//        case "Сложение":
//            echo summa($arg1, $arg2);
//        break;
//        case "Вычитание":
//            echo diff($arg1, $arg2);
//        break;
//        case "Деление":
//            echo splitt($arg1, $arg2);
//        break;
//        case "Умножение":
//            echo mult($arg1, $arg2);
//    
//        default:
//            echo "Что-то пошло не так!";
//    }
//        
//}
//
//echo "<br>";
//
//echo "Оператор switch " , math(10, 30, "Сложение");
//
//echo "<br>";
//    
//echo "Оператор switch " , math(10, 30, "Вычитание");   
//    
//echo "<br>"; 
//    
//echo "Оператор switch " , math(10, 30, "Деление");
//    
//echo "<br>";    
//
//echo "Оператор switch " , math(10, 30, "Умножение");
//
//for ($i = 0; $i <= 100; $i++) {
//    if ($i % 3 == 0)
//        echo $i, " ";
//}
//
//echo "<br>";
//
//math(10, 20, "Сложение")
    
//while
    
//$myArray = [];

////var_dump($myArray);
//
//$myArray[] = true;
//$myArray[] = 1;
//$myArray[] = "Привет";
//
////var_dump($myArray);
//
//$arr = ["html", "css", "php", "js", "mysql"];
//
//for ($i = 0; $i < count($arr); $i++) {
//    echo $arr[$i], " ";
//}
//
//echo"<br>";
//
//foreach ($arr as $item) {
//    echo $item, " ";
//}

//$users = [];
//
//
//$users[0] = [
//    "name" => "Alex",
//    "email" => "lucy@example.ru"
//];
//
//$users[1] = [
//    "name" => "Lucy",
//    "email" => "lucy@example.ru"
//];
//
//$users[2] = [
//    "name" => "Peter",
//    "email" => "peter@example.ru"
//    ]; 
//
//foreach ($users as $key => $item) {
//    echo "<br> Ключ ", $key, " Значение <br>";
//    foreach ($item as $value)
//        echo $value, " ";


        
//}



    
$conn = mysqli_connect("localhost", "root", "", "website");

if ($conn)
    echo "Подключение к БД есть";

$login = $_GET["login"];
$password = $_GET["password"];

if ($login && $password) {
    echo " данные есть";
    
    $sql = "SELECT * FROM users WHERE login = '{$login}' AND password = '{$password}'";
    
    $query = mysqli_query($conn, $sql);
    
    $result = mysqli_fetch_assoc($query);
    var_dump($result);
    
    foreach ($result as $column => $value) {
        if ($column == "full_name") {
            echo "Добро пожаловать, ", $value;
        }
    }
}
else
    echo " нет данных";


?>