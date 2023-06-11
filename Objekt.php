<!DOCTYPE html>
<html>
<head>
    <title>Klasa PHP w HTML</title>
</head>
<body>
    <?php
    class Przyklad {
        private $tekst;

        public function __construct($tekst) {
            $this->tekst = $tekst;
        }

        public function wyswietlTekst() {
            echo "Tekst: " . $this->tekst;
        }
    }

    $obiekt = new Przyklad("Przykładowy tekst");

    $obiekt->wyswietlTekst();
    ?>
</body>
</html>
