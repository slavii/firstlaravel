<?php

namespace App\Repositories;

use App\Models\Gear;

class GearRepository
{
    private $gear;

    public function __construct(Gear $gear)
    {
        $this->gear = $gear;
    }

    public function findById($id)
    {
        return $this->gear->find($id);
    }

    public function findAll()
    {
        return $this->gear->all();
    }

    public function findAllIds()
    {
        return $this->gear->all()->pluck('id');
    }
}