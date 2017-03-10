<?php
namespace Flowpack\FusionBP\Generators;

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\Model\NodeType;

/**
 * Generate a TypoScript prototype definition based on Neos.Fusion:Template and pass all node properties to it
 *
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
