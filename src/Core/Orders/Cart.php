<?php

namespace Core\Orders;

class Cart
{
    /**
     * @var Product[]
     */
    private array $items = [];
    public function add(Product $product)
    {
        $qty = (isset($this->items[$product->getId()])) ? $this->items[$product->getId()]['qty'] : 1;
        $this->items[$product->getId()] = [
            'qty' => $qty,
            'product' => $product
        ];
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function total(): float
    {
        $total = 0;
        foreach ($this->items as $key => $item) {
            $product = $item['product'];
            $total += $product->getPrice() * $item['qty'];
        }

        return $total;
    }
}
