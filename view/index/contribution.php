<?php
$contr = $data['contribution'];

View::header('Main'); ?>
<div class="mask hidden"></div>
<div class="fixed">
    <div class="grid-fixed animated bounceOutUp">
        <i class="hide fal fa-arrow-up"></i>
        <div class="form-login">
            <svg data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" class="logo" viewBox="0 0 391.76 132.38">
                <title>magiclogo</title>
                <path d="M102,0,70.55,54.58,39.67,1,1.38,33.66,12.63,99.25l14,11,0-38.19c0-7.08-1.71-25.19-1.71-34.79L34,46l36.93,86.43,36.75-87.44,9.07-8.71c0,9.6-1.71,27.71-1.71,34.79l0,38.19,14-11L140.3,32.65Z"
                      transform="translate(-1.38)"/>
                <path d="M194.73,101.29l-4.65-17.4H169l-4.65,17.4h-15l20-69.21h20.42l20.09,69.21Zm-7.47-28.76L183,56.5c-.26-1-.84-3.42-1.75-7.33s-1.45-6.53-1.63-7.85q-.72,4.05-1.82,8.94T172,72.53Z"
                      transform="translate(-1.38)"/>
                <path d="M253.9,63.05h24.73V98.41a64.87,64.87,0,0,1-22.35,3.82q-14.11,0-21.72-9.14T227,66.73q0-16.59,8.72-26T260,31.37a42,42,0,0,1,18.48,4.25l-4.76,10.46a29.12,29.12,0,0,0-12.84-3.39,16.2,16.2,0,0,0-13.58,6.53q-5,6.53-5,17.79,0,11.61,3.63,17.78A11.53,11.53,0,0,0,256.5,91a35.14,35.14,0,0,0,7.41-.8V74.37h-10Z"
                      transform="translate(-1.38)"/>
                <path d="M306.15,101.29V32.36h14.16v68.93Z" transform="translate(-1.38)"/>
                <path d="M376.71,42.59q-6.48,0-10.21,6.46t-3.73,18q0,24,14.66,23.95a30.34,30.34,0,0,0,13.45-3.48v11.4q-5.92,3.36-15.17,3.35-13.66,0-21-9.26t-7.34-26q0-16.79,7.56-26.16t21-9.39a34.28,34.28,0,0,1,8.49,1A36.66,36.66,0,0,1,393.14,36l-5,10.42a47,47,0,0,0-5.31-2.66A15.36,15.36,0,0,0,376.71,42.59Z"
                      transform="translate(-1.38)"/>
                <path d="M275.46,110.37h8.79q6,0,8.72,1.27a4.46,4.46,0,0,1,1.52,7.14,5.16,5.16,0,0,1-3.16,1.45v.14a7,7,0,0,1,3.88,1.67,4.48,4.48,0,0,1,1.18,3.25,5,5,0,0,1-2.79,4.48,15.09,15.09,0,0,1-7.58,1.61H275.46Zm6,8.32h3.48a8.28,8.28,0,0,0,3.53-.56,1.93,1.93,0,0,0,1.09-1.85,1.8,1.8,0,0,0-1.19-1.74,10.13,10.13,0,0,0-3.76-.52h-3.15Zm0,3.54v5.47h3.91A7.36,7.36,0,0,0,289,127a2.35,2.35,0,0,0,1.17-2.16q0-2.61-5-2.61Z"
                      transform="translate(-1.38)"/>
                <path d="M321.3,131.38l-2.05-5H309l-2,5h-6.45l10-21.1h7.32l10,21.1Zm-3.48-8.74c-1.89-4.53-3-7.09-3.19-7.69s-.41-1.06-.52-1.4c-.42,1.22-1.64,4.26-3.65,9.09Z"
                      transform="translate(-1.38)"/>
                <path d="M358.33,131.38h-7.61l-12.28-15.89h-.18c.25,2.8.37,4.81.37,6v9.89h-5.35v-21h7.55l12.27,15.74h.13q-.28-4.1-.29-5.79v-9.95h5.39Z"
                      transform="translate(-1.38)"/>
                <path d="M390.13,131.38h-6.8l-7.39-8.85-2.53,1.35v7.5h-6v-21h6V120l2.35-2.48,7.65-7.14h6.64l-9.85,9.3Z"
                      transform="translate(-1.38)"/>
            </svg>
            <span class="error animated fadeInDown" id="msg"></span>
            <form id="log" class="box">
                <div class="input-box">
                    <label for="email" class="label-placeholder">E-mail</label>
                    <input type="text" id="email" class="enterme" name="email" autocomplete="off">
                </div>
                <div class="input-box">
                    <label for="pwd" class="label-placeholder">Пароль</label>
                    <input type="password" class="enterme" name="password" id="pwd" autocomplete="off">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="input-box">
                    <input type="checkbox" name="remember">
                    <span class="rmb-checkbox"></span>
                    <small class="rmb">Запомнить</small>
                </div>
                <div class="input-box">
                    <label class="radio">
                        <input type="radio" name="role" value="operator" class="radio-btn">
                        <span>Оператор</span>
                    </label>
                    <label class="radio">
                        <input type="radio" name="role" value="user" class="radio-btn">
                        <span>Клиент</span>
                    </label>
                </div>
                <a href="#" class="forgetpass">Забыли пароль?</a>
            </form>
            <footer>
                <button name="login" class="btn btn-siren-nonbor">Войти</button>
            </footer>
        </div>
    </div>
</div>
<div class="fixed">
    <div class="grid-fixed animated bounceOutUp">
        <i class="hide fal fa-arrow-up"></i>
        <div class="form-register animated zoomIn">
            <span class="form-register__title">Шаг 1</span>
            <span class="error animated tada" id="msg"></span>
            <form class="box">
                <div class="input-box">
                    <label for="email1" class="label-placeholder">E-mail</label>
                    <input type="text" class="enterme" id="email1" name="email" autocomplete="off">
                    <i class="far fa-envelope"></i>
                </div>
                <div class="input-box">
                    <label for="phone" class="label-placeholder">Телефон</label>
                    <input type="text" class="enterme" id="phone" name="phone" autocomplete="off">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="input-box">
                    <label for="password" class="label-placeholder">Пароль</label>
                    <input type="password" class="enterme" id="password" name="password" autocomplete="off">
                    <i class="fal fa-key"></i>
                </div>
                <div class="input-box">
                    <label for="password_repeat" class="label-placeholder">Повторите пароль</label>
                    <input type="password" class="enterme" id="password_repeat" name="password_repeat"
                           autocomplete="off">
                    <i class="fal fa-key"></i>
                </div>
            </form>
            <footer>
                <button class="btn firstNext btn-siren-nonbor">Вперед</button>
            </footer>
        </div>
        <div class="form-register animated zoomOut">
            <span class="form-register__title">Шаг 2</span>
            <span class="error animated tada" id="msg"></span>
            <form class="box">
                <div class="input-box">
                    <label for="name" class="label-placeholder">Имя</label>
                    <input type="text" class="enterme" id="name" name="name" autocomplete="off">
                    <i class="fas fa-signature"></i>
                </div>
                <div class="input-box">
                    <label for="surname" class="label-placeholder">Фамилия</label>
                    <input type="text" class="enterme" id="surname" name="surname" autocomplete="off">
                    <i class="fas fa-signature"></i>
                </div>
                <div class="input-box">
                    <label for="father_name" class="label-placeholder">Отчество</label>
                    <input type="text" class="enterme" id="father_name" name="father_name" autocomplete="off">
                    <i class="fas fa-signature"></i>
                </div>
                <div class="input-box">
                    <label for="residence" class="label-placeholder">Место проживания</label>
                    <input type="text" class="enterme" id="residence" name="residence" autocomplete="off">
                    <i class="fas fa-signature"></i>
                </div>
            </form>
            <footer>
                <button class="btn firstPrev btn-siren-nonbor">Назад</button>
                <button class="btn secondNext btn-siren-nonbor">Вперед</button>
            </footer>
        </div>
        <div class="form-register animated zoomOut">
            <span class="form-register__title">Шаг 3</span>
            <span class="error animated tada" id="msg"></span>
            <form class="box">
                <div class="input-box">
                    <label for="passport_series" class="label-placeholder">Серия паспорта</label>
                    <input type="text" class="enterme" id="passport_series" name="passport_series" autocomplete="off">
                </div>
                <div class="input-box">
                    <label for="passport_num" class="label-placeholder">Номер паспорта</label>
                    <input type="text" class="enterme" id="passport_num" name="passport_num" autocomplete="off">
                </div>
                <div class="input-box">
                    <label for="passport_office" class="label-placeholder">Кем выдан</label>
                    <input type="text" class="enterme" id="passport_office" name="passport_office" autocomplete="off">
                </div>
                <div class="input-box">
                    <label class="label">Дата рождения</label>
                    <input type="date" class="enterme" id="date" name="date" autocomplete="off">
                </div>
            </form>
            <footer>
                <button class="btn secondPrev btn-siren-nonbor">Назад</button>
                <button id="registration" class="btn btn-disabled">Регистрация</button>
            </footer>

        </div>
        <div class="step-bar">
            <ul>
                <li>
                    <div class="number active">1</div>
                    <!--<span class="text">account setup</span>-->
                </li>
                <li>
                    <div class="number">2</div>
                    <!-- <span class="text">profiles</span>-->
                    <div class="line"></div>
                </li>
                <li>
                    <div class="number">3</div>
                    <!--<span class="text">details</span>-->
                    <div class="line"></div>
                </li>
            </ul>
        </div>
    </div>
</div>


<main class="contribution">
    <header class="contribution--header">
        <h2 class="header-title">Вклад <?= $contr['name']?></h2>
    </header>
    <div class="contribution--body">
        <div class="contribution_row">
            <div class="about-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="contribution_row">
            <div class="column-text">
                <span class="up-text">Ставка:</span>
                <span class="down-text percent">до <?= $contr['percent']?> %</span>
            </div>
            <div class="column-text">
                <span class="up-text">Сумма вклада:</span>
                <span class="down-text">от <?= $contr['minimum-money']?> руб</span>
            </div>
            <div class="column-text">
                <span class="up-text">Срок:</span>
                <span class="down-text">до <?= $contr['year']?> лет</span>
            </div>
            <div class="column-text">
                <span class="txt-gray">Пополнение и снятие вклада</span>
                <span class="down-text"><?php echo ($contr['replenished']) ? "<i class=\"far fa-check\"></i>пополняемый" :
                        "<i class=\"fal fa-times\"></i>не пополняемый"; ?></span>
                <span class="down-text"><?php echo ($contr['taken']) ? "<i class=\"far fa-check\"></i>снимаемый" :
                        "<i class=\"fal fa-times\"></i>не снимаемый"; ?></span>
            </div>
        </div>
    </div>
    <header class="contribution--header">
        <h2 class="header-title">Рассчитать вклад</h2>
    </header>
    <div class="contribution--score">
        <?php if(isset($_COOKIE['role']) && $_COOKIE['role'] == 'user'):?>
        <form action="<?= $_SERVER['REQUEST_URI']?>/<?= $_COOKIE['id']?>" method="post" id="contribution"></form>
        <?php endif;?>
        <div class="contribution_row" style="justify-content: space-between; align-items: flex-start;">
            <div class="column-text" >
                <label class="label-input">
                    <input class="input-visible sum" form="contribution" name="money"  type="text" data-size="<?= $contr['minimum-money']?>" data-math="min" placeholder="Сумма вклада">
                    <span class="input-name">Сумма вклада</span>
                </label>
                <small>от <?= $contr['minimum-money']?>руб*</small>
            </div>
            <div class="column-text">
                <label class="label-input">
                    <input class="input-visible date" form="contribution" name="days" type="text" data-size="<?= $contr['year'] * 365?>" data-math="max" placeholder="Срок">
                    <span class="input-name">Срок, дни</span>
                </label>
                <small>до <?= $contr['year'] * 365?> дней</small>
            </div>
            <div class="column-text">
                <button class="btn btn-blue-gradient calc">Рассчитать</button>
            </div>
        </div>
        <div class="contribution_row bg-blue">
            <div class="column-text">
                <span class="up-text small">Ставка:</span>
                <span class="down-text big"><?= $contr['percent']?> %</span>
            </div>
            <div class="column-text">
                <span class="up-text small">Доход:</span>
                <span class="down-text big plus-money">0</span>
            </div>
            <div class="column-text">
                <span class="up-text small">Сумма в конце срока:</span>
                <span class="down-text big end-money">0</span>
            </div>
            <div class="column-text">
                <?php if(!$contr['active']):?>
                <input type="submit" form="contribution" class="btn btn-transparent" value="Открыть вклад">
                <?php else: ?>
                    У Вас уже есть этот вклад!
                <?php endif;?>
            </div>
        </div>
    </div>
</main>


<footer class="grid-col-6 footer-box">
    <div class="grid-center container">
        <h1 class="title">Где можно вложить?</h1>
        <ul>
            <li class="invest-var"><i class="fal fa-globe"></i>С помощью нашего онлайн сервиса вы сможете легко
                произвести вклад. Вам остаётся только <a href="">зарегистрироваться!</a>
            </li>
            <li class="invest-var"><i class="fal fa-building"></i>В любом отделении MagicBank вам помогут выбрать
                вклад и вложить свои средства. Для этого нужно просто иметь
                паспорт!
            </li>
        </ul>
        <a href="#" class="logo-center">
            <svg data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" class="logo" viewBox="0 0 391.76 132.38">
                <title>
                    magiclogo</title>
                <path d="M102,0,70.55,54.58,39.67,1,1.38,33.66,12.63,99.25l14,11,0-38.19c0-7.08-1.71-25.19-1.71-34.79L34,46l36.93,86.43,36.75-87.44,9.07-8.71c0,9.6-1.71,27.71-1.71,34.79l0,38.19,14-11L140.3,32.65Z"
                      transform="translate(-1.38)"/>
                <path d="M194.73,101.29l-4.65-17.4H169l-4.65,17.4h-15l20-69.21h20.42l20.09,69.21Zm-7.47-28.76L183,56.5c-.26-1-.84-3.42-1.75-7.33s-1.45-6.53-1.63-7.85q-.72,4.05-1.82,8.94T172,72.53Z"
                      transform="translate(-1.38)"/>
                <path d="M253.9,63.05h24.73V98.41a64.87,64.87,0,0,1-22.35,3.82q-14.11,0-21.72-9.14T227,66.73q0-16.59,8.72-26T260,31.37a42,42,0,0,1,18.48,4.25l-4.76,10.46a29.12,29.12,0,0,0-12.84-3.39,16.2,16.2,0,0,0-13.58,6.53q-5,6.53-5,17.79,0,11.61,3.63,17.78A11.53,11.53,0,0,0,256.5,91a35.14,35.14,0,0,0,7.41-.8V74.37h-10Z"
                      transform="translate(-1.38)"/>
                <path d="M306.15,101.29V32.36h14.16v68.93Z" transform="translate(-1.38)"/>
                <path d="M376.71,42.59q-6.48,0-10.21,6.46t-3.73,18q0,24,14.66,23.95a30.34,30.34,0,0,0,13.45-3.48v11.4q-5.92,3.36-15.17,3.35-13.66,0-21-9.26t-7.34-26q0-16.79,7.56-26.16t21-9.39a34.28,34.28,0,0,1,8.49,1A36.66,36.66,0,0,1,393.14,36l-5,10.42a47,47,0,0,0-5.31-2.66A15.36,15.36,0,0,0,376.71,42.59Z"
                      transform="translate(-1.38)"/>
                <path d="M275.46,110.37h8.79q6,0,8.72,1.27a4.46,4.46,0,0,1,1.52,7.14,5.16,5.16,0,0,1-3.16,1.45v.14a7,7,0,0,1,3.88,1.67,4.48,4.48,0,0,1,1.18,3.25,5,5,0,0,1-2.79,4.48,15.09,15.09,0,0,1-7.58,1.61H275.46Zm6,8.32h3.48a8.28,8.28,0,0,0,3.53-.56,1.93,1.93,0,0,0,1.09-1.85,1.8,1.8,0,0,0-1.19-1.74,10.13,10.13,0,0,0-3.76-.52h-3.15Zm0,3.54v5.47h3.91A7.36,7.36,0,0,0,289,127a2.35,2.35,0,0,0,1.17-2.16q0-2.61-5-2.61Z"
                      transform="translate(-1.38)"/>
                <path d="M321.3,131.38l-2.05-5H309l-2,5h-6.45l10-21.1h7.32l10,21.1Zm-3.48-8.74c-1.89-4.53-3-7.09-3.19-7.69s-.41-1.06-.52-1.4c-.42,1.22-1.64,4.26-3.65,9.09Z"
                      transform="translate(-1.38)"/>
                <path d="M358.33,131.38h-7.61l-12.28-15.89h-.18c.25,2.8.37,4.81.37,6v9.89h-5.35v-21h7.55l12.27,15.74h.13q-.28-4.1-.29-5.79v-9.95h5.39Z"
                      transform="translate(-1.38)"/>
                <path d="M390.13,131.38h-6.8l-7.39-8.85-2.53,1.35v7.5h-6v-21h6V120l2.35-2.48,7.65-7.14h6.64l-9.85,9.3Z"
                      transform="translate(-1.38)"/>
            </svg>
        </a>
    </div>
</footer>
<?php View::footer(); ?>

