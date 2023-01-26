<div class="overflow-x-auto h-full relative ">
    <table class="w-full text-sm text-left text-gray-500 border border-cadethh ">
        <thead class="text-xs text-black uppercase bg-cadethh ">
            <tr>
                <th scope="col" class="py-3 pl-2">

                </th>
                <th scope="col" class="py-3 pl-2">
                    etat
                </th>

                <th scope="col" class="py-3 pl-2">
                    client
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
        </tbody>
    </table>
    <div class="absolute  flex justify-between right-0 bottom-0 w-full">
        <button id="previous" value="previous" class="btn-table bg-white ml-auto">
            <svg class="h-7 w-7 text-cadethh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M13.28 3.97a.75.75 0 010 1.06L6.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0zm6 0a.75.75 0 010 1.06L12.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0z" clip-rule="evenodd" />
            </svg>
        </button>
        <div id="pages" class="flex">
           

        </div>
        <button id="next" value="next" class="btn-table bg-white mr-auto">
            <svg class="h-7 w-7 text-cadethh" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M4.72 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 010-1.06zm6 0a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>

        </button>
    </div>
</div>
<script src="<?= ROOT ?>assets/js/commands.js"></script>