<section class="content-block <?php if (isset($block['className'])) echo $block['className']; ?>" <?php echo isset($block['anchor']) ? 'id="' . $block['anchor'] . '"' : false ?>>
    <div class="wrapper">
        <div class="content-block__wrapper wrapper-white">
            <InnerBlocks />
        </div>
    </div>
</section>