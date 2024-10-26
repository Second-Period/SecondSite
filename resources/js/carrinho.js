const mensagemCarrinhoVazio = document.querySelector(".mensagem-vazio");
const divItensCarrinho = document.querySelector(".itens-carrinho");
const mensagemCompra = document.querySelector("#mensagem-compra");

function adicionarItemAoCarrinho(evento) {
    const btn = evento.currentTarget;
    const item = btn.getAttribute("data-item");
    gerarHtmlItem(item);
    mensagemCarrinhoVazio.classList.add("d-none");
}

function gerarHtmlItem(nomeItem) {
    const divItem = document.createElement("div");
    divItem.classList.add("item");

    const descricaoItem = document.createElement("div");
    descricaoItem.classList.add("descricao-item");
    descricaoItem.textContent = nomeItem;
    divItem.appendChild(descricaoItem);

    const btnRemover = document.createElement("button");
    btnRemover.classList.add("btn", "btn-danger");
    btnRemover.textContent = 'X';
    divItem.appendChild(btnRemover);

    divItensCarrinho.appendChild(divItem);

    btnRemover.addEventListener("click", () => removerItemCarrinho(divItem));
}

function removerItemCarrinho(item) {
    item.remove();
    if (divItensCarrinho.querySelectorAll(".item").length === 0) {
        mensagemCarrinhoVazio.classList.remove("d-none");
    }
}

document.querySelectorAll(".add-ao-carrinho").forEach(button => {
    button.addEventListener("click", adicionarItemAoCarrinho);
});

document.querySelector("#btn-comprar").addEventListener("click", () => {
    if (divItensCarrinho.querySelectorAll(".item").length > 0) {
        mensagemCompra.classList.remove("d-none");
        setTimeout(() => mensagemCompra.classList.add("d-none"), 3000);
    }
});
