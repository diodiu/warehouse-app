<html lang="ro">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>RESICEX</title>
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
    $quantity = $_POST['quantity'];
    $controller = new ProtectionController();
    $row = $controller->getZoneRow($quantity)
?>
    <div class="d-inline-block col col-md-3 ml-5 mr-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Zona</th>
                <th scope="col">Distanta (m)</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $controller->printZones($quantity); ?>
            </tbody>
        </table>
    </div>

    <div class="d-inline-block col-md-auto ml-5">
        <img src="../files/Images/target-chart.png" alt="target-chart">
    </div>

    <div class="d-inline-block col col-md-3">
        <div>
            <div class="d-inline-block" style="width: 10px; height: 10px; background: turquoise;"></div>
            <div class="d-inline-block"><p>Depozit</p></div>
        </div>

        <div>
            <div class="d-inline-block" style="width: 10px; height: 10px; background: green;"></div>
            <div class="d-inline-block"><p>Zona 4 - <?php echo $row->getZone4(); ?> m</p></div>
        </div>

        <div>
            <div class="d-inline-block" style="width: 10px; height: 10px; background: yellow;"></div>
            <div class="d-inline-block"><p>Zona 3 - <?php echo $row->getZone3(); ?> m</p></div>
        </div>

        <div>
            <div class="d-inline-block" style="width: 10px; height: 10px; background: orange;"></div>
            <div class="d-inline-block"><p>Zona 2 - <?php echo $row->getZone2(); ?> m</p></div>
        </div>

        <div>
            <div class="d-inline-block" style="width: 10px; height: 10px; background: red;"></div>
            <div class="d-inline-block"><p>Zona 1 - <?php echo $row->getZone1(); ?> m</p></div>
        </div>
    </div>
<?php
}
?>
</body>
</html>
