<?php

// bloqueia o acesso direto a páginas php do sistema
defined('NO_ACCESS') or die('Não é permitido acesso direto a este arquivo');

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
 * Classe responsável pelo gerenciamento de sessões do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Sessions {

    /**
     * Valor de uma determina sessão
     * @var string 
     */
    public $_setSession;

    /**
     * Valor a ser comprado nas permissões da sessão
     * @var array 
     */
    private $_keyToCompare = array();

    /**
     * Obtém os dados escritos em uma determinada seção
     * @param string $getSession Índice da da variável de sessão existente
     * @return string
     */
    public function getSession($getSession) {
        $this->_setSession = $_SESSION[$getSession];
        return $this->_setSession;
    }

    /**
     * Escreve em uma determina variável da seção
     * @param string $setKeySession Determina o índice da variável de sessão
     * @param string $setValue Determina o valor a ser escrito
     * @return string 
     */
    public function writeSession($setKeySession, $setValue) {
        $_SESSION[$setKeySession] = $setValue;
        return $_SESSION[$setKeySession];
    }

    /**
     * Verifica se uma determinada seção existe
     * @param type $_checkSessionInit
     * @param type $_setRedirectToLogin 
     */
    public function checkSessionExists($_checkSessionInit = 'set_active_access') {
        if ($this->getSession($_checkSessionInit)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Controla as permissões dos usuários logados no sistema
     * @param string|array $_itemToCheck Itens a serem checados nas permissões do usuário
     * @param string $toRedirect Redirecionamento em caso de acesso proibido
     * @param string $_sessionKeyToCopare dados a serem comparadas nas permissões do usuários
     */
    public function checksSessionPermission($_itemToCheck, $toRedirect = '', $_sessionKeyToCopare = 'set_permission') {
        // divide as informaçoes sobre as permissões
        $this->_keyToCompare = explode(',', $this->getSession($_sessionKeyToCopare));
        // verifica se os valores existem nas permissões
        if (!(in_array(1, $this->_keyToCompare))) {
            if (!(in_array($_itemToCheck, $this->_keyToCompare, TRUE))) {
                $helpers = new Core_Helpers();
                $helpers->redirectWithMessage('Você não tem permissão para acessar esta página! <br/>Contate o administrador do sistema.', $toRedirect, TRUE, 'erros');
            }
        }
    }

    /**
     * Verifica as permissões do usuário cadastrado
     * @param array $dadosArray Dados a serem checados
     * @param string $redirecionamento Redirecionamento em caso de erros
     */
    public function verificaSetorPermissoes($dadosArray, $redirecionamento = '') {

        if ($_SESSION['login']['nivel'] == 0 || $_SESSION['login']['nivel'] == 3) {

            // verifica se o setor do usuário correspondente a página acessada
            if ($dadosArray['setor'] != $_SESSION['login']['setor']) {
                // instancia o sistema de ajuda
                $helpers = new Core_Helpers();
                // redireciona para página inicial com mensagem de erro
                $helpers->redirectWithMessage('Desculpe! Você não tem permissão de acesso neste setor!', $redirecionamento, TRUE, 'erros');
            }

            if ($_SESSION['login']['nivel'] != 3) {
                
                // divide as permissões do usuário
                $permissoes = explode(',', $_SESSION['login']['permissoes']);
                // define as valores das permissões
                foreach ($permissoes as $key => $value) {
                    // define os valores e indices
                    $valor[$value] = $value;
                }
                // verifica se o usuário tem em suas permissões pagina acessada
                if (!(array_key_exists($dadosArray['pagina'], $valor))) {
                    // instancia o sistema de ajuda
                    $helpers = new Core_Helpers();
                    // redireciona para página inicial com mensagem de erro
                    $helpers->redirectWithMessage('Desculpe! Você não tem permissão para acessar esta página!', $redirecionamento, TRUE, 'erros');
                }
            }
        }
    }

}
