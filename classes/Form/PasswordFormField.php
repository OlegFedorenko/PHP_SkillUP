<?php

namespace Form;

class PasswordFormField extends FormField
{
    public function __construct($label, $name)
    {
        parent::__construct($label, $name);

        $this->type = 'password';
    }
}