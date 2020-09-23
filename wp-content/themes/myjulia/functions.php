<?php
add_action('wp_enqueue_scripts', 'mj_styles');
add_action('init', 'mj_register_types');
add_action('widgets_init', 'mj_register');

function mj_styles() {
    wp_enqueue_style(
        'style',
        _i_assets_path('css/style.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'animate',
        _i_assets_path('css/animate.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'animate',
        _i_assets_path('css/icomoon.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'flaticon',
        _i_assets_path('css/flaticon.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'timepicker',
        _i_assets_path('css/jquery.timepicker.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'datepicker',
        _i_assets_path('css/bootstrap-datepicker.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'ionicons',
        _i_assets_path('css/ionicons.min.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'aos',
        _i_assets_path('css/aos.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'magnific',
        _i_assets_path('css/magnific-popup.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'default',
        _i_assets_path('css/owl.theme.default.min.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'carousel',
        _i_assets_path('css/owl.carousel.min.css'),
        [],
        '1.0',
        'all'
    );
    wp_enqueue_script(
        'jquery',
        _i_assets_path('js/jquery.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'migrate',
        _i_assets_path('js/jquery-migrate-3.0.1.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'migrate',
        _i_assets_path('js/popper.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'bootstrap',
        _i_assets_path('js/bootstrap.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'easing',
        _i_assets_path('js/jquery.easing.1.3.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'waypoints',
        _i_assets_path('js/jquery.waypoints.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'stellar',
        _i_assets_path('js/jquery.stellar.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'carousel',
        _i_assets_path('js/owl.carousel.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'magnific',
        _i_assets_path('js/jquery.magnific-popup.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'aos',
        _i_assets_path('js/aos.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'animateNumber',
        _i_assets_path('js/jquery.animateNumber.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'datepicker',
        _i_assets_path('js/bootstrap-datepicker.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'timepicker',
        _i_assets_path('js/jquery.timepicker.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'scrollax',
        _i_assets_path('js/scrollax.min.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'googleapis',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'google-map',
        _i_assets_path('js/google-map.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'main',
        _i_assets_path('js/main.js'),
        [],
        '1.0',
        true
    );
}

function mj_register_types(){
    register_post_type( 'service_types', [
        'labels' => [
            'name'               => 'Типы услуг', // основное название для типа записи
            'singular_name'      => 'Тип услуги', // название для одной записи этого типа
            'add_new'            => 'Добавить тип услуги', // для добавления новой записи
            'add_new_item'       => 'Добавить тип услуги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать тип услуги', // для редактирования типа записи
            'new_item'           => 'Новый тип услуги', // текст новой записи
            'view_item'          => 'Смотреть тип услуги', // для просмотра записи этого типа.
            'search_items'       => 'Искать тип услуги', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в типах услуги', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Типы услуг', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-media-text',
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail'],
        'has_archive' => true
    ]);

    register_post_type( 'employees', [
        'labels' => [
            'name'               => 'Сотрудники', // основное название для типа записи
            'singular_name'      => 'Сотрудник', // название для одной записи этого типа
            'add_new'            => 'Добавить сотрудника', // для добавления новой записи
            'add_new_item'       => 'Добавить сотрудника', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать сотрудника', // для редактирования типа записи
            'new_item'           => 'Новый сотрудник', // текст новой записи
            'view_item'          => 'Смотреть сотрудника', // для просмотра записи этого типа.
            'search_items'       => 'Искать сотрудника', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в сотрудниках', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Сотрудники', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-users',
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail'],
        'has_archive' => true
    ]);

    register_post_type( 'sales', [
        'labels' => [
            'name'               => 'Акции', // основное название для типа записи
            'singular_name'      => 'Акция', // название для одной записи этого типа
            'add_new'            => 'Добавить акцию', // для добавления новой записи
            'add_new_item'       => 'Добавить акцию', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать акцию', // для редактирования типа записи
            'new_item'           => 'Новый акция', // текст новой записи
            'view_item'          => 'Смотреть акцию', // для просмотра записи этого типа.
            'search_items'       => 'Искать акцию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в акциях', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Акции', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-appearance',
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail'],
        'has_archive' => true
    ]);

    register_post_type( 'works', [
        'labels' => [
            'name'               => 'Работы', // основное название для типа записи
            'singular_name'      => 'Работа', // название для одной записи этого типа
            'add_new'            => 'Добавить работу', // для добавления новой записи
            'add_new_item'       => 'Добавить работу', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать работу', // для редактирования типа записи
            'new_item'           => 'Новая работа', // текст новой записи
            'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
            'search_items'       => 'Искать работу', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в работах', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Работы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-visibility',
        'hierarchical'        => false,
        'supports'            => ['title', 'thumbnail'],
        'has_archive' => true
    ]);

    register_post_type( 'services', [
        'labels' => [
            'name'               => 'Услуги', // основное название для типа записи
            'singular_name'      => 'Услуга', // название для одной записи этого типа
            'add_new'            => 'Добавить услугу', // для добавления новой записи
            'add_new_item'       => 'Добавить услугу', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать услугу', // для редактирования типа записи
            'new_item'           => 'Новая услуга', // текст новой записи
            'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
            'search_items'       => 'Искать услугу', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в услугах', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Услуги', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-customizer',
        'hierarchical'        => false,
        'supports'            => ['title'],
        'has_archive' => true
    ]);
}

function mj_register()
{
    register_sidebar([
        'name' => 'Адрес',
        'id' => 'omg-footer-soc',
        'before_widget' => null,
        'after_widget' => null,
    ]);
}

add_image_size( 'Тип услуги', 40, 40 );
add_image_size( 'Работа', 820, 960, true);

function _i_assets_path( $path ){
    return get_template_directory_uri() . '/assets/' . $path;
}