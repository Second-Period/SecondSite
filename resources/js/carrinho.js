const mensagemCarrinhoVazio = document.querySelector(".mensagem-vazio");
const divItensCarrinho = document.querySelector(".itens-carrinho");
const mensagemCompra = document.querySelector("#mensagem-compra");
const button = document.querySelectorAll(".add-ao-carrinho");
const compra = document.querySelector("#btn-comprar")


function adicionarItemAoCarrinho(evento) {
    const btn = evento.currentTarget;
    const item = btn.getAttribute("data-item");
    gerarHtmlItem(item);
    mensagemCarrinhoVazio.classList.add("hidden");
}

function gerarHtmlItem(nomeItem) {
    const divItem = document.createElement("div");
    divItem.classList.add("item");

    const descricaoItem = document.createElement("div");
    descricaoItem.classList.add("descricao-item");
    descricaoItem.textContent = nomeItem;
    divItem.appendChild(descricaoItem);

    const btnRemover = document.createElement("button");
    btnRemover.classList.add("bg-red-500","hover:bg-red-600", "text-white", "px-3", "py-1", "rounded-lg");
    btnRemover.textContent = 'X';
    divItem.appendChild(btnRemover);

    divItensCarrinho.appendChild(divItem);

    btnRemover.addEventListener("click", () => removerItemCarrinho(divItem));
}

function removerItemCarrinho(item) {
    item.remove();
    if (divItensCarrinho.querySelectorAll(".item").length === 0) {
        mensagemCarrinhoVazio.classList.remove("hidden");
    }
}

button.forEach(button => {
    button.addEventListener("click", adicionarItemAoCarrinho);
});

compra.addEventListener("click", () => {
    if (divItensCarrinho.querySelectorAll(".item").length > 0) {
        mensagemCompra.classList.remove("hidden");
        setTimeout(() => mensagemCompra.classList.add("hidden"), 3000);
    }
});
