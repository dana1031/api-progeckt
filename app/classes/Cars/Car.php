<?php


namespace App\Cars;

class Car {
    const MANUFACTURERS = ['bmv' => 'BMW','audi' => 'Audi', 'fiat' => 'Fiat'];

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'manufacturer' => null,
                'model' => null,
                'years' => null,
            ];
        }
    }
   public static function getManufacturersOptions(){
       return self::MANUFACTURERS;
   }
    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array) {
        
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setmanufacturer($array['manufacturer'] ?? null);
        $this->setModel($array['model'] ?? null);
        $this->setYears($array['years'] ?? null);
//        $this->setAge($array['age'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'manufacturer' => $this->getmanufacturer(),
            'model' => $this->getModel(),
            'years' => $this->getYears(),
//            'age' => $this->getAge()
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Sets name
     * @param string $name
     */
    public function setmanufacturer(string $manufacturer) {
        $this->data['manufacturer'] = $manufacturer;
    }

    /**
     * Returns name
     * @return string
     */
    public function getmanufacturer() {
        return $this->data['manufacturer'];
    }

    /**
     * Sets data surname
     * @param string $surname
     */
    public function setModel(string $model) {
        $this->data['model'] = $model;
    }

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->data['model'];
    }

    /**
     * Sets data city
     * @param string $city
     */
    public function setYears(string $years) {
        $this->data['years'] = $years;
    }

    /**
     * @return mixed
     */
    public function getyears() {
        return $this->data['years'];
    }
    
//    public function setAge(){
//        return $this->data['age'];
//    }
//    public function getAge(){
//        return $this->data['age'];
//    }

}


