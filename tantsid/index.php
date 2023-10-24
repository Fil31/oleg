<?php
require('baas/conf.php');
require('libs/headers.php');
global $yhendus;
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Tantsuvõistlus registreerimine</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php
include('content/header.php');
?>
<?php
include('content/navigation.php')
?>
<div class="container-fluid">
    <h1 class="display-5 mb-3">Registreerimine</h1>
    <form action="" method="post">
        <div class="row g-2 col-sm-3 mb-3">
            <input class="form-control" type="text" id="id" name="id" placeholder="Введите номер пары" aria-label="id" required>
            <button type="submit" name="sisestusnupp" class="btn btn-primary">Sisesta</button>
        </div>
    </form>
</div>
<?php
global $yhendus;

$kask = $yhendus->prepare("SELECT id FROM tantsid");
$kask->bind_result($id);
$kask->execute();
?>

</body>
<?php
include('content/footer.php')
?>
</html>
