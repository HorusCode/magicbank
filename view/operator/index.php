<?php
View::header('Operator'); ?>
<span class="error animated fadeInDown" id="msg"></span>
<div class="modal set-money">
    <div class="modal-content">
        <span class="close-button"><i class="fal fa-times"></i></span>
        <form id="setMoney" method="post" action="/operator/<?= $_COOKIE['id']?>/setmoney/" class="form-popup">
            <input type="hidden" name="id_score" value="">
            <div class="input-box">
                <label for="set" class="label-placeholder">Введите сумму пополнения</label>
                <input type="text" class="enterme" id="set" name="money" autocomplete="off">
                <i class="far fa-money-bill-alt"></i>
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
        <form id="getMoney" action="/operator/<?= $_COOKIE['id']?>/getmoney/" method="post" class="form-popup">
            <input type="hidden" name="id_score" value="">
            <div class="input-box">
                <label for="get" class="label-placeholder">Введите сумму списания</label>
                <input type="text" class="enterme" id="get" name="money" autocomplete="off">
                <i class="far fa-money-bill-alt"></i>
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
            <h2 class="header-title">Поиск клиентов</h2>
            <div class="search-input">
                <input type="text" class="passport-series" placeholder="Серия" maxlength="4">
                <input type="text" class="passport-num" placeholder="Номер" maxlength="6">
                <i class="fal fa-search"></i>
            </div>
        </header>

        <div class="search-result" id="printed">
            <span class="not-result" style="display: block">клиент не найден</span>
            <div class="user_info-box" style="display: none">
                <ul class="user-info--data">
                    <li class="user-info__item">
                        <h3 class="user-name"></h3>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Дата рождения:</span><span class="date_birthday"></span><br>
                        <span class="user-value__name">Место проживания:</span><span class="residence"></span>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Номер паспорта:</span><span class="passport_num"></span><br>
                        <span class="user-value__name">Серия паспорта:</span><span class="passport_series"></span><br>
                        <span class="user-value__name">Выдан:</span><span class="passport_office"></span>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Номер моб.телефона:</span><span class="phone"></span><br>
                    </li>
                </ul>
            </div>
            <aside class="user_info--functions" style="display: none">
                <button class="btn" id="print">Печать</button>
                <button class="btn set-money">Начислить</button>
                <button class="btn get-money">Снять</button>
                <button class="btn close-score">Закрыть</button>
            </aside>
            <div class="user_info--score" style="display: none">
                <header class="grid-box--header">
                    <h2 class="header-title">Счёт</h2>
                    <h3 class="header-text"></h3>
                </header>
                <div class="chart">
                    <canvas class="user-score"></canvas>
                </div>
                <ul class="user-info--data">
                    <li class="user-info__item">
                        <span class="user-value__name">Процент:</span><span class="percent"></span><br>
                        <span class="user-value__name">Дата закрытия вклада:</span><span class="date_close"></span>
                    </li>
                    <li class="user-info__item">
                        <span class="user-value__name">Пополняемый:</span><span class="replinished"></span><br>
                        <span class="user-value__name">Снимаемый:</span><span class="taken"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>


<?php View::footer(); ?>
