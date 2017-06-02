<?php

class ClienteModel extends ModeloBase{
    private $table;

    public function __construct($table){
        $this->table="cliente";
        parent::__construct($this->table, $table);
    }

}