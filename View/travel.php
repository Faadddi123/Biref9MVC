<!-- View\Route.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes</title>
</head>
<body>
    <h1>Routes</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Depart City</th>
            <th>Arrive City</th>
            <th>Duration</th>
            <th>Period</th>
        </tr>
        <?php foreach ($Routes as $Route): ?>
            <tr>
                <td><?php echo $Route->getId(); ?></td>
                <td><?php echo $Route->getDepartCityName(); ?></td>
                <td><?php echo $Route->getArriveCityName(); ?></td>
                <td><?php echo $Route->getDuree(); ?></td>
                <td><?php echo $Route->getPeriode(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
