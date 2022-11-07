<?php
$contr = $data['contributions'];
$history = $data['history'];
$score = $data['score'];
View::header('User'); ?>
<div class="modal set-money">
    <div class="modal-content">
        <span class="close-button"><i class="fal fa-times"></i></span>
        <form action="/user/setmoney/<?= $score['id']?>" method="post" id="setMoney" class="form-popup">
            <div class="input-box">
                <label for="set" class="label-placeholder">Введите сумму пополения</label>
                <input type="text" class="enterme" id="set" name="money" autocomplete="off">
                <i class="far fa-envelope"></i>
            </div>
        </form>
        <footer class="buttons">
            <button type="submit" form="setMoney" class="btn btn-siren-nonbor">Сохранить</button>
        </footer>
    </div>
</div>
<div class="modal get-money">
    <div class="modal-content">
        <span class="close-button"><i class="fal fa-times"></i></span>
        <form action="/user/getmoney/<?= $score['id']?>" method="post" id="getMoney" class="form-popup">
            <div class="input-box">
                <label for="get" class="label-placeholder">Введите сумму снятия</label>
                <input type="text" class="enterme" id="get" name="money" autocomplete="off">
                <i class="far fa-envelope"></i>
            </div>
        </form>
        <footer class="buttons">
            <button type="submit" form="getMoney" class="btn btn-siren-nonbor">Сохранить</button>
        </footer>
    </div>
</div>
<div class="modal close-score">
    <div class="modal-content">
        <span class="close-button"><i class="fal fa-times"></i></span>
        <span class="alarm-text">Вы уверены?</span>
        <footer class="buttons">
            <button class="btn btn-transparent no">Нет</button>
            <button class="btn yes">Да</button>
        </footer>
    </div>
</div>

<main class="grid-panel">
    <div class="grid-box__all">
        <header class="grid-box--header">
            <h2 class="header-title">Вклад <?= (isset($contr['name'])) ? $contr['name'] : ''; ?></h2>
        </header>
        <?if (!empty($contr)):?>
        <div class="search-result">
            <div class="user_info-box">
                <ul class="user-info--data">
                    <li class="user-info__item">
                        <span class="user-value__name">Ставка:</span><?= $contr['percent'] ?> %<br>
                        <span class="user-value__name">На срок:</span>до <?= $contr['year'] ?><br>
                        <span class="user-value__name">Минимальное вложение:</span>от <?= $contr['minimum-money'] ?><br>
                        <span class="user-value__name">Cнятие, пополение:</span><?php echo ($contr['replenished']) ? "<i class=\"far fa-check\"></i>пополняемый" : "<i class=\"fal fa-times\"></i>не пополняемый"; ?><?php echo ($contr['taken']) ? "<i class=\"far fa-check\"></i>снимаемый" :
                            "<i class=\"fal fa-times\"></i>не снимаемый"; ?>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Дата закрытия вклада:</span>01.02.2020(3 года 2 месяца 1 день)
                    </li>
                </ul>
            </div>
            <aside class="user_info--functions">
                <?php if($contr['replenished']):?>
                <button class="btn get-money">Снять</button>
                <?endif;?>
                <?php if($contr['taken']):?>
                    <button class="btn set-money">Пополнить</button>
                <?endif;?>
            </aside>
            <div class="user_info--score">
                <header class="grid-box--header">
                    <h2 class="header-title">Вложения</h2>
                </header>
                <ul class="user-info--data">
                    <li class="user-info__item">
                        <span class="user-value__name">Всего на счету:</span><?= $score['money']?> руб.
                    </li>
                </ul>
                <div class="tbl">
                    <div class="tbl-header">
                        <table class="table" cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Вложение</th>
                                <th>Дата</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tbl-content">
                        <table class="table" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                            <?php foreach ($history as $key => $value):?>
                            <tr>
                                <td><?= $value['id']?></td>
                                <td style="font-weight: bold"><?= $value['came_money']?></td>
                                <td><?= date_format(date_create($value['date']), 'd/m/Y H:i:s')?></td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?else:?>
            <span class="not-result">Нет активных вкладов. <a href="/">Открыть?</a></span>
        <? endif;?>
    </div>
</main>


<?php View::footer(); ?>
