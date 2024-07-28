<?php

class __Mustache_ecf89725799b035e54f050c29d8ea54a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="question-version-number">
';
        $buffer .= $indent . '    <a><u>';
        $value = $context->find('str');
        $buffer .= $this->sectionE0864503edd5604646c52b22adc8b581($context, $indent, $value);
        $buffer .= '</u></a>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('createdby');
        $buffer .= $this->sectionCdfe15db5effe409ec41592d2519b079($context, $indent, $value);

        return $buffer;
    }

    private function sectionE0864503edd5604646c52b22adc8b581(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' version, qbank_viewcreator, {{versionnumber}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' version, qbank_viewcreator, ';
                $value = $this->resolveValue($context->find('versionnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdfe15db5effe409ec41592d2519b079(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="question-creator-info">
        <a>{{{createdby}}}</a>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="question-creator-info">
';
                $buffer .= $indent . '        <a>';
                $value = $this->resolveValue($context->find('createdby'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
