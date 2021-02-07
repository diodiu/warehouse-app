<html lang="ro">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Warehouse</title>
    </head>
<body>
    <ul class="nav nav-tabs justify-content-center">
        <li class="ml-3"><a class="btn btn-primary" href="../index.php">Acasa</a></li>
        <li class="ml-3"><a class="btn btn-primary" href="Risk.php">Secvente de accident</a></li>
        <li class="active ml-3"><a class="btn btn-primary" href="ProtectionZones.php">Zone de protectie</a></li>
    </ul>

    <form action="" method="POST" class="form-inline">
        <div class="form-group mx-sm-3 mb-2 mt-5">
            <label for="quantity" class="col-sm-2 col-form-label mr-5">Cantitate explozibil (kg): </label>
            <input type="number" class="form-control" name="quantity" placeholder="Cantitate (kg)" min="10" required>
        </div>
        <button type="submit" class="btn btn-success mt-4" name="submit">Vezi zone de protectie</button>
    </form>
<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/../" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

use Controller\ProtectionController;

if (isset($_POST['submit'])) {
    $controller = new ProtectionController();
?>
    <table class="table col-sm-4 ml-5">
        <thead>
            <tr>
                <th scope="col">Zona</th>
                <th scope="col">Distanta (m)</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $controller->printZones($_POST['quantity']); ?>
        </tbody>
    </table>

<?php
}
?>
</body>
</html>
