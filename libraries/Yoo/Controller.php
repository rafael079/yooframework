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
 * Controlador padrão do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Controller {
    
    /**
     * Nome do arquivo de layout do sistema
     * @var string 
     */
    public $layout = 'default';
    
    /**
     * Controla do renderizador do template
     * @var boolean 
     */
    public $render = TRUE;

    
    public function __construct() {
        $this->init_views();
        $this->init_forms();
        $this->init_helpers(); 
    }
    
    /**
     * Carrega a classe de templates
     * @return Yoo_Templates
     */
    public function init_views(){
        $this->view = new Yoo_Templates();
        return $this->view;
    }
    
    /**
     * Carrega a classe de Formulários
     * @return Yoo_Forms 
     */
    public function init_forms(){
        $this->form = new Yoo_Forms();
        return $this->form;
    }
    
    /**
     * Carrega a classe de Ajudantes
     * @return Yoo_Helpers 
     */
    public function init_helpers(){
        $this->helper = new Yoo_Helpers();
        return $this->helper;
    }
    
}
