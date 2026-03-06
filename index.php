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
        <div id="container-conteudo">
            <p>Conteúdo da página aqui</p>
        </div>
    </main>
</body>
</html>