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
 * Theme functions.
 *
 * @package   theme_simplest
 * @copyright 2020, LMSwithAI <contact@lmswithai.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$string['choosereadme'] = 'Theme Simplest is a child theme of the Classic.';
$string['pluginname'] = 'Simplest';
$string['region-side-pre'] = 'Left';
$string['region-side-post'] = 'Right';
$string['configtitle'] = 'Simplest';
$string['madeby'] = 'Made by';

// Privacy.
$string['privacy:metadata'] = 'The Simplest theme does not store any personal data.';

// Other settings.
$string['othersettings'] = 'Other settings';
$string['rawscsspre'] = 'Raw initial SCSS';
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
$string['rawscss'] = 'Raw SCSS';
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';

// Inspirational quotes settings.
$string['inspirationalquotessettings'] = 'Inspirational quotes settings';
$string['inspirationalquotes'] = 'Inspirational quotes';
$string['inspirationalquotesdef'] = 'Everyone who works on artificial intelligence knows that computers will beat us all.';
$string['inspirationalquotesdesc'] = 'Each quote must be on a new line.<br>Try to get quotes were not too long!';
$string['disableinspirationalquotes'] = 'Disable quotation block';
$string['disableinspirationalquotesdesc'] = 'Checking this box will disable the quotes block';
$string['inspirationalquotesduration'] = 'Duration quiestes';
$string['inspirationalquotesdurationdesc'] = 'Duration visible quotes.';

// General settings.
$string['generalsettings'] = 'General settings';
$string['navbardark'] = 'Use a dark style navbar';
$string['navbardark_desc'] = 'Swaps text and background colours for the navbar at the top of the page between dark and light.';
$string['backgroundimage'] = 'Background image';
$string['backgroundimage_desc'] = 'The image to display as a background of the site. The background image you upload here will override the background image in your theme preset files.';
$string['brandcolor'] = 'Use a dark style navbar';
$string['brandcolor_desc'] = 'Swaps text and background colours for the navbar at the top of the page between dark and light.';

// Preset.
$string['preset'] = 'Theme preset';
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
$string['preset:default'] = 'Default';
$string['preset:easter'] = 'Easter';
$string['preset:spring'] = 'Spring';
$string['preset:mourning'] = 'Mourning';

// Preset temporary settings.
$string['settingspresettemporary'] = 'Preset temporaty settings:';
$string['limitedbydate'] = 'Enable style limited by date';
$string['limitedbydate_desc'] = 'Enables the given style on the specified date. After this time, it reverts to the default style';
$string['startdate'] = 'Start date';
$string['startdate_desc'] = 'Date when style will be enable.';
$string['enddate'] = 'End date';
$string['enddate_desc'] = 'Date when style will be disable.';
$string['errordate'] = 'Wrong date. You have to enter the date according to the format YYYY-MM-DD e.g. 2022-03-17.';
$string['errormonth'] = 'Wrong number of days. This month of the year {$a->year} only has {$a->days} days.';
$string['change_style'] = 'Change theme style';
$string['presettemporary'] = 'Temporary style';
$string['presettemporary_desc'] = 'Select the style that is to be set in the given time period.';
$string['presettemporary'] = 'Temporary style';

// Other settings.
$string['settingsother'] = 'Other settings:';
$string['redir'] = 'Redirect to course';
$string['redir_desc'] = 'Redirect immediately to course if the user is enrolled only one.';
$string['simpleusermenu'] = 'Simplification of user menu';
$string['simpleusermenu_desc'] = 'Hides dashboard and profile link. Adds a link to change the password.';
