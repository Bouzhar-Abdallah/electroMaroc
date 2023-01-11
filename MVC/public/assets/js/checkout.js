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



console.log(window);
document.getElementById("download-pdf").addEventListener("click", function() {
    
    const invoice = document.getElementById('invoice')
    const opt = {
        margin : 0,
        filename: 'facture.pdf',
        html2canvas: {scale:2},
        jsPDF:{unit:'mm',format:'A4',orientation :'landscape'}
    };
    html2pdf().from(invoice).set(opt).save()
  });
  



