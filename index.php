<?php

include("funkce.php");

$menu = array(
    "home",
    "o nás",
    "produkty" => array(
        "čaje",
        "kávy",
        "bezlepkové potraviny" => array(
            "pečivo",
            "sušenky",
        )
    ),
    "kontakt",
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- menu vygenerované funkcí -->
    <?= uk_nav($menu, "uk-parent") ?>

    <!-- formulář -->
    <h1>Můj super formulář</h1>
    <form action="">
        <!-- inputy vygenerovaný funkcí -->
        <?= input("text", "jmeno", "Vyplňte vaše jméno") ?>
        <?= input("text", "prijmeni", "Vyplňte vaše přijmení") ?>
        <?= input("email", "email", "Váš e-mail", 1) ?>
    </form>

    <?= uk_nav($menu, "uk-nav") ?>
</body>

</html>