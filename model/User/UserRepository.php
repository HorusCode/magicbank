<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\User;

use Core\Model;
class UserRepository extends Model
{
    public function addUser($params = [])
    {
        $user = new User;
        $user->setName($params['name']);
        $user->setSurname($params['surname']);
        $user->setEmail($params['email']);
        $user->setFatherName($params['father_name']);
        $user->setDateBirthday($params['date']);
        $user->setResidence($params['residence']);
        $user->setPhone($params['phone']);
        $user->setPassportNum($params['passport_num']);
        $user->setPassportSeries($params['passport_series']);
        $user->setPasswordHash($params['password_hash']);
        $user->setPassportOffice($params['passport_office']);
        $user->setAuthHash($params['auth_hash']);
        $id = $user->save();
        return $id;
    }

    public function getUser($id)
    {
        $user = new User($id);
        return $user->findOne();
    }

    public  function getUserByPassport($params)
    {
        $sql = $this->queryBuilder->select()
            ->from('users')
            ->where('passport_series', $params['passport_series'])
            ->where('passport_num', $params['passport_num'])
            ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query[0]) ? $query[0] : null;
    }

}