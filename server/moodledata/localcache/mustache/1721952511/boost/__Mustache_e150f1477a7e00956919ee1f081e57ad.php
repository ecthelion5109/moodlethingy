<?php

class __Mustache_e150f1477a7e00956919ee1f081e57ad extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-selectgroups-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
