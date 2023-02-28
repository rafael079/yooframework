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
 * Filtro de segurança do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Security {
    
    /**
     * Valor da requisição via GET
     * @var string 
     */
    public static $get;
    
    /**
     * Valor da requisição via POST
     * @var string 
     */
    public static $post;
    
    /**
     * Valor a ser criptografado
     * @var type 
     */
    public $encrypt;
    
    /**
     * Filtra uma requisição GET
     * @param string $get Valor da requisição
     * @return string 
     */
    public static function filter_get($get){
        self::$get = strip_tags($get);
        self::$get = trim(self::$get);
        return self::$get;
    }
    
    /**
     * Filtra uma requisição POST
     * @param string $post Valor da requisição
     * @param boolean $accept_tags Define se aceita tags html
     * @return string 
     */
    public static function filter_post($post, $accept_tags){
        self::$post = trim($post);
        if(!$accept_tags){
            self::$post = addslashes(self::$post);
            self::$post = strip_tags(self::$post);
        }
        return self::$post;
    }
    
    /**
     * Criptografa um texto em diversas formas de criptografia
     * @param string $text Texto a ser criptografado
     * @param string $set_mode Determina o modo de criptografia
     * @return string 
     */
    public function encrypt($text, $set_mode = 'sha512'){
        switch ($set_mode){
            case 'sha512':
                $this->encrypt = hash($set_mode, $text);
                break;
            case 'md5':
                $this->encrypt = md5($text);
                break;
            case 'sha1':
                $this->encrypt = sha1($text);
                break;
        }
        return $this->encrypt;
    }
    
}
