<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class TestBlock implements \App\Acf\Blocks\Helpers\BlockItem
{

   public static function setBlockParams(): void
   {
      RegisterBlock::addBlock(
         new Block(
            'test_block',
            'Test Block',
            'Test Block block',
            'templates/blocks/test_block.php',
            '',
            '',
            array(
               'align' => false,
               'mode'  => false,
               'jsx'   => true,
               'anchor' => true,
            ),
            array(
               'title'       => "Test Block title",
               'description' => "Test Block description"
            ),
            'block-default',
            'casino-webpack'
         )
      );
   }
}
