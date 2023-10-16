<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class PricesCasino implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'prices_casino',
                'Prices Casino',
                'Prices Casino block',
                'templates/blocks/prices_casino.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Prices Casino block",
                    'description' => "Prices Casino block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
