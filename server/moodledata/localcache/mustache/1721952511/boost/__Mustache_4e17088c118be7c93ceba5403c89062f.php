<?php

class __Mustache_4e17088c118be7c93ceba5403c89062f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form class="question-text-format ml-1" action="';
        $value = $this->resolveValue($context->find('formaction'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="returnurl" value="';
        $value = $this->resolveValue($context->find('returnurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="input-group">
';
        $buffer .= $indent . '        <label class="input-group-prepend" for="question-text-format">
';
        $buffer .= $indent . '            <span class="input-group-text">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <select class="form-control" name="format" id="question-text-format">
';
        $value = $context->find('options');
        $buffer .= $this->section8b2365115619ee7c21bc9b2e874a9bcd($context, $indent, $value);
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        <div class="input-group-append">
';
        $buffer .= $indent . '            <button class="btn btn-outline-dark mb-2">';
        $value = $context->find('str');
        $buffer .= $this->section67ff6294eae5b56bee5bc66aaa93b70d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->sectionCec615307fe1f27d70b6a762d9e69b8c($context, $indent, $value);

        return $buffer;
    }

    private function section88f3a0425f940581199a6cb7829720ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b2365115619ee7c21bc9b2e874a9bcd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}"{{#selected}} selected{{/selected}}>{{label}}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('selected');
                $buffer .= $this->section88f3a0425f940581199a6cb7829720ec($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67ff6294eae5b56bee5bc66aaa93b70d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' save ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCec615307fe1f27d70b6a762d9e69b8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'qbank_viewquestiontext/question_text_format\'], QuestionTextFormat => {
        QuestionTextFormat.init(\'questionscontainer\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'qbank_viewquestiontext/question_text_format\'], QuestionTextFormat => {
';
                $buffer .= $indent . '        QuestionTextFormat.init(\'questionscontainer\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
