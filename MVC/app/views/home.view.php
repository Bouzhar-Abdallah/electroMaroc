<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php require_once 'components/navbar.php'; ?>
    <div class="h-10 hidden"></div>

    <!-- component -->
    
    <section class="relative bg-[url(https://economie-entreprises.com/wp-content/uploads/2020/11/Electromenager-Les-promotions-comme-alternative.jpg)] bg-cover bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"></div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center sm:text-left">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-black">
                    Let us find your

                    <strong class="block font-extrabold text-cadeth">
                        Forever Home.
                    </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed text-cadeth">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                    tenetur fuga ducimus numquam ea!
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="<?=ROOT?>produits/categories" class="btn-primary sm:w-auto">
                        See Products !
                    </a>

                    <a href="#promotions" class=" btn-secondary sm:w-auto">
                        Promotions
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php require_once $componentfile; ?>
</body>

</html>