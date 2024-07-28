<?php

class __Mustache_e6aad9a54b9e97155c79eb5c9d5f6439 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="text-muted ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $context->find('hidden');
        $buffer .= $this->section48ebd8ae268d0b32f841e9030f73c441($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('locked');
        $buffer .= $this->section7784a70e7eebae087fb1f593e0f3e168($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('overridden');
        $buffer .= $this->section0b019f393a4cd3434116425930d82206($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('excluded');
        $buffer .= $this->sectionBecb5807c426a4ee1b9dd6bd2050a6c9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('feedback');
        $buffer .= $this->section67a5702d5da521ae97c12ee6550c9a74($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section79c7bfb578e9c22baea332722274d968(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hidden, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hidden, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59a2f062ec955e1d8bbd6708d7e70d0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/show, moodle, {{#str}} hidden, grades {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/show, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section79c7bfb578e9c22baea332722274d968($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48ebd8ae268d0b32f841e9030f73c441(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}i/show, moodle, {{#str}} hidden, grades {{/str}}{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section59a2f062ec955e1d8bbd6708d7e70d0f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e85db8ad7ff38b23a065c6d997d332a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' locked, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' locked, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f08877d61fa72409a8895a987faa30e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/lock, moodle, {{#str}} locked, grades {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/lock, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section5e85db8ad7ff38b23a065c6d997d332a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7784a70e7eebae087fb1f593e0f3e168(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}i/lock, moodle, {{#str}} locked, grades {{/str}}{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section3f08877d61fa72409a8895a987faa30e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4832c7e1b590fc5626f579c9d994d749(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overridden, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' overridden, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF577ee1a676a9f61420dc5b1ac90bd34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/overriden_grade, moodle, {{#str}} overridden, grades {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/overriden_grade, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section4832c7e1b590fc5626f579c9d994d749($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b019f393a4cd3434116425930d82206(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}i/overriden_grade, moodle, {{#str}} overridden, grades {{/str}}{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->sectionF577ee1a676a9f61420dc5b1ac90bd34($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc5511f449dfd81f13a0039be14fc497(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' excluded, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' excluded, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section455cc63c425f3fbf9c5da03ad94128bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/excluded, moodle, {{#str}} excluded, grades {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/excluded, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->sectionEc5511f449dfd81f13a0039be14fc497($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBecb5807c426a4ee1b9dd6bd2050a6c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}i/excluded, moodle, {{#str}} excluded, grades {{/str}}{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section455cc63c425f3fbf9c5da03ad94128bf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cbd863d8b6c82961f75f592875098e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackprovided, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feedbackprovided, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2867b7ab1ce666ef69b52625a95ed5d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/asterisk, moodle, {{#str}} feedbackprovided, grades {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/asterisk, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section6cbd863d8b6c82961f75f592875098e6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67a5702d5da521ae97c12ee6550c9a74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}i/asterisk, moodle, {{#str}} feedbackprovided, grades {{/str}}{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->section2867b7ab1ce666ef69b52625a95ed5d5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
