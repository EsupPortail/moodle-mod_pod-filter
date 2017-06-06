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
 * This classes define form elements for local parameters of activies.
 * There is 4 text fields :
 * - url of Pod server in a form of domain name
 * - video quality
 * - width of the video
 * - height of the video
 */
class pod_filter_local_settings_form extends filter_local_settings_form {
    protected function definition_inner($mform) {
        $mform->addElement('text', 'url', get_string('url', 'filter_pod'), array('size' => 48));
        $mform->setType('url', PARAM_NOTAGS);
        $mform->addHelpButton('url', 'url', 'filter_pod');
        $mform->addElement('text', 'size', get_string('size', 'filter_pod'), array('size' => 32));
        $mform->setType('size', PARAM_NOTAGS);
        $mform->addHelpButton('size', 'size', 'filter_pod');
        $mform->addElement('text', 'width', get_string('width', 'filter_pod'), array('size' => 32));
        $mform->setType('width', PARAM_NOTAGS);
        $mform->addHelpButton('width', 'width', 'filter_pod');
        $mform->addElement('text', 'height', get_string('height', 'filter_pod'), array('size' => 32));
        $mform->setType('height', PARAM_NOTAGS);
        $mform->addHelpButton('height', 'height', 'filter_pod');
    }
}