<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 09/09/2016
 * Time: 22:23
 */

namespace CodeEducation\Cart\Tests;


use CodeEducation\Cart\Cart;
use CodeEducation\Cart\ProductX;

class CartTest extends \PHPUnit_Framework_TestCase
{

    public function test_verifica_total_dos_produtos()
    {

        $productX = new ProductX();
        $productX->setPrice(15);

        $cart = new Cart();
        $cart->addProduct($productX);

        $this->assertEquals(15, $cart->getTotal());
        $cart->addProduct($productX);

        $this->assertEquals(30, $cart->getTotal());

    }

    public function test_se_itens()
    {
        $productX = new ProductX();
        $productX->setPrice(15);

        $cart = new Cart();
        $cart->addProduct($productX);

        $items = $cart->getItens();

        $itemsExpected = [
            0 => [
                'name' => 'Product X',
                'price' => 15
            ]
        ];

        $this->assertEquals($itemsExpected, $items);
    }
}