const categoriy_images = document.querySelectorAll('.category_list')

categoriy_images.forEach((list)=>{
    const image = list.querySelector('img')
    const category_name = list.querySelector('div')
    image.addEventListener('mouseover', ()=>{
        category_name.style.left = 43 +'px'
    })
    image.addEventListener('mouseleave', ()=>{
        category_name.style.left = -150 +'px'
    })
})