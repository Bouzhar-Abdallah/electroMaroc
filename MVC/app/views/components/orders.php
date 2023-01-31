<div class="overflow-x-auto h-full relative ">
    <table class="w-full text-sm text-left text-gray-500 border border-cadethh ">
        <thead class="text-xs text-black uppercase bg-cadethh ">
            <tr>
                <th scope="col" class="py-3 pl-2">
                    etat
                </th>
                <th scope="col" class="py-3 pl-2">
                    date creation
                </th>
                <th scope="col" class="py-3 pl-2">
                    date d'envoie
                </th>
                <th scope="col" class="py-3 pl-2">
                    date de livraison
                </th>
                <th scope="col" class="py-3 pl-2">
                    nbr pieces
                </th>
                <th scope="col" class="py-3 pl-2">
                    Prix totale
                </th>
                <th scope="col" class="">

                </th>

            </tr>
        </thead>


        <tbody id="table_body">
            <!-- <th scope="row" class=" px-1 flex items-center h-10 justify-center font-medium  whitespace-nowrap ">
                <input class=" text-cadeth focus:ring-transparent border-cadethh" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </th> -->
            <?php foreach ($data as $value) { ?>

                <td class="py-3 pl-2 ">
                    <?= $value['etat']; ?>

                </td>

                <td class="py-3 pl-2 ">
                    <?= $value['date_creation']; ?>
                </td>
                <td class="py-3 pl-2">
                    <?= $value['date_envoi']; ?>
                </td>
                <td class="py-3 pl-2">
                    <?= $value['date_livraison']; ?>
                </td>
                <td class="py-3 pl-2">
                    <?= $value['total_items']; ?>
                </td>
                <td class="py-3 pl-2">$
                    <?= $value['total_price']; ?>
                </td>
                <td class="relative">
                    <div class="flex gap-1 transition-opacity ease-in duration-400 absolute right-2 top-1 bg-white">

                        <a href="<?=ROOT?>orders/confirmRecipt/<?= $value['id']; ?>" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>

                        </a>

                    </div>
                </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>

</div>