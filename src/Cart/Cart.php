<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 09/09/2016
 * Time: 20:30
 */

namespace CodeEducation\Cart;

class Cart
{
    private $total;
    private $itens = [];

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {

        $newItem = [
            'name' => $product->getName(),
            'price' => $product->getPrice()
        ];

        array_push($this->itens, $newItem);

        $this->total += $product->getPrice();
    }

    public function applyCupom(Cupom $cupom)
    {
        $this->total -= $cupom->getTotal();
    }


    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return array
     */
    public function getItens()
    {
        return $this->itens;
    }

}