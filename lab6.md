```html
<form action="create.php" method="POST">
    <div class="form-group">
        <label for="title">Назва завдання:</label>
        <input type="text" id="title" name="title">
    </div>

    <div class="form-group">
        <label for="description">Опис завдання:</label>
        <textarea id="description" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="priority">Пріоритет:</label>
        <select id="priority" name="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
    </div>

    <button type="submit">Зберегти</button>
</form>
Відповіді на контрольні запитання
3 ключові відмінності між GET та POST:

Спосіб передачі: GET передає дані через рядок запиту (URL), а POST — всередині тіла HTTP-запиту (Request Body).

Обсяг даних: GET має обмеження на довжину URL (кілька кілобайт), тоді як POST дозволяє передавати значно більші обсяги даних.

Безпека: GET-параметри видимі в адресному рядку та історії браузера; POST є більш прихованим і не відображається в URL.

Коли метод GET є прийнятним і чому не можна передавати паролі:

GET прийнятний для пошукових запитів, фільтрів або пагінації. Паролі не можна передавати через GET, оскільки вони зберігаються в історії браузера, логах сервера та на екрані.

За що відповідає атрибут action у тегу <form>?

Він вказує URL-адресу (скрипт на сервері), на яку будуть відправлені дані форми при її сабміті.

За яким критерієм PHP асоціює дані з масивом $_POST?

PHP використовує значення атрибута name HTML-елементів як ключі в асоціативному масиві $_POST.

Призначення var_dump() та <pre>, чи використовується це в Production?

var_dump() виводить тип та значення змінної, а <pre> зберігає форматування тексту в браузері. Цей код не використовується в Production-середовищі, оскільки розкриває внутрішню структуру даних та деталі розробки.



    