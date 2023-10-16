<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class NumericCards implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'numeric_cards',
                'Numeric Cards List',
                'Numeric Cards List block',
                'templates/blocks/numeric_cards.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Numeric Cards List block",
                    'description' => "Numeric Cards List block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
