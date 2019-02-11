<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>BoolCrud</title>
  </head>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli ospiti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="http://localhost/php/php-boolcrud/create/form.php" class="btn btn-primary">
                    Crea nuovo ospite
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php include 'database.php'; ?>
                <?php if (!empty($ospiti)) { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Aggiorna</th>
                                <th>Visualizza</th>
                                <th>Elimina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ospiti as $ospite) { ?>
                                <tr>
                                    <td><?php echo $ospite['id']; ?></td>
                                    <td><?php echo $ospite['name']; ?></td>
                                    <td><?php echo $ospite['lastname']; ?></td>
                                    <td>
                                        <a href="http://localhost/php/php-boolcrud/update/form.php?id=<?php echo $ospite['id']; ?>" class="btn btn-primary">
                                            Aggiorna
                                        </a>
                                    </td>
                                    <td>
                                        <a href="http://localhost/php/php-boolcrud/show/show.php?id=<?php echo $ospite['id']; ?>" class="btn btn-success">
                                            Vedi
                                        </a>
                                    </td>
                                    <td>
                                        <form action="http://localhost/php/php-boolcrud/delete/delete.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $ospite['id']; ?>">
                                            <input type="submit" value="Cancella" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    Non ci sono risultati
                <?php } ?>
            </div>
        </div>
    </div>

