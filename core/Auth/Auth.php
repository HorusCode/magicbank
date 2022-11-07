<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 21.01.2019
 * Time: 20:49
 */

namespace Core\Auth;

use Core\Helper\Cookie;

class Auth implements AuthInterface
{



    public function checkRole($role)
    {
        return (Cookie::get('auth_role') == $role) ? true : false;
    }

    public function checkAuthorized($data = [])
    {
            foreach ($data as $key => $value) {
                if (Cookie::get($key) != $value) {
                    return false;
                }
            }
            return true;

    }

    public function authorize($data = []) //создания куки
    {
        foreach ($data as $key => $value) {
            Cookie::set($key, $value);
        }
    }

    public function unAuthorize($data)
    {
        foreach ($data as $key) {
            Cookie::delete($key);
        }
    }


    public static function salt()
    {
        return (string)rand(100000, 999999);
    }

    public static function encryptPassword($password)
    {
        return hash('sha256', $password);
    }

    public static function encryptHash()
    {
        return hash('sha1', time() . self::salt());
    }
}