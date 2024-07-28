<?php

class __Mustache_b75585c04dc7b60596793a25787e64f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('group'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<span class="d-none" data-region="instance" data-instance="';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        $buffer .= $indent . '<span class="d-none" data-region="currentvalue" data-currentvalue="';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"></span>
';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block8a5589a67dbb9cfc9c23d4df9de8923a'),
                'placeholder' => array($this, 'block8a5589a67dbb9cfc9c23d4df9de8923a'),
                'value' => array($this, 'block6461ec0d6ca7ef922be0d61813a9ee9a'),
                'additionalattributes' => array($this, 'blockD3c3fc503c8e34ff75cf8b8a9125063c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $value = $context->find('currentvalue');
        $buffer .= $this->section8b28cdbe3888f496fba88749d0cd851a($context, $indent, $value);
        $buffer .= $indent . '<input type="hidden" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="user-input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';

        return $buffer;
    }

    private function section6e509278d5c354203d2d2e761f8a64d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchusers, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'searchusers, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06fdcee45808fd0f446c5c360fafa3a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearsearch, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearsearch, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1334c11b5ab82eacb99d00f171e354a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clear';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clear';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b28cdbe3888f496fba88749d0cd851a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class="ml-2 btn btn-link border-0 align-self-center" href="{{resetlink}}" data-action="resetpage" role="link" aria-label="{{#str}}clearsearch, core{{/str}}">
        {{#str}}clear{{/str}}
    </a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a class="ml-2 btn btn-link border-0 align-self-center" href="';
                $value = $this->resolveValue($context->find('resetlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="resetpage" role="link" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section06fdcee45808fd0f446c5c360fafa3a2($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section1334c11b5ab82eacb99d00f171e354a6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block8a5589a67dbb9cfc9c23d4df9de8923a($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section6e509278d5c354203d2d2e761f8a64d5($context, $indent, $value);
    
        return $buffer;
    }

    public function block6461ec0d6ca7ef922be0d61813a9ee9a($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockD3c3fc503c8e34ff75cf8b8a9125063c($context)
    {
        $indent = $buffer = '';
        $buffer .= '        role="combobox"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-controls="user-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-result-listbox"
';
        $buffer .= $indent . '        aria-autocomplete="list"
';
        $buffer .= $indent . '        aria-haspopup="listbox"
';
        $buffer .= $indent . '        data-input-element="user-input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
    
        return $buffer;
    }
}
