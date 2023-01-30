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
            <ul class="flex flex-col items-center bg-white relative z-20 ">
                <!-- <li class="flex relative hover:bg-cadethh transition-colors transition-duration duration-500"><img class="w-auto h-10 mx-1 my-2" src="<?//ROOT?>assets/images/categories/dishwasher-icon.png" alt=""></li> -->
                <?php foreach ($data['categories'] as $key => $value) {?>
                    <li class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
                        <img class=" w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="data:image/jpeg;base64,<?= base64_encode($value["photo"]) ?>" alt="">
                        <div class="px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]"><h1 class=""><?=$value["nom"]?></h1></div>
                    </li>
                    
                <?php }; ?>
            </ul>
        </div>
        <div class="w-12"></div>
        <div class="w-full overflow-y-scroll ">
            <?php require_once $componentfile; ?>
        </div>
    </div>
</body>
<script src="<?=ROOT?>assets/js/categoryhover.js"></script>
</html>