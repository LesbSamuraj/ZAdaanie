<!DOCTYPE html>
<html>
<head>
    <title>Zmiana koloru czcionki lub tła w PHP</title>
    <style>
        .red {
            color: red;
        }

        .blue {
            color: blue;
        }

        .yellow {
            background-color: yellow;
        }

        .green {
            background-color: green;
        }
    </style>
</head>
<body>
    <?php
    $kryterium = 2;

    if ($kryterium == 1) {
        echo '<p style="color: red;">Przykład b: text</p>';
    } elseif ($kryterium == 2) {
        echo '<p style="color: blue;">Przykład b: text</p>';
    } elseif ($kryterium == 3) {
        echo '<p style="background-color: yellow;">Przykład b: text</p>';
    } else {
        echo '<p style="background-color: green;">Przykład b: text</p>';
    }
    ?>
</body>
</html>
