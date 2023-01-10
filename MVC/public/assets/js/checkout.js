
const items = document.querySelectorAll('.item')
const livraison = parseInt(document.getElementById('livraison').innerText)


window.addEventListener('load',()=>{

    let prix_total = 0
    
    items.forEach((item)=>{
        const unit_price =  parseFloat(item.querySelector('.prix_unit').innerHTML)
        const quantity = parseFloat( item.querySelector('.quantite').innerHTML)
        prix_total += quantity * unit_price
    })
    
    document.getElementById('sous_total').innerHTML =prix_total
    
    document.getElementById('total').innerHTML =prix_total + livraison
})


/* items.forEach(element => {
    console.log(element.querySelector('.prix_unit').innerHTML)
}); */