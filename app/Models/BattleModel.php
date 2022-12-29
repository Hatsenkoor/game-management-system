<?php

namespace App\Models;

use CodeIgniter\Model;

class BattleModel extends Model
{
    protected $table = 'battles';

    public function getBattles($slug = false)
    {
        if ($slug === false) 
        {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function getUserBattles($slug = false)
    {
        if ($slug === false) 
        {
            return $this->findAll();
        }

        return $this->where(['Attacker' => $slug])->findall();
    }
}