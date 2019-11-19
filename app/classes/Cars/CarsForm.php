<?php
namespace App\Cars\Views;
class RegisterForm extends \Core\Views\Form {
  public function __construct($data = []) {
      $this->data = [
          'attr' => [
              'id' => 'register-form',
              'method' => 'POST',
          ],
          'fields' => [
              'manufacturer' => [
                  'label' => 'manufacturer',
                  'type' => 'select',
//                    Kad visada butu uždeta famale
                  'value' => 1,
                  'options' => [
                      'Audi',
                      'Bmv',
                      'VW',
                      'Honda'
                  ],
                  'extra' => [
                      'validators' => [
                          'validate_not_empty'
                      ]
                  ]
              ],
              'model' => [
                  'label' => 'Model',
                  'type' => 'text',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty'
                      ]
                  ],
              ],
              'years' => [
                  'label' => 'Years',
                  'type' => 'number',
                  'extra' => [
                      'validators' => [
                          'validate_not_empty',
//                            'validate_age',
                          'validate_number_range' => [
                              'min' => 1900,
                              'max' => 2019
                          ]
                      ],
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
          ],
      ];
  }
}