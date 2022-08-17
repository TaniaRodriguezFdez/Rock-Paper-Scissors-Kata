<?php
class Paper extends Element implements Crush
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