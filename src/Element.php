<?php
abstract class Element
{
    public function fight(Element $element)
    {
        if ($this instanceof $element) return null;
        foreach (get_class_methods($this) as $action) {
            if ($this->$action($element)) {
                return true;
            }
        }
	return false;
    }
}