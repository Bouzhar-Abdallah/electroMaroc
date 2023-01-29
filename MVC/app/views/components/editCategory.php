<div class="p-3 bg-gray-200 h-full flex justify-center items-center">

    <form class=" p-5 container mx-auto xl:w-2/3 border bg-white border-cadeth" action="" method="post" enctype="multipart/form-data">

        <h1 class="capitalize font-bold text-2xl border-b pb-1">modefier categorie <?=$data['nom'] ?></h1>
        <?php if (!empty($errors)) { ?>
            <div class="bg-red-200 py-3 px-2 ">
                <?= implode("<br>", $errors) ?>
            </div>
        <?php } ?>
        <div class="grid md:grid-cols-2 mt-8 md:gap-4 border-b pb-8">
            <div class=" flex flex-col">
                <label class="label-style" for="x">nom : 
                </label>
                <input value="<?=$data['nom'] ?>" class="input-style" type="text" name="nom" id="">
            </div>

            <div class=" flex flex-col">
                <label for="message" class="label-style">Description produit :</label>
                <textarea id="message" name="description" rows="4" class="h-full  w-full input-style  "><?=$data['description'] ?></textarea>
            </div>



            <div class=" flex flex-col">


                <label class="label-style" for="file_input">si vous voullez changes la photo :</label>
                <input class="btn-file  input-style " id="file_input" type="file" name="photo">

            </div>
            <div class="h-20 p-1 relative hover:border hover:border-red-600">
        <svg class="hidden hover:bg-red-600 text-slate-700 hover:text-white transition-all duration-400 absolute h-5 w-5 right-1 top-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
        
        <img class="h-full mx-auto" src="data:image/jpeg;base64,<?= base64_encode($data["photo"]) ?>" alt="" srcset="">
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