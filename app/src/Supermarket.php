<?php
namespace App;
/**
 * スーパーマーケットクラス
 * 商品の値段を計算します。
 * 
 * @author akeno
 */
class Supermarket
{
    const ITEM_LIST = [
        ["name" => "りんご", "price" => 100],
        ["name" => "みかん", "price" => 40],
        ["name" => "ぶどう", "price" => 150],
        ["name" => "のり弁", "price" => 350],
        ["name" => "しゃけ弁", "price" => 400],
        ["name" => "タバコ", "price" => 420],
        ["name" => "メンソールタバコ", "price" => 440],
        ["name" => "ライター", "price" => 100],
        ["name" => "お茶", "price" => 80],
        ["name" => "コーヒー", "price" => 100],
    ];

    /**
     * 商品番号の配列を引数に、商品の平均金額を計算する
     * @param array $items アイテムIDの配列
     * @return int アイテムの平均金額(小数点第一位を四捨五入)
     */
    public function calcAvgPrice(array $items){
        return 0;
    }
}
