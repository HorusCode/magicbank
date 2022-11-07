<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 11.01.2019
 * Time: 17:39
 */

namespace Model\User;

use Core\Database\ActiveRecord;

class User
{
    use ActiveRecord;
    protected $table = 'users';

    public $id;
    public $name;
    public $surname;
    public $father_name;
    public $date_birthday;
    public $phone;
    public $passport_series;
    public $passport_num;
    public $residence;
    public $email;
    public $auth_hash;
    public $password_hash;
    public $passport_office;
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
    public function getDateBirthday()
    {
        return $this->date_birthday;
    }

    /**
     * @param mixed $date_birthday
     */
    public function setDateBirthday($date_birthday): void
    {
        $this->date_birthday = $date_birthday;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getPassportSeries()
    {
        return $this->passport_series;
    }

    /**
     * @param mixed $passport_series
     */
    public function setPassportSeries($passport_series): void
    {
        $this->passport_series = $passport_series;
    }

    /**
     * @return mixed
     */
    public function getPassportNum()
    {
        return $this->passport_num;
    }

    /**
     * @param mixed $passport_num
     */
    public function setPassportNum($passport_num): void
    {
        $this->passport_num = $passport_num;
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

    /**
     * @return mixed
     */
    public function getPassportOffice()
    {
        return $this->passport_office;
    }

    /**
     * @param mixed $passport_office
     */
    public function setPassportOffice($passport_office): void
    {
        $this->passport_office = $passport_office;
    }

    /**
     * @return mixed
     */
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * @param mixed $residence
     */
    public function setResidence($residence): void
    {
        $this->residence = $residence;
    }


}