
const buttons = document.querySelectorAll('.buttons')
const message = document.getElementById('message')

message.addEventListener('click',()=>{
    message.innerHTML = ''
})
console.log('hello');
buttons.forEach(button => {
    button.addEventListener('click', ()=>{
        console.log(button.value);
        var xhr = new XMLHttpRequest();
        xhr.open('GET','http://localhost:8888/electroMaroc/MVC/public/'+button.value,true);
        xhr.onload = function(){
            if(this.response == 'added'){
                message.innerHTML = ` <div class="absolute overflow-hidden flex justify-center bg-cadeth/10 top-0 left-0 h-screen w-screen z-40">

                <div class="absolute transition-all top-64 flex justify-center items-center p-10 h-fit bg-cadethh">
                    <h1 class="font-bold text-2xl">produit ajouté avec success !</h1>
                </div>
            </div>`
            }else if (this.response == 'not') {
                
                message.innerHTML = ` <div class="absolute overflow-hidden flex justify-center bg-cadeth/10 top-0 left-0 h-screen w-screen z-40">

                <div class="absolute transition-all top-64 flex justify-center items-center p-10 h-fit bg-cadethh">
                    <h1 class="font-bold text-2xl">ce produit existe deja dans votre carte !</h1>
                </div>
            </div>`
            };
        }
        xhr.send();
    })
});


