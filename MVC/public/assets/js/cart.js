
const items = document.querySelectorAll('.product_item')
const livraison = parseInt(document.getElementById('livraison').innerText)

const products_details = []
totalPrice()


items.forEach((item)=>{
    item.querySelector('select').addEventListener("change", totalPrice)
})

function totalPrice() {
    let prix_total = 0
    let total_pieces = 0
    items.forEach((item)=>{
        const quantity =  parseFloat(item.querySelector('select').value)
        const unit_price = parseFloat( item.querySelector('.product_price').innerHTML.replace('MAD',''))
        prix_total += quantity * unit_price
        total_pieces += quantity 
        const produit ={
            quantity : quantity,
            unit_price : unit_price
        };
        products_details.push(produit)
        
    })
    document.getElementById('prix_total').innerText =prix_total
    document.getElementById('total_pieces').innerText =total_pieces
    document.getElementById('montant_total').innerText =prix_total + livraison
    
}