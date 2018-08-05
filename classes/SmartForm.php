<?php

require __DIR__.'/Form.php';

class SmartForm extends Form
{

    public function input2($label,$array)
    {
        $out = sprintf('<input %s value="%s">', $this->arrayToString ($array), $this->getValue('name'));
        $ret = sprintf('<label>%s %s</label>', $label, $out);
        return $ret;
    }

    public function getValue($field)
    {
        global $data;
        return isset($data[$field]) ? $data[$field] :'';
    }
}
