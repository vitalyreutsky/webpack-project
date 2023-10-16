<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class TopRtpVolatilitySlots implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'top_rtp_volatility_slots',
                'Top Rtp Volatility Slots',
                'Top Rtp Volatility Slots block',
                'templates/blocks/top_rtp_volatility_slots.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Top Rtp Volatility Slots block",
                    'description' => "Top Rtp Volatility Slots block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
