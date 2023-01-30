const products_container = document.querySelector('#products_container')

class products{
    constructor(_limit=10,_offset=0,_categorie='all'){
        this.limit=_limit
        this.offset=_offset
        this.categorie=_categorie
    }
}