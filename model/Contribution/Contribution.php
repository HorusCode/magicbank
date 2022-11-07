<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Contribution;

use Core\Database\ActiveRecord;

class Contribution
{
    use ActiveRecord;
    protected $table = 'contributions';

    public $id;
    public $name;
    public $percent;
    public $year;
    public $money;
    public $replenished;
    public $taken;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param mixed $percent
     */
    public function setPercent($percent): void
    {
        $this->percent = $percent;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getReplenished()
    {
        return $this->replenished;
    }

    /**
     * @param mixed $replenished
     */
    public function setReplenished($replenished): void
    {
        $this->replenished = $replenished;
    }

    /**
     * @return mixed
     */
    public function getTaken()
    {
        return $this->taken;
    }

    /**
     * @param mixed $taken
     */
    public function setTaken($taken): void
    {
        $this->taken = $taken;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money): void
    {
        $this->money = $money;
    }


}