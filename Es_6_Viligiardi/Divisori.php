<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisori</title>
</head>
<body>
    <?php
        $num = rand(1,50);
        echo "<h3>Il numero generato è $num</h3>";
        
        echo "<ul>";
            for ($i=1; $i < 50; $i++) { 
                if($num % $i == 0) {
                    if ($num != $i) {
                        echo "<li>$i</li>";
                    }
                }
            }
        echo "</ul>";

    ?>
</body>
</html>