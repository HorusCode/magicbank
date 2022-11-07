<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Attachhistory;

use Controller\MoneyController;
use Core\Model;

class AttachhistoryRepository extends Model
{
    public function getAttachhistory()
    {
        $sql = $this->queryBuilder->select()
            ->from('attach_history')
            ->sql();
        return $this->db->query($sql);
    }


    public function getHistoryByAttachment($id)
    {
        $sql = $this->queryBuilder->select()
            ->from('attach_history')
            ->where('id_attachment', $id)
            ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query) ? $query : null;
    }

    public function getHistoryByScore($id)
    {
        $sql = $this->queryBuilder->select()
            ->from('attach_history')
            ->where('id_score', $id)
            ->orderBy('date','DESC')
            ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query) ? $query : null;
    }

    public function setAttachhistory($params)
    {
        $history = new Attachhistory();
        $history->setIdScore($params['id_score']);
        $history->setIdAttachment($params['id_attachment']);
        $history->setCameMoney($params['money']);
        $history->save();
    }

}