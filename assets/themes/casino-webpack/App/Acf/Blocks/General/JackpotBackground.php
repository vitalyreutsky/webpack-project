<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class JackpotBackground implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'jackpot_background',
                'Jackpot Background',
                'Jackpot Background block',
                'templates/blocks/jackpot_background.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Jackpot Background block",
                    'description' => "Jackpot Background block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
