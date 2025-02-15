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

namespace backend\models\ProductEdit;

use yii;
use common\models\Products;

class SaveMarketingData
{
    protected $product;

    public function __construct(Products $product)
    {
        $this->product = $product;
    }


    public function prepareSaveGWA() {
      $products_id = $this->product->products_id;
      $skip_gwa_update = Yii::$app->request->post('skip_gwa_update', false);
      if ($skip_gwa_update) {
        return;
      }

      $give_away = Yii::$app->request->post('give_away');
      $use_in_qty_discount = Yii::$app->request->post('use_in_qty_discount',array());
      $shopping_cart_price = Yii::$app->request->post('shopping_cart_price');
      $buy_qty = Yii::$app->request->post('buy_qty');
      $products_qty = Yii::$app->request->post('products_qty');
      $products_qty_gb = Yii::$app->request->post('products_qty_gb');
      $end_date_a = Yii::$app->request->post('end_date');
      $begin_date_a = Yii::$app->request->post('begin_date');
      tep_db_query("delete from " . TABLE_GIVE_AWAY_PRODUCTS . " where products_id = '" . (int) $products_id . "'");
      if (is_array($give_away)) {
          foreach ($give_away as $group_id => $data) {
              if (!empty($begin_date_a[$group_id])) {
                  $begin_date = \common\helpers\Date::prepareInputDate($begin_date_a[$group_id]);
              } else {
                  $begin_date = '';
              }
              if (!empty($end_date_a[$group_id])) {
                  $end_date = \common\helpers\Date::prepareInputDate($end_date_a[$group_id]);
              } else {
                  $end_date = '';
              }
              if (is_array($buy_qty[$group_id])) {
                  $buy_qty[$group_id] = array_map('intval', $buy_qty[$group_id]);
              }
              if (is_array($buy_qty[$group_id]) && array_sum($buy_qty[$group_id]) > 0) { //exists buy value
                  //buy_get array
                  $products_qty_gb[$group_id] = array_map('intval', $products_qty_gb[$group_id]);
                  $use_in_qty_discount[$group_id] = array_map('intval', isset($use_in_qty_discount[$group_id])?$use_in_qty_discount[$group_id]:array());
                  foreach ($buy_qty[$group_id] as $i => $b_qty) {
                      if ($b_qty <= 0 || $products_qty_gb[$group_id][$i] <= 0)
                          continue;

                      $sql_data_array = array(
                          'products_id' => (int) $products_id,
                          'groups_id' => (int) $group_id,
                          'products_qty' => $products_qty_gb[$group_id][$i],
                          'buy_qty' => $b_qty,
                          'shopping_cart_price' => -1,
                          'use_in_qty_discount' => $use_in_qty_discount[$group_id][$i],
                          'begin_date' => $begin_date,
                          'end_date' => $end_date,
                      );
                      tep_db_perform(TABLE_GIVE_AWAY_PRODUCTS, $sql_data_array);
                  }
              } else {
                  //shopping cart total
                  if (USE_MARKET_PRICES == 'True') {
                      if (\common\helpers\Extensions::isCustomerGroupsAllowed()) {
                          // shopping_cart_price[2][11] - both group, currencies.
                          foreach ($shopping_cart_price[$group_id] as $currencies_id => $price) {
                              if ((int) $products_qty[$group_id][$currencies_id] <= 0)
                                  continue;
                              $sql_data_array = array(
                                  'products_id' => (int) $products_id,
                                  'groups_id' => (int) $group_id,
                                  'currencies_id' => (int) $currencies_id,
                                  'products_qty' => (int) $products_qty[$group_id][$currencies_id],
                                  'shopping_cart_price' => (double) $shopping_cart_price[$group_id][$currencies_id],
                                  'buy_qty' => 0,
                                  'use_in_qty_discount' => (int) $use_in_qty_discount[$group_id][$currencies_id],
                                  'begin_date' => $begin_date,
                                  'end_date' => $end_date,
                              );
                              tep_db_perform(TABLE_GIVE_AWAY_PRODUCTS, $sql_data_array);
                          }
                      } else {
                          //shopping_cart_price[15] currencies_id
                          foreach ($shopping_cart_price as $currencies_id => $price) {
                              if ((int) $products_qty[$currencies_id] <= 0)
                                  continue;
                              $sql_data_array = array(
                                  'products_id' => (int) $products_id,
                                  'groups_id' => (int) $group_id,
                                  'currencies_id' => (int) $currencies_id,
                                  'products_qty' => (int) $products_qty[$currencies_id],
                                  'shopping_cart_price' => (double) $shopping_cart_price[$currencies_id],
                                  'buy_qty' => 0,
                                  'use_in_qty_discount' => (int) $use_in_qty_discount[$currencies_id],
                                  'begin_date' => $begin_date,
                                  'end_date' => $end_date,
                              );
                              tep_db_perform(TABLE_GIVE_AWAY_PRODUCTS, $sql_data_array);
                          }

                      }
                  } else {
                      //name="shopping_cart_price[1] group id"
                      if ((int) $products_qty[$group_id] <= 0)
                          continue;
                      $sql_data_array = array(
                          'products_id' => (int) $products_id,
                          'groups_id' => (int) $group_id,
                          'currencies_id' => 0,
                          'products_qty' => (int) $products_qty[$group_id],
                          'shopping_cart_price' => (double) $shopping_cart_price[$group_id],
                          'buy_qty' => 0,
                          'use_in_qty_discount' => (int) $use_in_qty_discount[$group_id],
                          'begin_date' => $begin_date,
                          'end_date' => $end_date,
                      );
                      tep_db_perform(TABLE_GIVE_AWAY_PRODUCTS, $sql_data_array);
                  }
              }
          }
      }
    }


    public function prepareSave()
    {
        $products_id = $this->product->products_id;
        $popularity_simple = Yii::$app->request->post('popularity_simple', 0);
        $popularity_bestseller = Yii::$app->request->post('popularity_bestseller', 0);

        $this->prepareSaveGWA();


        //$popularity_simple = min(1, max($popularity_simple, -1));
        //$popularity_bestseller = min(1, max($popularity_bestseller, -1));
        $this->product->setAttributes([
            'popularity_simple' => (float)$popularity_simple,
            'popularity_bestseller' => (float)$popularity_bestseller,
        ],false);

        /**
         * Marketing xsell, UpSell
         */
        $xsell_array = Yii::$app->request->post('xsell_id');
        tep_db_query("delete from " . TABLE_PRODUCTS_XSELL . " where products_id  = '" . (int) $products_id . "'");
        if (is_array($xsell_array)) {
            $xsell_sort_order_array = Yii::$app->request->post('xsell_sort_order');
            foreach( $xsell_array as $xsell_type_id=>$xsell ) {
                $xsell_sort_order = isset($xsell_sort_order_array[$xsell_type_id])?$xsell_sort_order_array[$xsell_type_id]:'';
                $xsell_sort = [];
                if (!empty($xsell_sort_order)) {
                    parse_str($xsell_sort_order, $xsell_sort);
                    if (isset($xsell_sort['xsell-box']) && is_array($xsell_sort['xsell-box'])) {
                        $xsell_sort = $xsell_sort['xsell-box'];
                        $xsell_sort = array_flip($xsell_sort);
                    }
                }

                foreach ($xsell as $pointer => $xsell_id) {
                    if ($products_id != $xsell_id) {
                        $sql_data_array = [];
                        $sql_data_array['products_id'] = (int) $products_id;
                        $sql_data_array['xsell_type_id'] = (int)$xsell_type_id;
                        $sql_data_array['xsell_id'] = (int) $xsell_id;
                        if (isset($xsell_sort[$xsell_id])) {
                            $sql_data_array['sort_order'] = (int) $xsell_sort[$xsell_id];
                        }
                        tep_db_perform(TABLE_PRODUCTS_XSELL, $sql_data_array);
                    }
                }
            }
        }

        $xsell_backlink_array = (array)Yii::$app->request->post('xsell_backlink');
        $xsell_backlink_ref_array = (array)Yii::$app->request->post('xsell_backlink_c');
        $xsell_types = array_unique(array_merge(array_keys($xsell_backlink_ref_array), array_keys($xsell_backlink_array)));

        foreach ($xsell_types as $xsell_type_id){
            $old_pids = isset($xsell_backlink_ref_array[$xsell_type_id])?$xsell_backlink_ref_array[$xsell_type_id]:[];
            $posted_pids = isset($xsell_backlink_array[$xsell_type_id])?$xsell_backlink_array[$xsell_type_id]:[];
            foreach (array_diff($old_pids,$posted_pids) as $_remove_link_back_id){
                if ( isset($reverseXsells[$_remove_link_back_id]) ){
                    $reverseXsell = \common\models\ProductsXsell::find()
                        ->where(['xsell_type_id'=>$xsell_type_id, 'xsell_id'=>$products_id])
                        ->andWhere(['products_id'=>$_remove_link_back_id])
                        ->one();
                    if ( $reverseXsell ) $reverseXsell->delete();
                }
            }
            foreach (array_diff($posted_pids,$old_pids) as $_new_link_back_id){
                $check_exist = \common\models\ProductsXsell::find()
                    ->where(['xsell_type_id'=>$xsell_type_id, 'xsell_id'=>$products_id])
                    ->andWhere(['products_id'=>$_new_link_back_id])
                    ->count();
                if ($check_exist) continue;

                $linkbackXsell = new \common\models\ProductsXsell([
                    'xsell_type_id' => $xsell_type_id,
                    'xsell_id' => $products_id,
                    'products_id' => $_new_link_back_id,
                    'sort_order' => 1 + (int)\common\models\ProductsXsell::find()->where(['products_id'=>$_new_link_back_id, 'xsell_type_id' => $xsell_type_id])->max('sort_order'),
                ]);
                $linkbackXsell->loadDefaultValues();
                $linkbackXsell->save(false);
            }
        }

        if ($ext = \common\helpers\Acl::checkExtensionAllowed('UpSell', 'allowed')) {
            $ext::productSave($products_id);
        }
    }

}
