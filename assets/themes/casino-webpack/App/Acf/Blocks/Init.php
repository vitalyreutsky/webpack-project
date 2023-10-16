<?php

namespace App\Acf\Blocks;

use App\Acf\Blocks\General\FAQ;

final class Init
{
        /**
         * @var Helpers\BlockItem[]
         */
        private static array $blocks = array(
                General\Top3Bonuses::class,
                General\ExpertAndText::class,
                General\BonusesList::class,
                General\Top10Casino::class,
                General\SummaryCasinoWinner::class,
                General\TopRTPCasino::class,
                General\TestBlock::class,
                General\SimpleCards::class,
                General\Regions::class,
                General\Licenses::class,
                General\Reviews::class,
                General\BlacklistORWhitelist::class,
                General\News::class,
                General\NewsList::class,
                General\HowTo::class,
                General\HowTo6Image::class,
                General\BestTypeGames::class,
                General\CasinoCriteria::class,
                General\MinusPlus::class,
                General\ContentBlock::class,
                General\Diagrams::class,
                General\SlotsList::class,
                General\VideoBlock::class,
                General\JackpotSlots::class,
                General\PricesCasino::class,
                General\FAQ::class,
                General\Hero::class,
                General\FormContact::class,
                General\ExpertsCards::class,
                General\NumericCards::class,
                General\NavigationBlock::class,
                General\Notices::class,
                General\CardsBlock::class,
                General\StepsCard::class,
                General\BonusesSimpleList::class,
                General\ProviderSlots::class,
                General\HotColdSlots::class,
                General\TopRtpVolatilitySlots::class,
                General\Formula::class,
                General\JackpotBackground::class,
                General\MainHeading::class,
                General\ProviderSlotsCategory::class,
                General\FreeSpins::class,
                General\SlotsAndBonusList::class
        );

        public function __construct()
        {
                /*
		** More info about acf bocks here: https://www.advancedcustomfields.com/resources/acf_register_block_type/
		*/
                foreach (self::$blocks as $block) {
                        $block::setBlockParams();
                }
                RegisterBlock::init();
        }
}
