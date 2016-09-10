<?php
/**
 * Created by PhpStorm.
 * User: Leonardo Zanela
 * Date: 09/09/2016
 * Time: 22:23
 */

namespace CodeEducation\Cart\Tests;

use CodeEducation\Cart\Cart;
use CodeEducation\Cart\Cupom;
use CodeEducation\Cart\ProductX;

/**
 * Class CartTest
 * @package CodeEducation\Cart\Tests
 */
class CartTest extends \PHPUnit_Framework_TestCase
{

    public function test_verifica_total_dos_produtos()
    {

        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn("Product X");

        $cart = new Cart();
        $cart->addProduct($productX);

        $this->assertEquals(15, $cart->getTotal());
        $cart->addProduct($productX);

        $this->assertEquals(30, $cart->getTotal());

    }

    public function test_se_itens()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn("Product X");

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

    public function test_aplica_cupom_de_desconto()
    {

        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn("Product X");

        $cupom = $this->getMockBuilder(Cupom::class)->getMock();
        $cupom->method('getTotal')->willReturn(10);

        $cart = new Cart();
        $cart->addProduct($productX);
        $cart->applyCupom($cupom);
        $total = $cart->getTotal();

        $this->assertEquals(5, $total);

    }
}