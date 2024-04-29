<?php
/**
 * Plugin Name: Membercard OPAC
 * Plugin URI: -
 * Description: Membercard yang ada di halaman member area
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */
use SLiMS\Plugins;
$plugins = Plugins::getInstance();

if (str_replace(['.','v'], '', SENAYAN_VERSION_TAG) >= '961') {
    $plugins->registerMenu('opac', 'member', __DIR__ . '/pages/member.inc.php');
    $plugins->registerMenu('opac', 'member_card', __DIR__ . '/pages/member_card.inc.php');
}