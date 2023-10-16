<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class JackpotSlots implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'jackpot_slots',
                'Jackpot Slots',
                'Jackpot Slots block',
                'templates/blocks/jackpot_slots.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Jackpot Slots block",
                    'description' => "Jackpot Slots block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
