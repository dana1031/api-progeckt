<?php

namespace App\Cars\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'manufacturer' => [
                    'label' => 'manufacturer',
                    'type' => 'select',
                    'options' => \App\Cars\Car::getManufacturersOptions()
                ],
                'model' => [
                    'label' => 'Model',
                    'type' => 'text',
                ],
                'years' => [
                    'label' => 'Years',
                    'type' => 'number',
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ],
            ]
        ];
    }

}
