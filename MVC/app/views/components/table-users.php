<div class="overflow-x-auto h-full relative ">
    <table class="w-full text-sm text-left text-gray-500 border border-cadethh ">
        <thead class="text-xs text-black uppercase bg-cadethh ">
            <tr>
                <th scope="col" class="py-3 pl-2">

                </th>
                <th scope="col" class="py-3 pl-2">
                    user
                </th>

                <th scope="col" class="py-3 pl-2">
                    date regoint
                </th>
                <th scope="col" class="py-3 pl-2">
                    total commandes
                </th>
                <th scope="col" class="py-3 pl-2">
                    total achats
                </th>
                <th scope="col" class="py-3 pl-2">
                    coins
                </th>

                <th scope="col" class="">

                </th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) { ?>


                <th scope="row" class=" px-1 flex items-center h-10 justify-center font-medium  whitespace-nowrap ">
                    <input class=" text-cadeth focus:ring-transparent border-cadethh" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                </th>

                <td class="py-3 pl-2 ">
                    <?=$value['nom']; ?>
                </td>
                <td class="py-3 pl-2 ">
                <?=$value['date_creation']; ?>
                </td>
                <td class="py-3 pl-2">
                    x
                </td>
                <td class="py-3 pl-2">
                    x
                </td>
                <td class="py-3 pl-2">
                    x
                </td>

                <td class="relative">
                    <div class="flex gap-1 opacity-0 hover:opacity-100 transition-opacity ease-in duration-400 absolute right-2 top-1 bg-white">

                        <a href="delete" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="delete" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>



                        </a>
                        <a href="delete" class="btn-table bg-white">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M9.375 3a1.875 1.875 0 000 3.75h1.875v4.5H3.375A1.875 1.875 0 011.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0112 2.753a3.375 3.375 0 015.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 10-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3zM11.25 12.75H3v6.75a2.25 2.25 0 002.25 2.25h6v-9zM12.75 12.75v9h6.75a2.25 2.25 0 002.25-2.25v-6.75h-9z" />
                            </svg>



                        </a>
                    </div>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="absolute  flex justify-between right-0 bottom-0 w-full">
        <a href="" class="btn-table bg-white ml-auto">
            <svg class="h-7 w-7 text-cadethh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M13.28 3.97a.75.75 0 010 1.06L6.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0zm6 0a.75.75 0 010 1.06L12.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0z" clip-rule="evenodd" />
            </svg>
        </a>
        <div class="flex">
            <a href="" class="btn-table bg-white ">
                1
            </a>
            <a href="" class="btn-table bg-white">
                2
            </a>
            <a href="" class="btn-table bg-white">
                3
            </a>
            <a href="" class="btn-table bg-white">
                4
            </a>
            <a href="" class="btn-table bg-white">
                5
            </a>

        </div>
        <a href="" class="btn-table bg-white mr-auto">
            <svg class="h-7 w-7 text-cadethh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>

        </a>
    </div>
</div>