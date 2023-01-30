<button href="<?=ROOT?>produits/getproductsByCategory/all">
                        <li class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
                            <img class=" w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="<?=ROOT?>assets/images/categories/all.png" alt="">

                            <div class="px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]">
                                <h1 class="">all</h1>
                            </div>
                        </li>
                    </button 
                <?php foreach ($data['categories'] as $key => $value) { ?>
                    <button href="<?=ROOT?>produits/getproductsByCategory/<?=$value['id']?>">
                        <li class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
                            <img class=" w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="data:image/jpeg;base64,<?= base64_encode($value["photo"]) ?>" alt="">
                            <div class="px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]">
                                <h1 class=""><?= $value["nom"] ?></h1>
                            </div>
                        </li>
                    </button 

                <?php }; ?>