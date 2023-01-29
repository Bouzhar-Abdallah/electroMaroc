const notifs_div = document.getElementById('notifs')
console.log(notifs_div.getBoundingClientRect().height);

window.addEventListener('load', ()=>{
    var user = sessionStorage.getItem("feedbacks");
    console.log(user); // Output: "John Doe"

})