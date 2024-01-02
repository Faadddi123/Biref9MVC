<!-- View\horraire.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horraires</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Horraires</h2>

<table>
    <tr>
        <th>Depart City</th>
        <th>Arrive City</th>
        <th>Price</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
        <th>Company</th>
    </tr>
    <?php foreach ($horraires as $horraire): ?>
        <tr>
            <td><?php echo $horraire->getDepartnamecity(); ?></td>
            <td><?php echo $horraire->getArrivetnamecity(); ?></td>
            <td><?php echo $horraire->getPrix(); ?></td>
            <td><?php echo $horraire->gethr_dep(); ?></td>
            <td><?php echo $horraire->getHr_arv(); ?></td>
            <td><?php echo $horraire->getCompanyname(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
