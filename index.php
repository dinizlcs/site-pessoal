<?php
    require_once "php/Base.class.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio-Lucas Diniz</title>

    <?php echo Base::carregarLinks(); ?>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Menu: Telas menores -->
    <nav>
        <img class="foto-perfil" src="img/perfil.jpg" alt="Foto de perfil">
        <button id="btn-hamburguer"><i class="fa-solid fa-bars"></i></button>
        <div id="itens-menu">
            <?php echo Base::carregarAreas(); ?>
        </div>
    </nav>

    <!-- Menu: Telas maiores -->
    <aside>
        <img class="foto-perfil" src="img/perfil.jpg" alt="Foto de perfil">
        <div id="areas-perfil">
            <?php echo Base::carregarAreas(); ?>
        </div>
    </aside>
    
    <!-- Conteúdo da página -->
    <main>
        <div id="container-conteudo" class="centralizar-itens-h">
            <h2>Lucas Diniz de Oliveira</h2>
            <?php
                $idadeAtual = date("Y") - 2003;

                echo <<<HTML
                    <p>
                        Atualmente tenho $idadeAtual anos, possuo formação técnica em <strong>Análise e Desenvolvimento de Sistemas (ADS)</strong> pelo Senac e estou cursando <strong>Segurança da Informação</strong> pela FMU.
                    </p>
                    <p>
                        Meu primeiro contato com programação ocorreu aos 15 anos, quando comecei a desenvolver soluções em planilhas do Excel utilizando Visual Basic for Applications (VBA). Por meio do VBA, desenvolvo formulários que facilitam o preenchimento de dados, além de rotinas voltadas para a organização de informações, entre outras funcionalidades. Essa continua sendo a linguagem com a qual possuo maior domínio.
                    </p>
                    <p>
                        Em 2019, iniciei minha trajetória no <strong>desenvolvimento web</strong> por meio de cursos de <strong>HTML5 e CSS3</strong>. Posteriormente, aprofundei meus conhecimentos web aprendendo <strong>JavaScript e JQuery</strong>. Em 2021, direcionei meus estudos para o <strong>desenvolvimento backend</strong>, passando a utilizar <strong>PHP</strong>. Em 2024, concluí o curso técnico de ADS aprendendo principalmente <strong>Java e MySQL</strong> e, nesse período, decidi direcionar de vez minha carreira para o funcionamento interno dos sistemas, em vez de focar na parte visual. Em outras palavras, tenho maior interesse em garantir que as funcionalidades de um sistema operem corretamente, como o envio e o armazenamento das informações inseridas, do que em atuar diretamente na interface visual.
                    </P>
HTML;
            ?>
        </div>
    </main>
</body>
</html>