<?php

class Database extends PDO
{
    private static $connect;

    public static function getConnect()
    {
        if (self::$connect === null) {
            self::$connect = new Database();
        }
        return self::$connect;
    }

    private function __construct($file = 'my_setting.ini')
    {
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

        $dns = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            ';dbname=' . $settings['database']['schema'];
        // mysql:host=localhost;dbname=database

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }
}
