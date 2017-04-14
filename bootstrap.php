<?php

use Mni\FrontYAML\Markdown\MarkdownParser;

class UberParsedown extends Parsedown implements MarkdownParser
{
    function __construct()
    {
        $this->InlineTypes['{'] [] = 'ColoredText';

        $this->inlineMarkerList .= '{';
    }

    protected function inlineColoredText($Excerpt)
    {
        if (preg_match('/^{c:([#\w]\w+)}(.*?){\/c}/', $Excerpt['text'], $matches)) {
            return array(
                'extent' => strlen($matches[0]),
                'element' => array(
                    'name' => 'span',
                    'text' => $matches[2],
                    'attributes' => array(
                        'style' => 'color: ' . $matches[1],
                    ),
                ),
            );
        }

        return null;
    }
}

$container->bind(MarkdownParser::class, UberParsedown::class);
