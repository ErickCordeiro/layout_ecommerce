<?php
define("BASE", "https://www.localhost/wdp");
define("THEME", "wdpshoes");
define("THEME_PATH", __DIR__ . "/themes/" . THEME);
define("THEME_LINK", BASE . "/themes/" . THEME);

$configBase = BASE;

$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");

$configThemePath = THEME_PATH;
$configThemeLink = THEME_LINK;
$configSiteName = "WdpShoes";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Upinside WDPSHOES - Layout de Ecommerce</title>

    <link href="<?= $configBase; ?>/assets/css/icons.css" rel="stylesheet">
    <link href="<?= $configBase; ?>/assets/css/boot.css" rel="stylesheet">
    <link href="<?= $configThemeLink; ?>/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $configThemeLink; ?>/images/favicon.png">

    <script src="<?= $configBase; ?>/assets/jquery.js"></script>
    <script src="<?= $configBase; ?>/assets/scripts.js"></script>
</head>
<body>

<!--SEARCH-->

<!--HEADER-->
<?php require "{$configThemePath}/header.php" ?>

<!--QUERY STRING-->
<?php
if (file_exists("{$configThemePath}/{$configUrl[0]}.php") && !is_dir("{$configThemePath}/{$configUrl[0]}.php")) {
    require "{$configThemePath}/{$configUrl[0]}.php";
} elseif (!empty($configUrl[1]) && file_exists("{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php") && !is_dir("{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php")) {
    require "{$configThemePath}/{$configUrl[0]}/{$configUrl[1]}.php";
} else {
    if (file_exists("{$configThemePath}/404.php")) {
        require "{$configThemePath}/404.php";
    } else {
        echo "<div class='container'><div class='trigger trigger-error icon-warning radius'>
                   Desculpe mas a página que você tentou acessar não existe ou foi removida!
              </div></div>";
    }
}
?>


<!--FOOTER-->
<?php require "{$configThemePath}/footer.php" ?>

</body>
</html>
