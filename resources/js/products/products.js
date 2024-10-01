import {update,cancel} from "./button"

const div = document.getElementById('div')
const updateButton = document.getElementById('edit') 
const deleteButton = document.getElementById('delete') 
const {name, price, img} = {
    name:document.getElementById('name'),
    price:document.getElementById('price'),
    img:document.getElementById('product_img'),
}

function edit() {
    name.removeAttribute('readonly')
    price.removeAttribute('readonly')
    img.removeAttribute('readonly')
    img.type = 'file'
    updateButton.classList.add('hidden')
    
    const buttonUpdate = document.createElement('button')
    const buttonCancel = document.createElement('button')
    
    div.appendChild(update(buttonUpdate))
    div.appendChild(cancel(buttonCancel))
}

function cancel() {
    name.setAttribute('readonly')
    price.setAttribute('readonly')
    img.setAttribute('readonly')
    img.type = 'text'
    deleteButton.classList.add('hidden')
    document.getElementById('update').classList.add('hidden')
    updateButton.classList.remove('hidden')
}


updateButton ? updateButton.onclick = () => edit() : null 

deleteButton ? deleteButton.onclick = () => cancel() : null





