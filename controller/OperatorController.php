<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 23.01.2019
 * Time: 16:49
 */
namespace Controller;


use Core\Auth\Auth;
use Core\Controller;
use Core\Helper\Cookie;
use Core\Helper\Common;

class OperatorController extends Controller
{

    protected $auth;
    public $data = [];

    public function __construct($di)
    {
        parent::__construct($di);
        $this->load->model('Operator');
        $this->auth = new Auth();
        $dataOperator = $this->model->operator->getUser(Cookie::get('id'));
        $data = ['role' => $dataOperator['role'], 'id' => $dataOperator['id'], 'auth_hash' =>  $dataOperator['auth_hash']];
        Common::linkValidate(Cookie::get('id'));
        if (!$this->auth->checkAuthorized($data)) {
            $this->auth->unAuthorize(array_keys($data));
            header('Location: /');
            exit;
        }
    }


    public function getMoneyScore()
    {
        $this->load->model('Score');
        $this->load->model('Attachment');
        $this->load->model('Attachhistory');
        $params = $this->request->post;
        $scoreMoney = $this->model->score->getScore($params['id_score'])['money'];
        $params['id_attachment'] = $this->model->attachment->getAttachmentByScore($params['id_score'])['id'];
        $this->model->attachhistory->setAttachhistory($params);
        $params['money'] = $scoreMoney - $params['money'];
        $this->model->score->setMoney($params);
        header('Location: ' . $this->request->server['HTTP_REFERER']);
        exit;
    }

    public function setMoneyScore()
    {
        $this->load->model('Score');
        $this->load->model('Attachment');
        $this->load->model('Attachhistory');
        $params = $this->request->post;
        $scoreMoney = $this->model->score->getScore($params['id_score'])['money'];
        $params['id_attachment'] = $this->model->attachment->getAttachmentByScore($params['id_score'])['id'];
        $this->model->attachhistory->setAttachhistory($params);
        $params['money'] = $scoreMoney + $params['money'];
        $this->model->score->setMoney($params);
        header('Location: ' . $this->request->server['HTTP_REFERER']);
        exit;
    }

    public function users()
    {
        $this->view->render('operator/adduser', $this->data);
    }


    public function index()
    {
        $this->view->render('operator/index', $this->data);
    }
}