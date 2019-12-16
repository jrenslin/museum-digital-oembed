<?php
/**
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if (!defined('ABSPATH')) {
	exit;
}


/**
 * museum-digital oEmbed
 * Register oEmbed provider.
 *
 * @since 1.0
 */
function md_oembed_provider() {

    $mdInstances = [

        // Aggregated
        "nat.museum-digital.de",
        "at.museum-digital.org",
        "global.museum-digital.org",
        "goethehaus.museum-digital.de",
        "lmw.museum-digital.de",

        // Germany
        "agrargeschichte.museum-digital.de",
        "bawue.museum-digital.de",
        "bayern.museum-digital.de",
        "berlin.museum-digital.de",
        "brandenburg.museum-digital.de",
        "bremen.museum-digital.de",
        "collectors.museum-digital.de",
        "hessen.museum-digital.de",
        "meckpomm.museum-digital.de",
        "nds.museum-digital.de",
        "owl.museum-digital.de",
        "rheinland.museum-digital.de",
        "rlp.museum-digital.de",
        "sachsen.museum-digital.de",
        "smb.museum-digital.de",
        "sh.museum-digital.de",
        "st.museum-digital.de",
        "thue.museum-digital.de",
        "westfalen.museum-digital.de",

        // Austria
        "wien.at.museum-digital.org",

        // Brazil
        "br.museum-digital.org",

        // Hungary
        "hu.museum-digital.org/portal",

        // Indonesia
        "id.museum-digital.org",
        
    ];

    foreach ($mdInstances as $instanceLink) {
	    wp_oembed_add_provider('https://' . $instanceLink . '/index.php?t=objekt&oges=*', 'https://' . $instanceLink . '/oembed/', false);
	    wp_oembed_add_provider('https://' . $instanceLink . '/index.php?t=serie&serges=*', 'https://' . $instanceLink . '/oembed/', false);
    }

}
add_action('init', 'md_oembed_provider');
