<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class TopRTPCasino implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'top_RTP_casino',
                'Top RTP Casino',
                'Top RTP Casino block',
                'templates/blocks/top_rtp_casino.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Top RTP Casino block",
                    'description' => "Top RTP Casino block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
