<div class="flex">
    <div class="capitalize container mx-auto lg:w-2/3">
        <div class="flex items-center justify-between text-3xl font-bold my-5 border border-P_navy p-5">
            <div class="flex flex-col">
                <h1 class="">panier (5)</h1>
                <a href="">
                <h1 class="text-xs pt-2 hover:text-red-500 hover:underline transition-all">vider le panier</h1>
                </a>
            </div>

            <h1 class="text-lg">prix</h1>
        </div>
        <!-- cart product widget -->
        <div class="bg-cadethh p-3 my-2">
            <div>
                <img class="h-auto w-32" src="<?= ROOT ?>assets/images/b.jpg" alt="" srcset="">
                <div>
                    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente voluptatem eligendi tempore ex non odio aut ipsum amet impedit libero.</h3>
                    <span>$18.99</span>
                </div>
            </div>
        </div>
        <!-- cart product widget -->
    </div>
    <!-- checkout widget -->
    <div class="sticky top-5 flex flex-col gap-3 w-80 h-fit border border-P_navy m-5 p-5 hover:shadow-lg transition-shadow">

        <p class="capitalize text-xl font-bold">Sommaire</p>

        <p class="capitalize flex justify-between ">Delivery <span class="font-bold">octobre 22 - 30</span></p>
        <p class="capitalize flex justify-between">nombre de pieces: <span class="font-bold">5</span></p>
        <div class="flex flex-col border-t border-b py-2">
            <p class="capitalize flex justify-between">prix total: <span class="font-medium">$ 799.99</span></p>
            <p class="capitalize flex justify-between">frais livraison: <span class="font-medium">$ 15</span></p>
            <p class="capitalize flex justify-between">coupon: <span class="font-medium">- $ 35</span></p>
        </div>
        <p class="capitalize flex justify-between">montant a payer: <span class="font-bold">$ 600.99</span></p>

        <button class="btn-primary ">Checkout</button>
    </div>
    <!-- checkout widget -->
</div>