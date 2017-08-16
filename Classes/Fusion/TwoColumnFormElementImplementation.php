<?php
namespace Wwwision\Form\MultiColumnSection\Fusion;

use Neos\Form\Builder\Fusion\SectionImplementation;

class TwoColumnFormElementImplementation extends SectionImplementation
{
    protected function evaluateChildElements()
    {
        $this->runtime->evaluate($this->path . '/column1Elements');
        $this->runtime->evaluate($this->path . '/column2Elements');
    }
}