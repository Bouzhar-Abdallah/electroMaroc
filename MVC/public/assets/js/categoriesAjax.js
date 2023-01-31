const products_container = document.querySelector("#products_container");
const categories_container = document.querySelector("#categories_container");
//categories_container.innerHTML=''
class Products {
  constructor(_categorie = "all", _limit = 10, _offset = 0) {
    this.categories= [];
    this.produits = [];
    this.limit = _limit;
    this.offset = _offset;
    this.categorie = _categorie;
    this.count = 10;
    this.endPoint = `http://localhost:8888/electroMaroc/MVC/public/produits/getproductsByCategory/${this.categorie}/${this.limit}/${this.offset}`;
  }

  getData() {
      const xhr = new XMLHttpRequest();
    xhr.open("GET", this.endPoint, true);
    console.log(this.endPoint);
    xhr.onload = function () {
      let data = JSON.parse(this.response);
      console.log("loaded");
      this.produits=data.produits
      this.categories=data.categories
      console.log(data.categories);
      //console.log(data.produits);
      showCategoriesButtons(this.categories)
    };
    xhr.send();
  }

  
  
}



let prdocutsManager = new Products();

prdocutsManager.getData();




 function showCategoriesButtons(categories){
    categories_container.innerHTML= `<button value="<?=ROOT?>produits/getproductsByCategory/all">
    <li class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
        <img class=" w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="http://localhost:8888/electroMaroc/MVC/public/assets/images/categories/all.png" alt="">

        <div class="px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]">
            <h1 class="">all</h1>
        </div>
    </li>
    </button >`
    categories.forEach(categorie => {
        categories_container.innerHTML+= 
        `
                    
                
                    <button value="<?=ROOT?>produits/getproductsByCategory/${categorie.id}">
                        <li class="category_list flex cursor-pointer hover:bg-saffron bg-white transition-colors transition-duration duration-500 ease-in h-[45px]">
                            <img class=" w-auto h-auto max-w-[25px] max-h-[35px] mx-2 my-3 relative z-20 " src="data:image/png;base64,${categorie.photo}" alt="">
                            <div class="px-3 bg-cadet text-white text-xs capitalize fixed h-[45px] transi duration-300 ease-in flex items-center -left-[150px] -z-10 w-[150px]">
                                <h1 class="">${categorie.nom}</h1>
                            </div>
                        </li>
                    </button>`

                
    });
} 