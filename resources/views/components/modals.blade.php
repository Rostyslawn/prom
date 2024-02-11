<div class="modals">
    <div onclick="close_modals()" class="modal-bg"></div>
    <div class="login-menu menu">
        <h3 class="status">Ви не авторизованi</h3>
        <button onclick="open_auth_menu()" class="registry-or-login">
            Увійти або зареєструватись
        </button>
        <div class="item select-language">
            <img src="{{asset('imgs/world.png')}}" class="icon" alt="Select language">
            <span>Українська</span>
        </div>
        <div class="item order-history">
            <img src="{{asset('imgs/history.png')}}" class="icon" alt="Order history">
            <span>Історія замовлень</span>
        </div>
        <div class="item order-tracking">
            <img src="{{asset('imgs/tracking.png')}}" class="icon" alt="Order tracking">
            <span>Відстеження замовлення</span>
        </div>
        <div class="item favorite">
            <img src="{{asset('imgs/heartWithOutBG.png')}}" class="icon" alt="Favorite">
            <span>Бажане</span>
        </div>
        <div class="item reviews">
            <img src="{{asset('imgs/star.png')}}" class="icon" alt="My reviews">
            <span>Мої відгуки</span>
        </div>
        <div class="item wallet">
            <img src="{{asset('imgs/wallet.png')}}" class="icon" alt="My wallet">
            <span>Мій гаманець</span>
        </div>
        <div class="item discounts">
            <img src="{{asset('imgs/discount.png')}}" class="icon" alt="Discounts and bonuses">
            <span>Знижки та бонуси</span>
        </div>
        <div class="item settings">
            <img src="{{asset('imgs/setting.png')}}" class="icon" alt="Settings">
            <span>Налаштування</span>
        </div>
        <div class="item start-selling">
            <img src="{{asset('imgs/trade.png')}}" class="icon" alt="Start selling on prom">
            <span>Почати продавати на prom</span>
        </div>
        <div class="item support">
            <img src="{{asset('imgs/telegram.png')}}" class="icon" alt="Prom-support">
            <span>Пром-підтримка</span>
        </div>
        <div class="item help">
            <img src="{{asset('imgs/help.png')}}" class="icon" alt="Help">
            <span>Довідка</span>
        </div>
        <div class="item qr-code">
            <img src="{{asset('imgs/qr-code.png')}}" alt="QR-Code">
            <div>
                <span>Агов! А в додатку зручніше</span>
                <span>Відскануй QR-код</span>
            </div>
        </div>
    </div>
    <div class="authorization menu">
        <div class="head">
            <img onclick="open_auth_menu()" src="{{asset('imgs/leftarrow.png')}}" alt="Go back" class="go-back">
            <h3>Вхiд</h3>
        </div>
        <div class="items">
            <div class="hello">
                <img src="{{asset('imgs/hello.png')}}" alt="Hello">
            </div>
            <h3>Увійти в кабінет</h3>
            <span>Увійдіть, щоб додавати товари до бажаного, <br> писати продавцям і бачити свої замовлення</span>
            <div class="insert-number">Введіть телефон <span>*</span></div>
            <label>
                <input name="login" placeholder="+380 (__) ___-__-__" class="telephone-number input-event">
                <input name="password_auth" placeholder="password" class="password_auth">
            </label>
            <div class="errors errors-auth"></div>
            <button onclick="authorization('{{route("ajax.auth")}}')" type="submit" class="auth submit">Увiйти</button>
            <span class="login-with-text">Або увійдіть за допомогою:</span>
            <div class="login-with">
                <div class="elem">
                    <img src="{{asset('imgs/mail.png')}}" alt="Mail">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/google.png')}}" alt="Google">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/facebook.png')}}" alt="Facebook">
                </div>
            </div>
            <div class="no-profile">
                <span>Немає профілю?</span>
                <div onclick="open_reg_menu()">Зареєструйтесь</div>
            </div>
            <h3 class="peoples">2 600 000</h3>
            <span>відвідувачів кожен день на prom.</span>
            <span>Реєструйся, додавай товари, продавай по всій Україні</span>
            <button class="become-seller">Стати продавцем</button>
        </div>
    </div>
    <div class="registration menu">
        <div class="head">
            <img onclick="open_reg_menu()" src="{{asset('imgs/leftarrow.png')}}" alt="Go back" class="go-back">
            <h3>Реєстрація</h3>
        </div>
        <div class="items">
            <h3>Створити профіль</h3>
            <span>Заповніть всі поля нижче, щоб створити свій профіль</span>
            <label>
                <span>Ваше ім'я</span>
                <input class="name input-event" name="name" type="text">
            </label>
            <label>
                <span>Ваше прізвище</span>
                <input class="surname input-event" name="surname" type="text">
            </label>
            <label class="phone-number">
                <span>Номер телефону <span>*</span></span>
                <input class="phone_number input-event" name="number" placeholder="+380 (__) ___-__-__" type="text">
            </label>
            <label>
                <span>Пароль</span>
                <input class="password_reg input-event" name="password" type="password">
            </label>
            <span class="receive-checkbox">
                    <input name="receive_prom_offers" type="checkbox">
                    <label for="custom-checkbox">Я хочу отримувати цікаві пропозиції від prom</label>
            </span>
            <div class="errors errors-reg"></div>
            <button onclick="registration('{{route("ajax.reg")}}')" type="submit" class="auth submit">
                Зареєструватися
            </button>
            <div class="accepts">
                Реєструючись, ви погоджуєтеся з
                <a href="#">угодою користувача</a>
                <a href="#">політикою конфіденційності</a>
                маркетплейсу prom
            </div>
            <span class="login-with-text">Або увійдіть за допомогою:</span>
            <div class="login-with">
                <div class="elem">
                    <img src="{{asset('imgs/mail.png')}}" alt="Mail">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/google.png')}}" alt="Google">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/facebook.png')}}" alt="Facebook">
                </div>
            </div>
            <div class="have-profile">
                Вже є профіль?
                <span onclick="open_reg_menu()">Увiйдiть</span>
            </div>
        </div>
        <hr>
        <div class="users">
            <h3>2 600 000</h3>
            <span>відвідувачів кожен день на prom.</span> <br>
            <span>Реєструйся, додавай товари, продавай по всій Україні</span>
        </div>
    </div>
</div>
<script src="{{ asset('js/inputs.js') }}"></script>
