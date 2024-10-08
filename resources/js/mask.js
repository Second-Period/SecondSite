const preco = document.getElementById('price')

preco.addEventListener('input',(e) => {
    
    let valor = e.target.value.replace(/[^\d]/g, '');

    var formato = (valor.slice(0, -2).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + valor.slice(-2));
    
    formato = formato.slice(0, -2) + ',' + formato.slice(-2);

    this.value = formato;
});