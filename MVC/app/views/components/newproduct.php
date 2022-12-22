<div class="p-3 bg-gray-200 h-full">
    <form class=" p-5 container mx-auto lg:w-2/3 border bg-white border-cadethh" action="" method="post">
        <h1 class="capitalize font-bold text-2xl border-b pb-1">creer un nouveau produit</h1>
        <div class="grid md:grid-cols-2 md:gap-4 border-b pb-4">
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">libile :
                </label>
                <input class="input-style" type="text" name="libille" id="">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">rèfèrence :
                </label>
                <input class="input-style" type="text" name="ref" id="">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">code bare :
                </label>
                <input class="input-style" type="text" name="code_barre" id="">
            </div>
            <div class="mt-2 flex flex-col">

                <label for="categorie" class="label-text">categorie</label>
                <select id="categorie" name="id_categorie" class=" block w-full input-style ">
                    <option selected>celect une categorie</option>
                    <option value="1">categorie</option>

                </select>
            </div>



            <div class="mt-2 flex flex-col">
                <label for="message" class="label-text">Description produit</label>
                <textarea id="message" name="description" rows="4" class="  w-full input-style  "></textarea>
            </div>
            <div class="md:row-span-1 flex flex-col">


                <div class="mt-2 flex flex-col">
                    <label class="label-text" for="x">prix achat :
                    </label>
                    <input class="input-style" type="text" name="prix_achat" id="">
                </div>
                <div class="mt-2 flex flex-col">
                    <label class="label-text" for="x">prix offre :
                    </label>
                    <input class="input-style" type="text" name="prix_offre" id="">
                </div>
            </div>
            <div class="mt-2 flex flex-col">


                <label class="label-text" for="file_input">choisissez les photos du produit</label>
                <input class="btn-file  input-style " id="file_input" type="file" multiple name="prod_img_id">

            </div>
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">prix finale :
                </label>
                <input class="input-style" type="text" name="prix_final" id="">
            </div>

        </div>
        <button class="btn-primary block capitalize font-bold  mt-5 ml-auto ">suivant</button>
    </form>




</div>