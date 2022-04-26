let reset = document.querySelector('#reset')
let radioButtons = document.querySelectorAll('#c3,#c4,#c5')
let submit = document.querySelector('#submit')

let validated = false

reset.addEventListener("click", ()=> {
    let inputFields = document.querySelectorAll('input')
    for(let i = 0; i < inputFields.length;i++) {
        inputFields[i].value = ""
    }
    for(let i = 0; i < radioButtons.length;i++){
        radioButtons[i].checked = false
    }
})

const isShippingEmpty = () => {
    empty = true
    for(let i = 0; i < radioButtons.length;i++){
        if(radioButtons[i].checked == true){
            empty = false
            break
        }
    }
    return empty
}

const isValidated = () => {
    let username = document.querySelector('#c1')
    let password = document.querySelector('#c2')
    let keyboard = document.querySelector('#c6')
    let mouse = document.querySelector('#c7')
    let headphone = document.querySelector('#c8')

    if(!(username.value.includes("@") && username.value.includes("."))){
        alert("Username not in email format or is left empty")
        return false
    } else if(password.value == ""){
        alert("Password field cannot be left empty")
        return false
    } else if(keyboard.value == "" || mouse.value == "" || headphone.value == ""){
        alert("Quantity field cannot be left empty for any item")
        return false
    } else if(keyboard.value < 0 || mouse.value < 0 || headphone.value < 0) {
        alert("Quantity must be greater than or equal to 0")
        return false
    } else if(isShippingEmpty()){
        alert("You must select a shipping option")
        return false
    } else{
        return true
    }
}

const validate = () => {
    if(!isValidated()){
        return false
    } else {
        return true
    }
}