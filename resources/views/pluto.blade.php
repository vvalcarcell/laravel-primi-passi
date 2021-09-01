<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Pluto!</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        *{
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
        }

        .info {               
            color: #636b6f;
            display: inline-block;
            margin-top: 20px;
        }
        
        img {
            vertical-align: top;
        }

        .box {
            display:inline-block;
        }

        .back {
            padding:5px;
            text-align: center;
            background-color: rgb(255,28,11);
            display: inline-block;
            border-radius: 15px;
            margin-top:20px;
        }

        a {
            text-decoration: none;
            color:white;
        }
    </style>
</head>
<body>

    <img src="{{$img}}" alt="">
    <div class="box">
        <div class="info">Hi! My name is {{$name}}!</div> <br>
        <div class="back"><a href="\">Torna alla Home</a></div class="back">
    </div>

    
</body>
</html>