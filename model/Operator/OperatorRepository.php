<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Operator;

use Core\Model;
class OperatorRepository extends Model
{
    public function addUser($params = [])
    {
        $user = new Operator();
        $user->setName($params['name']);
        $user->setSurname($params['surname']);
        $user->setEmail($params['email']);
        $user->setFatherName($params['father_name']);
        $user->setPasswordHash($params['password_hash']);
        $user->setAuthHash($params['auth_hash']);
        $id = $user->save();
        return $id;
    }

    public function getUser($id)
    {
        $user = new Operator($id);
        return $user->findOne();
    }

}