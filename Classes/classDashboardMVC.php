<?php

class classDashboardMVC
{

    function __construct()
    {
        //Retira a variavel que está a ser inserida no url pelo metodo get, e insere num array
        //Se a variavel estiver vazia retorna null
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        //Retorna uma string com espaço em branco ou com os caracteres inseridos no final da string até ao simbolo "/"
        $url = rtrim($url, '/');
        //Divide o array sempre que exista o simbolo "/"
        $url = explode('/', $url);
//        print_r($url);
//        echo '<br>';

        //Se o valor do url não tiver nada é redirecionado automaticamente para o login
        if (empty($url[0])) {
            require 'Controllers/index.php';
            $controller = new Index();
            $controller->index();
            //Retorna falso para nao executar o codigo que está por baixo
            return false;
        }

        $file = 'Controllers/' . $url[0] . '.php';
        //Verifica se o ficheiro existe
        if (file_exists($file)) {
            //Acede ao home que está dentro do controlador e cria um novo objeto ex: home
            require $file;
        } else {
            $this->error();
            return false;
        }


        //Acede ao home que está dentro do controlador e cria um novo objeto ex: home
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        //Verifica primeiro se a variavel foi declarada e se é diferente de null
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }

    function error() {
        require ABSPATH . '/Controllers/errorFile.php';
        $controller = new ErrorFile();
        $controller->index();
        return false;
    }
}