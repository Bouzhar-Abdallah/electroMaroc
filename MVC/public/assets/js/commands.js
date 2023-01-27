//let count
const table_body = document.getElementById('table_body')
const previous = document.getElementById('previous')
const next = document.getElementById('next')
const pages = document.getElementById('pages')
class commandes {
    constructor(_limit=10 , _offset= 0){
        this.limit = _limit
        this.offset = _offset
        this.count = 0
    }
    setLimit(_limit){
        this.limit = _limit 
    }
    setOffset(_offset){
        this.offset = _offset 
    }
    setCount(_count){
        this.count = _count
    }
    getData() {
        //console.log(this.limit);
        var xhr = new XMLHttpRequest
        
        xhr.open('GET','http://localhost:8888/electroMaroc/MVC/public/Commandes/getDataForAjax/'+this.limit+'/'+this.offset,true)
        
        xhr.onload = function(){
            
            const data = JSON.parse(this.response)
            construct_table(data)
        }
        xhr.send()
    }
}

let commandesObj = new commandes

window.onload = function(){
    commandesObj.getData()
    var xhr = new XMLHttpRequest

xhr.open('GET','http://localhost:8888/electroMaroc/MVC/public/Test',true)

xhr.onload = function(){
    count = this.response
    commandesObj.setCount(count)
    constructPaginationButtons(count);
}
xhr.send()
}


function construct_table(data){
    table_body.innerHTML = ''
    data.forEach(element => {
        if (element['date_envoi'] === null) {
            element['date_envoi'] = 'pas encore'
        }
        if (element['date_livraison'] === null) {
            element['date_livraison'] = 'pas encore'
        }
        table_body.innerHTML += fillLine(element)
    });
}

function fillLine(element) {
    
    const table_line = `

<th scope="row" class=" px-1 flex items-center h-10 justify-center font-medium  whitespace-nowrap ">
    <input class=" text-cadeth focus:ring-transparent border-cadethh" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
</th>
<td class="py-3 pl-2 ">

${element['etat']}
</td>
<td class="py-3 pl-2 ">
${element['client']}
</td>
<td class="py-3 pl-2 ">
${element['date_creation']}
</td>
<td class="py-3 pl-2">
${element['date_envoi']}
</td>
<td class="py-3 pl-2">
${element['date_livraison']}
</td>
<td class="py-3 pl-2">
${element['total_items']}
</td>
<td class="py-3 pl-2">$ 
${element['total_price']}
</td>
<td class="relative">
    <div class="flex gap-1 opacity-0 hover:opacity-100 transition-opacity ease-in duration-400 absolute right-2 top-1 bg-white">
        <button value="${element['id']}" href="edit" class="btn-table bg-white">
            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
            </svg>
        </button>
        <button value="en cours/${element['id']}" onclick="editState(this)" class="btn-table bg-white">
            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
            </svg>
        </button>
        <button value="en transit/${element['id']}" onclick="editState(this)"  class="btn-table bg-white">
            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 116 0h3a.75.75 0 00.75-.75V15z" />
                <path d="M8.25 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zM15.75 6.75a.75.75 0 00-.75.75v11.25c0 .087.015.17.042.248a3 3 0 015.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 00-3.732-10.104 1.837 1.837 0 00-1.47-.725H15.75z" />
                <path d="M19.5 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
            </svg>
        </button>  
        <button value="pret/${element['id']}" onclick="editState(this)"  class="btn-table bg-white">
                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M11.25 3v4.046a3 3 0 00-4.277 4.204H1.5v-6A2.25 2.25 0 013.75 3h7.5zM12.75 3v4.011a3 3 0 014.239 4.239H22.5v-6A2.25 2.25 0 0020.25 3h-7.5zM22.5 12.75h-8.983a4.125 4.125 0 004.108 3.75.75.75 0 010 1.5 5.623 5.623 0 01-4.875-2.817V21h7.5a2.25 2.25 0 002.25-2.25v-6zM11.25 21v-5.817A5.623 5.623 0 016.375 18a.75.75 0 010-1.5 4.126 4.126 0 004.108-3.75H1.5v6A2.25 2.25 0 003.75 21h7.5z" />
                    <path d="M11.085 10.354c.03.297.038.575.036.805a7.484 7.484 0 01-.805-.036c-.833-.084-1.677-.325-2.195-.843a1.5 1.5 0 012.122-2.12c.517.517.759 1.36.842 2.194zM12.877 10.354c-.03.297-.038.575-.036.805.23.002.508-.006.805-.036.833-.084 1.677-.325 2.195-.843A1.5 1.5 0 0013.72 8.16c-.518.518-.76 1.362-.843 2.194z" />
                </svg>
        </button>

    </div>
</td>
</tr>
`
return table_line
}


function editState(event){
    //console.log(event.value);
    var xhr = new XMLHttpRequest

xhr.open('GET','http://localhost:8888/electroMaroc/MVC/public/Commandes/update/'+event.value,true)

xhr.onload = function(){
    commandesObj.getData()
}
xhr.send()
}

/* pagination */



function constructPaginationButtons(count) {
    const commandes_per_page = commandesObj.limit
    const pages_number = Math.ceil(count/commandes_per_page)
    //console.log(pages_number);
    for (let index = 1; index <= pages_number; index++) {
        
        pages.innerHTML += `<button value="${index}" class="btn-table bg-white ">${index}</button>`
    }
    const pages_buttons = pages.childNodes

pages_buttons.forEach((button)=>{
    button.addEventListener("click", (e)=>{
        commandesObj.setOffset(
            (e.target.value -1)*commandesObj.limit
        )
        commandesObj.getData()
    })
})
}

next.addEventListener("click",()=>{
    if (commandesObj.count>(commandesObj.offset + commandesObj.limit)) {
        commandesObj.setOffset(commandesObj.offset+commandesObj.limit)
        commandesObj.getData()
    }
})

previous.addEventListener("click",()=>{
    if (commandesObj.offset>0) {
        commandesObj.setOffset(commandesObj.offset-commandesObj.limit)
        commandesObj.getData()
    }
})

