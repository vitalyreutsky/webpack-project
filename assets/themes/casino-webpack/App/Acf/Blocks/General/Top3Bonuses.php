<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Top3Bonuses implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'top3bonuses',
                'Top 3 Bonuses',
                'Top 3 Bonuses block',
                'templates/blocks/top_3_bonuses.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Top 3 Bonuses block",
                    'description' => "Top 3 Bonuses block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
