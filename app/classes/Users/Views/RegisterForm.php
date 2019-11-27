<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Vardas *',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_alphabet_only',
//                            'validate_number_char' => [
//                                'min' => 1,
//                                'max' => 40,
//                                'error' => 'neteisingai ivestas laukas'
//                            ],
                        ],
                      ],
                    ],
                'surname' => [
                    'label' => 'Pavardė *',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_alphabet_only',
//                            'validate_number_char' => [
//                                'min' => 1,
//                                'max' => 40,
//                                'error' => 'neteisingai ivestas laukas'
//                            ],
                        ],
                      ],
                   ], 
                'email' => [
                    'label' => 'El.paštas *',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
//                          'validate_email',
                            'validate_mail'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Slaptažodis *',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'password_repeat' => [
                    'label' => 'Pakartokite slaptažodį *',
                   'type' => 'password',
                    'extra' => [
                        'validators' => [
                           'validate_not_empty'
                        ]
                    ],
                ],
                'Telefono numeris' => [
                    'label' => 'Tel.numeris',
                    'type' => 'number',
                    'optional' => true,
                    'extra' => [
                        'validators' => [
//                            'validate_not_empty'
                        ]
                    ],
                ],
               
               
              
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
            ]
                   
       ]; 
    }

}
