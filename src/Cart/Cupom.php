<?php
/**
 * Created by PhpStorm.
 * User: leonardozaneladias
 * Date: 10/09/16
 * Time: 17:54
 */

namespace CodeEducation\Cart;


class Cupom
{

    private $total;
    private $code;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }


}