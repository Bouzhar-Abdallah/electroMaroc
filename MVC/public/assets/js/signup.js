
const submit = document.getElementById('submit')

let refuse = false
submit.addEventListener("click", (e)=>{

    let errors = []
    const inputs = document.querySelectorAll("input[type=text]")

    inputs.forEach((node,index)=>{
        let input = document.getElementById(node.name)
        if(node.value === '' || node.value == 'NULL'){
            errors.push(`${node.name} is required`)
            input.classList.add('bg-[#FDECF0]')
            input.placeholder='ce champ est obligatoire'
            refuse = true
        }else{
            input.classList.remove('bg-[#FDECF0]')
        }
    })
    
    
    if(refuse){
        e.preventDefault()
    }
    console.log(refuse);
})