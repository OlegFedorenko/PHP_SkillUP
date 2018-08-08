<?php

namespace Form;

class FormField
{
    private $label;
    private $name;
    protected $value;
    protected $error;
    protected $type;

    public function __construct($label, $name) // конструктор для строки
    {
        $this -> label = $label;
        $this -> name = $name;
        $this -> value = '';
        $this -> error = '';
        $this -> type = 'text';
    }

    public function render()
    {
        $input = sprintf('<input type="%s" name = "%s" value = "%s">', $this->type, $this->name, $this->value);
        // ф-ция для форматирования строки

        if ($this->error)
        {
            $input .= sprintf('<p class="error">%s</p>', $this->error);
        }

        $ret = sprintf('<label>%s%s</label>', $this->label, $input);

        return $ret;
    }

    public function getName() // возвращает приватную переменную
    {
        return $this->name;
    }

    public function processRequest(array $request)
    {
        $this->value = isset($request[$this->name]) ? $request[$this->name] : '';


        if (empty($this->value))
        {
            $this-> error = 'Required field';

            return false;
        }


        return true;
    }

    /**
     * @return string
     */
    public function getValue(): string //геттер для значений полей формы
    {
        return $this->value;
    }


}