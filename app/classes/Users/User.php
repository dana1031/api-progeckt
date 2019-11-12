<?php

namespace App\Users;

class User {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'email' => null,
                'password' => null,
                'age' => null
            ];
        }
    }

    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }

        $this->setEmail($array['email'] ?? null);
        $this->setPassword($array['password'] ?? null);
        $this->setAge($array['age'] ?? null);
    }

    public function getData() {
        return [
            'id' => $this->getId(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
             'age'=>$this->getAge() 
        ];
    }

    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    public function getId() {
        return $this->data['id'];
    }

    public function setEmail(String $email) {
        $this->data['email'] = $email;
    }

    public function setPassword(String $password) {
        $this->data['password'] = $password;
    }
    public function setAge( int $age) {
        $this->data['age'] = $age;
    }
    public function getEmail() {
        return $this->data['email'];
    }

    public function getPassword() {
        return $this->data['password'];
    }
   
    public function getAge() {
        return $this->data['age'];
    }
}