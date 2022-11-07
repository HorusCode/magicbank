<?php
/**
 * Created by PhpStorm.
 * User: HorusDev
 * Date: 10.01.2019
 * Time: 23:22
 */
//Пишем здесь все роуты
$this->router->add('index', '/', 'IndexController:index');
$this->router->add('registration', '/account/registration/', 'AccountController:ajaxRegister', 'POST');
$this->router->add('registration-notajax', '/account/registration/notajax', 'AccountController:register', 'POST');
$this->router->add('login', '/account/login/', 'AccountController:ajaxLogin','POST');
$this->router->add('logout', '/account/logout/', 'AccountController:logout');

$this->router->add('user', '/user/index/(id:int)', 'UserController:index');

$this->router->add('user-attachment-page', '/user/(id:int)/attachment/(id_score:int)', 'AttachmentController:getUserAttachment');

$this->router->add('user-set-money', '/user/setmoney/(id_score:int)', 'AttachmentController:setMoneyScore', 'POST');
$this->router->add('user-get-money', '/user/getmoney/(id_score:int)', 'AttachmentController:getMoneyScore', 'POST');

$this->router->add('operator-set-money', '/operator/(id:int)/setmoney/', 'OperatorController:setMoneyScore', 'POST');
$this->router->add('operator-get-money', '/operator/(id:int)/getmoney/', 'OperatorController:getMoneyScore', 'POST');

$this->router->add('contribution-add', '/contribution/add/(id:int)', 'ContributionController:viewContribution');
$this->router->add('contribution-add-user', '/contribution/add/(id_contr:int)/(id_user:int)', 'AttachmentController:addAttachment', 'POST');

$this->router->add('operator', '/operator/index/(id:int)', 'OperatorController:index');
$this->router->add('operator-addclient', '/operator/index/(id:int)/users/', 'OperatorController:users');
$this->router->add('operator-search', '/operator/index/(id:int)/search/', 'SearchController:ajaxSearch', 'POST');

$this->router->add('errors', '/error/(num:int)', 'ErrorController:getError');