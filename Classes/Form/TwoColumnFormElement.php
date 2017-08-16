<?php
namespace Wwwision\Form\MultiColumnSection\Form;

use Neos\Form\Core\Model\FormElementInterface;
use Neos\Form\FormElements\Section;

/**
 * Neos.Form implementation of the Wwwision.Form.MultiColumnSection:TwoColumns Form Element definition
 */
class TwoColumnFormElement extends Section
{
    /**
     * @var FormElementInterface[]
     */
    private $column1Elements = [];

    /**
     * @var FormElementInterface[]
     */
    private $column2Elements = [];

    public function onBuildingFinished()
    {
        /** @var FormElementInterface $renderable */
        foreach ($this->renderables as $renderable) {
            $renderingOptions = $renderable->getRenderingOptions();
            if (isset($renderingOptions['_column']) && $renderingOptions['_column'] === 2) {
                $this->column2Elements[] = $renderable;
            } else {
                $this->column1Elements[] = $renderable;
            }
        }
    }


    /**
     * @return FormElementInterface[]
     */
    public function getColumn1Elements(): array
    {
        return $this->column1Elements;
    }

    /**
     * @return FormElementInterface[]
     */
    public function getColumn2Elements(): array
    {
        return $this->column2Elements;
    }

}