<?php

namespace Application\Form\View\Helper;

use Zend\Form\Exception;

class FormCKEditor extends \Zend\Form\View\Helper\FormTextarea
{
    public function render(ElementInterface $element)
    {
        $name   = $element->getName();
        if (empty($name) && $name !== 0) {
            throw new Exception\DomainException(sprintf(
                '%s requires that the element has an assigned name; none discovered',
                __METHOD__
            ));
        }

        $attributes         = $element->getAttributes();
        $attributes['name'] = $name;
        $content            = (string) $element->getValue();
        $escapeHtml         = $this->getEscapeHtmlHelper();

        $content = sprintf(
            '<textarea %s>%s</textarea>',
            $this->createAttributesString($attributes),
            $escapeHtml($content)
        );

        $this->view->headScript()->append('/ckeditor/ckeditor.js');

        return $content . '<script>CKEDITOR.replace(' . $element->getName() . ');</script>';
    }
}
