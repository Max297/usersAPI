<style>
        .mainBody {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .endpoint {
            background: #f4f4f4;
            padding: 15px;
            margin: 10px 0;
            border-left: 5px solid #333;
        }
        .endpoint h3 {
            margin-top: 0;
        }
        .endpoint p {
            margin: 5px 0;
        }
        code {
            background: #e4e4e4;
            padding: 2px 5px;
            border-radius: 3px;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
<div class="mainBody">
    <h1>Описание api функций</h1>

    <div class="endpoint">
        <h2>1. Создать пользователя</h2>
        <h3>URL: <code>POST /api/newUser.php</code></h3>
        <p><strong>Описание:</strong> Создает нового пользователя.</p>
        <p><strong>Параметры:</strong></p>
        <ul>
            <li><code>login</code> (string): Логин, длинна должна быть больше 4 символов</li>
            <li><code>password</code> (string): Пароль, должен осдиржать символ, цифру и букву английского алфовита, длинна больше 5 символов.</li>
            <li><code>email</code> (string): Электронная почта пользователя, должна быть в формате электронной почты, длинна больше 2 символов.</li>
        </ul>
    </div>
    <div class="endpoint">
        <h2>2. Получить пользователя</h2>
        <h3>URL: <code>GET /api/getUser.php</code></h3>
        <p><strong>Описание:</strong> Функция для получения пользователя по id.</p>
        <p><strong>Параметры:</strong></p>
        <ul>
            <li><code>id</code> (int): id существующего пользователя, параметр должен быть цифрой</li>
        </ul>
    </div>
    <div class="endpoint">
        <h2>3. Обновить пользователя</h2>
        <h3>URL: <code>POST /api/editUser.php</code></h3>
        <p><strong>Описание:</strong> Меняет данные существующего пользователя.</p>
        <p><strong>Параметры:</strong></p>
        <ul>
            <li><code>id</code> (int): id существующего пользователя, параметр должен быть цифрой.</li>
            <li><code>login</code> (string): Логин, длинна должна быть больше 4 символов.</li>
            <li><code>password</code> (string): Пароль, должен осдиржать символ, цифру и букву английского алфовита, длинна больше 5 символов.</li>
            <li><code>email</code> (string): Электронная почта пользователя, должна быть в формате электронной почты, длинна больше 2 символов.</li>
        </ul>
    </div>
    <div class="endpoint">
        <h2>4. Удалить пользователя</h2>
        <h3>URL: <code>GET /api/delUser.php</code></h3>
        <p><strong>Описание:</strong> Удалить пользователя с этим id.</p>
        <p><strong>Параметры:</strong></p>
        <ul>
            <li><code>id</code> (int): id существующего пользователя, параметр должен быть цифрой.</li>
        </ul>
    </div>
    <div >
        <p>Для настройки подключения к бд нужно изменить параметры в файле config</p>
        <p>Скрипт, для создания таблицы, находится в файле createTable.sql</p>
    </div>
    
</div>
