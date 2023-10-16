<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class HotColdSlots implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'hot_cold_slots',
                'Hot Cold Slots',
                'Hot Cold Slots block',
                'templates/blocks/hot_cold_slots.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Hot Cold Slots block",
                    'description' => "Hot Cold Slots block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
