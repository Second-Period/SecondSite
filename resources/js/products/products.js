import {update,cancel} from "./button"
const button = document.getElementById('edit')

button.addEventListener('click', () => {
    const {name, price, img} = {
        name:document.getElementById('name'),
        price:document.getElementById('price'),
        img:document.getElementById('product_img'),
    }
    name.removeAttribute('readonly')
    price.removeAttribute('readonly')
    img.removeAttribute('readonly')
    img.type = 'file'
    button.classList.add('hidden')
    dele.classList.remove('hidden')
    const botao = document.createElement('button')
    const botao2 = document.createElement('button')
    
    document.getElementById('div').appendChild(update(botao))
    document.getElementById('div').appendChild(cancel(botao2))
})
if (document.getElementById('delete')) {
    document.getElementById('delete').addEventListener('click', () => {
        const {name, price, img} = {
            name:document.getElementById('name'),
            price:document.getElementById('price'),
            img:document.getElementById('product_img'),
        }
        name.setAttribute('readonly')
        price.setAttribute('readonly')
        img.setAttribute('readonly')
        img.type = 'text'
        document.getElementById('delete').classList.add('hidden')
        document.getElementById('update').classList.add('hidden')
        button.classList.remove('hidden')
    })
} else{
    console.log('nao existe')
}



