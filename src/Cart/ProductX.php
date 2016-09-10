<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 09/09/2016
 * Time: 20:29
 */

namespace CodeEducation\Cart;


class ProductX implements Product
{
    private $name = "Product X";
    private $price = 0;

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}