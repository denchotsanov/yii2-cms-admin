<?php
/**
 * Created by PhpStorm.
 * User: Dencho Tsanov
 * Date: 22.10.18 22:27
 * File: Module.php
 *
 * Project: yii2-cms-admin
 *
 */

namespace denchotsanov\cms;


class Module extends \yii\base\Module
{
    public $aliases = 'denchotsanov\cms\controller';

    public $defaultRoute = 'site';

}