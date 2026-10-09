<?php
namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class Database extends BaseConfig
{
    public $default = [
        'hostname' => 'localhost',
        'database' => 'task_manager',
        'username' => 'root',
        'password' => '',
        'DBDriver' => 'MySQLi',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => true,
        'cacheOn'  => false,
        'cacheDir' => '',
        'charset'  => 'utf8mb4',
        'DBCollat' => 'utf8mb4_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 3306,
    ];
}