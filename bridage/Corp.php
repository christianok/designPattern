<?php namespace design\bridge;

abstract class Corp
{
   protected $product;

   public function __construct(Product $product)
   {
        $this->product = $product;
   }

   public function makeMoney()
   {
       $this->product->beProduced();
       $this->product->beSell();
   }
}