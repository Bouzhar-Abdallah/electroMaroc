<div class="p-3 bg-gray-200 h-full ">
    <form class=" p-5 container mx-auto lg:w-2/3 border bg-white border-cadeth" action="" method="post">
        <h1 class="capitalize font-bold text-2xl border-b pb-1">creer un nouveau produit</h1>
        <div class="grid md:grid-cols-2 mt-8 md:gap-4 border-b pb-8">
            <div class=" flex flex-col">
                <label class="label-style" for="x">libile :
                </label>
                <input class="input-style" type="text" name="libille" id="">
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

                <label for="categorie" class="label-style">categorie</label>
                <select id="categorie" name="id_categorie" class=" block w-full input-style ">
                    <option selected>celect une categorie</option>
                    <option value="1">categorie</option>

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
                <input class="btn-file  input-style " id="file_input" type="file" multiple name="prod_img_id">

            </div>
            <div class=" flex flex-col">
                <label class="label-style" for="x">prix finale :
                </label>
                <input class="input-style" type="text" name="prix_final" id="">
            </div>

        </div>
        <button class="btn-primary block capitalize font-bold  mt-3 ml-auto ">suivant</button>
    </form>




</div>