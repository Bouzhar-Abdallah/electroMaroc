<div class="overflow-x-auto h-full relative ">
    <table class="w-full text-sm text-left text-gray-500 border border-cadethh ">
        <thead class="text-xs text-black uppercase bg-cadethh dark:bg-gray-700 ">
            <tr>
                <th scope="col" class="py-3 px-3">
                    photo
                </th>
                <th scope="col" class="py-3 px-3">
                    id categorie
                </th>

                <th scope="col" class="py-3 px-3">
                    Nom Categorie
                </th>
                <th scope="col" class="py-3 px-3">
                    description
                </th>
                <th scope="col" class="py-3 px-3">
                    visibilite
                </th>
                <th scope="col" class="">

                </th>

            </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($data)) {
            foreach ($data as $value) {?>
                
            <tr class="bg-white hover:bg-cadethhh border-b h-12 relative ">
                <td class="py-4 px-3 ">
                    <div class="w-10 h-10">

                        <img class="max-h-10 mx-auto" src="data:image/jpeg;base64,<?= base64_encode($value["photo"]) ?>" alt="" srcset="">
                    </div>
                </td>
                <th scope="row" class="py-4 px-3  font-medium text-gray-900 whitespace-nowrap ">
                    <?=$value['id'];?>
                </th>
                <td class="py-4 px-3">
                
                <?= $value['nom'];?>
                </td>
                <td class="py-4 px-3">
                <?=$value['description'];?>
                </td>
                <td class="py-4 px-3">
                <?php if($value['visibilite']){
                    echo 'visible';
                }else echo 'caché';?>
                </td>
                
                <td class="relative">
                    <div class="flex gap-1 opacity-0 hover:opacity-100 transition-opacity ease-in duration-400 absolute right-2 top-1 bg-white">
                        <a href="<?=ROOT?>categories/edit/<?=$value['id'];?>" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                            </svg>
                        </a>
                        <a href="<?=ROOT?>categories/delete/<?=$value['id'];?>" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <?php if ($value['visibilite'] == 1) { ?>
                            <a href="<?=ROOT?>categories/switchv/<?=$value['id'];?>" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                                <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                                <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                            </svg>

                        </a>
                        <?php }else{ ?>

                            <a href="<?=ROOT?>categories/switchv/<?=$value['id'];?>" class="btn-table bg-white">
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                                </svg>
    
                            </a>
                        <?php } ?>
                        
                    </div>
                </td>
            </tr>
            <?php }} ?>



        </tbody>
    </table>

    <div class="absolute right-0 bottom-0">
        <a href="<?=ROOT?>categories/add">
            <button class="btn-primary ">ajouter nouvelle categorie</button>
        </a>
    </div>
</div>