<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = trim($_POST["usuario"] ?? "");
    $senha   = trim($_POST["senha"] ?? "");
    $email   = trim($_POST["email"] ?? "");

    if ($usuario === "" || $senha === "" || $email === "") {
        $mensagem = "Preencha todos os campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Digite um endereço de e-mail válido.";
    } else {
        $mensagem = "Cadastro enviado com sucesso!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulado ENEM - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="pagina">

    <header class="topo">
        <div class="faixa-clara">
            <img src="assets/logo.png" alt="Logo da escola" class="logo-topo">
            <h1>SIMULADO ENEM</h1>
        </div>

        <nav class="menu">
            <a href="#">Início</a>
            <a href="#">Simulado por área</a>
            <a href="#">Exercícios para treinos</a>
            <a href="#">Simulados ENEM</a>

            <label class="busca">
                <span>⌕</span>
                <input type="text" aria-label="Pesquisar">
            </label>
        </nav>
    </header>

    <main>
        <section class="cadastro-card">

            <div class="imagem-estudantes"></div>

            <div class="formulario">
                <h2>Cadastre-se!</h2>

                <?php if ($mensagem !== ""): ?>
                    <p class="mensagem"><?= htmlspecialchars($mensagem) ?></p>
                <?php endif; ?>

                <form method="POST" action="">
                    <label for="usuario">Nome de usuário</label>
                    <input type="text" id="usuario" name="usuario"
                           value="<?= htmlspecialchars($_POST["usuario"] ?? "") ?>">

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">

                    <label for="email">Endereço de e-mail</label>
                    <input type="email" id="email" name="email"
                           value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

                    <button type="submit">Enviar</button>

                    <p class="aviso">
                        Seu nome de perfil não ficará sendo compartilhado. Nunca envie senhas.
                    </p>
                </form>
            </div>

        </section>
    </main>

    <footer>
        <div class="footer-esquerda">
            <img src="assets/logo-footer.png" alt="Logo" class="logo-footer">

            <div class="endereco">
                <strong>Escola Estadual Maria Luiza Miranda Bastos</strong>
                <span>Rua São José da Sucuri, 60 - Planalto, Belo Horizonte - MG</span>
                <span>31.703-570</span>
                <b>Contatos</b>
                <span>(31) 3453-3747</span>
            </div>
        </div>

        <div class="footer-links">
            <strong>Ferramentas</strong>
            <a href="#">Início</a>
            <a href="#">Simulados ENEM</a>
            <a href="#">Exercícios para treino</a>
            <a href="#">Simulado por área</a>
        </div>

        <div class="footer-icones">
            <img src="assets/gmail.png" alt="Gmail">
            <img src="assets/acessibilidade.png" alt="Acessibilidade">
            <img src="assets/logo-footer-direita.png" alt="Logo">
        </div>
    </footer>

</div>
</body>
</html>
