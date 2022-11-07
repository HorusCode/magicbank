<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 29.01.2019
 * Time: 9:14
 */

namespace Controller;
use Core\Helper\Common;

class SearchController extends OperatorController
{

    public function ajaxSearch()
    {
        $this->load->model('User');
        $this->load->model('Score');
        $this->load->model('Attachment');
        $this->load->model('Attachhistory');
        $this->load->model('Contribution');
        $params = $this->request->post;
        if (isset($params['passport_num']) && isset($params['passport_series'])) {
            if (is_int((int)$params['passport_num']) && is_int((int)$params['passport_series'])) {
                $userData = $this->model->user->getUserByPassport($params);
                $scoreData = $this->model->score->getScoreByUser($userData['id']);
                $attachmentData = $this->model->attachment->getAttachmentByScore($scoreData['id']);
                $attachHistoryData = $this->model->attachhistory->getHistoryByAttachment($attachmentData['id']);
                $contibutionData = $this->model->contribution->getContribution($attachmentData['id_contributions']);
                if(!is_null($userData) && !is_null($scoreData) && !is_null($attachmentData) && !is_null($attachHistoryData) && !is_null($contibutionData))
                {
                    Common::jsonAnswer(['status' => true,
                        'message' => ['user' => $userData,
                            'score' => $scoreData,
                            'attachment' => $attachmentData,
                            'contribution' => $contibutionData,
                            'attachment_history' => $attachHistoryData
                        ]
                    ]);
                } else {
                    Common::jsonAnswer(['status' => false, 'message' => 'Записи не найдены']);
                }
            }
            Common::jsonAnswer(['status' => false, 'message' => 'Вводите числа или обратитесь разработчику!']);
        }
        Common::jsonAnswer(['status' => false, 'message' => 'Введите запрос!']);
    }
}