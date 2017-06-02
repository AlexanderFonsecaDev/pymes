<?php

class ModeloBase extends EntidadBase
{

    private $table;

    public function __construct($table)
    {
        $this->table = (string)$table;
        parent::__construct($table);
    }

    public function ejecutarSql($query)
    {
        $query = $this->db()->query($query);
        if ($query) {
            if ($query->num_rows > 1) {
                while ($row = $query->fetch_object()) {
                    $resulset[] = $row;
                }
            } else if ($query->num_rows == 1) {
                if ($row = $query->fetch_object()) {
                    $resulset = $row;
                }
            } else {
                $resulset = false;
            }
        }else{
            $resulset = false;
        }
        return $resulset;
    }


}

?>