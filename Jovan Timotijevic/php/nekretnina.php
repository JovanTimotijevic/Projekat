<?php
// Povezivanje sa bazom podataka
include 'konekcija.php';

// Provera da li je forma poslata
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prihvatanje podataka iz forme
    $prodaja = $_POST['prodaja'];
    $iznajmljivanje = $_POST['iznajmljivanje'];
    $lokacija = $_POST['lokacija'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];

    // SQL upit za unos podataka u tabelu "nekretnina"
    $upit = "INSERT INTO nekretnina (prodaja, iznajmljivanje, lokacija, opis, cena) VALUES ('$prodaja', '$iznajmljivanje', '$lokacija', '$opis', $cena)";

    // Izvršavanje upita
    if (mysqli_query($conn, $upit)) {
        header("Location: ../data_page.php?success=1");
    } else {
        echo "Greška prilikom upisa podataka u bazu: " . mysqli_error($conn);
    }

    // Zatvaranje konekcije
    mysqli_close($conn);
}
?>
