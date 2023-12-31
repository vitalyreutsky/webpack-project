<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class CardsBlock implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'cards',
                'Cards Block',
                'Cards Block',
                'templates/blocks/cards.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Cards Block",
                    'description' => "Cards Block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
