document.addEventListener('DOMContentLoaded', (event) => {
    const mensagemCarrinhoVazio = document.querySelector(".mensagem-vazio");
    const divItensCarrinho = document.querySelector(".itens-carrinho");

    function adicionarItemAoCarrinho(evento) {
        const btn = evento.currentTarget;
        const item = btn.previousElementSibling.textContent;

        gerarHtmlItem(item);

        mensagemCarrinhoVazio.classList.add("d-none");
    }

    function gerarHtmlItem(nomeItem) {
        const divItem = document.createElement("div");
        divItem.className = "rounded border w-100 flex gap-2 items-center justify-between mb-2 item";

        const divImagem = document.createElement("div");
        divImagem.className = "imagem";
        divItem.appendChild(divImagem);

        const img = document.createElement("img");
        img.src = "https://cdn.discordapp.com/attachments/694536530114510868/1174373033855696946/image-2_1.png?ex=65675b1e&is=6554e61e&hm=7482c1a18fe8beb6885fae47b63290e49650fc889075ff0bcdbef555483babfe&";
        img.className = "card-img-top";
        img.alt = "...";
        divImagem.appendChild(img);

        const descricaoItem = document.createElement("div");
        descricaoItem.className = "descricao-item";
        descricaoItem.textContent = nomeItem;
        divItem.appendChild(descricaoItem);

        const divAcoes = document.createElement("div");
        divAcoes.className = "acoes-item p-3 border-start";
        divItem.appendChild(divAcoes);

        const btnRemover = document.createElement("button");
        btnRemover.className = "btn btn-sm btn-danger carrinho-remover-item";
        btnRemover.textContent = "X";
        btnRemover.addEventListener("click", removerItemCarrinho);
        divAcoes.appendChild(btnRemover);

        divItensCarrinho.appendChild(divItem);
    }

    function removerItemCarrinho(evento) {
        const btn = evento.currentTarget;
        const item = btn.closest('.item');

        if (item) {
            item.remove();
        }

        if (divItensCarrinho.querySelectorAll(".item").length === 0) {
            mensagemCarrinhoVazio.classList.remove("d-none");
        }
    }

    document.querySelectorAll(".add-ao-carrinho").forEach(btn => {
        btn.addEventListener("click", adicionarItemAoCarrinho);
    });

    document.getElementById("btn-comprar").addEventListener("click", () => {
        alert("Obrigado pela sua compra!");
    });
});









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
