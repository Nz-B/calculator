<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پاسخ ماشین حساب</title>
    <style>
    body {
      background: #2C2C2C;
      color: white;
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    #input{
      background: #000;
      color: #00FF7F;
      font-size: 2em;
      padding: 10px;
      border-radius: 8px;
      border: none;
      width: 25%;
      margin-bottom: 10px;
      text-align: center;
    }

    </style>
</head>
<body>
    
<?php 
    $num1 = $_POST['firstNum'];
    $num2 = $_POST['secondNum'];
    $operator = $_POST['operator'];
    $answer = 0;

    switch ($operator) {
        case '+':
            $answer = $num1 + $num2;
            echo '<input id="input" type="text" value="' . $num1 . ' ' . $operator . ' ' . $num2 . ' = ' . $answer . '" readonly>';
            break;
        case '-':
            $answer = $num1 - $num2;
            echo '<input id="input" type="text" value="' .$num1 . " " . $operator . " " . $num2 . " = " . $answer. '" readonly>';
            break;
        case '*':
            $answer = $num1 * $num2;
            echo '<input id="input" type="text" value="' . $num1 . ' ' . $operator . ' ' . $num2 . ' = ' . $answer . '" readonly>';
            break;
        case '/':
            $answer = $num1 / $num2;
            echo '<input id="input" type="text" value="' . $num1 . ' ' . $operator . ' ' . $num2 . ' = ' . $answer . '" readonly>';
            break;

        default:
            echo '<input id="input" type="text" value="عملگر نامعتبر است!" readonly>';
            break;
    }
?>
</body>
</html>
