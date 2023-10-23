<?php


namespace Test;

use App\Cart;
use App\Fee;
use PHPUnit\Framework\TestCase;


class CartTest extends TestCase
{
   public function testCartReturnsValueExpected()
   {  
      //Arrange
      $obgFee = $this->createStub(Fee::class);
      $obgFee->method('GetTotalfee')->willReturn(1);
      $obgCart = new Cart($obgFee);
      $obgCart->setName("Tv 42 polegadas");
      $obgCart->setValue('1150');
      //Act
      $resultCart = $obgCart->getTotalCart();
      //Assert
      $valueexpected = array("Name" =>"Tv 42 polegadas", "Product Value" => '$1150', "fee" => 1, "Total" => '$1151');
      $this->assertEquals($resultCart, $valueexpected);
      
   }

}