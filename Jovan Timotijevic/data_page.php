<?php
    // Pokretanje sesije
    session_start();

    // Provera da li je korisnik ulogovan
    if (!isset($_SESSION['korisnik_id'])) {     
        // Korisnik nije ulogovan, redirekcija na stranicu za login
        header("Location: index.php");
        exit();
    }

    // Dobijanje imena i prezimena korisnika iz baze podataka
    include 'php/konekcija.php';

    $korisnikId = $_SESSION['korisnik_id'];
    $upit = "SELECT ime, prezime FROM korisnici WHERE id = '$korisnikId'";
    $rezultat = mysqli_query($conn, $upit);
    
    if ($rezultat && mysqli_num_rows($rezultat) === 1) {
        $korisnik = mysqli_fetch_assoc($rezultat);
        $imePrezime = $korisnik['ime'] . ' ' . $korisnik['prezime'];
    } else {
        // Greška pri dobijanju podataka iz baze
        $imePrezime = 'Nepoznati korisnik';
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Nekretnine</title>
</head>
<body>


<div class="container mt-5">
    <div class="card" id="custom-card"> 
        <div class="card-header">
            <h5 class="card-title text-center">Pozdrav, <?php echo $imePrezime; ?></h5>
        </div>
        <div class="card-body">
            <a href="nekretnina.php" class="btn btn-secondary mt-3">Dodaj Nekretninu</a>
            <a href="index.php" class="btn btn-secondary mt-3">Odjava</a>
            <div class="mt-4">
                <h5 class="card-title">Nekretnine</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Prodaja</th>
                            <th>Iznajmljivanje</th>
                            <th>Lokacija</th>
                            <th>Opis</th>
                            <th>Cena</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Uključivanje konekcije
                        include 'php/konekcija.php';

                        // Upit za čitanje podataka iz tabele "nekretnina"
                        $upit = "SELECT * FROM nekretnina";
                        $rezultat = mysqli_query($conn, $upit);

                        // Provera rezultata i ispisivanje podataka
                        if ($rezultat && mysqli_num_rows($rezultat) > 0) {
                            while ($red = mysqli_fetch_assoc($rezultat)) {
                                echo "<tr>";
                                echo "<td>{$red['id']}</td>";
                                echo "<td>{$red['prodaja']}</td>";
                                echo "<td>{$red['iznajmljivanje']}</td>";
                                echo "<td>{$red['lokacija']}</td>";
                                echo "<td>{$red['opis']}</td>";
                                echo "<td>{$red['cena']}</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Nema dostupnih nekretnina.</td></tr>";
                        }

                        // Zatvaranje konekcije
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<style>
    body {
    background-image: url('slike/slika.jpg') !important; 
    background-size: cover; 
    background-repeat: no-repeat;   
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
