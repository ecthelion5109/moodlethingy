<?php

class __Mustache_fc96be063e09dd5433798e31428425ef extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="qbank_statistics discriminative_efficiency">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('discriminative_efficiency'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
