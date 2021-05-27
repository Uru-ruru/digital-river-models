<?php


namespace Uru\DR;


/**
 * Class Bundle
 * Unfortunately, subscription products cannot be allocated to a bundle.
 * @package Uru\DR
 */
class Bundle extends BaseDRModel
{
    /**
     * @var int
     */
    private $product_id = self::FIELD_NOT_SET;
    /**
     * @var int
     */
    private $quantity = self::FIELD_NOT_SET;
    /**
     * @var int
     */
    private $display_order = self::FIELD_NOT_SET;

    /**
     * Child product
     * @param int $product_id
     */
    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $display_order
     */
    public function setDisplayOrder(int $display_order): void
    {
        $this->display_order = $display_order;
    }


    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'display_order' => $this->display_order
        ];

        return $this->filterUnsetFields($data);
    }

}
