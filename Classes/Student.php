<?php

class Student extends UserTask5
{
    private $stipendia;
    private $term;

    public function setStipendia($stipendia): void
    {
        $this->stipendia = $stipendia;
    }

    public function getStipendia()
    {
        return $this->stipendia;
    }

    public function setTerm($term): void
    {
        $this->term = $term;
    }

    public function getTerm()
    {
        return $this->term;
    }
}