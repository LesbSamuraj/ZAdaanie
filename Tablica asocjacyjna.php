<!DOCTYPE html>
<html>
<head>
    <title>Tablica asocjacyjna w PHP</title>
</head>
<body>
    <?php
    $tablica = array(
        "imie" => "Jan",
        "nazwisko" => "Kowalski",
        "wiek" => 30,
        "miasto" => "Warszawa"
    );

    foreach ($tablica as $klucz => $wartosc) {
        echo "<p>$klucz: $wartosc</p>";
    }
    ?>
</body>
</html>
