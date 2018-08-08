<?php

namespace Form;

class EmailFormField extends FormField
{
    public function __construct($label, $name)
    {
        parent::__construct($label, $name);

        $this->type = 'email';
    }

    public function processRequest(array $request)
    {
        $isValid = parent::processRequest($request);

        if ($isValid)
        {
            if (mb_strpos($this->value, '@') === false)
            {
                $this->error = 'Invalid email!';

                return false;
            }
        }

        return $isValid;
    }
}