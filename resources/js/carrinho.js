const mensagemCarrinhoVazio = $(".mensagem-vazio");
const divItensCarrinho = $(".itens-carrinho");

console.log(mensagemCarrinhoVazio)
function adicionarItemAoCarrinho(evento) {
    const btn = $(evento.currentTarget);
    const item = btn.prev().text();

    gerarHtmlItem(item);

    mensagemCarrinhoVazio.addClass("d-none");
}

function gerarHtmlItem(nomeItem) {
    const itens = $(".itens-carrinho");
    const divItem = $("<div></div>", {
        class: "rounded border w-100 flex gap-2 items-center justify-between mb-2 item"
    }).appendTo(itens);

    const divImagem = $("<div></div>", {
        class: "imagem"
    }).appendTo(divItem);

    $("<img>", {
        src: "https://cdn.discordapp.com/attachments/694536530114510868/1174373033855696946/image-2_1.png?ex=65675b1e&is=6554e61e&hm=7482c1a18fe8beb6885fae47b63290e49650fc889075ff0bcdbef555483babfe&",
        class: "card-img-top",
        alt: "..."
    }).appendTo(divImagem);

    $("<div></div>", {
        class: "descricao-item",
        text: nomeItem
    }).appendTo(divItem);

    const divAcoes = $("<div></div>", {
        class: "acoes-item p-3 border-start",
    }).appendTo(divItem);

    const btnRemover = $("<button></button>", {
        class: "btn btn-sm btn-danger carrinho-remover-item",
        html: 'X'
    }).appendTo(divAcoes);

    btnRemover.on("click", removerItemCarrinho);
}

function removerItemCarrinho(evento) {
    const btn = $(evento.currentTarget);

    btn.closest('.item').remove();

    if (divItensCarrinho.find(".item").length === 0) {
        mensagemCarrinhoVazio.removeClass("d-none");
    }
}

$(".add-ao-carrinho").on("click", adicionarItemAoCarrinho);
$("#btn-comprar").on("click", ()=>alert("Obrigado pela sua compra!"));






//const mensagemCarrinhoVazio = document.querySelector(".mensagem-vazio");
//const divItensCarrinho = document.querySelector(".itens-carrinho");
//const mensagemCompra = document.querySelector("#mensagem-compra");
//const buttons = document.querySelectorAll(".add-ao-carrinho");
//const compra = document.querySelector("#btn-comprar")
//
//console.log(buttons)
//
//function adicionarItemAoCarrinho(evento) {
//    const btn = evento.currentTarget;
//    const item = btn.getAttribute("data-item");
//    gerarHtmlItem(item);
//    mensagemCarrinhoVazio.classList.add("hidden");
//}
//
//function gerarHtmlItem(nomeItem) {
//    const divItem = document.createElement("div");
//    divItem.classList.add("item");
//
//    const descricaoItem = document.createElement("div");
//    descricaoItem.classList.add("descricao-item");
//    descricaoItem.textContent = nomeItem;
//    divItem.appendChild(descricaoItem);
//
//    const btnRemover = document.createElement("button");
//    btnRemover.classList.add("bg-red-500","hover:bg-red-600", "text-white", "px-3", "py-1", "rounded-lg");
//    btnRemover.textContent = 'X';
//    divItem.appendChild(btnRemover);
//
//    divItensCarrinho.appendChild(divItem);
//
//    btnRemover.addEventListener("click", () => removerItemCarrinho(divItem));
//}
//
//function removerItemCarrinho(item) {
//    item.remove();
//    if (divItensCarrinho.querySelectorAll(".item").length === 0) {
//        mensagemCarrinhoVazio.classList.remove("hidden");
//    }
//}
//
//buttons.forEach(button => {
//    console.log(button)
//    button.addEventListener("click", adicionarItemAoCarrinho);
//});
//
//if (compra){
//    compra.addEventListener("click", () => {
//        if (divItensCarrinho.querySelectorAll(".item").length > 0) {
//            mensagemCompra.classList.remove("hidden");
//            setTimeout(() => mensagemCompra.classList.add("hidden"), 3000);
//        }
//    });
//}
