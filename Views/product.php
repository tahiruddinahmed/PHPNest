<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php foreach($persons as $person) : ?>
        <div>
            <h2>Name : <?= $person->firstname . " " . $person->middlename . " " . $person->lastname ?></h2>
            <p>Age: <?= $person->age ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
