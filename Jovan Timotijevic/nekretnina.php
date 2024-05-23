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
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Unos podataka o nekretnini</h5>
                    </div>
                    <div class="card-body">
                        <form action="php/nekretnina.php" method="post">
                            <div class="mb-3">
                                <label for="prodaja" class="form-label">Nekretnina se prodaje:</label>
                                <select class="form-select" id="prodaja" name="prodaja">
                                    <option value="odaberi">Odaberi</option>
                                    <option value="da">Da</option>
                                    <option value="ne">Ne</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="iznajmljivanje" class="form-label">Nekretnina se iznajmljuje:</label>
                                <select class="form-select" id="iznajmljivanje" name="iznajmljivanje">
                                    <option value="odaberi">Odaberi</option>
                                    <option value="da">Da</option>
                                    <option value="ne">Ne</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="lokacija" class="form-label">Lokacija:</label>
                                <input type="text" class="form-control" id="lokacija" name="lokacija">
                            </div>
                            <div class="mb-3">
                                <label for="opis" class="form-label">Dodatni opis:</label>
                                <textarea class="form-control" id="opis" name="opis" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="cena" class="form-label" id="cenaLabel">Cena:</label>
                                <input type="number" class="form-control" id="cena" name="cena">
                            </div>
                            <button type="submit" class="btn btn-primary">Potvrdi</button>
                        </form>
                    </div>
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
