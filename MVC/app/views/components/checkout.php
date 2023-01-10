<div class="font-mono flex justify-center items-center m-10">

    <div class="flex-col w-4/5 h-fit border border-cadethh p-10">
        <!-- header -->
        <div class="my-3 flex justify-between w-full h-fit ">
            <div>

                <h1 class="">Facture # 7</h1>
                <h4 class="">Le <?= $data['0']['date_creation']?></h4>
            </div>
            <div class="flex flex-col text-gray-600 ">
                <div class="ml-auto w-10 h-10 bg-red-500"></div>
                <h1 class="font-bold text-lg text-black">ElectroMaroc</h1>
                <h2 class="font-light">33 rue des FAR Ain Sbaa</h2>
                <h2 class="font-light">Casablanca</h2>
                <h3 class="font-light">Tel: 0524000000</h3>
            </div>
        </div>
        <!-- infos client -->
        <div class="my-3 flex-col text-gray-600">
            <h1 class="mb-3">Facture de :</h1>
            <h1 class="text-black"><?= $data['0']['prenom'].' '.$data['0']['nom']?></h1>
            <h1 class=""><?= $data['0']['adresse']?></h1>
            <h1 class=""><?= $data['0']['ville']?></h1>
            <h1 class=""><?= $data['0']['numero_tel']?></h1>
        </div>

        <!-- details produits -->
        <div class="my-10 flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Item
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Prix
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Qauntite
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $value) {?>
                                <tr class="border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        <?=$value['libelle']?>
                                    </td>
                                    <td class="prix_unit text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?=$value['prix_vente']?>
                                    </td>
                                    <td class="quantite text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?=$value['quantite']?>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?=($value['quantite']*$value['prix_vente'])?>
                                    </td>
                                </tr>
                                <?php }?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- total -->
        <div class="my-3 w-1/4 flex-col ml-auto ">
            <h1 class="flex justify-between">Sous total <span class="sous_total ml-auto mr-3">500</span> MAD</h1>
            <h1 class="flex justify-between">livraison <span class="livraison ml-auto mr-3">15</span> MAD</h1>
            <!-- <h1 class="flex justify-between">Coupon <span class=" ml-auto mr-3">30</span> MAD</h1> -->
            <div class="mt-5">
                <h1 class="flex justify-between font-extrabold text-xl">Total<span class="total ml-auto mr-3">30</span> MAD</h1>
            </div>
        </div>
    </div>
</div>
<?php show($data);