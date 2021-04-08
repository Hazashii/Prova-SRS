<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database
{
    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     * 
     */
    const NAME = 'C:\Users\igor_\Documents\GitHub\Prova-SRS\Banco\SRSDB.FDB;';

    /**
     *  Usuário do banco de dados
     * @var string
     */
    const USER = 'SYSDBA';

    /**
     * Senha do banco de dados
     * @var string
     */
    const PASS = 'masterkey';

    /**
     * Nome da tabela
     * @var string
     */
    private $table;

    /**
     * Instancia de conexão com banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @param string
     */
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsavel por criar uma conexão com banco de dados
     */
    private function setConnection()
    {
        try {  
            $this->connection = new PDO('firebird:dbname=' . self::HOST . ':' . self::NAME . 'charset:WIN1252', self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    /**
     *  Método responsável por executar queries dentro do banco de dados
     *  @param string $query
     *  @param array $params
     *  @return PDOStatement
     */

    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    /**
     * Método responsável por inserir dados no banco
     * @param array $values [field => value]
     * @return integer ID inserido
     */
    public function insert($values)
    {
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds  = array_pad([], count($fields), '?');

        //MONTA A QUERY
        $query = 'INSERT INTO ' . $this->table . '(' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

        //EXECUTA O INSERT
        $this->execute($query, array_values($values));
    }



    /**
     * Método responsavel por executar uma consulta no banco
     * @param string $where
     * @param string $order
     * @return PDOStatement
     */
    public function select($where = null, $order = null)
    {
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';


        //MONTA QUERY
        $query = 'SELECT * FROM ' . $this->table . ' ' . $where . ' ' . $order;

        //EXECUTA A QUERY
        return $this->execute($query);
    }

    /**
     * Método responsavel por executar a media
     */
    public function media()
    {
        //MONTA QUERY MEDIA
        $queryMed = 'SELECT AVG(IDADE) FROM ' . $this->table;
        return $this->execute($queryMed);
    }

    /**
     * Método responsavel por executar para contar as pessoas    
     */
    public function count()
    {
        //MONTA QUERY COUNT
        $queryCount = 'SELECT COUNT(NOME) FROM ' . $this->table;
        return $this->execute($queryCount);
    }


    /**
     * Método responsável por executar atualizações no banco de dados
     * @param string $where
     * @param array $values
     * @return boolean
     */
    public function update($where, $values)
    {
        //DADOS DA QUERY
        $fields = array_keys($values);

        //MONTA A QUERY
        $query = 'UPDATE ' . $this->table . ' SET ' . implode('=?,', $fields) . '=? WHERE ' . $where;

        //EXECUTA A QUERY
        $this->execute($query, array_values($values));

        //RETORNA SUCESSO
        return true;
    }

    /**
     * Método responsavel por excluir dados do banco
     * @param string $where
     * @return boolean
     */
    public function delete($where)
    {
        //MONTA A QUERY
        $query = 'DELETE FROM ' . $this->table . ' WHERE ' . $where;

        //EXECUTA A QUERY
        $this->execute($query);

        //RETORNA SUCESSO
        return true;
    }
}
