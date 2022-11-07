<?php View::header('Operator'); ?>


<main class="grid-panel">
    <div class="grid-box__all">
        <header class="grid-box--header">
            <h2 class="header-title">Добавление клиентов</h2>
        </header>

        <div class="search-result">
            <form id="addUser" class="user_info-box--update">
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
            <aside class="user_info--functions">
                <button form="addUser" formaction="/account/registration/notajax" formmethod="post" class="btn">Добавить</button>
            </aside>
        </div>
    </div>
</main>

<?php View::footer(); ?>
