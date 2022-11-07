<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 09.01.2019
 * Time: 15:34
 */

namespace Controller;


use Core\Controller;
use Core\DI\DI;

class IndexController extends Controller
{

    public $data = [];
    public function __construct(DI $di)
    {
        parent::__construct($di);
    }


    public function index()
    {
        $this->load->model('Contribution');
        $this->data['contributions'] = $this->model->contribution->getContributions();
        $this->view->render('index/index', $this->data);
    }


}