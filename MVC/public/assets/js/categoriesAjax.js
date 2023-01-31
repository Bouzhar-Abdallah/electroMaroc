const products_container = document.querySelector("#products_container");
const categories_container = document.querySelector("#categories_container");
//categories_container.innerHTML=''
class Products {
  constructor(_category = "all", _limit = 4, _offset = 0) {
    this.categories = [];
    this.produits = [];
    this.limit = 50;
    this.offset = 0;
    this.categorie = _category;
    this.count = 50;
    this.endPoint = `http://localhost:8888/electroMaroc/MVC/public/produits/getproductsByCategory/${this.categorie}/${this.limit}/${this.offset}`;
  }
  setCategory(category) {
    this.categorie = category;
    this.endPoint = `http://localhost:8888/electroMaroc/MVC/public/produits/getproductsByCategory/${this.categorie}/${this.limit}/${this.offset}`;
  }
  getData() {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", this.endPoint, true);
    console.log(this.endPoint);
    console.log("loaded");
    xhr.onload = function () {
      let data = JSON.parse(this.response);
      showCategoriesButtons(data.categories);
      showProducts(data.produits);
      categoriesHover();
    };
    xhr.send();
  }
}

let prdocutsManager = new Products();

prdocutsManager.getData();

function showCategoriesButtons(categories) {
  categories_container.innerHTML = `<button onclick="selectCategory('all')" class="category_button " value="all">
    <div class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
    <div class="">
    <img class="cat_img w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="http://localhost:8888/electroMaroc/MVC/public/assets/images/categories/all.png" alt="">
    </div>
    
        <div class="category_name px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]">
            <h1 class="">all</h1>
        </div>
    </div>
    </button >`;
  categories.forEach((categorie) => {
    categories_container.innerHTML += `
                    
                
                    <button onclick="selectCategory(${categorie.id})" class="category_button" value="${categorie.id}">
                        <li class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
                        <div class="flex items-center justify-center w-full">
                        <img class=" w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="data:image/png;base64,${categorie.photo}" alt="">
                        </div>
                            <div class="category_name px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]">
                                <h1 class="">${categorie.nom}</h1>
                            </div>
                        </li>
                    </button>`;
  });
}

function showProducts(produits) {
  products_container.innerHTML = "";

  produits.forEach((produit) => {
    let x = "";
    if (produit.prix_offre) {
      x = `<p class="text-gray-400 font-bold line-through text-base py-1 px-2">$ ${produit.prix_final}.99</p>`;
      produit.prix_final = produit.prix_offre;
    }
    const div_price = `<div class="flex items-center justify-between gap-5 my-1 text-xl font-bold">
        <p class="text-xl">$ ${produit.prix_final}.99</p>
        
            ${x}
        
    </div>`;
    products_container.innerHTML += `
        <?php if (!empty($data['produits']) && is_array($data['produits'])) foreach ($data['produits'] as $value) { ?>


            <div class="flex flex-col justify-between bg-white overflow-hidden hover:shadow border transition-colors hover:border-P_blue">
                <a href="product/${produit.id}" class="relative" >
                    <h1 class="hidden absolute w-40 h-10 bg-red-500 text-blue-400 z-30 rotate-45 top-3 -right-12">
                        Solde
                    </h1>
                    <img class="w-auto max-h-[200px] mx-auto scale-100 hover:scale-105 transition-all" src="data:image/jpeg;base64,${produit.photo}" alt="" srcset="">
                </a>
                <div class="p-3">
                    <a href="#" class="hover:text-gray-600 text-black font-thin">
                        <h3>${produit.libelle}</h3>
                        ${div_price}
                    </a>
                    <div class="flex h-10 justify-between items-center mt-4">
                        <a href="cart/add/" class="btn-icon">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
            
                        </a>
            
                        <button class="flex items-center capitalize btn-primary buttons" type="submit" value="cart/add/${produit.id}">
                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            
            <?php } ?>
            
        `;
  });
}

function selectCategory(category) {
  products_container.innerHTML = "";
  let prdocutsManager = new Products();
  prdocutsManager.setCategory(category);
  prdocutsManager.getData();
  console.log(category);
}

function categoriesHover() {
  const categoriy_images = document.querySelectorAll(".category_list");
  console.log(categoriy_images);

  categoriy_images.forEach((list) => {
    const image = list.querySelector("img");
    const category_name = list.querySelector(".category_name");
    image.addEventListener("mouseover", () => {
      category_name.style.left = 43 + "px";
    });
    image.addEventListener("mouseleave", () => {
      category_name.style.left = -150 + "px";
    });
  });
}
