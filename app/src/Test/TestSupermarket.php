<?php

namespace app\Test;

use PHPUnit\Framework\TestCase;
use App\Supermarket;

class TestSupermarket extends TestCase
{
    private $supermarket;

    /**
     * テスト前に呼び出される初期化メソッド
     */
    public function setUp(): void
    {
        $this->supermarket = new Supermarket();
    }

    /**
     * 商品の平均金額を計算するメソッドのテスト
     * @test
     */
    function testCalcAvgPrice(){
        $items = [1,3,5,7];
        $this->assertSame(0, $this->supermarket->calcAvgPrice($items));
    }
}
