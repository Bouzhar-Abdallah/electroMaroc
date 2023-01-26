<div class="p-3 bg-gray-200 h-full ">
    <form action="" method="post" enctype="multipart/form-data">
        <div class=" p-5 container mx-auto xl:w-3/4 border bg-white border-cadeth" action="" method="post" enctype="multipart/form-data">

            <h1 class="capitalize font-bold text-2xl border-b pb-1">modifier un produit</h1>
            <?php if (!empty($errors)) { ?>
                <div class="bg-red-200 py-3 px-2  ">
                    <?= implode("<br>", $errors) ?>
                </div>
            <?php } ?>
            <div class="flex flex-col md:flex-row">
                <div class=" w-full grid md:grid-cols-2 mt-8 md:gap-4 border-b pb-8">
                    <div class=" flex flex-col">
                        <label class="label-style" for="x">libile :
                        </label>
                        <input value="<?=$data['produit']['libelle']?>" class="input-style" type="text" name="libelle" id="">
                    </div>
                    
                    <div class=" flex flex-col">
                        <label class="label-style" for="x">code bare :
                        </label>
                        <input value="<?=$data['produit']['code_barre']?>" value="" class="input-style" type="text" name="code_barre" id="">
                    </div>
                    <div class=" flex flex-col">

                        <label for="categorie" class="label-style focus:ring-0">categorie</label>
                        <select name="id_categorie" id="">
                            <option value="0"></option>
                            <?php foreach ($data['categorie'] as $value) { ?>

                                <option 
                                <?php
                                if ($value['id'] === $data['produit']['id_categorie']) {
                                    echo 'selected';
                                }
                                ?>
                                value="<?= $value['id']; ?>"><?= $value['nom']; ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class=" flex flex-col">
                        <label for="message" class="label-style">Description produit :</label>
                        <textarea id="message" name="description" rows="4" class="h-full  w-full input-style  "><?=$data['produit']['description']?>
                        </textarea>
                    </div>
                    <div class="md:row-span-1 flex gap-4 flex-col">
                        <div class=" flex flex-col">
                            <label class="label-style" for="x">prix achat :
                            </label>
                            <input value="<?=$data['produit']['prix_achat']?>" class="input-style" type="text" name="prix_achat" id="">
                        </div>
                        <div class=" flex flex-col">
                            <label class="label-style" for="x">prix offre :
                            </label>
                            <input value="<?=$data['produit']['prix_offre']?>" class="input-style" type="text" name="prix_offre" id="">
                        </div>
                    </div>

                    <div class=" flex flex-col">
                        <label class="label-style" for="x">rèfèrence :
                        </label>
                        <input value="<?=$data['produit']['ref']?>" class="input-style" type="text" name="ref" id="">
                    </div>

                    <div class=" flex flex-col">
                        <label class="label-style" for="x">prix finale :
                        </label>
                        <input value="<?=$data['produit']['prix_final']?>" class="input-style" type="text" name="prix_final" id="">
                    </div>

                </div>
                <div class="md:w-32 ml-5 mt-10 h-full border  gap-3">
                    <div id="product_images" class="flex flex-row md:flex-col justify-center">
                        <div class="h-20 p-1 relative hover:border hover:border-red-600">
                            <svg class="hover:bg-red-600 text-slate-700 hover:text-white transition-all duration-400 absolute h-5 w-5 right-1 top-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                            <img class="h-full mx-auto" src="<?= ROOT ?>assets/images/b.jpg" alt="" srcset="">
                        </div>
                        
                    </div>
                    <input id="input" multiple type="file" class="md:border-t w-full border-r border-l hover:bg-saffron transition-colors"></input>
                </div>
            </div>

            <div class="w-fit mx-auto">
                <div class="flex gap-3 justify-end">

                    <a href="admin">

                        <div class="btn-primary block capitalize font-bold  mt-3  ">annuler</div>
                    </a>
                    <a href="">

                        <button class="btn-primary block capitalize font-bold  mt-3  ">sauvegarder</button>
                    </a>
                </div>
            </div>


    </form>


    <script src="<?= ROOT ?>assets/js/flowbite.js"></script>
    <script src="<?= ROOT ?>assets/js/editproduct.js"></script>
</div>