<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 09/09/2016
 * Time: 21:16
 */

namespace CodeEducation\Cart\Tests;

use CodeEducation\Cart\ProductX;

class ProductXTest extends \PHPUnit_Framework_TestCase
{
    public function test_verificando_se_produtox_e_um_produto()
    {
        $productX = new ProductX();
        static::assertInstanceOf('CodeEducation\Cart\Product', $productX);
    }

    public function test_verifica_se_seta_preco_para_productx()
    {
        $productX = new ProductX();

        static::assertEquals(0, $productX->getPrice());
        $productX->setPrice(10);

        static::assertEquals(10, $productX->getPrice());

    }

}