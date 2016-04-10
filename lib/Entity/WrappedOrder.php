<?php

namespace Coinfide\Entity;

class WrappedOrder extends Base
{
    protected $validationRules = array(
        'orderId' => array('type' => 'string', 'required' => true),
        'order' => array('type' => 'object', 'class' => '\Coinfide\Entity\Order', 'required' => true),
        'redirectUrl' => array('type' => 'string', 'required' => true)
    );

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var Order
     */
    protected $order;

    /**
     * @var string
     */
    protected $redirectUrl;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }


}
