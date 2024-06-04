
        const loginForm = document.getElementById('loginForm');

        loginForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const username = loginForm.elements.username.value;
            const password = loginForm.elements.password.value;

            // Verifique o nome de usuário e a senha aqui
            if (username === 'seu_usuario' && password === 'sua_senha') {
                alert('Login bem-sucedido');
                // Redirecionar para a página de destino após o login
                