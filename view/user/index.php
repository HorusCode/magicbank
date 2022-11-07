<?php
$user = $data['user-data'];
$score = $data['score-data'];
View::header('User', $score);?>
<div class="modal set-money">
    <div class="modal-content">
        <span class="close-button"><i class="fal fa-times"></i></span>
        <form action="" class="form-popup">
            <div class="input-box">
                <label for="email1" class="label-placeholder">Введите сумму</label>
                <input type="text" class="enterme" id="email1" name="email" autocomplete="off">
                <i class="far fa-envelope"></i>
            </div>
        </form>
        <footer class="buttons">
            <button class="btn btn-siren-nonbor">Сохранить</button>
        </footer>
    </div>
</div>
<main class="grid-panel">
    <div class="grid-box__all">
        <header class="grid-box--header">
            <h2 class="header-title"><?= $user['surname'].' '.$user['name'].' '.$user['father_name'];?></h2>
        </header>
        <div class="search-result" id="printed">
            <div class="user_info-box">
                <ul class="user-info--data">
                    <li class="user-info__item">
                        <span class="user-value__name">Дата рождения:</span><?= $user['date_birthday']?><br>
                        <span class="user-value__name">Место проживания:</span><?= $user['residence']?>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Номер паспорта:</span><?= $user['passport_num']?><br>
                        <span class="user-value__name">Серия паспорта:</span><?= $user['passport_series']?><br>
                        <span class="user-value__name">Выдан:</span><?= $user['passport_office']?>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Номер моб.телефона:</span><?= $user['phone']?><br>
                    </li>
                </ul>
            </div>
            <aside class="user_info--functions">
                <button class="btn" id="print">Печать</button>
            </aside>
            <div class="user_info--score">
                <header class="grid-box--header">
                    <h2 class="header-title">Счёт</h2>
                    <h3 class="header-text"><?= ($score != null) ? '№ '.$score['id']: 'Не открыт';?></h3>
                </header>
                <?php if($score != null):?>
                <div class="chart">
                    <canvas class="user-score"></canvas>
                </div>
                <ul class="user-info--data">
                    <li class="user-info__item">
                        <span class="user-value__name">Процент:</span>5.5%<br>
                        <span class="user-value__name">Дата закрытия вклада:</span>01.02.2020(3 года 2 месяца 1 день)
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Пополняемый:</span> Да<br>
                        <span class="user-value__name">Снимаемый:</span>Нет
                    </li>
                </ul>
            </div>
            <?php endif;?>
        </div>
    </div>
</main>


<?php View::footer(); ?>
<script>scoreChart();</script>
