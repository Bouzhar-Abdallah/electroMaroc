
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">


<body>
    <div class="overflow-hidden mx-auto my-2 w-40 h-16">
        <img src="<?= ROOT ?>assets/images/b.jpg" alt="" srcset="">
    </div>
    <form  class="flex flex-col p-5 container mx-auto lg:w-1/3 border border-cadethh" action="" method="post">
        <h1 class="capitalize font-bold text-2xl">creer un compte</h1>
        <?php if (!empty($errors)){?>
            <div class="bg-red-200 py-3 px-2 ">
                <?= implode("<br>",$errors) ?>
            </div>
         <?php }?>
        <div class="mt-2 flex flex-col">
            <label class="capitalize" for="x">nom complet :
            </label>
            <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="nom" id=""
            value="<?php if (!empty($data['nom'])) echo $data['nom'];?>">
        </div>
        <div class="mt-2 flex flex-col">
            <label class="capitalize" for="x">e-mail :
            </label>
            <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="email" id=""
            value="<?php if (!empty($data['email'])) echo $data['email'];?>"
            >
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
        <button class="capitalize font-bold btn-primary mt-3 mb-6">suivant</button>
        <p class="">By creating an account, you agree to our Conditions of Use and Privacy Notice.</p>
        <p class="mt-6 pt-4 border-t">vous avez deja un compte? login <a class="text-indigo-400 hover:font-bold">ici</a></p>
    </form>





