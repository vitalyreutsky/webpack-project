<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class SummaryCasinoWinner implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'summary_casino_winner',
                'Summary Casino Winner',
                'Summary Casino Winner block',
                'templates/blocks/summary_casino.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Summary Casino Winner block",
                    'description' => "Summary Casino Winner block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
