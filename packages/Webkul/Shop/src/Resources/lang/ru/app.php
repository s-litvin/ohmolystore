<?php

return [
    'invalid_vat_format' => 'Данный идентификатор НДС имеет неправильный формат',
    'security-warning' => 'Обнаружена подозрительная активность !!!',
    'nothing-to-delete' => 'Нечего удалять',

    'layouts' => [
        'my-account' => 'Моя учетная запись',
        'profile' => 'Профиль',
        'address' => 'Адрес',
        'reviews' => 'Отзывы',
        'wishlist' => 'Wishlist',
        'orders' => 'Заказы',
        'downloadable-products' => 'Загружаемые товары'
    ],

    'common' => [
        'error' => 'Что-то пошло не так, попробуйте позже',
        'no-result-found' => 'Мы не смогли найти никаких записей.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Рекомендуемые товары',
        'new-products' => 'Новые товары',
        'verify-email' => 'Подтвердить свою учетную запись электронной почтой',
        'resend-verify-email' => 'Отправить письмо с подтверждением'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Управление корзиной, заказами и пожеланиями',
        'sign-in' => 'Войти',
        'sign-up' => 'Зарегистрироваться',
        'account' => 'Аккаунт',
        'cart' => 'Корзина',
        'profile' => 'Профиль',
        'wishlist' => 'Wishlist',
        'cart' => 'Корзина',
        'logout' => 'Выход',
        'search-text' => 'Поиск'
    ],

    'minicart' => [
        'view-cart' => 'Перейти в корзину',
        'checkout' => 'Оформить',
        'cart' => 'Корзина',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Подписаться на рассылку',
        'subscribe' => 'Подписка',
        'locale' => 'Язык/Lang',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Отписаться',
        'subscribe' => 'Подписка',
        'subscribed' => 'Теперь вы подписаны на рассылку.',
        'not-subscribed' => 'Вы не можете быть подписаны на электронные письма, повторите попытку позже.',
        'already' => 'Вы уже подписаны',
        'unsubscribed' => 'Вы отменили подписку на рассылку.',
        'already-unsub' => 'Вы уже отписались.',
        'not-subscribed' => 'Ошибка! Письмо не может быть отправлена в настоящее время, попробуйте позже.'
    ],

    'search' => [
        'no-results' => 'Результаты не найдены',
        'page-title' => config('app.name') . ' - Search',
        'found-results' => 'Результаты поиска найдены',
        'found-result' => 'Результат поиска найден'
    ],

    'reviews' => [
        'title' => 'Название',
        'add-review-page-title' => 'Добавить отзыв',
        'write-review' => 'Написать отзыв',
        'review-title' => 'Дайте вашему отзыву название',
        'product-review-page-title' => 'Обзор продукта',
        'rating-reviews' => 'Рейтинг и отзывы',
        'submit' => 'ОТПРАВИТЬ',
        'delete-all' => 'Все отзывы успешно удалены',
        'ratingreviews' => ':rating Ratings & :review Reviews',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Имя',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Уже есть аккаунт',
            'title' => 'Войти'
        ],

        'signup-form' => [
            'page-title' => 'Создать новую учетную запись',
            'title' => 'Зарегистрироваться',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm_pass' => 'Подтвердить пароль',
            'button_title' => 'Регистрация',
            'agree' => 'Согласен',
            'terms' => 'Условия',
            'conditions' => 'Условия',
            'using' => 'используя этот сайт',
            'agreement' => 'Соглашение',
            'success' => 'Аккаунт успешно создан.',
            'success-verify' => 'Аккаунт успешно создан, электронное письмо отправлено для проверки.',
            'success-verify-email-unsent' => 'Аккаунт успешно создан, но письмо с подтверждением не отправлено.',
            'failed' => 'Ошибка! Не удается создать учетную запись, повторите попытку позже.',
            'already-verified' => 'Ваш аккаунт уже подтвержден. Или попробуйте отправить новое письмо с подтверждением еще раз.',
            'verification-not-sent' => 'Ошибка! Проблема с отправкой подтверждающего электронного письма, повторите попытку позже.',
            'verification-sent' => 'Письмо с подтверждением отправлено',
            'verified' => 'Ваш аккаунт был подтвержден, попробуйте войти сейчас.',
            'verify-failed' => 'Мы не можем подтвердить вашу почту',
            'dont-have-account' => 'У вас еще нет аккаунта.',
            'customer-registration' => 'Клиент успешно зарегистрирован'
        ],

        'login-text' => [
            'no_account' => 'Нет аккаунта',
            'title' => 'Зарегистрироваться',
        ],

        'login-form' => [
            'page-title' => 'Вход для клиентов',
            'title' => 'Войти',
            'email' => 'Email',
            'password' => 'Пароль',
            'forgot_pass' => 'Забыли пароль?',
            'button_title' => 'Войти',
            'remember' => 'Запомнить меня',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Пожалуйста, проверьте свои учетные данные и попробуйте снова.',
            'verify-first' => 'Сначала проверьте свою почту.',
            'not-activated' => 'Ваша активация требует одобрения администратора',
            'resend-verification' => 'Отправить письмо еще раз'
        ],

        'forgot-password' => [
            'title' => 'Восстановить пароль',
            'email' => 'Email',
            'submit' => 'Отправить пароль, сбросить электронную почту',
            'page_title' => 'Забыли пароль?'
        ],

        'reset-password' => [
            'title' => 'Сбросить пароль',
            'email' => 'Зарегистрированная электронная почта',
            'password' => 'Пароль',
            'confirm-password' => 'Подтвердить пароль',
            'back-link-title' => 'Вернуться к входу',
            'submit-btn-title' => 'Сбросить пароль'
        ],

        'account' => [
            'dashboard' => 'Редактировать профиль',
            'menu' => 'Меню',

            'profile' => [
                'index' => [
                    'page-title' => 'Профиль',
                    'title' => 'Профиль',
                    'edit' => 'Редактировать',
                ],

                'edit-success' => 'Профиль успешно обновлен.',
                'edit-fail' => 'Ошибка! Профиль не может быть обновлен, повторите попытку позже.',
                'unmatch' => 'Старый пароль не совпадает.',

                'fname' => 'Имя',
                'lname' => 'Фамилия',
                'gender' => 'Пол',
                'other' => 'Другое',
                'male' => 'Мужской',
                'female' => 'Женский',
                'dob' => 'Дата рождения',
                'phone' => 'Телефон' ,
                'email' => 'Email',
                'opassword' => 'Старый пароль',
                'password' => 'Пароль',
                'cpassword' => 'Подтвердить пароль',
                'submit' => 'Обновить профиль',

                'edit-profile' => [
                    'title' => 'Редактировать профиль',
                    'page-title' => 'Редактировать форму профиля'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Адрес',
                    'title' => 'Адрес',
                    'add' => 'Добавить адрес',
                    'edit' => 'Редактировать',
                    'empty' => 'У вас нет сохраненных адресов здесь, попробуйте создать его, нажав на ссылку ниже',
                    'create' => 'Создать адрес',
                    'delete' => 'Удалить',
                    'make-default' => 'Сделать по умолчанию',
                    'default' => 'По умолчанию',
                    'contact' => 'Контакт',
                    'confirm-delete' =>  'Вы действительно хотите удалить этот адрес?',
                    'default-delete' => 'Адрес по умолчанию не может быть изменен.',
                    'enter-password' => 'Введите свой пароль.',
                ],

                'create' => [
                    'page-title' => 'Добавить адресную форму',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Добавить адрес',
                    'street-address' => 'Название улицы',
                    'country' => 'Страна',
                    'state' => 'Область',
                    'select-state' => 'Выберите город или область',
                    'city' => 'Область' ,
                    'postcode' => 'Почтовый индекс',
                    'phone' => 'Телефон' ,
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес был успешно добавлен.',
                    'error' => 'Адрес не может быть добавлен.'
                ],

                'edit' => [
                    'page-title' => 'Изменить адрес',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'Vat id',
                    'title' => 'Изменить адрес',
                    'street-address' => 'Название улицы',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес успешно обновлен.',
                ],
                'delete' => [
                    'success' => 'Адрес успешно удален',
                    'failure' => 'Адрес не может быть удален',
                    'wrong-password' => 'Неправильный пароль!'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Заказы',
                    'title' => 'Заказы',
                    'order_id' => 'Id заказа',
                    'date' => 'Дата',
                    'status' => 'Статус',
                    'total' => 'Всего',
                    'order_number' => 'Номер заказа',
                    'processing' => 'Обработка',
                    'completed' => 'Завершено',
                    'canceled' => 'Отменено',
                    'closed' => 'Закрыто',
                    'pending' => 'В ожидании',
                    'pending-payment' => 'Ожидающий платеж',
                    'fraud' => 'Мошенничество'
                ],

                'view' => [
                    'page-tile' => 'Order #:order_id',
                    'info' => 'Информация',
                    'placed-on' => 'Размещено на',
                    'products-ordered' => 'Заказанные товары',
                    'invoices' => 'Счета-фактуры',
                    'shipments' => 'Отгрузки',
                    'SKU' => 'SKU',
                    'product-name' => 'Имя',
                    'qty' => 'Кол-во',
                    'item-status' => 'Статус товара',
                    'item-ordered' => 'Ordered (:qty_ordered)',
                    'item-invoice' => 'Invoiced (:qty_invoiced)',
                    'item-shipped' => 'shipped (:qty_shipped)',
                    'item-canceled' => 'Canceled (:qty_canceled)',
                    'item-refunded' => 'Refunded (:qty_refunded)',
                    'price' => 'Цена',
                    'total' => 'Всего',
                    'subtotal' => 'Итого',
                    'shipping-handling' => 'Доставка и обработка',
                    'tax' => 'Налог',
                    'discount' => 'Скидка',
                    'tax-percent' => 'Процент налога',
                    'tax-amount' => 'Сумма налога',
                    'discount-amount' => 'Сумма скидки',
                    'grand-total' => 'Итого',
                    'total-paid' => 'Всего оплачено',
                    'total-refunded' => 'Всего возмещено',
                    'total-due' => 'Итого к оплате',
                    'shipping-address' => 'Адрес доставки',
                    'billing-address' => 'Платежный адрес',
                    'shipping-method' => 'Способ доставки',
                    'payment-method' => 'Способ оплаты',
                    'individual-invoice' => 'Invoice #:invoice_id',
                    'individual-shipment' => 'Shipment #:shipment_id',
                    'print' => 'Печать',
                    'invoice-id' => 'Идентификатор счета',
                    'order-id' => 'Id заказа',
                    'order-date' => 'Дата заказа',
                    'bill-to' => 'Плательщик',
                    'ship-to' => 'Доставить',
                    'contact' => 'Контакт',
                    'refunds' => 'Возврат',
                    'individual-refund' => 'Refund #:refund_id',
                    'adjustment-refund' => 'Корректировка возмещения',
                    'adjustment-fee' => 'Плата за корректировку',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Удалить все',
                'moveall' => 'Переместить все товары в корзину',
                'move-to-cart' => 'Переместить в корзину',
                'error' => 'Невозможно добавить товар в список желаний из-за неизвестных проблем, пожалуйста, проверьте позже',
                'add' => 'Товар успешно добавлен в список желаний',
                'remove' => 'Товар успешно удален из списка желаний',
                'moved' => 'Товар успешно перемещен в корзину',
                'option-missing' => 'Опции товара отсутствуют, поэтому товар нельзя переместить в список желаний',
                'move-error' => 'Товар не может быть перемещен в список желаний, повторите попытку позже',
                'success' => 'Товар успешно добавлен в список желаний',
                'failure' => 'Товар не может быть добавлен в список желаний, пожалуйста, попробуйте позже',
                'already' => 'Товар уже присутствует в вашем списке желаний',
                'removed' => 'Товар успешно удален из списка желаний',
                'remove-fail' => 'Товар не может быть удален из списка желаний, повторите попытку позже',
                'empty' => 'У вас нет товаров в списке желаний',
                'remove-all-success' => 'Все элементы из вашего списка желаний были удалены',
            ],

            'downloadable_products' => [
                'title' => 'Загружаемые товары',
                'order-id' => 'Id заказа',
                'date' => 'Дата',
                'name' => 'Название',
                'status' => 'Статус',
                'pending' => 'В ожидании',
                'available' => 'Доступен',
                'expired' => 'Истек срок действия',
                'remaining-downloads' => 'Остальные загрузки',
                'unlimited' => 'Неограниченный',
                'download-error' => 'Ссылка для скачивания истекла.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Отзывы',
                    'page-title' => 'Отзывы'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Каталог по',
        'price-label' => 'От самой низкой',
        'remove-filter-link-title' => 'Очистить все',
        'sort-by' => 'Сортировать по',
        'from-a-z' => 'From A-Z',
        'from-z-a' => 'From Z-A',
        'newest-first' => 'Сначала самые новые',
        'oldest-first' => 'Сначала самые старые',
        'cheapest-first' => 'От наименьшей цены',
        'expensive-first' => 'От наивысшей цены',
        'show' => 'Показать',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => 'Описание',
        'specification' => 'Спецификация',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'Мы нашли другие товары, которые вам могут понравиться!',
        'related-product-title' => 'Сопутствующие товары',
        'cross-sell-title' => 'Больше вариантов',
        'reviews-title' => 'Рейтинги и обзоры',
        'write-review-btn' => 'Написать отзыв',
        'choose-option' => 'Выбрать опцию',
        'sale' => 'Sale',
        'new' => 'New',
        'empty' => 'Нет товаров в этой категории',
        'add-to-cart' => 'Добавить в корзину',
        'buy-now' => 'Купить сейчас',
        'whoops' => 'Упс!',
        'quantity' => 'Количество',
        'in-stock' => 'В наличии',
        'out-of-stock' => 'Нет в наличии',
        'view-all' => 'Просмотреть все',
        'select-above-options' => 'Пожалуйста, сначала выберите выше варианты.',
        'less-quantity' => 'Количество не может быть меньше единицы',
        'samples' => 'Образцы',
        'links' => 'Ссылки',
        'sample' => 'Образец',
        'name' => 'Имя',
        'qty' => 'Кол-во',
        'starting-at' => 'Начиная с',
        'customize-options' => 'Настройка параметров',
        'choose-selection' => 'Выберите',
        'your-customization' => 'Ваша настройка',
        'total-amount' => 'Общая сумма',
        'none' => 'Нет',
        'available' => 'Доступен'
    ],

    // 'reviews' => [
    //     'empty' => 'Вы еще не просмотрели ни одного товара'
    // ]

    'buynow' => [
        'no-options' => 'Пожалуйста, выберите параметры перед покупкой этого товара'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Для этого товара отсутствуют обязательные поля.',
                'missing_options' => 'Опции для этого товара отсутствуют.',
                'missing_links' => 'Для этого товара отсутствуют ссылки для скачивания.',
                'qty_missing' => 'По крайней мере, один товара должен иметь более 1 количества.',
                'qty_impossible' => 'Невозможно добавить более одного из этих товаров в корзину.'
            ],
            'create-error' => 'Обнаружена некоторая проблема при создании экземпляра корзины.',
            'title' => 'Корзина',
            'empty' => 'Ваша корзина пуста',
            'update-cart' => 'Обновить корзину',
            'continue-shopping' => 'Продолжить покупки',
            'proceed-to-checkout' => 'Перейти к оформлению заказа',
            'remove' => 'Удалить',
            'remove-link' => 'Удалить',
            'move-to-wishlist' => 'Перейти в Wishlist',
            'move-to-wishlist-success' => 'Товар успешно перемещен в список желаний.',
            'move-to-wishlist-error' => 'Невозможно переместить элемент в список желаний, повторите попытку позже.',
            'add-config-warning' => 'Пожалуйста, выберите опцию перед добавлением в корзину.',
            'quantity' => [
                'quantity' => 'Количество',
                'success' => 'Корзина успешно обновлена.',
                'illegal' => 'Количество не может быть меньше единицы',
                'inventory_warning' => 'Запрашиваемое количество недоступно, повторите попытку позже.',
                'error' => 'Не удается обновить элемент (ы) в данный момент, повторите попытку позже.'
            ],

            'item' => [
                'error_remove' => 'Нет товаров для удаления из корзины.',
                'success' => 'Товар был успешно добавлен в корзину.',
                'success-remove' => 'Товар был успешно удален из корзины.',
                'error-add' => 'Товар не может быть добавлен в корзину, повторите попытку позже.',
            ],
            'quantity-error' => 'Запрошенное количество недоступно.',
            'cart-subtotal' => 'Итог корзины',
            'cart-remove-action' => 'Вы действительно хотите это сделать?',
            'partial-cart-update' => 'Только некоторые из товаров были обновлены',
            'link-missing' => '',
            'event' => [
                'expired' => 'Это событие истекло.'
            ]
        ],

        'onepage' => [
            'title' => 'Оформить',
            'information' => 'Информация',
            'shipping' => 'Доставка',
            'payment' => 'Оплата',
            'complete' => 'Завершено',
            'billing-address' => 'Платежный адрес',
            'sign-in' => 'Войти',
            'company-name' => 'Название компании',
            'first-name' => 'Имя',
            'last-name' => 'Фамилия',
            'email' => 'Email',
            'address1' => 'Название улицы',
            'order_comment' => 'Комментарий к заказу',
            'delivery_stock_number' => 'Город и номер склада доставки',
            'city' => 'Область' ,
            'state' => 'Область',
            'select-state' => 'Выберите город или область',
            'postcode' => 'Zip/Postcode',
            'phone' => 'Телефон',
            'country' => 'Страна',
            'order-summary' => 'Сводка заказа',
            'shipping-address' => 'Адрес доставки',
            'use_for_shipping' => 'Доставить по этому адресу',
            'continue' => 'Продолжить',
            'shipping-method' => 'Выберите способ доставки',
            'payment-methods' => 'Выберите способ оплаты',
            'payment-method' => 'Способ оплаты',
            'summary' => 'Сводка заказа',
            'price' => 'Цена',
            'quantity' => 'Количество',
            'billing-address' => 'Платежный адрес',
            'shipping-address' => 'Адрес доставки',
            'contact' => 'Контакт',
            'place-order' => 'Оформить заказ',
            'new-address' => 'Добавить новый адрес',
            'save_as_address' => 'Сохранить этот адрес',
            'apply-coupon' => 'Применить купон',
            'amt-payable' => 'Сумма к оплате',
            'got' => 'Есть',
            'free' => 'Free',
            'coupon-used' => 'Купон используется',
            'applied' => 'Применено',
            'back' => 'Назад',
            'cash-desc' => 'Оплата наложенным платежом',
            'money-desc' => 'Money Transfer',
            'paypal-desc' => 'Paypal Standard',
            'free-desc' => 'Бесплатная доставка',
            'flat-desc' => 'Это фиксированная ставка',
            'password' => 'Пароль',
            'login-exist-message' => 'У вас уже есть учетная запись, войдите или продолжайте как гость.',
            'enter-coupon-code' => 'Введите код купона'
        ],

        'total' => [
            'order-summary' => 'Сводка заказа',
            'sub-total' => 'Items',
            'grand-total' => 'Итого',
            'delivery-charges' => 'Стоимость доставки',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'price' => 'Цена',
            'disc-amount' => 'Сумма со скидкой',
            'new-grand-total' => 'Итого со скидкойl',
            'coupon' => 'Купон',
            'coupon-applied' => 'Использованный купон',
            'remove-coupon' => 'Удалить купон',
            'cannot-apply-coupon' => 'Не могу применить купон',
            'invalid-coupon' => 'Код купона недействителен.',
            'success-coupon' => 'Код купона успешно применен.',
            'coupon-apply-issue' => 'Код купона не может быть применен.'
        ],

        'success' => [
            'title' => 'Заказ успешно размещен',
            'thanks' => 'Спасибо за ваш заказ!',
            'order-id-info' => 'Your order id is #:order_id',
            'info' => 'Мы вышлем вам на почту данные вашего заказа'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Подтверждение нового заказа',
            'heading' => 'Подтверждение заказа!',
            'dear' => 'Dear :customer_name',
            'dear-admin' => 'Dear :admin_name',
            'greeting' => 'Thanks for your Order :order_id placed on :created_at',
            'greeting-admin' => 'Order Id :order_id placed on :created_at',
            'summary' => 'Сводка заказа',
            'shipping-address' => 'Адрес доставки',
            'billing-address' => 'Платежный адрес',
            'contact' => 'Контакт',
            'shipping' => 'Способ доставки',
            'payment' => 'Способ оплаты',
            'price' => 'Цена',
            'quantity' => 'Количество',
            'subtotal' => 'Итого',
            'shipping-handling' => 'Доставка и обработка',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'grand-total' => 'Итого',
            'final-summary' => 'Спасибо за проявленный интерес к нашему магазину, мы вышлем вам номер для отслеживания после его отправки',
            'help' => 'Если вам нужна какая-либо помощь, пожалуйста, свяжитесь с нами по адресу: support_email',
            'thanks' => 'Спасибо!',
            'cancel' => [
                'subject' => 'Подтверждение отмены заказа',
                'heading' => 'Заказ отменен',
                'dear' => 'Dear :customer_name',
                'greeting' => 'You Order with order id #:order_id placed on :created_at has been cancelled',
                'summary' => 'Сводка заказа',
                'shipping-address' => 'Адрес доставки',
                'billing-address' => 'Платежный адрес',
                'contact' => 'Контакт',
                'shipping' => 'Способ доставки',
                'payment' => 'Способ оплаты',
                'subtotal' => 'Итого',
                'shipping-handling' => 'Доставка и обработка',
                'tax' => 'Налог',
                'discount' => 'Скидка',
                'grand-total' => 'Итого',
                'final-summary' => 'Спасибо за проявленный интерес к нашему магазину',
                'help' => 'Если вам нужна какая-либо помощь, пожалуйста, свяжитесь с нами по адресу: support_email',
                'thanks' => 'Спасибо!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice #:invoice_id for Order #:order_id',
            'subject' => 'Invoice for your order #:order_id',
            'summary' => 'Сводка по счету',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id  has been generated for Order #:order_id',
            'inventory-heading' => 'New shipment #:shipment_id had been generated for Order #:order_id',
            'subject' => 'Shipment for your order #:order_id',
            'inventory-subject' => 'New shipment had been generated for Order #:order_id',
            'summary' => 'Сводка отгрузки',
            'carrier' => 'Перевозчик',
            'tracking-number' => 'Номер для отслеживания',
            'greeting' => 'An order :order_id has been placed on :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Сумма возврата',
            'adjustment-refund' => 'Корректировка возмещения',
            'adjustment-fee' => 'Плата за корректировку'
        ],

        'forget-password' => [
            'subject' => 'Клиент сбросил пароль',
            'dear' => 'Dear :name',
            'info' => 'Вам пришло это письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи',
            'reset-password' => 'Сбросить пароль',
            'final-summary' => 'Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется',
            'thanks' => 'Спасибо!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'Имя пользователя/электронная почта',
                'subject' => 'Регистрация нового клиента',
                'password' => 'Пароль',
                'summary' => 'Ваш аккаунт создан.
                Детали вашего аккаунта ниже: ',
                'thanks' => 'Спасибо!',
            ],

            'registration' => [
                'subject' => 'Регистрация нового клиента',
                'customer-registration' => 'Клиент успешно зарегистрирован',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Добро пожаловать и спасибо за регистрацию на нашем сайте!',
                'summary' => 'Ваша учетная запись была успешно создана, и вы можете войти, используя свой адрес электронной почты и пароль. После входа в систему вы сможете получить доступ к другим услугам, включая просмотр прошлых заказов, списков пожеланий и редактирование информации о вашей учетной записи.',
                'thanks' => 'Спасибо!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Почта подтверждения',
                'verify' => 'Подтвердить свой аккаунт',
                'summary' => 'Это письмо, подтверждающее, что введенный вами адрес электронной почты принадлежит вам.
                 Пожалуйста, нажмите кнопку Подтвердить свою учетную запись ниже, чтобы подтвердить свою учетную запись.'
            ],

            'subscription' => [
                'subject' => 'Email для подписки',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
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
