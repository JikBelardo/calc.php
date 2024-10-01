<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = $b = $c = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        if (is_numeric($a) && is_numeric($b) && is_numeric($c)){
            $result = $b * $b - 4 * $a * $c;
        } else{
            $result = "please enter a valid number";
        }
    }
    ?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>
            A: <input type="text" name="a" placeholder="Value of A here">
        </p>
        <p>
            B: <input type="text" name="b" placeholder="Value of B here">
        </p>
        <p>
            C: <input type="text" name="c" placeholder="Value of C here">
        </p>
        <p>
            <input type="submit" value="Calculate" name="BtnSubmit">
        </p>
        
    </form>

    <p>
        <?php
        if($result !== ""){
            echo "Result: $result";
        }
        ?>
    </p>
</body>
</html>
