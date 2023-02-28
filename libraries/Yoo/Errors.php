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
 * Controle de erros do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Errors {

    public function __construct($message, $type = 404, $log = FALSE) {
        echo '<html><head><title>Desculpe! Ocorreu um erro no sistema - YOO Framework</title><head>';
        echo '<body><div style="font-size: 12px; border: 2px solid #e6e6e6; padding: 10px; font-family: Arial; text-shadow: #c0c0c0 1px 1px 1px;" >';
        echo '<span style="font-size: 20px; display: block; margin-bottom: 10px;"><b>Erro Fatal - Desculpe!</b></span>';
        echo '<b style="color: red;">Ocorreu um erro no sistema!</b><br />';
        echo $message;
        echo '<span style=" margin-top: 10px; padding-top: 10px; display: block; border-top: 1px dotted #c0c0c0">
              Entre em contato com o suporte local<br /></body></html>';
        exit();
    }

}
