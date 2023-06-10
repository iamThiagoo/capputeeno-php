<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
        <title> <?= $title ?> </title>
    </head>
    <body>
        <?php include_once("includes/menu.php"); ?>       
    
        <main class="main-content">
            <?php include_once($viewPath . $view) ?>
        </main>
        
        <?php include_once('includes/footer.php'); ?>
    </body>
</html>