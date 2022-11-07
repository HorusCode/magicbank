<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Attachment;

use Core\Model;

class AttachmentRepository extends Model
{
    public function getAttachments()
    {
        $sql = $this->queryBuilder->select()
            ->from('attachments')
            ->sql();
        return $this->db->query($sql);
    }

    public function getAttachment($id)
    {
        $data = new Attachment($id);
        return $data->findOne();
    }

    public function getAttachmentByScore($id)
    {
        $sql = $this->queryBuilder->select()
            ->from('attachments')
            ->where('id_scores', $id)
            ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query[0]) ? $query[0] : null;
    }

    public function getAttachmentsByScore($id)
    {
        $sql = $this->queryBuilder->select()
            ->from('attachments')
            ->where('id_scores', $id)
            ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query) ? $query : null;
    }

    public function setAttachment($params)
    {
        $attach = new Attachment();
        $attach->setIdScores($params['id_score']);
        $attach->setIdContributions($params['id_contribution']);
        $attach->setDays($params['days']);
        $attach->setStartMoney($params['money']);
        $id = $attach->save();
        return $id;
    }

}