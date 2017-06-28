<?php
/**
  * Filter that turn PodLille1 urls into iframe for video integration,
  * like the multimedia filter.
  *
  * @package    filter
  * @subpackage pod
  * @copyright  2017 Joël Obled
  * @author     Obled Joel <joel.obled@univ-lille1.fr>
  * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Définition des paramètres globaux de configuration du filtre
 * There is 4 text fields :
 * - url of Pod server in a form of domain name
 * - video quality
 * - width of the video
 * - height of the video
 */
if ($ADMIN->fulltree) {
    // Url of pod server that deserve the video
    $settings->add(new admin_setting_configtext('filter_pod_url',
                get_string('url', 'filter_pod'),
                get_string('url_desc', 'filter_pod'), 'pod.univ.fr', PARAM_NOTAGS));
    // Video quality (240, 480, 720)
    $settings->add(new admin_setting_configtext('filter_pod_size',
                get_string('size', 'filter_pod'),
                get_string('size_desc', 'filter_pod'), '240', PARAM_NOTAGS));
    // Width of the video in px
    $settings->add(new admin_setting_configtext('filter_pod_width',
                get_string('width', 'filter_pod'),
                get_string('width_desc', 'filter_pod'), '640', PARAM_NOTAGS));
    // Height of the video in px
    $settings->add(new admin_setting_configtext('filter_pod_height',
                get_string('height', 'filter_pod'),
                get_string('height_desc', 'filter_pod'), '360', PARAM_NOTAGS));
}