<?php
// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------

return [
    // 驱动方式
    'type'   => 'redis',
    // 缓存保存目录
    'path'   => CACHE_PATH,
    // 缓存前缀
    'prefix' => '',
    // 缓存有效期 0表示永久缓存
    'expire' => 0,
    // redis缓存 服务器地址
    'host'   => '127.0.0.1',
];