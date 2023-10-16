<?php

namespace App\Seo;

final class Sitemap
{
    public function __construct()
    {
        add_filter('wpseo_sitemap_exclude_post_type', [self::class, 'sitemap_exclude_post_type'], 10, 2);
        add_filter('wpseo_stylesheet_url', [self::class, 'stylesheet_url_filter']);
        add_filter('wpseo_sitemap_url', [self::class, 'sitemap_url_filter'], 10, 2);
        add_filter('wpseo_sitemap_index', [self::class, 'casino_sitemap_index']);
        add_action('init', [self::class, 'casino_sitemap_register']);
        add_filter('wpseo_sitemap_index', [self::class, 'slots_sitemap_index']);
        add_action('init', [self::class, 'slots_sitemap_register']);
    }

    public static function sitemap_exclude_post_type($value, $post_type)
    {
        $post_type_to_exclude = array('casino_page', 'slot_page');
        if (in_array($post_type, $post_type_to_exclude)) return true;
    }

    public static function stylesheet_url_filter($stylesheet)
    {
        $stylesheet = '<?xml-stylesheet type="text/xsl" href="/assets/themes/casino-webpack/main-sitemap.xsl"?>';

        return $stylesheet;
    }

    public static function sitemap_url_filter($output, $url)
    {

        $id = url_to_postid($url['loc']);

        $changefreq = get_field('change_freq', $id);

        if ($changefreq == 'weekly') {
            $changefreq = 'Weekly';
        } else {
            $changefreq = 'Monthly';
        }
        $output = str_replace("\t</url>\n", '', $output);
        $output .= "\t\t<changefreq>" . $changefreq . "</changefreq>\n\t</url>\n";

        return $output;
    }

    public static function casino_sitemap_index($sitemap_index)
    {
        $sitemap_url = home_url("casino-sitemap.xml");
        $sitemap_date = date(DATE_W3C);
        $custom_sitemap = <<<SITEMAP_INDEX_ENTRY
<sitemap>
    <loc>%s</loc>
    <lastmod>%s</lastmod>
</sitemap>
SITEMAP_INDEX_ENTRY;
        $sitemap_index .= sprintf($custom_sitemap, $sitemap_url, $sitemap_date);
        return $sitemap_index;
    }

    public static function casino_sitemap_register()
    {
        global $wpseo_sitemaps;
        if (isset($wpseo_sitemaps) && !empty($wpseo_sitemaps)) {
            $wpseo_sitemaps->register_sitemap('casino', function () {
                global $wpseo_sitemaps;
                $urls = array();

                $my_posts = get_posts(array(
                    'post_type'   => 'casino_page',
                    'post_status' => ['publish'],
                    'posts_per_page' => -1,
                ));

                foreach ($my_posts as $post) {

                    $changefreq = get_field('change_freq', $post);

                    if ($changefreq == 'weekly') {
                        $changefreq = 'Weekly';
                    } else {
                        $changefreq = 'Monthly';
                    }

                    $date = YoastSEO()->helpers->date->format($post->post_modified);

                    $output  = "\t<url>\n";
                    $output .= "\t\t<loc>" . get_permalink($post) . "</loc>\n";
                    $output .= empty($date) ? '' : "\t\t<lastmod>" . htmlspecialchars($date, ENT_COMPAT, 'UTF-8', false) . "</lastmod>\n";
                    $output .= "\t\t<changefreq>" . $changefreq . "</changefreq>\n";
                    $output .= "\t</url>\n";

                    $urls[] = $output;
                }

                $sitemap_body = <<<SITEMAP_BODY
    <urlset
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    %s
    </urlset>
    SITEMAP_BODY;
                $sitemap = sprintf($sitemap_body, implode("\n", $urls));
                $wpseo_sitemaps->set_sitemap($sitemap);
            });
        }
    }

    public static function slots_sitemap_index($sitemap_index)
    {
        $sitemap_url = home_url("slot-sitemap.xml");
        $sitemap_date = date(DATE_W3C);
        $custom_sitemap = <<<SITEMAP_INDEX_ENTRY
<sitemap>
    <loc>%s</loc>
    <lastmod>%s</lastmod>
</sitemap>
SITEMAP_INDEX_ENTRY;
        $sitemap_index .= sprintf($custom_sitemap, $sitemap_url, $sitemap_date);
        return $sitemap_index;
    }

    public static function slots_sitemap_register()
    {
        global $wpseo_sitemaps;
        if (isset($wpseo_sitemaps) && !empty($wpseo_sitemaps)) {
            $wpseo_sitemaps->register_sitemap('slot', function () {
                global $wpseo_sitemaps;
                $urls = array();

                $my_posts = get_posts(array(
                    'post_type'   => 'slot_page',
                    'post_status' => ['publish'],
                    'posts_per_page' => -1,
                ));

                foreach ($my_posts as $post) {
                    $changefreq = get_field('change_freq', $post);

                    if ($changefreq == 'weekly') {
                        $changefreq = 'Weekly';
                    } else {
                        $changefreq = 'Monthly';
                    }

                    $date = YoastSEO()->helpers->date->format($post->post_modified);

                    $output  = "\t<url>\n";
                    $output .= "\t\t<loc>" . get_permalink($post) . "</loc>\n";
                    $output .= empty($date) ? '' : "\t\t<lastmod>" . htmlspecialchars($date, ENT_COMPAT, 'UTF-8', false) . "</lastmod>\n";
                    $output .= "\t\t<changefreq>" . $changefreq . "</changefreq>\n";
                    $output .= "\t</url>\n";

                    $urls[] = $output;
                }

                $sitemap_body = <<<SITEMAP_BODY
    <urlset
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd"
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    %s
    </urlset>
    SITEMAP_BODY;
                $sitemap = sprintf($sitemap_body, implode("\n", $urls));
                $wpseo_sitemaps->set_sitemap($sitemap);
            });
        }
    }
}
