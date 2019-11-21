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
                  'label' => 'name',
                  'type' => 'text',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty',
                          'validate_alphabet_only'
            
                          ]
              ],
                  'optional' => true
            ], 
              
              
              'email' => [
                  'label' => 'Email',
                  'type' => 'email',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty',
                          'validate_email',
                          'validate_mail'
                      ]
                  ],
              ],
              'password' => [
                  'label' => 'Password',
                  'type' => 'password',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty'
                      ]
                  ],
              ],
              'password_repeat' => [
                  'label' => 'Password repeat',
                  'type' => 'password',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty'
                      ]
                  ],
              ],
              'age' => [
                  'label' => 'Your age',
                  'type' => 'number',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty',
//                            'validate_age',
                          'validate_number_range' => [
                              'min' => 18,
                              'max' => 100
                          ]
                      ],
                  ],
              ],
              'gender' => [
                  'label' => 'Gender',
                  'type' => 'select',
//                    Kad visada butu uždeta famale
                  'value' => 1,
                  'options' => [
                      'male',
                      'female'
                  ],
                  'extra' => [
                      'validators' => [
                          'validate_not_empty'
                      ]
                  ]
              ]
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
          ],
      ];
  }
}