<?php

defined('NO_ACCESS') or die('Acesso negado ao este arquivo');

// requisita o arquivo principal do Smarty template
require_once('Smarty/Smarty.class.php');

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
 * Templates do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Templates extends Smarty {

    /**
     * Controlador requisitado
     * @var string 
     */
    public $controller;

    /**
     * Ação requisitada
     * @var string 
     */
    public $action;

    /**
     * Arquivo requisitado
     * @var string 
     */
    public $file;
    
        /**
     * Armazena o arquivo javascript personalizado da página
     * @var string
     */
    public $js = array();

    /**
     * Armazena o arquivo javascript personalizado da página
     * @var string
     */
    public $css = array();

    public function __construct() {
        parent::__construct();
        $this->setTemplateDir(APPS_PATH . DS . 'templates');
        $this->addConfigDir(APPS_PATH . DS . 'configs');
        $this->cache_dir      = APPS_PATH . DS . 'temp/cache/';
        $this->compile_dir    = APPS_PATH . DS . 'temp/templates_c/';
        $this->compile_check  = TRUE;
        $this->debugging      = FALSE;
        $this->caching        = FALSE;
        $this->cache_lifetime = 1140;
        $this->configLoad('default.ini', 'global');
    }

    /**
     * Renderiza os arquivos de template
     */
    public function set_render() {
        $this->controller = explode('Controller', Yoo_Routes::controller());
        $this->action = explode('Action', Yoo_Routes::action());
        $this->file = 'modules' . DS . Yoo_Routes::module() . DS . strtolower($this->controller[0]) . DS . $this->action[0] . '.tpl';
        if (file_exists(APPS_PATH . DS . 'templates' . DS . $this->file)) {
            $this->assign('file_request', $this->file);
        } else {
            throw new Yoo_Errors('Não encontramos o template <b>' . $this->file . '</b> requisitado.');
        }
    }

    /**
     * Renderiza o layout requisitado
     * @param string $layout Layout requisitado
     */
    public function set_layout($layout) {
        if (file_exists(APPS_PATH . DS . 'templates' . DS . 'layouts' . DS . $layout . '.tpl')) {
            $this->display('layouts' . DS . $layout . '.tpl');
        } else {
            throw new Yoo_Errors('O arquivo do layout <b>templates/layouts/' . $layout . '.tpl</b> não existe');
        }
    }

    /**
     * Manipulando arquivo javascript personalizado
     * @param $file Arquivo javascript a ser carregado pelo sistema
     */
    public function load_js($file = null) {
        if (is_array($file)) {
            foreach ($file as $f)
                $this->js[] = $f;
        }else
            $this->js[] = $file;
        $javascript = '';
        foreach ($this->js as $js) {
            $Configs     = new Yoo_Configs();
            $javascript .= '<script type="text/javascript" src="' . $Configs->get('url') . '/media/js/' . $js . '.js"></script>';
        }
        $this->assign('module_javascript', $javascript);
    }

    /**
     * Manipulando arquivo de folha de estilo personalizado
     * @param $file Arquivo de estilo a ser carregado pelo sistema
     */
    public function load_css($file = null) {
        if (is_array($file)) {
            foreach ($file as $f)
                $this->css[] = $f;
        }else
            $this->css[] = $file;
        $stilo = '';
        foreach ($this->css as $css) {
            $Configs = new Yoo_Configs();
            $stilo  .= '<link type="text/css" media="screen" rel="stylesheet" href="' . $Configs->get('url') . '/media/css/' . $css . '.css"/>';
        }
        $this->assign('module_css', $stilo);
    }

}
