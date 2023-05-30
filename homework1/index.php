<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input{
            padding:10px;
            font-size:20px;
            outline:none;
            
        }
        button{
            margin-top:15px;
            font-size:20px;
            background-color:orangered;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <form action="test.php" method="POST">
        <input type="number" name="number1" id="input"><br>
        <button type="submit" id="empty">Gönder</button>
    </form>
    
</body>
</html>