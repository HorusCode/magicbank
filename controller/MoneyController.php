<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 03.02.2019
 * Time: 19:26
 */

namespace Controller;


class MoneyController
{
    public function getMoneyScore()
    {
        $this->load->model('Score');
        $params = $this->request->post;
        $score = $this->model->score->getScore($params['id_score'])['money'];
        $params['money'] = $score - $params['money'];
        $this->model->score->setMoney($params);

    }
}