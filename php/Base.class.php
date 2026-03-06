<?php
    class Base{
        private static $areasMenu = [
            "sobre" => "index.php",
            "conhecimentos" => "conhecimentos.php",
            "projetos" => "projetos.php",
            "info. serviços" => "info-servicos.php"
        ];

        public static function carregarLinks(){
            return <<<HTML
                <link rel="stylesheet" href="css/layout.css">
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                <script src="js/script.js"></script>
                <script src="https://kit.fontawesome.com/ea18f1896e.js" crossorigin="anonymous"></script>
                <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
HTML;
        }

        public static function carregarAreas(){
            $html = "";

            foreach(self::$areasMenu as $texto => $refArquivo){
                $definirClasse = (basename($_SERVER["PHP_SELF"]) === $refArquivo) ? "area-perfil area-ativa" : "area-perfil"; 
                $html .= "<a class='$definirClasse' href='$refArquivo'>$texto</a>";
            }

            return $html;
        }
    }
?>