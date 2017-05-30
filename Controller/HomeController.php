<?php

    require "./Model/UsuarioModel.php";
    class HomeController
    {
        public function Index()
        {
            include "./View/Index.php";
        }
        public function QuemSomos()
        {
            include "./View/Sobre.php";
        }
        public function CadastroEmailSenha()
        {
            $model = new UsuarioModel();
            include "./View/Home/Cadastro_pt1.php";
        }
        public function CadastroUsuario()
        {
            $model = new UsuarioModel();
            include "./View/Home/Cadastro_pt2.php";
        }
    }