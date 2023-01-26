const input = document.getElementById("input");
const product_images = document.getElementById("product_images");
const img = document.getElementById("img");

input.addEventListener("change", ()=> {
    let files = input.files
    files = Array.from(files)
  
    files.forEach(file => {
        
        const img_div = document.createElement('div')

         img_div.innerHTML += `<div class="h-20 p-1 relative hover:border hover:border-red-600">
        <svg class="hover:bg-red-600 text-slate-700 absolute h-5 w-5 right-1 top-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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