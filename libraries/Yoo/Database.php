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
 * Classe para manipulação de dados do banco de dados Mysql
 * @author YOO Internet LTDA - www.yoointernet.com.br
 * @package YOO_CORE
 * @copyright Copyright © 2011, YOO Internet LTDA.
 */

abstract class Yoo_Database {

    /**
     * Endereço de conexão do servidor mysql
     * @var string
     */
    public $host = 'localhost';

    /**
     * Usuário da conexão com banco de dados
     * @var string
     */
    public $user = 'root';

    /**
     * Senha da conexão com banco de dados
     * @var string
     */
    public $pass = '';

    /**
     * Nome do banco de dados
     * @var string
     */
    public $db = 'uecip';

    /**
     * Armazena a conexão com banco de dados
     * @var string
     */
    private $_conn;

    /**
     * Armazena a ultima consulta no banco de dados
     * @var string
     */
    private $_last_query;

    /**
     * Armazena a ultimos dados da consulta no banco de dados
     * @var string
     */
    private $_last_sql;

    /**
     * Metodo construtor da classe que efetua a conexão com banco de dados
     * @return boolean
     */
    public function __construct(){
        $this->_conn = mysql_connect($this->host, $this->user, $this->pass) or new Yoo_Errors('Erro ao conectar com banco de dados', 2100);
        if (is_resource($this->_conn)) {
            mysql_select_db($this->db, $this->_conn) or die(new Yoo_Errors('Erro ao selecionar o banco de dados', 2100));
            mysql_set_charset('utf8');
	    return $this->_conn;
        }
        return false;
    }


    /**
     * Executa o comando sql
     * @param string $sql Comando a ser executado
     * @return object
     */
    public function query($sql) {
        is_resource($this->_conn) || $this->__construct();
        $this->_last_sql = $sql;
        return $this->_last_query = mysql_query($sql, $this->_conn) or new Yoo_Errors(mysql_error(), 2100);
    }

    /**
     * Seleciona os dados no banco de dados do sistema
     * @param string $table Tabela a ser consultada
     * @param string $where Condição para a seleção de dados
     * @param string $orderby Ordem de exibição dos dados
     * @param string $cols Colunas a serem selecionadas
     * @param string $limit Limite de dados a exibir
     * @return object
     */
    public function select($table, $where = '', $orderby = '', $cols = '*', $limit = '') {
        $orderby = !empty($orderby) ? "ORDER BY $orderby" : '';
        $where   = !empty($where) ? "WHERE $where" : '';
        $limit   = !empty($limit) ? "LIMIT $limit" : '';
        return $this->query("SELECT $cols FROM $table $where $orderby $limit");
    }

    /**
     * Insere os dados do banco de dados
     * @param string $table Tabela a ser efetuada a atualização
     * @param string $data Informações a serem atualizadas
     * @return object
     */
    public function insert($table, $data) {
	if (!is_array($data))
            return false;
        foreach ($data as $col => $value)
            $data[$col] = $this->escape($value);
        $cols = array_keys($data);
        $vals = array_values($data);
        $this->query("INSERT INTO $table (" . implode(',', $cols) . ") VALUES (" . implode(',', $vals) . ")");
        return mysql_insert_id();
    }

    /**
     * Atualiza os dados do banco de dados
     * @param string $table Tabela a ser efetuada a atualização
     * @param string $data Informações a serem atualizadas
     * @param string $where Condição para a atualização
     * @return object
     */
    public function update($table, $data, $where) {
        if (!is_array($data))
            return false;
        foreach ($data as $col => $value) {
            $vals[] = $col . ' = ' . $this->escape($value);
        }
        return $this->query("UPDATE $table SET " . implode(',', $vals) . " WHERE $where");
    }

    /**
     * Deleta informações do banco de dados
     * @param string $table Tabela a ser efetuada a exclusão
     * @param string $where Condição da exclusão
     * @return object
     */
    public function delete($table, $where) {
        return $this->query("DELETE FROM $table WHERE $where");
    }

    /**
     * Obtem os dados da consulta no banco de dados
     * @param string $type Tipo de consulta efetuada
     * @return string
     */
    public function get($type = 'object') {
        $type = $type == 'object' ? 'mysql_fetch_object' : 'mysql_fetch_array';
        if (is_resource($this->_last_query)) {
            while ($rows = $type($this->_last_query))
                $results[] = $rows;
        }
        else
            $this->error();
        return (!empty($results)) ? $results : null;
    }

    /**
     * Obtem o primeiro dado da consulta no banco de dados
     * @param string $type Tipo de consulta efetuada
     * @return string
     */
    public function get_first($type = 'object') {
        $type = $type == 'object' ? 'mysql_fetch_object' : 'mysql_fetch_array';
        if (is_resource($this->_last_query))
            return $type($this->_last_query);
        else
            throw new Yoo_Errors('Erro ao obter dados do banco de dados', 2100);
    }

    /**
     * Filtra as informações a serem pocessadas para evitar falhas na segurança
     * @param string $data Informação a ser filtrada
     * @return string
     */
    public function escape($data) {
        switch (gettype($data)) {
            case 'string':
                $data = "'" . mysql_real_escape_string($data) . "'";
                break;
            case 'boolean':
                $data = (int) $data;
                break;
            case 'double':
                $data = sprintf('%F', $data);
                break;
            default:
                $data = ($data === null) ? 'null' : $data;
        }
        return (string) $data;
    }

}

