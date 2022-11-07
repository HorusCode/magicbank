<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 01.02.2019
 * Time: 20:40
 */

namespace Controller;


class AttachmentController extends UserController
{
    public function getUserAttachment($id_user,$id_score)
    {
        $this->load->model('Attachment');
        $this->load->model('Contribution');
        $this->load->model('Attachhistory');
        $this->load->model('Score');
        $idContrAttach = $this->model->attachment->getAttachmentByScore($id_score);
        $this->data['history'] = $this->model->attachhistory->getHistoryByScore($id_score);
        $this->data['contributions'] = $this->model->contribution->getContribution($idContrAttach['id_contributions']);
        $this->data['score'] = $this->model->score->getScore($id_score);
        $this->view->render('user/attachment/page', $this->data);
    }


    public function addAttachment($id_contr, $id_user)
    {
        $this->load->model('Attachment');
        $this->load->model('Attachhistory');
        $this->load->model('Score');
        $params = $this->request->post;
        $params['id_score'] = $this->model->score->getScoreByUser($id_user)['id'];
        $params['id_user'] = $id_user;
        $params['id_contribution'] = $id_contr;
        if($this->checkUserAttachment($params)) {
            $params['id_attachment'] = $this->model->attachment->setAttachment($params);
            $this->model->attachhistory->setAttachhistory($params);
            $this->model->score->setMoney($params);
            header('Location:'.$this->request->server['HTTP_REFERER']);
            exit;
        }
    }

    public function checkUserAttachment($params)
    {
        $this->load->model('Attachment');
        $attach = $this->model->attachment->getAttachmentByScore($params['id_score']);
        if($attach['id_contributions'] == $params['id_contribution']) {
            return false;
        } else {
            return true;
        }
    }

    public function getMoneyScore($id_score)
    {
        $this->load->model('Score');
        $this->load->model('Attachment');
        $this->load->model('Attachhistory');
        $params = $this->request->post;
        $scoreMoney = $this->model->score->getScore($id_score)['money'];
        $params['id_attachment'] = $this->model->attachment->getAttachmentByScore($id_score)['id'];
        $params['id_score'] = $id_score;
        $this->model->attachhistory->setAttachhistory($params);
        $params['money'] = $scoreMoney - $params['money'];
        $this->model->score->setMoney($params);
        header('Location: ' . $this->request->server['HTTP_REFERER']);
        exit;
    }

    public function setMoneyScore($id_score)
    {
        $this->load->model('Score');
        $this->load->model('Attachment');
        $this->load->model('Attachhistory');
        $params = $this->request->post;
        $scoreMoney = $this->model->score->getScore($id_score)['money'];
        $params['id_attachment'] = $this->model->attachment->getAttachmentByScore($id_score)['id'];
        $params['id_score'] = $id_score;
        $this->model->attachhistory->setAttachhistory($params);
        $params['money'] = $scoreMoney + $params['money'];
        $this->model->score->setMoney($params);
        header('Location: ' . $this->request->server['HTTP_REFERER']);
        exit;
    }
}