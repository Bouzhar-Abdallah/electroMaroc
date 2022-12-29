<link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">




<form class="p-5 m-5 h-full flex flex-col   border border-cadethh
" action="" method="post">
    <h1 class="capitalize font-bold text-2xl">creer un compte</h1>
    <div class="flex my-8">
        <div class="flex flex-col container mx-auto lg:w-1/3 ">
            <?php if (!empty($errors)) { ?>
                <div class="bg-red-200 py-3 px-2 ">
                    <?= implode("<br>", $errors) ?>
                </div>
            <?php } ?>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">nom :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="nom" id="" value="<?php if (!empty($data['nom'])) echo $data['nom']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">prenom :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="nom" id="" value="<?php if (!empty($data['nom'])) echo $data['nom']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">e-mail :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="email" id="" value="<?php if (!empty($data['email'])) echo $data['email']; ?>">
            </div>
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">mot de passe :
                </label>
                <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="password" name="password" id="">
            </div>
            <input type="text" name="role" value="user" hidden id="">
            <!-- <div class="mt-2 flex flex-col">
            <label class="capitalize" for="x">repetez mot de passe :
            </label>
            <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="x" id="">
        </div> -->
        </div>
        <div class="flex gap-4 flex-col  container mx-auto lg:w-1/3 " action="" method="post">
            
            <input class=" focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="numero_tel" id="" placeholder="numero de tel">
            <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="Adresse" id="" placeholder="Adresse ligne 1">
            <!-- <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="ville" id="" placeholder="Adresse ligne 2">
             --><div class="flex gap-4">
                <input class="w-full focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="ville" id="" placeholder="ville">
                <input class="w-1/3 focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="numero_tel" id="" placeholder="zip">
            </div>
            <!-- <div class="mt-2 flex gap-2">
            <label for="image_profile" class="capitalize">photo :
                </label>
                <input class="btn-file " type="file" name="image_profile" id="">
            </div> -->

        </div>
    </div>
    <div class="lg:w-1/3 mx-auto">
        
        <p class="">By creating an account, you agree to our Conditions of Use and Privacy Notice.</p>
        <p class="mt-6 pt-4 border-t">vous avez deja un compte? login <a class="text-indigo-400 hover:font-bold">ici</a></p>
        <button class="capitalize w-full font-bold btn-primary mt-3 mb-6">submit</button>
    </div>
    </div>