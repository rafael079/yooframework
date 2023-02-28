<?php

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
 * Controle de reuisições de formulários do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Forms {
    /**
     * Valor na requisição
     * @var string 
     */
    public $string_post;
    
    /**
     * Valor na requisição
     * @var array 
     */
    public $string_all_post = array();
        
    /**
     * verifica o tipo de requisição do formulário
     * @return boolean 
     */
    public function is_post() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            return TRUE;
        }
        return FALSE;
    }
    
    /**
     * Obtem um valor expecifica da requisição
     * @param string $key Indice da requisição onde será obtido o valor
     * @param boolean $accept_tags Define se aceita tags html
     * @return type 
     */
    public function get_post($key, $accept_tags = FALSE) {
        $this->string_post = Yoo_Security::filter_post($_POST[$key], $accept_tags);
        return $this->string_post;
    }
    
    /**
     * Obtém todos os dados de uma requisição $_POST filtrando os dados
     * @return array 
     */
    public function get_all_posts($accept_tags = FALSE) {
        $this->string_all_post = $_POST;
        foreach ($this->string_all_post as $key => $value) {
            $this->string_all_post[$key] = Yoo_Security::filter_post($value,  $accept_tags);
        }
        return $this->string_all_post;
    }
}