<?php
include_once 'components/navbar.php';
?>


<form class="flex gap-4 flex-col p-5 m-5 container mx-auto lg:w-1/3 border border-cadethh" action="" method="post">
    <h1 class="capitalize font-bold text-2xl">completer votre profile</h1>
    <input class=" focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="numero_tel" id="" placeholder="numero de tel">
    <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="ville" id="" placeholder="Adresse ligne 1">
    <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="ville" id="" placeholder="Adresse ligne 2">
    <div class="flex gap-4">
        <input class="w-full focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="ville" id="" placeholder="ville">
        <input class="w-1/3 focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="numero_tel" id="" placeholder="zip">
    </div>
    <!-- <div class="mt-2 flex gap-2">
        <label for="image_profile" class="capitalize">photo :
        </label>
        <input class="btn-file " type="file" name="image_profile" id="">
    </div> -->

    <button class="capitalize font-bold btn-primary mt-3 mb-6">submit</button>
</form>