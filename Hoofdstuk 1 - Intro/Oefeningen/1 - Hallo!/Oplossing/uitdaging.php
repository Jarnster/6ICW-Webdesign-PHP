<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔴UITDAGING Oefening 1 - Hallo!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
            background-color: #292929ff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <?php
    $full_date = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    echo "<div class='container'><p>IP adres: $ip</p></div>";
    echo "<br>";
    echo "<div class='container'><p>Huidige datum en tijd: $full_date</p></div>";
    echo "<br>";
    $hour = date("H");
    if ($hour < 12) {
        echo "<div class='container'><h1>Goedemorgen!</h1></div>";
    } elseif ($hour < 18) {
        echo "<div class='container'><h1>Goedemiddag!</h1></div>";
    } else {
        echo "<div class='container'><h1>Goedenavond!</h1></div>";
    }
    ?>
</body>

</html>