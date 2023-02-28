<?php

// bloqueia o acesso direto aos arquivos php
defined('NO_ACCESS') or die('Acesso negado!');

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
 * Modelo master do sistema, extendido por todos os modelos do sistema
 * @author Studio's 4rOx.com - www.4rox.com
 */
class Yoo_Model extends Yoo_Database {

    /**
     * Armazena o valor da tabela do modelo
     * @var string
     */
    public $_table;

    /**
     * Campos com dados
     * @var array
     */
    public $_fields;

    /**
     * Metodo construtor da classe, define o nome da tabela caso não seja determinada
     */
    public function __construct() {
        parent::__construct();

        if (empty($this->_table))
            $this->_table = strtolower(get_class($this));
    }

    /**
     * Seleciona os dados no banco de dados do sistema
     * @param string $where Condição para a seleção de dados
     * @param string $orderby Ordem de exibição dos dados
     * @param string $cols Colunas a serem selecionadas
     * @param string $limit Limite de dados a exibir
     */
    public function select($where = '', $orderby = '', $cols = '*', $limit = '') {
        parent::select($this->_table, $where, $orderby, $cols, $limit);
    }

    /**
     * Atualiza os dados do banco de dados
     * @param string $data Informações a serem atualizadas
     * @param string $where Condição para a atualização
     */
    public function update($data, $where) {
        parent::update($this->_table, $data, $where);
    }

    /**
     * Busca todos os dados do sistema
     * @param string $where Condição para busca de dados
     * @param string $orderby Ordem para exibição dos dados
     * @param string $cols Colunas a serem consultadas
     * @param string $limit Limite de resultados
     * @return object
     */
    public function find_all($where = '', $orderby = '', $cols = '*', $limit = '', $tipo = 'object') {
        $orderby = (!empty($orderby)) ? $orderby : '';
        $where   = (!empty($where)) ? $where : '';
        $cols    = (!empty($cols)) ? $cols : '*';
        $limit   = (!empty($limit)) ? $limit : '';
        $this->select($where, $orderby, $cols, $limit);
        return $this->get($tipo);
    }

    /**
     * Busca dado expecificos no banco de dados do sistema
     * @param string $where Condição para busca de dados
     * @param string $orderby Ordem para exibição dos dados
     * @param string $cols Colunas a serem consultadas
     * @param string $limit Limite de resultados
     * @return object
     */
    public function find($where, $orderby = '', $cols = '*', $limit = '', $tipo = 'object') {
        $orderby = (!empty($orderby)) ? $orderby : '';
        $where   = (!empty($where)) ? $where : '';
        $cols    = (!empty($cols)) ? $cols : '*';
        $limit   = (!empty($limit)) ? $limit : '';
        $this->select($where, $orderby, $cols, $limit);
        return $this->get_first($tipo);
    }

    /**
     * Insere os dados do banco de dados
     * @param string $data Informações a serem atualizadas
     */
    public function insert($data) {
        parent::insert($this->_table, $data);
    }

    /**
     * Deleta informações do banco de dados
     * @param string $where Condição da exclusão
     */
    public function delete($where) {
        parent::delete($this->_table, $where);
    }

}

