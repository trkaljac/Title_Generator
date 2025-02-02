<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Title</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <header><h1>Your Generated Title</h1></header>
        <main>
            <?php if (!empty($title) && !empty($favoriteDrink) && !empty($petsName) && !empty($fictionalPlace) && !empty($realPlace)) : ?>
                <h1>You are: <?= htmlspecialchars($fullTitle) ?></h1><br>
                <h2><?= htmlspecialchars($title) ?> is <?= strlen($title) ?> characters</h2>,
                <h2><?= htmlspecialchars($favoriteDrink) ?> is <?= strlen($favoriteDrink) ?> characters</h2>,
                <h2><?= htmlspecialchars($petsName) ?> is <?= strlen($petsName) ?> characters</h2>,
                <h2><?= htmlspecialchars($fictionalPlace) ?> is <?= strlen($fictionalPlace) ?> characters</h2>,
                <h2><?= htmlspecialchars($realPlace) ?> is <?= strlen($realPlace) ?> characters</h2><br>
                <h2>Your whole title is <?= $totalLength ?> characters</h2><br>
                <?php if ($totalLength >= 30) : ?>
                    <h2>That's a heck of a title!</h2><br>
                <?php else : ?>
                    <h2>That's a cute little title.</h2><br>
                <?php endif; ?>
                <h1><a href="index.html">Try again</a></h1><br>
            <?php else : ?>
                <h2>I'm sorry, your input was not valid. Please make sure all fields are filled out.</h2><br>
                <a href="index.html">Try again</a><br>
            <?php endif; ?>
        </main>
    </div>
</body>
</html>