<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Top10Casino implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'Top10Casino',
                'Top 10 Casino',
                'Top 10 Casino block',
                'templates/blocks/top_10_casino.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Top 10 Casino block",
                    'description' => "Top 10 Casino block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
