<?php
$paragrafo = $_POST['paragrafo'];
$badwords = $_POST['badwords'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recived</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333;
            color: white;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 900px;
            min-height: 300px;
            margin: 0 auto;
        }
        span, p{
            font-size: 2rem;
            color: red;
        }
        h3{
            width: 90%;
            text-align: center;
        }
        h3.end::after{
            content: '';
            display: inline-block;
            width: 90%;
            height: 3px;
            background-color: blue;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1> 1^soluzione</h1>
        <h3>il paragtafo è:</h3>
        <p><?php echo $paragrafo ?></p>
        <h3 class="end">La sua lunghezza è di: <span><?php echo strlen($paragrafo)?></span> caratteri</h3>
        <h3 class="badwords">Censurato: <span><?php echo str_replace($badwords, '***', $paragrafo)?></span></h3>
    </div>
</body>
</html>