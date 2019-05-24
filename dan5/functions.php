<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        o();
        function o(){
            $c = 5 + 10;
            echo $c;
        }
        $b = o()+5;
        echo $b;

        echo '<hr>';
        function vrati(){
            $c = 5 + 10;
            return $c;
        }
        echo vrati()+5;
    ?>
</body>
</html>