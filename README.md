# laravel-ip2location

<p align="center">Laravel 的 ip2location 位置查询模块</p>

<p align="center">
<a href="https://packagist.org/packages/larva/laravel-ip2location"><img src="https://poser.pugx.org/larva/laravel-ip2location/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/larva/laravel-ip2location"><img src="https://poser.pugx.org/larva/laravel-ip2location/v/unstable.svg" alt="Latest Unstable Version"></a>
</p>

## 环境需求

- PHP >= 7.2.5

## Installation

```bash
composer require larva/laravel-ip2location
```


```php
    $info=  \Larva\Ip2Location\Ip2Location::get('218.1.2.3');
```