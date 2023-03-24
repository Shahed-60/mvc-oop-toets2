<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>MVC Vulkaan</title>
</head>

<body>
    <h3 class="Vulkaan-titel"><?= $data['title']; ?></h3>
    <table>
        <thead>
            <th>Naam Vulkaan</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>Laatste uitbasrting</th>
            <th>Aantal Slachtoffers</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
    <a href='http://www.mvc-oop-toets2.com'>Treug naar home </a>

</body>

</html>