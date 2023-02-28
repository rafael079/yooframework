<?php

defined('NO_ACCESS') or die('Acesso negado ao este arquivo');

/**
 * Arquivo criado e desenvolvido por YOO Internet ltda.
 * Todos os Direitos reservados. É expressamente proibida a venda troca e 
 * utilização deste sistema sem autorização prévia do fabricante.
 * 
 * Acesse: www.yoointernet.com.br
 * Contato: sac@yoointernet.com.br
 * 
 */

/**
 * Cria e roda a aplicacação
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Application {
    
    /**
     * Caminho para o arquivo requisitado
     * @var type 
     */
    private $file;
    
    /**
     * Controlador requisitado
     * @var string 
     */
    private $controller;

    public function __construct() {
        require 'Yoo/Loader.php';
        return Yoo_Loader::init();
    }

    /**
     * Roda a aplicação organizando as rotas e instanciando as classes requisitadas
     */
    public function run() {
        
        /** eliminar as mensagens de sistema */
        $Rotas = new Yoo_Routes();
        if ($_SESSION['flash']['messages']['url'] != $Rotas->router()) {
            $_SESSION['flash'] = array();
            unset($_SESSION['flash']);
        }
        
        $this->file = APPS_PATH . DS . 'modules' . DS . Yoo_Routes::module() . DS . Yoo_Routes::controller() . '.php';
        if (file_exists($this->file)) {
            require($this->file);
            if (class_exists(Yoo_Routes::controller())) {
                $this->controller = Yoo_Routes::controller();
                $this->controller = new $this->controller();
                if (method_exists($this->controller, Yoo_Routes::action())) {
                    $this->controller->{Yoo_Routes::action()}(Yoo_Routes::parameters());
                    if ($this->controller->render == TRUE) {
                        $this->controller->view->set_render();
                        $this->controller->view->set_layout($this->controller->layout);  
                    }
                } else {
                    throw new Yoo_Errors('O Método "<b>' . Yoo_Routes::action() . '</b>" requisitado não existe');
                }
            } else {
                throw new Yoo_Errors('A classe "<b>' . Yoo_Routes::controller() . '</b>" está com o nome incorreto!');
            }
        } else {
            throw new Yoo_Errors('O Controlador "<b>' . Yoo_Routes::module() . DS . Yoo_Routes::controller() . '.php</b>" requisitado não existe', 404);
        }
    }
    
}
