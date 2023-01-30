const products_container = document.querySelector("#products_container");
const categories_container = document.querySelector("#categories_container");
//categories_container.innerHTML=''
class Products {
  constructor(_categorie = "all", _limit = 10, _offset = 0) {
    this.data = [];
    this.limit = _limit;
    this.offset = _offset;
    this.categorie = _categorie;
    this.count = 10;
    this.endPoint = `http://localhost:8888/electroMaroc/MVC/public/produits/getproductsByCategory/${this.categorie}/${this.limit}/${this.offset}`;
  }

  getData() {
    xhr.open("GET", this.endPoint, true);
    console.log(this.endPoint);
    xhr.onload = function () {
      let data = JSON.parse(this.response);
      console.log("loaded");
      console.log(data);
    };
    xhr.send();
  }
}

const xhr = new XMLHttpRequest();

let prdocutsManager = new Products();

prdocutsManager.getData();
