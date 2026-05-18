<?php

class __Mustache_32e06ab3edda2f864ad1ae68a29aaf9a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card activity-navigation mdl-bottom">
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'block7d436129bcfdedb4eef35fed91bac350'),
                'column2' => array($this, 'blockE0a0c46eac36ce127f08a485b172a32a'),
                'column3' => array($this, 'block79a141977138ae18ee4bcd28e690fe6f'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section296e5d708316fdec84d1a11edaa264b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'prev_activity, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'prev_activity, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65a6111d7de027814b303acb38b2d89b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="larrow">
                            <i class="icon-arrow-left"></i>
                        </div>
                        <div class="text">
                            <span class="nav-guide">
                                {{#str}}prev_activity, theme_moove{{/str}}
                            </span>
                            {{> core/action_link }}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="larrow">
';
                $buffer .= $indent . '                            <i class="icon-arrow-left"></i>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="text">
';
                $buffer .= $indent . '                            <span class="nav-guide">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->section296e5d708316fdec84d1a11edaa264b3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section483a82fe29022a93013c7a6cf263e197(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next_activity, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next_activity, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e1582e396509996806d39184b38bcff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="text">
                            <span class="nav-guide">
                                {{#str}}next_activity, theme_moove{{/str}}
                            </span>
                            {{> core/action_link }}
                        </div>
                        <div class="rarrow">
                            <i class="icon-arrow-right"></i>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="text">
';
                $buffer .= $indent . '                            <span class="nav-guide">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('str');
                $buffer .= $this->section483a82fe29022a93013c7a6cf263e197($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="rarrow">
';
                $buffer .= $indent . '                            <i class="icon-arrow-right"></i>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block7d436129bcfdedb4eef35fed91bac350($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <div id="prev-activity">
';
        $value = $context->find('prevlink');
        $buffer .= $this->section65a6111d7de027814b303acb38b2d89b($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function blockE0a0c46eac36ce127f08a485b172a32a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div class="mdl-align">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function block79a141977138ae18ee4bcd28e690fe6f($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div id="next-activity">
';
        $value = $context->find('nextlink');
        $buffer .= $this->section9e1582e396509996806d39184b38bcff($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }
}
