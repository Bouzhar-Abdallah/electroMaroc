
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
    const form = document.getElementById('form_inputs')
    const inputs = form.querySelectorAll("input")
    const terms = document.getElementById('terms')
    terms_error= document.getElementById('terms_error')
    if (!terms.checked) {
        e.preventDefault()
        terms_error.classList.remove('hidden')
    }else{
        terms_error.classList.add('hidden')

    }
    inputs.forEach((node,index)=>{
        let input = document.getElementById(node.name)
        if(node.value === '' || node.value == 'NULL'){
            errors.push(`${node.name} is required`)
   
            input.style.backgroundColor = '#FDECF0'
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
        //console.log('prevent');
        e.preventDefault()
    }
   
})






