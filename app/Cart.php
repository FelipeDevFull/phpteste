<?php

namespace App;

class Cart
{   
    private $name;
    private $value;
    private $Fee;
      
    public function __construct(Fee $Fee)
    {
        $this->Fee = $Fee;
    }
    public function getTotalCart()
    {  
       $name = $this->name;
       $value = $this->value;
       $calculateFee =  $this->Fee->GetTotalfee();
       $valuetotal = $value + $calculateFee;
       $Datainfo = array("Name" =>$name, "Product Value" => '$'.$value, "fee" => $calculateFee, "Total" => '$'.$valuetotal);
       return $Datainfo;
    } 

    function getName()
    {
        return $this->name;
    }
    function getValue()
    {
        return $this->value;
    }
    
    function setName($name)
    {
        return $this->name = $name;
    }
    function setValue($value)
    {
        return $this->value = $value;
    }  
}