<?php
/**
 * Selling site for HiPanel
 *
 * @link      http://hipanel.com/
 * @package   hipanel-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\site\menus;

use Yii;

class FooterMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return [
            [
                'label' => Yii::t('hipanel:site', 'Terms of use'),
                'url' => ['/pages/rules/index'],
            ],
            [
                'label' => Yii::t('hipanel:site', 'Privacy policy'),
                'url' => ['/pages/rules/index', '#' => 'privacyPolicy'],
            ],
        ];
    }
}
