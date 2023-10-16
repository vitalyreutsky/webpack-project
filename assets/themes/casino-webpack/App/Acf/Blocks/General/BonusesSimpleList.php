<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class BonusesSimpleList implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'bonuses_simple_list',
                'Bonuses Simple List',
                'Bonuses Simple List block',
                'templates/blocks/bonuses_simple_list.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Bonuses Simple List block",
                    'description' => "Bonuses Simple List block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
