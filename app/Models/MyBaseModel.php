<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;
use Override;

class MyBaseModel extends Model
{
    #[Override]
    public function __construct()
    {
        parent::__construct(); // Construtor do Model
    }

    protected function escapeDataXSS (array $data){
        return esc($data);
    }

    protected function setSQLMode(){
        $this->db->query("set session sql_mode=''");
    }
}