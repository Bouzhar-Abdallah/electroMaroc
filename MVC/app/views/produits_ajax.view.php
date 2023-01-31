<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">
    <title>Document</title>
</head>

<body class="h-screen">
    <?php require_once 'components/navbar.php'; ?>
    <div class="h-12 hidden"></div>
    <div class="h-auto flex ">
        <div class="fixed h-full border pt-3 z-20">
            <ul id="categories_container" class="flex flex-col items-center bg-white relative z-20 ">
                
                
            </ul>
        </div>
        <div class="w-12"></div>
        <div class="w-full overflow-y-scroll ">
            <?php require_once $componentfile; ?>
        </div>
    </div>
</body>
<script src="<?= ROOT ?>assets/js/categoryhover.js"></script>
<script src="<?= ROOT ?>assets/js/categoriesAjax.js"></script>
</html>