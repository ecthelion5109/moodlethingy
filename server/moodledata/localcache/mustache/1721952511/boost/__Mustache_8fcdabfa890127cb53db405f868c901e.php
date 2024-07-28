<?php

class __Mustache_8fcdabfa890127cb53db405f868c901e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_courseformat/local/content/divider')) {
            $context->pushBlockContext(array(
                'extraclasses' => array($this, 'blockC46881743a9be918e9767624c3f52ccf'),
                'content' => array($this, 'blockDed965c9a228c51c9cbe3ec0a7ef29a9'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section96e5910d1aec067f644ed51986551f8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-sectionreturnnum="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-sectionreturnnum="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b089e00077ec061918a3e4dd2d05479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/add, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/add, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section037ed759c395d547607491573906432c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addresourceoractivity, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addresourceoractivity, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockC46881743a9be918e9767624c3f52ccf($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'always-visible my-3';
    
        return $buffer;
    }

    public function blockDed965c9a228c51c9cbe3ec0a7ef29a9($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <button class="btn add-content section-modchooser section-modchooser-link d-flex justify-content-center align-items-center py-1 px-2"
';
        $buffer .= $indent . '            data-action="open-chooser"
';
        $buffer .= $indent . '            data-sectionnum="';
        $value = $this->resolveValue($context->find('sectionnum'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            ';
        $value = $context->find('sectionreturn');
        $buffer .= $this->section96e5910d1aec067f644ed51986551f8f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section9b089e00077ec061918a3e4dd2d05479($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="activity-add-text pr-1">';
        $value = $context->find('str');
        $buffer .= $this->section037ed759c395d547607491573906432c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
    
        return $buffer;
    }
}
