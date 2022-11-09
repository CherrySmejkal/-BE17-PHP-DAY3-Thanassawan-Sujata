<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>PHP DAY3</title>
</head>

<body>
    <div class="container">


        <?php
        #Excercise 1 ---------------------------------------------------------------------
        #for loop
        // for ($i = 1; $i <= 50; $i++) {
        //     echo " $i T.Smejkal <br>";
        // }

        #while loop
        // $a = 1;
        // while ($a <= 50) {
        //     echo " $a T.Smejkal <br>";
        //     $a++;
        // }

        #do while loop
        // $b = 1;
        // do {
        //     echo " $b T.Smejkal <br>";
        //     $b++;
        // } while ($b <= 50);

        #Exercise 2 ---------------------------------------------------------------------
        $num = [23, 42, 96, 340, 465, 284, 32, 10, 93, 37];
        foreach ($num as $key => $value) {
            echo "Index $key is $value <br>";
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>