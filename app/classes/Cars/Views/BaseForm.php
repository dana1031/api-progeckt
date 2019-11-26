<?php

namespace App\Cars\Views;

class BaseForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'manufacturer' => [
                    'label' => 'Vardas',
                    'type' => 'text',                  
                ],
                'model' => [
                    'label' => 'komentarai',
                    'type' => 'textarea',
//                    'extra' => [
//                        'attr' => [
//                            'placeholder' => 'komentaras'
//                        ]
//                    ]
                ],
                'year' => [
                    'label' => 'Data',
                    'type' => 'date',
                    
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Siūsti',
                ],
            ]
        ];
    }

}
