<?php

return [
    'invalid_vat_format' => 'Даний ідентифікатор ПДВ має неправильний формат',
    'security-warning' => 'Підозріла активність знайдена !!!',
    'nothing-to-delete' => 'Нічого видалити',

    'layouts' => [
        'my-account' => 'Мій акаунт',
        'profile' => 'Профіль',
        'address' => 'Адреса',
        'reviews' => 'Відгуки',
        'wishlist' => 'Wishlist',
        'orders' => 'Замовлення',
        'downloadable-products' => 'Завантажувані товари'
    ],

    'common' => [
        'error' => 'Щось пішло не так. Повторіть спробу пізніше.',
        'no-result-found' => 'Не вдалося знайти жодної записи.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Рекомендовані товари',
        'new-products' => 'Нові товари',
        'verify-email' => 'Підтвердіть свою адресу електронної пошти',
        'resend-verify-email' => 'Вислати повторно листа для підтвердження'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Керування кошиком, замовленнями та списками бажань',
        'sign-in' => 'Увійти',
        'sign-up' => 'Зареєструватися',
        'account' => 'Аккаунт',
        'cart' => 'Кошик',
        'profile' => 'Профіль',
        'wishlist' => 'Wishlist',
        'cart' => 'Кошик',
        'logout' => 'Вихід',
        'search-text' => 'Пошук'
    ],

    'minicart' => [
        'view-cart' => 'Переглянути кошик',
        'checkout' => 'Оформити замовлення',
        'cart' => 'Кошик',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Підписатися на розсилку',
        'subscribe' => 'Підписатися',
        'locale' => 'Локаль',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Відмовитися від підписки',
        'subscribe' => 'Підписатися',
        'subscribed' => 'Тепер ви підписані на електронні листи',
        'not-subscribed' => 'Ви не можете підписатися на електронні листи. Повторіть спробу пізніше.',
        'already' => 'Ви вже підписані',
        'unsubscribed' => 'Ви скасували підписку',
        'already-unsub' => 'Ви вже скасували підписку.',
        'not-subscribed' => 'Помилка! Наразі пошту неможливо надіслати, будь ласка спробуйте пізніше.'
    ],

    'search' => [
        'no-results' => 'Не знайдено результатів',
        'page-title' => config('app.name') . ' - Search',
        'found-results' => 'Результати пошуку знайдено',
        'found-result' => 'Знайдено результат пошуку'
    ],

    'reviews' => [
        'title' => 'Назва',
        'add-review-page-title' => 'Додати відгук',
        'write-review' => 'Написати відгук',
        'review-title' => 'Дайте вашому відгуку назву',
        'product-review-page-title' => 'Огляд товару',
        'rating-reviews' => 'Rating & Reviews',
        'submit' => 'РОЗМІСТИТИ',
        'delete-all' => 'Усі відгуки успішно видалено',
        'ratingreviews' => ':rating Ratings & :review Reviews',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Ім\'я',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Вже є аккаунт',
            'title' => 'Увійти'
        ],

        'signup-form' => [
            'page-title' => 'Створіть новий обліковий запис клієнта',
            'title' => 'Зареєструватися',
            'firstname' => 'First Name',
            'lastname' => 'Прізвище',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm_pass' => 'Підтвердити пароль',
            'button_title' => 'Зареєструйтесь',
            'agree' => 'Згоден',
            'terms' => 'Умови',
            'conditions' => 'Умови',
            'using' => 'використовуючи цей сайт',
            'agreement' => 'Угода',
            'success' => 'Аккаунт успішно створений.',
            'success-verify' => 'Аккаунт успішно створений, електронного листа відправлено на перевірку.',
            'success-verify-email-unsent' => 'Аккаунт успішно створений, але підтвердження по електронній пошті не відправлено.',
            'failed' => 'Помилка! Неможливо створити обліковий запис, спробуйте ще раз пізніше.',
            'already-verified' => 'Ваш аккаунт вже підтверджено. Або спробуйте відправити новий лист з підтвердженням ще раз.',
            'verification-not-sent' => 'Помилка! Проблема з надсиланням електронного листа для підтвердження. Повторіть спробу пізніше.',
            'verification-sent' => 'Електронний лист для підтвердження надіслано',
            'verified' => 'Ваш обліковий запис перевірено, спробуйте увійти зараз.',
            'verify-failed' => 'Ми не можемо підтвердити ваш поштовий акаунт.',
            'dont-have-account' => 'У вас ще немає аккаунта',
            'customer-registration' => 'Клієнт зареєстрований успішно'
        ],

        'login-text' => [
            'no_account' => 'Немає аккаунта',
            'title' => 'Зареєструватися',
        ],

        'login-form' => [
            'page-title' => 'Вхід клієнта',
            'title' => 'Увійти',
            'email' => 'Email',
            'password' => 'Пароль',
            'forgot_pass' => 'Забули пароль?',
            'button_title' => 'Увійти',
            'remember' => 'Запамятати мене',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Перевірте свої дані та повторіть спробу.',
            'verify-first' => 'Спершу перевірте свій обліковий запис електронної пошти',
            'not-activated' => 'Ваша активація вимагає схвалення адміністратора',
            'resend-verification' => 'Повторне надсилання електронного листа для підтвердження'
        ],

        'forgot-password' => [
            'title' => 'Відновити пароль',
            'email' => 'Email',
            'submit' => 'Надіслати електронний лист для скидання пароля',
            'page_title' => 'Забули свій пароль ?'
        ],

        'reset-password' => [
            'title' => 'Скинути пароль',
            'email' => 'Зареєстрований Email',
            'password' => 'Пароль',
            'confirm-password' => 'Підтвердити пароль',
            'back-link-title' => 'Назад до входу',
            'submit-btn-title' => 'Скинути пароль'
        ],

        'account' => [
            'dashboard' => 'Редагувати профіль',
            'menu' => 'Меню',

            'profile' => [
                'index' => [
                    'page-title' => 'Профіль',
                    'title' => 'Профіль',
                    'edit' => 'Редагувати',
                ],

                'edit-success' => 'Профіль успішно оновлений.',
                'edit-fail' => 'Помилка! Не вдається оновити профіль. Повторіть спробу пізніше.',
                'unmatch' => 'Старий пароль не відповідає.',

                'fname' => 'First Name',
                'lname' => 'Прізвище',
                'gender' => 'Стать',
                'other' => 'Інше',
                'male' => 'Чоловічий',
                'female' => 'Жіночий',
                'dob' => 'Дата народження',
                'phone' => 'Телефон',
                'email' => 'Email',
                'opassword' => 'Старий пароль',
                'password' => 'Пароль',
                'cpassword' => 'Підтвердити пароль',
                'submit' => 'Оновити профіль',

                'edit-profile' => [
                    'title' => 'Редагувати профіль',
                    'page-title' => 'Редагувати форму профілю'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Адреса',
                    'title' => 'Адреса',
                    'add' => 'Додати адресу',
                    'edit' => 'Редагувати',
                    'empty' => 'У вас немає збережених адрес тут. Спробуйте створити їх, натиснувши посилання нижче',
                    'create' => 'Створити адресу',
                    'delete' => 'Видалити',
                    'make-default' => 'Використовувати за замовчуванням',
                    'default' => 'За замовчуванням',
                    'contact' => 'Контактна інформація',
                    'confirm-delete' =>  'Ви дійсно хочете видалити цю адресу?',
                    'default-delete' => 'Адресу за замовчуванням неможливо змінити.',
                    'enter-password' => 'Введіть ваш пароль.',
                ],

                'create' => [
                    'page-title' => 'Додати форму адреси',
                    'company_name' => 'Назва компанії',
                    'first_name' => 'First name',
                    'last_name' => 'Прізвище',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Додати адресу',
                    'street-address' => 'Адреса вулиці',
                    'country' => 'Країна',
                    'state' => 'Держава',
                    'select-state' => 'Виберіть регіон, штат чи провінцію',
                    'city' => 'Місто',
                    'postcode' => 'Поштовий індекс',
                    'phone' => 'Телефон',
                    'submit' => 'Зберегти адресу',
                    'success' => 'Адресу успішно додано.',
                    'error' => 'Адреса не може бути додана.'
                ],

                'edit' => [
                    'page-title' => 'Редагувати адресу',
                    'company_name' => 'Назва компанії',
                    'first_name' => 'First name',
                    'last_name' => 'Прізвище',
                    'vat_id' => 'Vat id',
                    'title' => 'Редагувати адресу',
                    'street-address' => 'Адреса вулиці',
                    'submit' => 'Зберегти адресу',
                    'success' => 'Адреса успішно оновлена.',
                ],
                'delete' => [
                    'success' => 'Адреса успішно видалена',
                    'failure' => 'Видалити адресу не можна',
                    'wrong-password' => 'Неправильний пароль !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Замовлення',
                    'title' => 'Замовлення',
                    'order_id' => 'Id замовлення',
                    'date' => 'Дата',
                    'status' => 'Статус',
                    'total' => 'Усього',
                    'order_number' => 'Номер замовлення',
                    'processing' => 'Обробка',
                    'completed' => 'Завершено',
                    'canceled' => 'Скасовано',
                    'closed' => 'Закрито',
                    'pending' => 'В очікуванні',
                    'pending-payment' => 'Очікує на оплату',
                    'fraud' => 'Шахрайство'
                ],

                'view' => [
                    'page-tile' => 'Замовлення #:order_id',
                    'info' => 'Інформація',
                    'placed-on' => 'Розташований на',
                    'products-ordered' => 'Замовлені товари',
                    'invoices' => 'Рахунки',
                    'shipments' => 'Відвантаження',
                    'SKU' => 'SKU',
                    'product-name' => 'Ім\'я',
                    'qty' => 'Кількість',
                    'item-status' => 'Статус товару',
                    'item-ordered' => 'Ordered (:qty_ordered)',
                    'item-invoice' => 'Invoiced (:qty_invoiced)',
                    'item-shipped' => 'shipped (:qty_shipped)',
                    'item-canceled' => 'Canceled (:qty_canceled)',
                    'item-refunded' => 'Refunded (:qty_refunded)',
                    'price' => 'Ціна',
                    'total' => 'Усього',
                    'subtotal' => 'Підсумок',
                    'shipping-handling' => 'Доставка та обробка',
                    'tax' => 'Податок',
                    'discount' => 'Знижка',
                    'tax-percent' => 'Податковий відсоток',
                    'tax-amount' => 'Сума податку',
                    'discount-amount' => 'Сума знижок',
                    'grand-total' => 'Разом',
                    'total-paid' => 'Загальна оплата',
                    'total-refunded' => 'Загальна сума повернених коштів',
                    'total-due' => 'Разом до сплати',
                    'shipping-address' => 'Адреса доставки',
                    'billing-address' => 'Адреса платника',
                    'shipping-method' => 'Спосіб доставки',
                    'payment-method' => 'Спосіб оплати',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Друк',
                    'invoice-id' => 'Invoice Id',
                    'order-id' => 'Id замовлення',
                    'order-date' => 'Дата замовлення',
                    'bill-to' => 'Відправити до',
                    'ship-to' => 'Відправити до',
                    'contact' => 'Контакт',
                    'refunds' => 'Повернення',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Відшкодування за коригування',
                    'adjustment-fee' => 'Плата за коригування',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Видалити все',
                'moveall' => 'Перенесіть усі товари в кошик',
                'move-to-cart' => 'Перемістити в кошик',
                'error' => 'Неможливо додати товари до списку бажань через невідомі проблеми. Перевірте пізніше',
                'add' => 'Елемент успішно додано до списку бажань',
                'remove' => 'Елемент успішно видалено зі списку бажань',
                'moved' => 'Елемент успішно переміщено в кошик',
                'option-missing' => 'Опції товару відсутні, тому товар не можна перемістити в список бажань.',
                'move-error' => 'Товар не може бути переміщений в список бажань, будь ласка, спробуйте пізніше',
                'success' => 'Товар успішно доданий до списку бажань',
                'failure' => 'Товар не може бути доданий в список бажань, будь ласка, спробуйте пізніше',
                'already' => 'Товар вже присутній в вашому списку бажань',
                'removed' => 'Товар успішно видалений зі списку бажань',
                'remove-fail' => 'Товар не може бути вилучений зі списку бажань, будь ласка, спробуйте пізніше',
                'empty' => 'У вас немає товарів у списку бажань',
                'remove-all-success' => 'Усі елементи зі списку бажань видалено',
            ],

            'downloadable_products' => [
                'title' => 'Завантажувані товари',
                'order-id' => 'Id замовлення',
                'date' => 'Дата',
                'name' => 'Назва',
                'status' => 'Статус',
                'pending' => 'В очікуванні',
                'available' => 'Доступні',
                'expired' => 'Термін дії закінчився',
                'remaining-downloads' => 'Решта завантаження',
                'unlimited' => 'Необмежений',
                'download-error' => 'Посилання для скачування минула.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Відгуки',
                    'page-title' => 'Відгуки'
                ],

                'view' => [
                    'page-tile' => 'Огляд #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Магазин',
        'price-label' => 'Так низько як',
        'remove-filter-link-title' => 'Очистити все',
        'sort-by' => 'Сортувати за',
        'from-a-z' => 'Від A-Я',
        'from-z-a' => 'Від А-Я',
        'newest-first' => 'Спочатку нові',
        'oldest-first' => 'Спочатку старі',
        'cheapest-first' => 'Найдешевші спочатку',
        'expensive-first' => 'Найдорожчі спочатку',
        'show' => 'Показати',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => 'Опис',
        'specification' => 'Специфікація',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'Ми знайшли інші продукти, які вам можуть сподобатися!',
        'related-product-title' => 'Супутні товари',
        'cross-sell-title' => 'Більше варіантів',
        'reviews-title' => 'Рейтинги та огляди',
        'write-review-btn' => 'Написати відгук',
        'choose-option' => 'Виберіть опцію',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'У цій категорії відсутні товари',
        'add-to-cart' => 'Додати у кошик',
        'buy-now' => 'Придбати зараз',
        'whoops' => 'Упс!',
        'quantity' => 'Кількість',
        'in-stock' => 'В наявності',
        'out-of-stock' => 'Немає в наявності',
        'view-all' => 'Подивитись все',
        'select-above-options' => 'Будь ласка, спочатку виберіть вище варіанти.',
        'less-quantity' => 'Кількість не може бути меншою, ніж одна.',
        'samples' => 'Зразки',
        'links' => 'Посилання',
        'sample' => 'Зразок',
        'name' => 'Ім\'я',
        'qty' => 'Кількість',
        'starting-at' => 'Починаючи з',
        'customize-options' => 'Налаштувати параметри',
        'choose-selection' => 'Choose a selection',
        'your-customization' => 'Ваше налаштування',
        'total-amount' => 'Загальна кількість',
        'none' => 'Жоден',
        'available' => 'Доступні'
    ],

    // 'reviews' => [
    //     'empty' => 'Ви ще не переглянули жоден товар'
    // ]

    'buynow' => [
        'no-options' => 'Виберіть варіанти, перш ніж купувати цей товар.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Some required fields missing for this product.',
                'missing_options' => 'Параметри цього товару відсутні.',
                'missing_links' => 'Для цього товару відсутні посилання для завантаження.',
                'qty_missing' => 'Щонайменше в одному товарі повинно бути більше 1 кількості.',
                'qty_impossible' => 'Неможливо додати до кошика більше одного із цих товарів.'
            ],
            'create-error' => 'Виявлена певна проблема при створенні екземпляра кошика.',
            'title' => 'Корзина',
            'empty' => 'Ваша корзина порожня',
            'update-cart' => 'Оновити кошик',
            'continue-shopping' => 'Продовжити покупки',
            'proceed-to-checkout' => 'Оформити замовлення',
            'remove' => 'Видалити',
            'remove-link' => 'Видалити',
            'move-to-wishlist' => 'Перейти до списку бажань',
            'move-to-wishlist-success' => 'Товар успішно переміщено до списку бажань.',
            'move-to-wishlist-error' => 'Неможливо перемістити товар до списку бажань. Повторіть спробу пізніше.',
            'add-config-warning' => 'Виберіть опцію перед додаванням у кошик.',
            'quantity' => [
                'quantity' => 'Кількість',
                'success' => 'Товар успішно оновлено.',
                'illegal' => 'Кількість не може бути меншою, ніж одна.',
                'inventory_warning' => 'Запитана кількість недоступна. Повторіть спробу пізніше.',
                'error' => 'Наразі неможливо оновити позицію, будь ласка, спробуйте пізніше.'
            ],

            'item' => [
                'error_remove' => 'Немає товарів для видалення з кошика.',
                'success' => 'Товар був успішно доданий до кошика.',
                'success-remove' => 'Товар був успішно видалений із кошика.',
                'error-add' => 'Товар не може бути доданий в кошик, спробуйте ще раз пізніше.',
            ],
            'quantity-error' => 'Запитана кількість недоступна.',
            'cart-subtotal' => 'Разом',
            'cart-remove-action' => 'Ви справді хочете це зробити?',
            'partial-cart-update' => 'Тільки деякі з товарів були оновлені',
            'link-missing' => '',
            'event' => [
                'expired' => 'Ця подія минула.'
            ]
        ],

        'onepage' => [
            'title' => 'Оформити замовлення',
            'information' => 'Інформація',
            'shipping' => 'Доставка',
            'payment' => 'Оплата',
            'complete' => 'Завершити',
            'billing-address' => 'Адреса платника',
            'sign-in' => 'Увійти',
            'company-name' => 'Назва компанії',
            'first-name' => 'First Name',
            'last-name' => 'Прізвище',
            'email' => 'Email',
            'address1' => 'Вулиця',
            'city' => 'Місто',
            'state' => 'Держава',
            'select-state' => 'Виберіть регіон, штат чи провінцію',
            'postcode' => 'Zip/Почтовый индекс',
            'phone' => 'Телефон',
            'country' => 'Країна',
            'order-summary' => 'Підсумок замовлення',
            'shipping-address' => 'Адреса доставки',
            'use_for_shipping' => 'Доставка на цю адресу',
            'continue' => 'Продовжити',
            'shipping-method' => 'Вибрати спосіб доставки',
            'payment-methods' => 'Вибрати спосіб оплати',
            'payment-method' => 'Спосіб оплати',
            'summary' => 'Підсумок замовлення',
            'price' => 'Ціна',
            'quantity' => 'Кількість',
            'billing-address' => 'Адреса платника',
            'shipping-address' => 'Адреса доставки',
            'contact' => 'Контакт',
            'place-order' => 'Розмістити замовлення',
            'new-address' => 'Додати нову адресу',
            'save_as_address' => 'Зберегти цю адресу',
            'apply-coupon' => 'Застосувати купон',
            'amt-payable' => 'Сума до сплати',
            'got' => 'Got',
            'free' => 'Безкоштовно',
            'coupon-used' => 'Купон використаний',
            'applied' => 'Застосовується',
            'back' => 'Назад',
            'cash-desc' => 'Готівкою при доставці',
            'money-desc' => 'Грошовий переказ',
            'paypal-desc' => 'Стандарт Paypal',
            'free-desc' => 'Безкоштовна доставка',
            'flat-desc' => 'Це єдина ставка',
            'password' => 'Пароль',
            'login-exist-message' => 'Ви вже маєте обліковий запис у нас, увійдіть або продовжте як гість.',
            'enter-coupon-code' => 'Введіть код купона'
        ],

        'total' => [
            'order-summary' => 'Підсумок Замовлення',
            'sub-total' => 'Елементи',
            'grand-total' => 'Разом',
            'delivery-charges' => 'Вартість доставки',
            'tax' => 'Податок',
            'discount' => 'Знижка',
            'price' => 'Ціна',
            'disc-amount' => 'Сума зі знижкою',
            'new-grand-total' => 'Новий Grand Total',
            'coupon' => 'Купон',
            'coupon-applied' => 'Прикладний купон',
            'remove-coupon' => 'Видаліть купон',
            'cannot-apply-coupon' => 'Неможливо застосувати купон',
            'invalid-coupon' => 'Код купона недійсний.',
            'success-coupon' => 'Код купона успішно застосовано',
            'coupon-apply-issue' => 'Код купона неможливо застосувати'
        ],

        'success' => [
            'title' => 'Замовлення успішно розміщено',
            'thanks' => 'Дякуємо за ваше замовлення!',
            'order-id-info' => 'Ваш ідентифікатор замовлення #:order_id',
            'info' => 'Ми надішлемо вам електронну пошту, дані про ваше замовлення та інформацію про відстеження'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Нове підтвердження замовлення',
            'heading' => 'Підтвердження замовлення!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Дякуємо за ваше замовлення :created_at',
            'greeting-admin' => 'Ідентифікатор замовлення: розміщено :created_at',
            'summary' => 'Підсумок замовлення',
            'shipping-address' => 'Адреса доставки',
            'billing-address' => 'Адреса платника',
            'contact' => 'Контакт',
            'shipping' => 'Спосіб доставки',
            'payment' => 'Спосіб оплати',
            'price' => 'Ціна',
            'quantity' => 'Кількість',
            'subtotal' => 'Підсумок',
            'shipping-handling' => 'Доставка та обробка',
            'tax' => 'Податок',
            'discount' => 'Знижка',
            'grand-total' => 'Разом',
            'final-summary' => 'Дякуємо за проявлений інтерес до нашого магазину. Ми надішлемо вам номер для відстеження після його відправлення.',
            'help' => 'If you need any kind of help please contact us at :support_email',
            'thanks' => 'Дякуємо',
            'cancel' => [
                'subject' => 'Підтвердження скасування замовлення',
                'heading' => 'Замовлення скасовано',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Підсумок замовлення',
                'shipping-address' => 'Адреса доставки',
                'billing-address' => 'Адреса платника',
                'contact' => 'Контакт',
                'shipping' => 'Спосіб доставки',
                'payment' => 'Спосіб оплати',
                'subtotal' => 'Підсумок',
                'shipping-handling' => 'Доставка та обробка',
                'tax' => 'Податок',
                'discount' => 'Знижка',
                'grand-total' => 'Разом',
                'final-summary' => 'Дякуємо, що проявили інтерес до нашого магазину',
                'help' => 'If you need any kind of help please contact us at :support_email',
                'thanks' => 'Дякуємо',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Підсумок рахунків',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Підсумок відвантаження',
            'carrier' => 'Перевізник',
            'tracking-number' => 'Номер відстеження',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Відшкодування за ваше замовлення #:order_id',
            'summary' => 'Підсумок повернення коштів',
            'adjustment-refund' => 'Відшкодування за коригування',
            'adjustment-fee' => 'Плата за коригування'
        ],

        'forget-password' => [
            'subject' => 'Пароль скидання клієнта',
            'dear' => 'Dear :name',
            'info' => 'Ви отримуєте цей електронний лист, оскільки ми отримали запит на скидання пароля для вашого облікового запису',
            'reset-password' => 'Скинути пароль',
            'final-summary' => 'Якщо ви не вимагали скидання пароля, подальших дій не потрібно',
            'thanks' => 'Дякуємо'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'Реєстрація нового клієнта',
                'password' => 'Пароль',
                'summary' => 'Ваш обліковий запис створено.
                Деталі вашого облікового запису наведені нижче: ',
                'thanks' => 'Дякуємо',
            ],

            'registration' => [
                'subject' => 'Реєстрація нового клієнта',
                'customer-registration' => 'Клієнт зареєстрований успішно',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Ласкаво просимо і дякуємо за реєстрацію на нашому сайті',
                'summary' => 'Зараз ваш обліковий запис успішно створено, і ви можете ввійти, використовуючи свою електронну адресу та дані пароля. Після входу в систему, you will be able to access other services including reviewing past orders, wishlists and editing your account information.',
                'thanks' => 'Дякуємо!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Підтвердження електронної пошти',
                'subject' => 'Пошта для підтвердження',
                'verify' => 'Підтвердіть ваш аккаунт',
                'summary' => 'Цей лист, що підтверджує, що введена вами адреса електронної пошти належить вам.
                Будь ласка, натисніть кнопку Підтвердити свою обліковий запис нижче, щоб підтвердити свій обліковий запис.'
            ],

            'subscription' => [
                'subject' => 'Email підписки',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Відмовитися від підписки',
                'summary' => 'Дякуємо, що помістили мене у вашу поштову скриньку. Минув час, коли ви прочитали ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name created successfully.',
        'update-success' => ':name updated successfully.',
        'delete-success' => ':name deleted successfully.',
        'submit-success' => ':name submitted successfully.'
    ],
];
