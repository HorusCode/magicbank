<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Contribution;

use Core\Model;
class ContributionRepository extends Model
{
    public function getContributions()
    {
        $sql = $this->queryBuilder->select()
            ->from('contributions')
            ->sql();
        return $this->db->query($sql);
    }

    public function getContribution($id)
    {
        $data = new Contribution($id);
        return $data->findOne();
    }

}