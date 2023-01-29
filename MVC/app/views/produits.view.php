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
        <div class="fixed h-full border pt-3">
            <ul class="flex flex-col items-center ">
                <li class="flex relative hover:bg-cadethh transition-colors transition-duration duration-500"><img class="w-auto h-10 mx-1 my-2" src="<?=ROOT?>assets/images/categories/dishwasher-icon.png" alt=""></li>
                <?php foreach ($data['categories'] as $key => $value) {?>
                    <li class="flex relative hover:bg-cadethh transition-colors transition-duration duration-500 h-14"><img class="w-9 h-auto mx-1 my-2" src="data:image/jpeg;base64,<?= base64_encode($value["photo"]) ?>" alt=""></li>
                    
                <?php }; ?>
            </ul>
        </div>
        <div class="w-12"></div>
        <div class="w-full overflow-y-scroll ">
            <?php require_once $componentfile; ?>
        </div>
    </div>
</body>

</html>