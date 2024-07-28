<?php

class __Mustache_2d184580644af7648145e825ba7a92fe extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('buttonheader');
        $buffer .= $this->section76a0646f2b119c328db0c2b1993c99c1($context, $indent, $value);
        $buffer .= $indent . '<div class="';
        $value = $context->find('parentclasses');
        $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
        $buffer .= ' dropdown comboboxsearch" data-instance="';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('usebutton');
        $buffer .= $this->sectionCa1cf36ae40d3d491be478d97d20798b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $context->find('usebutton');
        if (empty($value)) {
            
            $value = $this->resolveValue($context->find('buttoncontent'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('dropdownclasses');
        $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
        $buffer .= ' dropdown-menu"
';
        $buffer .= $indent . '        id="dialog-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $value = $context->find('usebutton');
        $buffer .= $this->sectionA64f672c53f8221dfa4a080b4a0b8e28($context, $indent, $value);
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <div class="w-100 p-3" data-region="placeholder">
';
        $value = $context->find('renderlater');
        $buffer .= $this->sectionDf80c4427fd192553257876f1e87f6be($context, $indent, $value);
        $value = $context->find('renderlater');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('dropdowncontent'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section76a0646f2b119c328db0c2b1993c99c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <small>{{.}}</small>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <small>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</small>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa1cf36ae40d3d491be478d97d20798b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div tabindex="0"
             data-toggle="dropdown"
             aria-expanded="false"
             role="combobox"
             aria-haspopup="dialog"
             aria-controls="dialog-{{instance}}-{{uniqid}}"
             class="{{#buttonclasses}}{{.}}{{/buttonclasses}} btn dropdown-toggle d-flex text-left align-items-center p-0 font-weight-bold"
             aria-label="{{label}}"
             data-input-element="input-{{instance}}-{{uniqid}}">
            {{{buttoncontent}}}
        </div>
        <input type="hidden" name="{{name}}" value="{{value}}" id="input-{{instance}}-{{uniqid}}"/>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div tabindex="0"
';
                $buffer .= $indent . '             data-toggle="dropdown"
';
                $buffer .= $indent . '             aria-expanded="false"
';
                $buffer .= $indent . '             role="combobox"
';
                $buffer .= $indent . '             aria-haspopup="dialog"
';
                $buffer .= $indent . '             aria-controls="dialog-';
                $value = $this->resolveValue($context->find('instance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '             class="';
                $value = $context->find('buttonclasses');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= ' btn dropdown-toggle d-flex text-left align-items-center p-0 font-weight-bold"
';
                $buffer .= $indent . '             aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '             data-input-element="input-';
                $value = $this->resolveValue($context->find('instance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('buttoncontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="input-';
                $value = $this->resolveValue($context->find('instance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA64f672c53f8221dfa4a080b4a0b8e28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            role="dialog"
            aria-modal="true"
            aria-label="{{label}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            role="dialog"
';
                $buffer .= $indent . '            aria-modal="true"
';
                $buffer .= $indent . '            aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf80c4427fd192553257876f1e87f6be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex flex-column align-items-stretch justify-content-between" style="height: 150px; width: 300px;">
                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex flex-column align-items-stretch justify-content-between" style="height: 150px; width: 300px;">
';
                $buffer .= $indent . '                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
';
                $buffer .= $indent . '                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
';
                $buffer .= $indent . '                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
