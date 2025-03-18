<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خروجی</title>
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
            padding: 0;
        }

        #input {
            background: #000;
            color: #00FF7F;
            font-size: 2em;
            padding: 10px;
            border-radius: 8px;
            border: none;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        @media (max-width: 768px) {
            #input {
                font-size: 1.5em;
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            #input {
                font-size: 1.2em;
                width: 90%;
            }
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
            echo '<input id="input" type="text" value="' . $num1 . " " . $operator . " " . $num2 . " = " . $answer . '" readonly>';
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
