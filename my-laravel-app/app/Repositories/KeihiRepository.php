<?php


namespace App\Repositories;

use Keihi\Repositories\KeihiInterface;
use Keihi\Keihi;

class KeihiRepository
{
    /**
     * @var Keihi
     */
    protected $keihi;

    /**
     * KeihiRepository constructor.
     * @param Keihi $keihi
     */
    public function __construct(keihi $keihi)
    {
        $this->keihi = $keihi;
    }

    /**
     * @param $id
     */
    public function get($id)
    {

    }
}