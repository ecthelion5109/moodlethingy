<?php

class __Mustache_3172bb781840085ff91258b4c1b8994a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->find('sorturl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" data-sortname="';
        $value = $this->resolveValue($context->find('sortname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-sortorder="';
        $value = $this->resolveValue($context->find('sortorder'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('sorttip'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('sortcontent'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
