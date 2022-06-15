<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básicos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                            Ola PHP
                        </a>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                            Integração HTML
                        </a>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                            Integração CSS
                        </a>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                            Comentarios
                        </a>
                                    </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=precedencia">
                           Desafio Precedência
                        </a>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                           Tipo String
                        </a>
                    </li>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                           Tipo Booleano
                        </a>
                    </li>
                </ul>
            </div>
                <div class="modulo azul">
                    <h3>Variaveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                          Variáveis
                        </a>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                          Desafio Equacao
                        </a>
                    </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                          Atribuições
                        </a>
                    </li>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>