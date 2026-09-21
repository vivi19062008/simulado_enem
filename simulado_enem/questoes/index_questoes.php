<?php
$mensagem = "";
$acertosLinguagens = 0;
$acertosMatematica = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $respostasLinguagens = [
        "ling1" => "B",
        "ling2" => "C",
        "ling3" => "A",
        "ling4" => "D",
        "ling5" => "B"
    ];

    $respostasMatematica = [
        "mat1" => "C",
        "mat2" => "A",
        "mat3" => "D",
        "mat4" => "B",
        "mat5" => "C"
    ];

    foreach ($respostasLinguagens as $campo => $correta) {
        if (isset($_POST[$campo]) && $_POST[$campo] === $correta) {
            $acertosLinguagens++;
        }
    }

    foreach ($respostasMatematica as $campo => $correta) {
        if (isset($_POST[$campo]) && $_POST[$campo] === $correta) {
            $acertosMatematica++;
        }
    }

    $mensagem = "Simulado corrigido! Confira seu desempenho.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulado ENEM</title>
    <link rel="stylesheet" href="style_questoes.css">
</head>

<body>
<div class="pagina">

    <main class="conteudo">

        <section class="cabecalho-simulado">
            <h1>Simulado ENEM</h1>
            <p>
                Treine seus conhecimentos para o ENEM e responda às questões das diferentes áreas.
            </p>

            <div class="progresso">
                <span>0%</span>
                <div class="linha-progresso">
                    <div></div>
                </div>
                <span>100%</span>
            </div>

            <div class="barra-separadora"></div>
        </section>

        <?php if ($mensagem !== ""): ?>
            <div class="mensagem"><?= htmlspecialchars($mensagem) ?></div>
        <?php endif; ?>

        <form method="POST">

            <section class="area">
                <h2>Linguagens</h2>

                <div class="bloco-texto">
                    <p>
                        Leia atentamente os textos e responda às questões a seguir. Observe o tema,
                        o contexto apresentado e os elementos utilizados na construção dos sentidos.
                    </p>
                    <p>
                        Durante o simulado, escolha a alternativa que considera correta. O objetivo
                        desta atividade é auxiliar na preparação e no desenvolvimento dos conteúdos
                        trabalhados para o Exame Nacional do Ensino Médio.
                    </p>
                </div>

                <div class="questao">
                    <h3>Questão 1</h3>
                    <p>Qual alternativa apresenta uma interpretação adequada para o texto?</p>
                    <label><input type="radio" name="ling1" value="A"> A) Primeira alternativa.</label>
                    <label><input type="radio" name="ling1" value="B"> B) Segunda alternativa.</label>
                    <label><input type="radio" name="ling1" value="C"> C) Terceira alternativa.</label>
                    <label><input type="radio" name="ling1" value="D"> D) Quarta alternativa.</label>
                    <label><input type="radio" name="ling1" value="E"> E) Quinta alternativa.</label>
                </div>

                <div class="questao">
                    <h3>Questão 2</h3>
                    <p>Considerando os elementos linguísticos, assinale a opção correta.</p>
                    <label><input type="radio" name="ling2" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="ling2" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="ling2" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="ling2" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="ling2" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 3</h3>
                    <p>De acordo com o conteúdo apresentado, marque a resposta adequada.</p>
                    <label><input type="radio" name="ling3" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="ling3" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="ling3" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="ling3" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="ling3" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 4</h3>
                    <p>Assinale a alternativa que melhor representa a ideia principal.</p>
                    <label><input type="radio" name="ling4" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="ling4" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="ling4" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="ling4" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="ling4" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 5</h3>
                    <p>Selecione a alternativa que apresenta a resposta correta.</p>
                    <label><input type="radio" name="ling5" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="ling5" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="ling5" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="ling5" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="ling5" value="E"> E) Alternativa E.</label>
                </div>

                <div class="resultado">
                    <div class="resultado-titulo">Resultado</div>
                    <p><?= $mensagem ? "Você acertou $acertosLinguagens de 5 questões em Linguagens." : "Responda às questões para visualizar seu desempenho." ?></p>
                </div>

                <div class="desafio">
                    <strong>Desafio!</strong>
                    <span>Continue estudando e tente melhorar seu resultado!</span>
                </div>
            </section>

            <section class="area matematica">
                <h2>Matemática</h2>

                <div class="bloco-texto">
                    <p>
                        Resolva os problemas utilizando os conhecimentos matemáticos estudados.
                        Leia cada enunciado com atenção antes de selecionar uma alternativa.
                    </p>
                </div>

                <div class="questao">
                    <h3>Questão 1</h3>
                    <p>Resolva o problema apresentado e marque a alternativa correta.</p>
                    <label><input type="radio" name="mat1" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="mat1" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="mat1" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="mat1" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="mat1" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 2</h3>
                    <p>Observe os dados e escolha a alternativa adequada.</p>
                    <label><input type="radio" name="mat2" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="mat2" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="mat2" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="mat2" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="mat2" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 3</h3>
                    <p>Determine a solução do problema matemático.</p>
                    <label><input type="radio" name="mat3" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="mat3" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="mat3" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="mat3" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="mat3" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 4</h3>
                    <p>Selecione o resultado correspondente.</p>
                    <label><input type="radio" name="mat4" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="mat4" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="mat4" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="mat4" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="mat4" value="E"> E) Alternativa E.</label>
                </div>

                <div class="questao">
                    <h3>Questão 5</h3>
                    <p>Marque a alternativa correta.</p>
                    <label><input type="radio" name="mat5" value="A"> A) Alternativa A.</label>
                    <label><input type="radio" name="mat5" value="B"> B) Alternativa B.</label>
                    <label><input type="radio" name="mat5" value="C"> C) Alternativa C.</label>
                    <label><input type="radio" name="mat5" value="D"> D) Alternativa D.</label>
                    <label><input type="radio" name="mat5" value="E"> E) Alternativa E.</label>
                </div>

                <div class="resultado">
                    <div class="resultado-titulo">Resultado</div>
                    <p><?= $mensagem ? "Você acertou $acertosMatematica de 5 questões em Matemática." : "Responda às questões para visualizar seu desempenho." ?></p>
                </div>

                <div class="desafio desafio-matematica">
                    <strong>Desafio!</strong>
                    <span>Revise os conteúdos e tente novamente!</span>
                </div>
            </section>

            <button type="submit" class="finalizar">Finalizar simulado</button>
        </form>
    </main>
</div>
</body>
</html>
