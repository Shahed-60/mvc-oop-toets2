<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>MVC Reuzenrad</title>
</head>

<body>
    <h3 class="reuzenrad-titel"><?= $data['title']; ?></h3>
    <table>
        <thead>
            <th>Naam reuzenrad</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>Kosten (miljoen)</th>
            <th>Aantal Passagiers</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
    <a href='http://www.mvc-oop-toets.com/'>Treug naar home </a>

</body>

</html>