<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?= $title ?> </title>

        <!-- CSS -->
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">

    </head>
    <body>
        <?php include_once("includes/menu.php"); ?>       

        <main class="bg-[#F0F0F5]">
            <div class="p-6 px-8 mx-auto max-w-7xl">
                <?php include_once($viewPath . $view) ?>
            </div>
        </main>
        
        <?php include_once('includes/footer.php'); ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.6.3/imask.min.js" integrity="sha512-3vp+LSISGvb6zv5d6RecQhprTO+d+Uuildi4lf5gjXXmcaLA9yfYijxdngQasl+YQMlrmFluqwbueVPcDducdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/assets/js/app.js"></script>
    </body>
</html>