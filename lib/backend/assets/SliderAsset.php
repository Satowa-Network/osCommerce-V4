<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 *
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 *
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

namespace backend\assets;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/basic';
    public $css = [
        'css/slick.css',
    ];
    public $js = [
      'js/slick.min.js',
    ];
}
