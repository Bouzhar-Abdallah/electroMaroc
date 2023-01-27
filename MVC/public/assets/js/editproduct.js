const input = document.getElementById("input");
const product_images = document.getElementById("product_images");
const images_buttons = product_images.querySelectorAll('button')
const img = document.getElementById("img");

input.addEventListener("change", ()=> {
    let files = input.files
    files = Array.from(files)
  
    files.forEach(file => {
        
        const img_div = document.createElement('div')

         img_div.innerHTML += `<div class="h-20 p-1 relative hover:border hover:border-red-600">
        <svg class="hover:bg-red-600 text-slate-700 hover:text-white transition-all duration-400 absolute h-5 w-5 right-1 top-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
        
        <img class="h-full mx-auto" src="" alt="" srcset="">
        </div>`
        product_images.appendChild(img_div)
    
      const reader = new FileReader();
      
      reader.onload = function() {
        img_div.querySelector('img').src = reader.result
      };
      
      reader.readAsDataURL(file); 
    });

});


window.addEventListener('load', showProductImages())

function deletePhoto(value) {
    
    var xhr = new XMLHttpRequest();
    xhr.open('GET','http://localhost:8888/electroMaroc/MVC/public/product/deleteProductImage/'+value,true)
    xhr.onload = function(){
        if (this.status == 200) {
            if(this.response){
                //showProductImages()
                document.getElementById(value).classList.add('hidden')
                
            }
        }
    }
    xhr.send()
}

function showProductImages(){
    const currentUrl = window.location.href;
    const urlParts = currentUrl.split("/");
    const id_produit = urlParts.pop();

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://localhost:8888/electroMaroc/MVC/public/product/getProductImages/'+id_produit, true);
    xhr.onload = function(e) {
    if (this.status == 200) {
    var images = JSON.parse(this.response);
    images.forEach(function(image) {
      const img_div = document.createElement('div')

      img_div.innerHTML += `<div id="${image.id}" class="h-20 p-1 relative hover:border hover:border-red-600">
      <button onclick="deletePhoto(${image.id})" value="3" type="button" class="hover:bg-red-600 text-slate-700 hover:text-white transition-all duration-400 absolute h-5 w-5 right-1 top-1"> 

      <svg  class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
     
     <img class="h-full mx-auto"  alt="" srcset="">
     </div>`
     product_images.appendChild(img_div)
     img_div.querySelector('img').src = `data:image/png;base64,${image.photo}`

    });
  }
};
xhr.send();
}