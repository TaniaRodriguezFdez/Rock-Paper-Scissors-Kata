<?php
class Paper extends Element implements Cuttable
{
    public function cover(Element $element)
    {
        return $element instanceof Cover;
    }

    public function rebut(Element $element)
    {
        return $element instanceof Rebutable;
    }
}