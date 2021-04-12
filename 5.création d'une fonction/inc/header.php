<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1h1">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php foreach($LeMenuDuHeader as $elementDuTableau) :?>
                <li><a href="index.php?pageAAfficher=<?=$elementDuTableau?> "><?= $elementDuTableau ?></a></li>
                <?php endforeach; ?>    
            </ul>     
        </nav>
    </header>