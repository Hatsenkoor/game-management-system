<?php

namespace App\Models;

use CodeIgniter\Model;

class AllianceModel extends Model
{
    protected $table = 'alliances';

    public function getAlliances($slug = false)
    {
        if ($slug === false) 
        {
            return $this->findAll();
        }

        return $this->where(['Game_ID' => $slug])->first();
    }
    public function getAllianceById($id)
    {
        return $this->where(['Game_ID'=>$id])->first();
    }
}