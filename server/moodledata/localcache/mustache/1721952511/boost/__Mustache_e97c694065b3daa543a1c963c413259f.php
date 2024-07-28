<?php

class __Mustache_e97c694065b3daa543a1c963c413259f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<button type="button" class="btn btn-link btn-icon icon-size-3" data-hider="expand" data-col="';
        $value = $this->resolveValue($context->find('field'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <i class="icon fa fa-plus m-0" title="';
        $value = $context->find('str');
        $buffer .= $this->section6b1ee772a86b2c12dd8091591b889c43($context, $indent, $value);
        $buffer .= '" aria-hidden="true"></i>
';
        $buffer .= $indent . '    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section6b1ee772a86b2c12dd8091591b889c43($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</button>
';

        return $buffer;
    }

    private function section6b1ee772a86b2c12dd8091591b889c43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reopencolumn, gradereport_grader, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'reopencolumn, gradereport_grader, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
