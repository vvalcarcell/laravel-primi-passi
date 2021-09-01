<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Pippo!</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .info-box {               
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }
        
        img {
            vertical-align: top;
        }
    </style>
</head>
<body>

    <img src="{{$img}}" alt="">
    <div class="info-box">
        <div>Hi! My name is {{$name}}!</div>
    </div>
    
</body>
</html>