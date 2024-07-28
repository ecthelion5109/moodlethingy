<?php

class __Mustache_c2a76fdc33aead4be2048ca520469ba2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<span class="date">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('lastused'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '</span>
';

        return $buffer;
    }
}
