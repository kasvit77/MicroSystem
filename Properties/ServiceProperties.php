<?php


namespace App\Console\Commands\Properties;


class ServiceProperties implements BitrixPropertiesInterface
{

    public $properties;
    public $dto;


    public function __construct()
    {
        $this->properties=new BitrixProperties();
        $this->dto=new Properties();
    }

    /**
     * @return false
     */
    public function getBitrixProperties(){

        foreach ($this->properties->getBitrixProperties() as $value){

            $this->dto->setBitrixId($value->bitrix_id);
            $this->dto->setId($value->id);
            $this->dto->setMultiple($value->multiple);
            $this->dto->setTypeProperty($value->property_type);
        }
        return false;
    }

    public function getFieldPropertiesValue()
    {
        $this->getBitrixProperties();

      return  $this->dto->getBitrixId();
    }
}