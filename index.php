<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
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
        label{
            display: block;
            margin: 10px 0;
        }

        input{
            margin-bottom: 20px;
        }

        button{
            display: block;
        }
    </style>
</head>
<body>

    <div class="container">
        <form action="./recived.php" method="POST">
            <label for="paragrafo">Inserire frase:</label>
            <input type="text" name="paragrafo" id="paragrafo">

            <label for="badwords">badwords:</label>
            <input type="text" name="badwords" id="badwords">

            <button type="submit">Invia</button>
        </form>
    </div>

</body>
</html>