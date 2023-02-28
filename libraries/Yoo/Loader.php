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
 * Classe para carregamento automático das bibliotecas de classe do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */

class Yoo_Loader {
    
    /**
     * Armazena o objeto
     * @var Yoo_Loader
     */
    public static $loader;
    
    public function __construct() {
        // registra nossos metodos autoloads
        spl_autoload_register(array($this, 'models'));
        spl_autoload_register(array($this, 'helpers'));
        spl_autoload_register(array($this, 'libraries'));
    }
    
    /**
     * Instancia a classe
     * @return Yoo_Loader 
     */
    public static function init() {
        if (self::$loader == NULL)
            self::$loader = new self();
        return self::$loader;
    }
    
    /**
     * Carrega os modelos requisitados
     * @param string $model Nome do arquivo a ser carregado
     */
    public function models($model) {
        $file = APPS_PATH . DS  . 'models' . DS . $model . '.php';
        if (file_exists($file)){
            require($file);
        }
    }
    
    /**
     * Carrega os ajudantes requisitados
     * @param string $helper Nome do arquivo a ser carregado
     */
    public function helpers($helper) {
        $file = APPS_PATH . DS  . 'helpers' . DS . $helper . '.php';
        if (file_exists($file)){
            require($file);
        }
    }
    
    /**
     * Carrega os arquivos da biblioteca principal
     * @param string $library  Nome do arquivo a ser carregado
     */
    public function libraries($library) {
        $library = str_replace('_', DS, $library);
        $file = LIBS_PATH . DS . $library . '.php';
        if (file_exists($file)) {
            require($file);
        }
    }    
    
}

