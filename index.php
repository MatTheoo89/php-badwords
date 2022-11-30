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
        form{
            width:90%;
            text-align: center;
        }
        label{
            display: block;
            margin: 10px 0;
            text-align: start;
        }

        input, textarea{
            margin-bottom: 20px;
            padding: 20px;
            width: 90%;
        }
        textarea.paragrafo{
            min-height: 200px
        }

        button{
            display: block;
            margin: 0 auto;
            padding: 10px 25px;
            border: none;
            outline: none;
            background-color: #2a9d8f;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <form action="./recived.php" method="POST">
            <label for="paragrafo">Inserire frase:</label>
            <textarea class="paragrafo" type="text" name="paragrafo" id="paragrafo"></textarea>

            <label for="badwords">badwords:</label>
            <input type="text" name="badwords" id="badwords">

            <button type="submit">Invia</button>
        </form>
    </div>

</body>
</html>