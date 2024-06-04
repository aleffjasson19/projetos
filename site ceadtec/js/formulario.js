
        // Função para aceitar apenas números
        function apenasNumeros(event) {
            var input = event.target;
            input.value = input.value.replace(/\D/g, '');
        }
    