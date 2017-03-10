<?php
namespace Flowpack\FusionBP\Generators;

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\Model\NodeType;

/**
 * @Flow\Scope("singleton")
 */
class DefaultDocumentPrototypeGenerator extends DefaultPrototypeGenerator
{
    /**
     * Is Document prototype?
     *
     * @var string
     */
    protected $isDocument = true;
}
