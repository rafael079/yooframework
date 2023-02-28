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
 * Controla requisições GET e as rotas do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Routes {
    
    /**
     * Rota do sistema
     * @var string 
     */
    public static $_router;
    
    /**
     * Segmento a ser obtido de uma rota
     * @var type 
     */
    public static $_segment = array();
    
    /**
     * Modulo da requisição
     * @var string 
     */
    public static $_module;
    
    /**
     * Controlador da requisição
     * @var string 
     */
    public static $_controller;
    
    /**
     * Ação da requisição
     * @var string 
     */
    public static $_action;
    
    /**
     * Parametros da requisição
     * @var string 
     */
    public static $_parameters;
    
    /**
     * Recebe a requisição GET do sistema
     * @param string $get Valor da requisição get
     * @return string 
     */
    public static function router($get = 'router') {
        self::$_router = Yoo_Security::filter_get($_GET[$get]);
        return self::$_router;
    }
    
    /**
     * Obtem um segmento expecifico da rota do sistema
     * @param int $segment Posição do valor a ser obtido
     * @param string $get Rota onde o valor será obtido
     * @return string 
     */
    public static function segment($segment, $get = 'router'){
        self::$_segment = explode('/', self::router($get));
        return self::$_segment[$segment];
    }
    
    /**
     * Obtem o modulo na requisição de rotas do sistema
     * @return string 
     */
    public static function module(){
        self::$_module = self::segment(0);
        self::$_module = !empty (self::$_module) ? self::$_module : 'index';
        return self::$_module;
    }
    
    /**
     * Obtem o controlador na requisição de rotas do sistema
     * @return string 
     */
    public static function controller(){
        self::$_controller = self::segment(1);
        self::$_controller = !empty (self::$_controller) ? ucfirst(self::$_controller) . 'Controller' : 'IndexController';
        return self::$_controller;
    }
    
    /**
     * Obtem a ação na requisição de rotas do sistema
     * @return string 
     */
    public static function action(){
        self::$_action = self::segment(2);
        self::$_action = !empty (self::$_action) ? self::$_action . 'Action' : 'indexAction';
        return self::$_action;
    }
    
    /**
     * Obtem o parametro na requisição de rotas do sistema
     * @return string 
     */
    public static function parameters($segment = 3){
        self::$_parameters = self::segment($segment);
        self::$_parameters = !empty (self::$_parameters) ? self::$_parameters : NULL;
        return self::$_parameters;
    } 
}
