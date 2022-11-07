<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 22.01.2019
 * Time: 22:46
 */

namespace Controller;

use Core\Auth\Auth;
use Core\Controller;
use Core\Helper\Cookie;
use Core\Helper\Common;

class UserController extends Controller
{
    protected $auth;
    public $data = [];

    public function __construct($di)
    {
        parent::__construct($di);
        $this->auth = new Auth();
        $this->load->model('User');
        $dataUser = $this->model->user->getUser(Cookie::get('id'));
        $data = ['role' => $dataUser['role'], 'id' => $dataUser['id'], 'auth_hash' =>  $dataUser['auth_hash']];
        Common::linkValidate(Cookie::get('id'));
        if (!$this->auth->checkAuthorized($data)) {

            $this->auth->unAuthorize(array_keys($data));
            header('Location: /');
            exit;
        }
    }

    public function index($id)
    {
        $this->load->model('Score');
        $this->data['user-data'] = $this->model->user->getUser($id);
        $this->data['score-data'] = $this->model->score->getScoreByUser($id);
        $this->view->render('user/index', $this->data);
    }
}