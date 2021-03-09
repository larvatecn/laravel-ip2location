<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Ip2Location;

use Illuminate\Support\Facades\Facade;

/**
 * Class Ip2Location
 * @method static array|bool|mixed get(string $ip)
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Ip2Location extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ip2location';
    }
}