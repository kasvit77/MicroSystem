<?php


namespace App\Console\Commands\Properties;


class Properties
{

    private $id;

    private $bitrix_id=array();

    private $multiple=array();

    private $user_type_settings=array();

    private $property_type=array();



    /**
     * @return array
     */
    public function getId():array
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getBitrixId(): array
    {
        return $this->bitrix_id;
    }

    /**
     * @return array
     */
    public function getMultiple():array
    {
        return $this->multiple;
    }




    /**
     * @return array
     */
    public function getTypeProperty(): array
    {
        return $this->property_type;
    }



    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id[] = $id;
    }

    /**
     * @param array $bitrix_id
     */
    public function setBitrixId($bitrix_id): void
    {
        $this->bitrix_id[] = $bitrix_id;
    }

    /**
     * @param array $multiple
     */
    public function setMultiple($multiple): void
    {
        $this->multiple[] = $multiple;
    }



    /**
     * @param array $property_type
     */
    public function setTypeProperty($property_type): void
    {
        $this->property_type[] =$property_type;

    }






}