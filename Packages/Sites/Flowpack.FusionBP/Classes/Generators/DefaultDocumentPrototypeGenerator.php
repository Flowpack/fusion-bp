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

    /**
     * Generate a Fusion prototype definition for a given node type
     *
     * @param NodeType $nodeType
     * @return string
     */
    public function generate(NodeType $nodeType)
    {
        if (strpos($nodeType->getName(), ':') === false) {
            return '';
        }

        $prototypeName = $nodeType->getName();

        $output = 'prototype(' . $prototypeName . ') < prototype(Neos.Neos:Content) {' . chr(10);
        foreach ($nodeType->getProperties() as $propertyName => $propertyConfiguration) {
            if (isset($propertyName[0]) && $propertyName[0] !== '_') {
                $output .= "\t" . $propertyName . ' = ${q(node).property("' . $propertyName . '")}' . chr(10);
                if (isset($propertyConfiguration['type']) && isset($propertyConfiguration['ui']['inlineEditable']) && $propertyConfiguration['type'] === 'string' && $propertyConfiguration['ui']['inlineEditable'] === true) {
                    $output .= "\t" . $propertyName . '.@process.convertUris = Neos.Neos:ConvertUris' . chr(10);
                }
            }
        }
        $output .= '}' . chr(10);

        $output .= 'prototype(' . $prototypeName . '.Document) < prototype(Neos.Neos:Document) {' . chr(10);
        $output .= 'body = ' . $prototypeName . chr(10);
        $output .= '}' . chr(10);
        return $output;
    }
}
