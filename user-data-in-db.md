Использование пользовательской таблицы в базе данных
Для более сложных случаев вы можете создать отдельную таблицу в базе данных для хранения информации об инвестициях. Это позволит вам более гибко управлять данными и выполнять сложные запросы.

global $wpdb;
$table_name = $wpdb->prefix . 'user_investments';

// Пример функции для добавления инвестиций в пользовательскую таблицу
function add_user_investment($user_id, $company, $amount, $date) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_investments';

    $wpdb->insert(
        $table_name,
        array(
            'user_id' => $user_id,
            'company' => $company,
            'amount' => $amount,
            'date' => $date,
        ),
        array(
            '%d',
            '%s',
            '%f',
            '%s',
        )
    );
}

// Пример добавления инвестиций
add_user_investment(1, 'Microsoft', 10000, '2024-06-19');
add_user_investment(3, 'Microsoft', 20000, '2024-06-19');

// Получение данных инвестиций для пользователя
$investments = $wpdb->get_results( $wpdb->prepare(
    "SELECT * FROM $table_name WHERE user_id = %d",
    $current_user->ID
) );

if ( $investments ) {
    foreach ( $investments as $investment ) {
        echo '<h2>You invested in ' . esc_html($investment->company) . '</h2>';
        echo '<h2>Amount ' . esc_html($investment->amount) . '$</h2>';
        echo '<h2>' . esc_html($investment->date) . '</h2>';
    }
} else {
    echo '<h2>You haven\'t invested yet</h2>';
}
