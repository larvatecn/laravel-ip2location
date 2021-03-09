<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Ip2Location;

use IP2Location\Database;

/**
 * Class Ip2LocationManager
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Ip2LocationManager
{
    /**
     * @var string
     */
    protected $databasePath;

    /**
     * Constructor.
     * @param string $databasePath
     */
    public function __construct($databasePath)
    {
        $this->databasePath = $databasePath;
    }

    /**
     * 解析IP
     * @param string $ip
     * @return array|bool|mixed
     * @throws \Exception
     */
    public function get($ip)
    {
        $db = new Database($this->databasePath, Database::FILE_IO);
        return $db->lookup($ip, Database::ALL);
    }
}