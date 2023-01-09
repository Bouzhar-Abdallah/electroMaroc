
const submit = document.getElementById('submit')
const password = document.getElementById('password')
const password_2 = document.getElementById('password_2')
const password_check = document.getElementById('password_check')

var passcheck = true
password_2.addEventListener('input', (e)=>{
    if(e.target.value == password.value){
        password_check.classList.remove('hidden')
        password_check.innerText = 'les mots de passe sont identiques'
        password_check.classList.remove('bg-[#FDECF0]')
        password_check.classList.add('bg-[#DAFFEF]')
        passcheck = true
    }else {
        password_check.innerText = 'les mots de passe ne sont pas identiques'
        password_check.classList.remove('hidden')
        password_check.classList.add('bg-[#FDECF0]')
        passcheck = false
    }
});

password.addEventListener('input', (e)=>{
    if(e.target.value == password_2.value){
        password_check.classList.remove('hidden')
        password_check.innerText = 'les mots de passe sont identiques'
        password_check.classList.remove('bg-[#FDECF0]')
        password_check.classList.add('bg-[#DAFFEF]')
        passcheck = true
    }else {
        password_check.innerText = 'les mots de passe ne sont pas identiques'
        password_check.classList.remove('hidden')
        password_check.classList.add('bg-[#FDECF0]')
        passcheck = false
    }
});

submit.addEventListener("click", (e)=>{
    
    let refuse = true
    
    let errors = []
    const inputs = document.querySelectorAll("input")

    inputs.forEach((node,index)=>{
        let input = document.getElementById(node.name)
        if(node.value === '' || node.value == 'NULL'){
            errors.push(`${node.name} is required`)
            input.classList.add('bg-[#FDECF0]')
            input.placeholder='ce champ est obligatoire'
            refuse = false
        }else{
            input.classList.remove('bg-[#FDECF0]')
        }
    })
    if (password.value != password_2.value) {
        password_check.innerText = 'les mots de passe ne sont pas identiques'
        password_check.classList.remove('hidden')
        password_check.classList.add('bg-[#FDECF0]')
        passcheck = false
    }else{
        passcheck = true

    }
    
    if(!(refuse && passcheck)){
        e.preventDefault()
    }
    console.log(refuse && passcheck);
})






