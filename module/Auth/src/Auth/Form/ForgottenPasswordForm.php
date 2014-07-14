<?php
namespace Auth\Form;

use Zend\Form\Form;

class ForgottenPasswordForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('registration');
        $this->setAttribute('method', 'post');
		
        $this->add(array(
            'name' => 'usr_email',
            'attributes' => array(
                'type'  => 'email',
                'class' =>  'form-control',
            ),
            'options' => array(
            ),
        ));	
		
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Submit',
                'id' => 'submitbutton',
                'class' => 'width-35 pull-right btn btn-sm btn-danger',
            ),
        )); 
    }
}