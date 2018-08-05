<?php

//require __DIR__.'/SmartForm.php';

class Form
{

    public function input($label,$array)
    {
        $out = sprintf('<input %s>', $this->arrayToString ($array));
        $ret = sprintf('<label>%s %s</label>', $label, $out);
        return $ret;
    }

    public function password($label,$array)
    {
        $out = sprintf('<input %s>', $this->arrayToString ($array));
        $ret = sprintf('<label>%s %s</label>', $label, $out);
        return $ret;
    }

    public function textarea($label,$array)
    {
        $out = sprintf('<textarea %s></textarea>', $this->arrayToString ($array));
        $ret = sprintf('<label>%s %s</label><br>', $label, $out);
        return $ret;
    }

    public function submit($label,$array)
    {
        $out = sprintf('<input %s>', $this->arrayToString ($array));
        $ret = sprintf('<label>%s %s</label>', $label, $out);
        return $ret;
    }

    public function open($array)
    {
        $out = sprintf('<form %s>', $this->arrayToString ($array));
        return $out;
    }


    public function close()
    {
        return '</form>';
    }

    protected function arrayToString ($array)
    {
        $line = '';
        $glue1 = '=';
        $glue2 = ' ';

        foreach ($array as $key=>$value)
        {
            $line.=$key.$glue1.'"'.$value.'"'.$glue2;
        }
        //echo $line;
        return $line;
    }

}