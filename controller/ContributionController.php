<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 26.01.2019
 * Time: 21:37
 */

namespace Controller;

class ContributionController extends IndexController
{

    public function viewContributions()
    {
        $this->load->model('Contribution');
        $this->data['contributions'] = $this->model->contribution->getContributions();
        $this->view->render('user/contribution/list', $this->data);
    }

    public function viewContribution($id)
    {
        $this->load->model('Contribution');
        $this->load->model('Score');
        $this->load->model('Attachment');
        $idContr = 0;
        if (isset($this->request->cookie['id'])) {
            $idScore = $this->model->score->getScoreByUser($this->request->cookie['id'])['id'];
            $idContr = $this->model->attachment->getAttachmentByScore($idScore);
        }
        $this->data['contribution'] = $this->model->contribution->getContribution($id);

        if ($idContr == $id) {
            $this->data['contribution']['active'] = true;

        } else {
            $this->data['contribution']['active'] = false;
        }

        $this->view->render('index/contribution', $this->data);
    }
}