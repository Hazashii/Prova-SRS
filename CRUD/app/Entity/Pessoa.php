<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Pessoa
{

    /**
     * Identificador único da pessoa
     * @var integer
     */
    public $PES_ID;

    /**
     * Nome da Pessoa
     * @var string
     */
    public $NOME;

    /**
     * CPF da pessoa
     * @var string
     */
    public $CPF;

    /**
     * Idade da Pessoa
     * @var integer
     */
    public $IDADE;

    /**
     * Telefone da Pessoa
     * @var String
     */
    public $TELEFONE;

    /**
     * Método responsavel por cadastrar um novo cadastro no banco
     */
    public function cadastrar()
    {
        //INSERIR A CADASTRO NO BANCO
        $obDatabase = new Database('PESSOA');
        $obDatabase->insert([
            'nome' => $this->NOME,
            'cpf' => $this->CPF,
            'idade' => $this->IDADE,
            'telefone' => $this->TELEFONE,

        ]);

        //RETORNAR SUCESSO
        return true;
    }

    /**
     *  Método responsável por atualizar a vaga no banco
     *  @return boolean
     */
    public function atualizar()
    {
        return (new Database('PESSOA'))->update('PES_ID = ' . $this->PES_ID, [
            'nome' => $this->NOME,
            'cpf' => $this->CPF,
            'idade' => $this->IDADE,
            'telefone' => $this->TELEFONE,

        ]);
    }


    /**
     * Método responsavel por excluir a pessoa do banco de dados
     * @return boolean
     */
    public function excluir()
    {
        return (new Database('PESSOA'))->delete('PES_ID = ' . $this->PES_ID);
    }

    /**
     * Método responsável por obter as pessoas do banco de dados
     * 
     */
    public static function getPessoas($where = null, $order = null)
    {
        return (new Database('PESSOA'))->select($where, $order)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsavel por obter a media da idade no banco de dados
     */

    public static function getMedia()
    {
        return (new Database('PESSOA'))->media()
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Método responsavel por obter numeros de pessoas cadastradas no banco de dados
     */
    public static function getCount()
    {
        return (new Database('PESSOA'))->count()
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }


    /**
     * Método responsavel por buscar uma vaga com base em seu ID
     * @param integer $PES_ID
     * @return Pessoa
     */
    public static function getPessoa($PES_ID)
    {
        return (new Database('PESSOA'))->select('PES_ID = ' . $PES_ID)->fetchObject(self::class);
    }
}
