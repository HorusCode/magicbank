<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 09.01.2019
 * Time: 15:34
 */

namespace Controller;

use Core\Auth\Auth;
use Core\Controller;
use Core\Database\QueryBuilder;
use Core\DI\DI;
use Core\Helper\Common;

class AccountController extends Controller
{
    private $auth;


    public function __construct(DI $di)
    {
        parent::__construct($di);
        $this->auth = new Auth();
    }

    public function ajaxRegister()
    {
        $this->load->model('User');
        $this->load->model('Score');
        $params = $this->request->post;
        $params['auth_hash'] = $this->auth->encryptHash();
        $params['password_hash'] = $this->auth->encryptPassword($params['password']);
        $id = $this->model->user->addUser($params);
        $scoreParams['id_user'] = $id;
        $this->model->score->addScore($scoreParams);
        $this->auth->authorize([
            'auth_hash' => $params['auth_hash'],
            'id' => $id,
            'role' => 'user'
        ]);
        echo $id;
    }

    public function register()
    {
        $this->load->model('User');
        $this->load->model('Score');
        $params = $this->request->post;
        $params['auth_hash'] = $this->auth->encryptHash();
        $params['password_hash'] = $this->auth->encryptPassword($params['password']);
        $id = $this->model->user->addUser($params);
        $scoreParams['id_user'] = $id;
        $this->model->score->addScore($scoreParams);
        $this->auth->authorize([
            'auth_hash' => $params['auth_hash'],
            'id' => $id,
            'role' => 'user'
        ]);
        header('Location:'. $this->request->server['HTTP_REFERER']);
        exit;
    }

    public function ajaxLogin()
    {
        $queryBuilder = new QueryBuilder();
        $params = $this->request->post;
        if (isset($params['role'])) {
            $this->load->model(ucfirst($params['role']));
        } else {
            Common::jsonAnswer(['status' => false, 'message' => 'Выберете тип пользователя!']);
        }


        $passHash = $this->auth->encryptPassword($params['password']);

        $table = $params['role'] . 's';

        $sql = $queryBuilder->select()
            ->from($table)
            ->where('email', $params['email'])
            ->where('password_hash', $passHash)
            ->limit(1)
            ->sql();

        $query = $this->db->query($sql, $queryBuilder->values);
        if (!empty($query)) {
            $user = $query[0];

            $auth_hash = $this->auth->encryptHash();
            $sql = $queryBuilder
                ->update($table)
                ->set(['auth_hash' => $auth_hash])
                ->where('id', $user['id'])
                ->sql();
            $this->db->execute($sql, $queryBuilder->values);

            $this->auth->authorize([
                'auth_hash' => $auth_hash,
                'id' => $user['id'],
                'role' => $user['role']
            ]);
            Common::jsonAnswer(['status' => true, 'message' => '/'.$user['role'] . '/index/' . $user['id']]);
        } else {
            Common::jsonAnswer(['status' => false, 'message' => 'Неверный логин или пароль. Такой пользователь не найден!']);
        }

    }


    public function logout()
    {
        $this->auth->unauthorize(['role', 'id', 'auth_hash']);
        exit(header('Location: /'));
    }
}