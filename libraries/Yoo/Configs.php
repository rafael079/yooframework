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
 * Gerencia arquivos de configuração do sistema
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */
class Yoo_Configs {
    /**
     * Path absoluto para o arquivo de configuração requisitado
     * @var string
     */
    var $_file;

    /**
     * Elementos lidos do arquivo de configurações
     * @var array
     */
    public $_configs = array();

    /**
     * Obtem, manipula e gerencia os arquivos de configuração do sistema
     * @param string $file Arquivo de configuração a ser lido
     * @return array
     */
    public function __construct($file = 'Default.ini') {
        // path para o arquivo de configuração requisitado
        $this->_file = APPS_PATH . DS . 'configs' . DS . $file;
        // le o arquivo de configuração
        $this->_configs = parse_ini_file($this->_file, TRUE);
        return $this->_configs;
    }

    /**
     * Lê uma chave especifica no arquivo de configurações do sistema
     * @param string $key Variavel de configuração a ser lida
     * @param string $section Seção da váriavel de configuração a ser lida
     * @return array
     */
    public function get($key, $section = 'global') {
        return $this->_configs[$section][$key];
    }

}
