<?php
namespace Flowpack\FusionBP\Generators;

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\Model\NodeType;

/**
 * @Flow\Scope("singleton")
 */
class DefaultContentPrototypeGenerator extends DefaultPrototypeGenerator
{
    /**
     * Is Document prototype?
     *
     * @var string
     */
    protected $isDocument = false;
}
