<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Find Max and Min Value in array = [1, 2, 3, 12, 45, 5, 8, 100, 56, 40]";

        $arr = array(1, 2, 3, 12, 45, 5, 8, 100, 56, 40);
        $max = $arr[0];
        $min = $arr[1];

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }

            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
		
		echo "<br>";
		echo "Max = " . $max . "; Min = " . $min;
		// echo "<br>";
		// echo phpinfo();
		echo nl2br("\n" . strrev("Web Programming"));

    ?>
</body>
</html>