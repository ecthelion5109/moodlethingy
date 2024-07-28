<?php

class __Mustache_c5eb285d03e63598bfed00592e34222c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="qbank_statistics facility_index">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('facility_index'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
