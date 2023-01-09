<div class="bg-cadethhh h-screen flex items-center justify-center">

    <form class="flex flex-col p-10 container lg:w-1/3 border border-cadethh bg-white" action="" method="post">
        <h1 class="capitalize font-bold text-2xl">entrez vous identifients</h1>
        <?php if (!empty($errors)) { ?>
            <div class="bg-red-200 py-3 px-2 ">
                <?= implode("<br>", $errors) ?>
            </div>
            <?php } ?>
            
            <div class="mt-2 flex flex-col">
                <label class="capitalize" for="x">e-mail :
                    </label>
                    <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="text" name="email" id="email" value="<?php if (!empty($data['email'])) echo $data['email']; ?>">
                </div>
                <div class="mt-2 flex flex-col">
                    <label class="capitalize" for="x">mot de passe :
                        </label>
                        <input class="focus:border-cadeth focus:bg-cadethh focus:shadow focus:ring-cadethh" type="password" name="password" id="password">
                    </div>
                    
                    <button class="capitalize font-bold btn-primary mt-3 mb-6">s'identifier</button>
                    
                    <p class="mt-6 pt-4 border-t">mot de passe oublié ? qulique <a class="text-indigo-400 hover:font-bold">ici</a></p>
                </form>
            </div>