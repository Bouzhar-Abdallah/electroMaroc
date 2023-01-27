<div class="relative grid gap-5 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 p-5">
    <div id="message" class="absolute ">
    </div>
    <!-- product item -->
    <?php if (!empty($data) && is_array($data)) foreach ($data as $value) { ?>


        <div class="flex flex-col justify-between bg-white overflow-hidden hover:shadow border transition-colors hover:border-P_blue">
            <a href="product/<?= $value['id']; ?>" class="relative" >
                <h1 class="hidden absolute w-40 h-10 bg-red-500 text-blue-400 z-30 rotate-45 top-3 -right-12">
                    Solde
                </h1>
                <img class="w-auto max-h-[200px] mx-auto scale-100 hover:scale-105 transition-all" src="data:image/jpeg;base64,<?= base64_encode($value["photo"]) ?>" alt="" srcset="">
            </a>
            <div class="p-3">
                <a href="#" class="hover:text-gray-600 text-black font-thin">
                    <h3><?= $value['libelle']; ?></h3>
                    <div class=" flex items-center justify-between gap-5 my-1 text-xl font-bold">
                        <p class="text-xl">$ <?php echo $value['prix_offre'] > 0 ?  $value['prix_offre']: $value['prix_final']; ?>.99</p>
                        <?php if ($value['prix_offre'] > 0){ ?>

                            <p class="text-red-500 font-bold line-through text-base bg-red-200 py-1 px-2">$ <?= $value['prix_final']; ?>.99</p>
                        <?php } ?>
                    </div>
                </a>
                <div class="flex h-10 justify-between items-center mt-4">
                    <a href="cart/add/" class="btn-icon">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </a>

                    <button class="flex items-center capitalize btn-primary buttons" type="submit" value="cart/add/<?= $value['id']; ?>">
                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        add to cart
                    </button>
                </div>
            </div>
        </div>

    <?php } ?>



    <!-- product item -->
</div>
<script src="<?= ROOT ?>assets/js/addToCartAjax.js"></script>