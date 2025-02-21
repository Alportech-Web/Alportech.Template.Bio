//contador de cliques
// adicione no local desejado o parametro data-click-id="id,tipo" o tipo sÃ³ Ã© necessÃ¡rio caso precise diferenciar o local de chamada
// Selecionar todos os elementos com o atributo 'data-click-id'
const elementsWithClickId = document.querySelectorAll('[data-click-id]');

// Iterar sobre os elementos e adicionar um event listener de clique a cada um
elementsWithClickId.forEach(element => {
    element.addEventListener('click', function(event) {
        const target = event.target;

        // Verificar se o link jÃ¡ foi clicado
        if (!this.hasAttribute('data-clicado')) {
            // Marcar o link como clicado adicionando o atributo 'data-clicado'
            this.setAttribute('data-clicado', 'true');

            // Extrair o ID do link clicado
            //const id = this.getAttribute('data-click-id');

            //Extrair o ID e o Tipo, caso o tipo esteja vazio, serÃ¡ 'default'
			let clickId = this.getAttribute('data-click-id');
		    let parametros = clickId.split(',');
		    let id = parametros[0];
		    let tipo = parametros[1] ? parametros[1] : 'default';

		    let lista_tabela = ["registro_cliques", "parceiros"];

            // Dados a serem enviados via POST
            const postData = {
                id: id,
                valor: 1,
                tabela: JSON.stringify(lista_tabela),
                type: tipo
            };

            // Convertendo o objeto em uma string no formato de dados POST
            const post = new URLSearchParams(postData).toString();

            const req = new XMLHttpRequest();
            req.open('POST', '/includes/acoes/acao.Coleta.Cliques.php', true);
            req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        /*    req.onreadystatechange = function() {
                if (req.readyState === XMLHttpRequest.DONE) {
                    if (req.status === 200) {
                        alert("Cliquei no " + element + " - Resposta: " + req.responseText);
                    } else {
                        // Tratamento de erro (opcional)
                        console.error('Erro na requisiÃ§Ã£o: ' + req.status);
                    }
                }
            };*/

            req.send(post);
        }
    });
});
//alert('conectado');