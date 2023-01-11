const items = document.querySelectorAll(".item");
const livraison = parseInt(document.getElementById("livraison").innerText);

window.addEventListener("load", () => {
  let prix_total = 0;

  items.forEach((item) => {
    const unit_price = parseFloat(item.querySelector(".prix_unit").innerHTML);
    const quantity = parseFloat(item.querySelector(".quantite").innerHTML);
    prix_total += quantity * unit_price;
  });

  document.getElementById("sous_total").innerHTML = prix_total;

  document.getElementById("total").innerHTML = prix_total + livraison;
});




document.getElementById("download-pdf").addEventListener("click", ()=> {
    
    const invoice = document.getElementById('invoice')
    let options = {
        
        padding: [0, 0, 0, 0],
        filename: 'download.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'landscape' }
    };
    html2pdf().from(invoice).set(options).save()
  });
  



