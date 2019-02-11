<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP BASKET</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    </head>
<?php include '../partials/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea nuovo ospite</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" action="http://localhost/Boolean/ospiti-crud/create/save.php" method="post">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Inserisci il nome dell'ospite" required />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Cognome</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome dell'ospite" required />
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Data di nascita</label>
                        <input type="date" name="date_of_birth" placeholder="Inserisci la data di nascita" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="document_type">Tipo di documento</label>
                        <select class="form-control" name="document_type" required>
                            <option value="">---Inserisci un tipo documento---</option>
                            <option value="CI">Carta identità</option>
                            <option value="Driver License">Patente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="document_number">Numero documento</label>
                        <input type="text" name="document_number" placeholder="Inserisci il numero del documento" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Salva" class="form-control" />
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include '../partials/footer.php'; ?>
