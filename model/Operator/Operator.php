<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\Operator;

use Core\Database\ActiveRecord;

class Operator
{
    use ActiveRecord;
    protected $table = 'operators';

    public $id;
    public $name;
    public $surname;
    public $father_name;
    public $email;
    public $auth_hash;
    public $password_hash;
    public $role;

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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getFatherName()
    {
        return $this->father_name;
    }

    /**
     * @param mixed $father_name
     */
    public function setFatherName($father_name): void
    {
        $this->father_name = $father_name;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAuthHash()
    {
        return $this->auth_hash;
    }

    /**
     * @param mixed $auth_hash
     */
    public function setAuthHash($auth_hash): void
    {
        $this->auth_hash = $auth_hash;
    }

    /**
     * @return mixed
     */
    public function getPasswordHash()
    {
        return $this->password_hash;
    }

    /**
     * @param mixed $password_hash
     */
    public function setPasswordHash($password_hash): void
    {
        $this->password_hash = $password_hash;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }


}