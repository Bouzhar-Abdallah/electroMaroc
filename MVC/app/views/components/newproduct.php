<div class="p-3 bg-gray-200 h-full ">

    <form class=" p-5 container mx-auto xl:w-2/3 border bg-white border-cadeth" action="<?=ROOT?>product/add" method="post" enctype="multipart/form-data">

        <h1 class="capitalize font-bold text-2xl border-b pb-1">creer un nouveau produit</h1>
        <?php if (!empty($errors)){?>
            <div class="bg-red-200 py-3 px-2 ">
                <?= implode("<br>",$errors) ?>
            </div>
         <?php }?>
        <div class="grid md:grid-cols-2 mt-8 md:gap-4 border-b pb-8">
            <div class=" flex flex-col">
                <label class="label-style" for="x">libile :
                </label>
                <input class="input-style" type="text" name="libelle" id="">
            </div>
            <div class=" flex flex-col">
                <label class="label-style" for="x">rèfèrence :
                </label>
                <input class="input-style" type="text" name="ref" id="">
            </div>
            <div class=" flex flex-col">
                <label class="label-style" for="x">code bare :
                </label>
                <input class="input-style" type="text" name="code_barre" id="">
            </div>
            <div class=" flex flex-col">

                <label for="categorie" class="label-style focus:ring-0">categorie</label>
                    <select name="id_categorie" id="">
                        <option value="0"></option>
                        <?php foreach ($data as $value) {?>
                            
                            <option value="<?=$value['id'];?>"><?=$value['nom'];?></option>
                        <?php } ?>
                        
                    </select>
            </div>






            <div class=" flex flex-col">
                <label for="message" class="label-style">Description produit :</label>
                <textarea id="message" name="description" rows="4" class="h-full  w-full input-style  "></textarea>
            </div>
            <div class="md:row-span-1 flex gap-4 flex-col">


                <div class=" flex flex-col">
                    <label class="label-style" for="x">prix achat :
                    </label>
                    <input class="input-style" type="text" name="prix_achat" id="">
                </div>
                <div class=" flex flex-col">
                    <label class="label-style" for="x">prix offre :
                    </label>
                    <input class="input-style" type="text" name="prix_offre" id="">
                </div>
            </div>
            <div class=" flex flex-col">


                <label class="label-style" for="file_input">choisissez les photos du produit</label>
                <input class="btn-file  input-style " id="file_input" type="file" name="photos[]" multiple >

            </div>
            <div class=" flex flex-col">
                <label class="label-style" for="x">prix finale :
                </label>
                <input class="input-style" type="text" name="prix_final" id="">
            </div>

        </div>
        <div class="flex gap-3 justify-end">
            <a href="<?=ROOT?>admin">

                <div class="btn-primary block capitalize font-bold  mt-3  ">terminer</div>
            </a>
            <a href="">

                <button class="btn-primary block capitalize font-bold  mt-3  ">sauvegarder</button>
            </a>
        </div>
    </form>



    <script src="<?= ROOT ?>assets/js/flowbite.js"></script>
</div>