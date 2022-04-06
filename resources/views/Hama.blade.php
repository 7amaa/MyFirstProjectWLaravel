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

        .mn {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        .container {
            background-color: silver;
            border-radius: 10px;
            margin: 25px;
            padding: 10px;
            box-shadow: 10px 5px 5px black;
        }
    </style>
</head>

<body>
    <div class="container" id="id01" name="id01">


        <div class="mn">
            <div><img src="Pictures/HamaPic.jpg" alt="" style="height:150px; width:150px; border-radius: 50%;"></div>
            <div>
                <h1>Profile</h1>
                <p style="font-size: large;">
                    Full Name: Mohammed Jamal <br>
                    Birthdate: 8 October 2000 <br>
                    Place of Birth: The Netherlands <br>
                    University: SPU/College Of Informatics<br>
                    Department: Information Technology <br>
                    Stage: 3rd Year (6th Semester)
                </p>
            </div>
        </div>
    </div>

    <div class="container" id="id02" name="id02" style="padding: 20px;">


        <div class="mn" style="width: 100%;">
            <div>
                <h1 style="text-align: center;">Biography</h1>
                <p>
                    Mohammed Jamal Foster is a 21-year-old sports science student whose life is dominated by solving the murder of his friend, Lara Taylor. Lara was poisoned in 2015 and the killer was never brought to justice.

                    He is Dutch who defines himself as straight. He is currently at college. studying computer science.

                    Physically, Mohammed is in pretty good shape. He is average-height with light skin, golden hair and brown eyes.
                </p>
            </div>

        </div>
        <a href="Home"><button style="height: 50px;width: 100px;">
                <-- Back</button></a>

    </div>

</body>

</html>