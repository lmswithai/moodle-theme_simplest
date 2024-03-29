<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The columns layout for the classic theme.
 *
 * @package   theme_simplest
 * @copyright 2024, LMSwithAI <contact@lmswithai.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$bodyattributes = $OUTPUT->body_attributes();
$blockspre = $OUTPUT->blocks('side-pre');
$blockspost = $OUTPUT->blocks('side-post');

$inspirationalquotes = theme_simplest_quotes_items();
$inspirationalquotescss = theme_simplest_generate_slider_css();
$disableinspirationalquotes = get_config('theme_simplest', 'disableinspirationalquotes');

if (empty($inspirationalquotes)) {
    $disableinspirationalquotes = "1";
}

$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockspre,
    'sidepostblocks' => $blockspost,
    'haspreblocks' => $hassidepre,
    'haspostblocks' => $hassidepost,
    'bodyattributes' => $bodyattributes,
    'inspirationalquotes' => $inspirationalquotes,
    'inspirationalquotescss' => $inspirationalquotescss,
    'disableinspirationalquotes' => $disableinspirationalquotes,
];

echo $OUTPUT->render_from_template('theme_simplest/course', $templatecontext);

