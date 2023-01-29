<div class="p-3 bg-gray-200 h-full flex justify-center items-center">

    <form class=" p-5 container mx-auto xl:w-2/3 border bg-white border-cadeth" action="" method="post" enctype="multipart/form-data">

        <h1 class="capitalize font-bold text-2xl border-b pb-1">creer une nouvelle categorie</h1>
        <?php if (!empty($errors)) { ?>
            <div class="bg-red-200 py-3 px-2 ">
                <?= implode("<br>", $errors) ?>
            </div>
        <?php } ?>
        <div class="grid md:grid-cols-2 mt-8 md:gap-4 border-b pb-8">
            <div class=" flex flex-col">
                <label class="label-style" for="x">nom :
                </label>
                <input value="<?php if(!empty($data))echo $data['nom']?>" class="input-style" type="text" name="nom" id="">
            </div>

            <div class=" flex flex-col">
                <label for="message" class="label-style">Description produit :</label>
                <textarea id="message" name="description" rows="4" class="h-full  w-full input-style  "><?php if(!empty($data))echo $data['description']?></textarea>
            </div>



            <div class=" flex flex-col">


                <label class="label-style" for="file_input">choisissez les photos du produit</label>
                <input class="btn-file  input-style " id="file_input" type="file" name="photo">

            </div>


        </div>
        <div class="flex gap-3 justify-end">
            <a href="<?=ROOT?>categories">

                <div class="btn-primary block capitalize font-bold  mt-3  ">terminer</div>
            </a>
            <a href="<?=ROOT?>categories/add">

                <button class="btn-primary block capitalize font-bold  mt-3  ">sauvegarder</button>
            </a>
        </div>
    </form>




</div>