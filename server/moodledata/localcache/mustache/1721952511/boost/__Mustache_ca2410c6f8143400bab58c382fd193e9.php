<?php

class __Mustache_ca2410c6f8143400bab58c382fd193e9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hashiddencolumns');
        $buffer .= $this->section4e5d1c30279792a7bce966127464b55d($context, $indent, $value);

        return $buffer;
    }

    private function sectionB75c840407ad0c26b47f6f44604ca063(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcolumns, qbank_columnsortorder';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcolumns, qbank_columnsortorder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa759de2cf2a149d11ea6d9257a8fc9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="dropdown-item action-link" href="{{addurl}}" title="{{addtext}}" data-action="add" data-column="{{column}}">
                    {{name}}
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="dropdown-item action-link" href="';
                $value = $this->resolveValue($context->find('addurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('addtext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="add" data-column="';
                $value = $this->resolveValue($context->find('column'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e5d1c30279792a7bce966127464b55d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="dropdown addcolumn">
        <button class="btn btn-outline-dark dropdown-toggle ml-1" data-toggle="dropdown" id="addcolumndropdown" aria-haspopup="true" aria-expanded="false">
            {{#str}}addcolumns, qbank_columnsortorder{{/str}}
        </button>
        <div class="dropdown-menu" aria-labelledby="addcolumndropdown">
            {{#hiddencolumns}}
                <a class="dropdown-item action-link" href="{{addurl}}" title="{{addtext}}" data-action="add" data-column="{{column}}">
                    {{name}}
                </a>
            {{/hiddencolumns}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="dropdown addcolumn">
';
                $buffer .= $indent . '        <button class="btn btn-outline-dark dropdown-toggle ml-1" data-toggle="dropdown" id="addcolumndropdown" aria-haspopup="true" aria-expanded="false">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionB75c840407ad0c26b47f6f44604ca063($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '        <div class="dropdown-menu" aria-labelledby="addcolumndropdown">
';
                $value = $context->find('hiddencolumns');
                $buffer .= $this->sectionCa759de2cf2a149d11ea6d9257a8fc9f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
