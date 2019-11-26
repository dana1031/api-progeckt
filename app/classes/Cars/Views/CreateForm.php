<?php

namespace App\Cars\Views;

class CreateForm extends BaseForm {

    public function __construct($data = []) {
        parent::__construct($data);
        
        $this->data['attr']['id'] = 'create-form';
        $this->data['buttons']['submit']['title'] = 'Sukurti';
        //keiciame musu buttono stylius
        $this->data['buttons']['submit']['extra']['attr']['class']= 'button-outline';
//        $this->data['buttons']['submit']['title'] ='clear';
    }

}
