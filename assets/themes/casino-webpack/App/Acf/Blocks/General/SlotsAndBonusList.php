<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class SlotsAndBonusList implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'slots_bonus_list',
                'Slots And Bonuses List',
                'Slots And Bonuses List block',
                'templates/blocks/slots_bonus_list.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Slots And Bonuses List block",
                    'description' => "Slots And Bonuses List block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
