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
 * Metodos de ajuda no sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Helpers {

    /**
     * Redireciona para uma página expecifica
     * @param string $Url 
     */
    public function redirect($Url = '') {
        $Configs = new Yoo_Configs();
        header("location:" . $Configs->get('url') . '/' . $Url);
    }

    /**
     * Redireciona com mensagem
     * @param string $Message
     * @param string $Url
     * @param string $Class 
     */
    public function redirect_message($message, $url = '', $class = '') {
        if (!isset($_SESSION['flash']['messages'])) {
            $_SESSION['flash']['messages'] = array();
            unset($_SESSION['flash']['messages']);
        }
        session_start();
        $_SESSION['flash']['messages']['data'] = $message;
        $_SESSION['flash']['messages']['url'] = $url;
        $_SESSION['flash']['messages']['class'] = $class;
        if ($url != '') {
            $Configs = new Yoo_Configs();
            header("Location:" . $Configs->get('url') . '/' . $url);
        }
    }

}