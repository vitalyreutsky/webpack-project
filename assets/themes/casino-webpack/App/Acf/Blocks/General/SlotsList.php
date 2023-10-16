<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class SlotsList implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'slots_list',
                'Slots List',
                'Slots List block',
                'templates/blocks/slots_list.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Slots List block",
                    'description' => "Slots List block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
