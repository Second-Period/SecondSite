import {update,cancel} from "./button"

const div = document.getElementById('div')
const button = document.getElementById('edit')
const deleteButton = document.getElementById('delete') 
const {name, price, img} = {
    name:document.getElementById('name'),
    price:document.getElementById('price'),
    img:document.getElementById('product_img'),

}

if(button){
    button.addEventListener('click', () => {
        name.removeAttribute('readonly')
        price.removeAttribute('readonly')
        img.removeAttribute('readonly')
        img.type = 'file'
        button.classList.add('hidden')
        const buttonUpdate = document.createElement('button')
        const buttonCancel = document.createElement('button')
        
        div.appendChild(update(buttonUpdate))
        div.appendChild(cancel(buttonCancel))
    })
} else () => console.log('nao existe')

if (deleteButton) {
    deleteButton.addEventListener('click', () => {
        name.setAttribute('readonly')
        price.setAttribute('readonly')
        img.setAttribute('readonly')
        img.type = 'text'
        deleteButton.classList.add('hidden')
        document.getElementById('update').classList.add('hidden')
        button.classList.remove('hidden')
    })
} else () => console.log('nao existe')



