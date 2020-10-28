<?php
if (isset($_POST['Result']))
{
    $radioVal = $_POST["MyRadio"];

    if($radioVal == "Smaller")
    {
        echo("Be hon ehhhh???, okay let's waittt".rand(0,100));
    }
    else if ($radioVal == "Bigger, okay let's waittt")
    {
        echo("Lon hon ehhh?");
    }
    else if ($radioVal == "Exactly")
    {
        echo("Chuan com me no luonnnn");
    }

    $rannum = rand(0,100);
    $rannum1= rand(0,100);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="Result.php">
    <h1 style="color: blueviolet"> <?php echo "Bạn đoán số ".$rannum. " đúng hoonggg ??? " ?></h1>
    <input type="radio" name="MyRadio" value="Smaller" checked>Số đó nhỏ hơn<br> <!--This one is automatically checked when the user opens the page-->
    <input type="radio" name="MyRadio" value="Bigger">Số đó lớn hơn<br>
    <input type="radio" name="MyRadio" value="Exactly">Chính xác
    </br>

    <input type="submit" value="Result" name="Result"> <!--This button opens Result.php-->
</form >

</body>
</html>
