<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: white;
        }

        .container {
            background-color: silver;
            border-radius: 10px;
            margin: 25px;
            padding: 10px;
            box-shadow: 10px 5px 5px black;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="width: 100%;">
            <h1 style="text-align: center;">Homepage</h1>
        </div>
        <div style="width: 100%;">
            <h3 style="text-align: center;">My First Laravel Project...</h3>
        </div>

        <div>
            <a href="Profile#id01"><button style="width: 100px; height: 50px;">Profile</button></a>
            <a href="Profile#id02"><button style="width: 100px; height: 50px;">Biography</button></a>
        </div>

    </div>
</body>

</html>