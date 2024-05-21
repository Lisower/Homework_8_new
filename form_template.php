<form id="Form" action="" method="POST">
    <h1>Форма</h1>

    <label>
        ФИО<br>
        <input name="FIO" placeholder="Введите Ваше ФИО" <?= showError($errors, 'FIO') ?> value="<?= getValue($values, 'FIO') ?>">
    </label><br>

    <label>
        Номер телефона<br>
        <input name="phone_number" type="tel" placeholder="Введите Ваш номер телефона" <?= showError($errors, 'phone_number') ?> value="<?= getValue($values, 'phone_number') ?>">
    </label><br>

    <label>
        Почта e-mail<br>
        <input name="e_mail" type="email" placeholder="Введите Вашу почту" <?= showError($errors, 'e_mail') ?> value="<?= getValue($values, 'e_mail') ?>">
    </label><br>

    <label>
        Дата рождения<br>
        <input name="birthday" type="date" <?= showError($errors, 'birthday') ?> value="<?= getValue($values, 'birthday') ?>">
    </label><br>

    Пол<br>
    <label <?= showError($errors, 'sex') ?>>
        <input type="radio" name="sex" value="М" <?= isChecked($values, 'sex', 'М') ?>> М
    </label>
    <label <?= showError($errors, 'sex') ?>>
        <input type="radio" name="sex" value="Ж" <?= isChecked($values, 'sex', 'Ж') ?>> Ж
    </label><br>

    <label>
        Любимый язык программирования<br>
        <select name="favourite_languages[]" multiple="multiple">
            <?= getLanguageOptions($values) ?>
        </select>
    </label><br>

    <label>
        Биография<br>
        <textarea name="biography" placeholder="Напишите Вашу биографию" <?= showError($errors, 'biography') ?>><?= getValue($values, 'biography') ?></textarea>
    </label><br>

    <label <?= showError($errors, 'check') ?>>
        <input type="checkbox" name="check" <?= isChecked($values, 'check', 'on') ?>> С контрактом ознакомлен
    </label><br>

    <input type="submit" value="Сохранить">
</form>
