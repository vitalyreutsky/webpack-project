<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class SimpleCards implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'simple_cards',
                'Simple Cards',
                'Simple Cards block',
                'templates/blocks/simple_cards.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Simple Cards block",
                    'description' => "Simple Cards block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
