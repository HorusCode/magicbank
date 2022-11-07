<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Attachhistory;

use Core\Database\ActiveRecord;

class Attachhistory
{
    use ActiveRecord;
    protected $table = 'attach_history';

    public $id;
    public $id_score;
    public $id_attachment;
    public $came_money;
    public $date;

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
    public function getIdScore()
    {
        return $this->id_score;
    }

    /**
     * @param mixed $id_score
     */
    public function setIdScore($id_score): void
    {
        $this->id_score = $id_score;
    }

    /**
     * @return mixed
     */
    public function getIdAttachment()
    {
        return $this->id_attachment;
    }

    /**
     * @param mixed $id_attachment
     */
    public function setIdAttachment($id_attachment): void
    {
        $this->id_attachment = $id_attachment;
    }

    /**
     * @return mixed
     */
    public function getCameMoney()
    {
        return $this->came_money;
    }

    /**
     * @param mixed $came_money
     */
    public function setCameMoney($came_money): void
    {
        $this->came_money = $came_money;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }





}