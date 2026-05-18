<?php

class __Mustache_826b0f872fb6a5a4af1fe5b0af86954f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- mod_flashcard/decks -->
';
        $buffer .= $indent . '<div class="container-fluid m-b-1 flashcard-decks">
';
        $buffer .= $indent . '    <div class="row-fluid">
';
        $buffer .= $indent . '
';
        $value = $context->find('decks');
        $buffer .= $this->sectionC0c37de0bc428d54290923d59720ad45($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /mod_flashcard/decks -->
';

        return $buffer;
    }

    private function sectionC0c37de0bc428d54290923d59720ad45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-md-{{boostrapdivider}} span{{boostrapdivider}}">

            {{{heading}}}

            {{{strdeck}}}
            <br/>
            {{{deck}}}

        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-md-';
                $value = $this->resolveValue($context->find('boostrapdivider'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' span';
                $value = $this->resolveValue($context->find('boostrapdivider'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('strdeck'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            <br/>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('deck'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
