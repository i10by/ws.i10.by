<?  //Точка входа в приложение

    # Константы и кодировка
    ini_set('max_execution_time', 1000);
    header('Content-Type: text/html; charset=utf-8');
    define('CORE_PATH', 'app/core/');
    define('PAGES_PATH', 'app/pages/');
    define('SCRIPTS_PATH', 'app/scripts/');

    # Подключение необходимых компонентов
    require_once(CORE_PATH.'config.php');
    require_once(CORE_PATH.'function.php');
    require_once(CORE_PATH.'engine.php');