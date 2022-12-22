<div class="p-3 bg-gray-200 h-full">
    <form class=" p-5 container mx-auto lg:w-2/3 border bg-white border-cadethh" action="" method="post">
        <h1 class="capitalize font-bold text-2xl border-b pb-1">creer un nouveau produit</h1>
        <div class="grid md:grid-cols-2 md:gap-4 border-b pb-4">
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">libile :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">rèfèrence :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">code bare :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
            </div>
            <div class="mt-2 flex flex-col">

                <label for="categorie" class="label-text">categorie</label>
                <select id="categorie" class=" block w-full focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh ">
                    <option selected>celect une categorie</option>
                    <option value="1">categorie</option>

                </select>
            </div>



            <div class="mt-2 flex flex-col">
                <label for="message" class="label-text">Description produit</label>
                <textarea id="message" rows="4" class=" p-2.5 w-full focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh  "></textarea>
            </div>
            <div class="md:row-span-1 flex flex-col">


                <div class="mt-2 flex flex-col">
                    <label class="label-text" for="x">prix achat :
                    </label>
                    <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
                </div>
                <div class="mt-2 flex flex-col">
                    <label class="label-text" for="x">prix offre :
                    </label>
                    <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
                </div>
            </div>
            <div class="mt-2 flex flex-col">


                <label class="label-text" for="file_input">choisissez les photos du produit</label>
                <input class="btn-file  focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" id="file_input" type="file" multiple>

            </div>
            <div class="mt-2 flex flex-col">
                <label class="label-text" for="x">prix finale :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
            </div>

        </div>
        <button class="btn-primary block capitalize font-bold  mt-5 ml-auto ">suivant</button>
    </form>




</div>