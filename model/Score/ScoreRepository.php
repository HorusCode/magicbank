<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Score;

use Core\Model;
class ScoreRepository extends Model
{
    public function addScore($params = [])
    {
        $score = new Score;
        $score->setIdUser($params['id_user']);
        $id = $score->save();
        return $id;
    }

    public function getScore($id)
    {
        $score = new Score($id);
        return $score->findOne();
    }

    public function getScoreByUser($id)
    {
        $sql = $this->queryBuilder->select()
            ->from('scores')
            ->where('id_user', $id)
            ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query[0]) ? $query[0] : null;
    }

    public function setMoney($params)
    {
        $sql = $this->queryBuilder
            ->update('scores')
            ->set(['money' => $params['money']])
            ->where('id', $params['id_score'])
            ->sql();
        $this->db->execute($sql, $this->queryBuilder->values);
    }

}