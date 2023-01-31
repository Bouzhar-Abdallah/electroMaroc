
const menu_button = document.querySelector('#menu_button')
const mobile_menu = document.querySelector('#mobile_menu')
const menu_list = document.querySelector('#menu_list')
const menu_list_button = document.querySelector('#menu_list_button')
const menu_width = mobile_menu.getBoundingClientRect().width
document.getElementById('mobile_menu').style.left = - menu_width +'px'

let t = 1
menu_button.addEventListener("click", ()=>{
    t++
    if (t%2 == 0) {
        document.getElementById('mobile_menu').style.left = 0 +'px'
    }else{
        document.getElementById('mobile_menu').style.left = - menu_width +'px'
    }
})

menu_list_button.addEventListener('click', ()=>{
    console.log(menu_list.getBoundingClientRect().height);

    if (menu_list.classList.contains('-top-[220px]')) {
        menu_list.classList.remove('-top-[220px]')
    }else{
        menu_list.classList.add('-top-[220px]')
    }

})