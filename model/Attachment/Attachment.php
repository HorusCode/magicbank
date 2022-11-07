<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Attachment;

use Core\Database\ActiveRecord;

class Attachment
{
    use ActiveRecord;
    protected $table = 'attachments';

    public $id;
    public $id_scores;
    public $id_contributions;
    public $days;
    public $start_money;
    public $date;
    public $status;

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
    public function getIdScores()
    {
        return $this->id_scores;
    }

    /**
     * @param mixed $id_scores
     */
    public function setIdScores($id_scores): void
    {
        $this->id_scores = $id_scores;
    }

    /**
     * @return mixed
     */
    public function getIdContributions()
    {
        return $this->id_contributions;
    }

    /**
     * @param mixed $id_contributions
     */
    public function setIdContributions($id_contributions): void
    {
        $this->id_contributions = $id_contributions;
    }


    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param mixed $days
     */
    public function setDays($days): void
    {
        $this->days = $days;
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

    /**
     * @return mixed
     */
    public function getStartMoney()
    {
        return $this->start_money;
    }

    /**
     * @param mixed $start_money
     */
    public function setStartMoney($start_money): void
    {
        $this->start_money = $start_money;
    }


}