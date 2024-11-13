document.addEventListener('DOMContentLoaded', (event) => {
    const divItensCarrinho = document.querySelector(".itens-carrinho");

    // Criar e adicionar a mensagem de carrinho vazio acima dos itens
    const mensagemCarrinhoVazio = document.createElement("p");
    mensagemCarrinhoVazio.textContent = "Nenhum item no carrinho";
    mensagemCarrinhoVazio.className = "mensagem-vazio font-bold text-center mb-4"; // Classe para estilo em negrito
    mensagemCarrinhoVazio.style.fontWeight = "bold"; // Adiciona negrito
    mensagemCarrinhoVazio.style.display = "none"; // Inicialmente oculta

    // Adiciona a mensagem acima dos itens do carrinho
    divItensCarrinho.parentNode.insertBefore(mensagemCarrinhoVazio, divItensCarrinho);

    function atualizarMensagemCarrinho() {
        // Exibe a mensagem quando não há itens no carrinho, esconde quando há itens
        if (divItensCarrinho.querySelectorAll(".item").length === 0) {
            mensagemCarrinhoVazio.style.display = "block";
        } else {
            mensagemCarrinhoVazio.style.display = "none";
        }
    }

    function adicionarItemAoCarrinho(evento) {
        const btn = evento.currentTarget;
        const item = btn.previousElementSibling.textContent;

        gerarHtmlItem(item);
        atualizarMensagemCarrinho();
    }

    function gerarHtmlItem(nomeItem) {
        const divItem = document.createElement("div");
        divItem.className = "rounded border w-100 flex gap-2 items-center justify-between mb-2 item";

        const divImagem = document.createElement("div");
        divImagem.className = "imagem";
        divItem.appendChild(divImagem);

        const img = document.createElement("img");
        img.src = "https://media.discordapp.net/attachments/694536530114510868/1174373033855696946/image-2_1.png?ex=673570de&is=67341f5e&hm=4300b753982c50c9096f8273bec9682f78117ab2284538922ba0c46f900fb58a&=&format=webp&quality=lossless";
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

        // Adiciona o novo item no topo
        divItensCarrinho.prepend(divItem);
    }

    function removerItemCarrinho(evento) {
        const btn = evento.currentTarget;
        const item = btn.closest('.item');

        if (item) {
            item.remove();
        }

        atualizarMensagemCarrinho();
    }

    document.querySelectorAll(".add-ao-carrinho").forEach(btn => {
        btn.addEventListener("click", adicionarItemAoCarrinho);
    });

    document.getElementById("btn-comprar").addEventListener("click", () => {
        // Verifica se há itens no carrinho antes de mostrar a mensagem de compra
        if (divItensCarrinho.querySelectorAll(".item").length > 0) {
            alert("Obrigado pela sua compra!");
        } else {
            alert("Coloque um produto no carrinho");
        }
    });

    atualizarMensagemCarrinho(); // Checa se o carrinho está vazio ao carregar a página
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
