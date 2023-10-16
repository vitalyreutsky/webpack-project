<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class BestTypeGames implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'best_type_games',
                'Best Type Games',
                'Best Type Games block',
                'templates/blocks/best_type_games.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Best Type Games block",
                    'description' => "Best Type Games block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
