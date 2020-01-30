<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    public function moduleName(): string
    {
        return 'home';
    }

    public function index()
    {
        return $this->response->raw(json_encode([
            'datetime'      => date('Y-m-d H:i:s'),
            'message'       => 'A project base on hyperf',
            'environment'   => env('APP_ENV', 'local'), // 读取的是操作系统的环境变量,
            'php_version'   => PHP_VERSION,
            'swoole_version'=> swoole_version(),
            'version'       => env('APP_VERSION', 'v1.0')
        ], JSON_PRETTY_PRINT));
    }
}