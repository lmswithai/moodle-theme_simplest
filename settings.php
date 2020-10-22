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

if ($ADMIN->fulltree) {

    $settings = new theme_boost_admin_settingspage_tabs('themesettingsimplest', get_string('configtitle', 'theme_simplest'));
    $page = new admin_settingpage('theme_simplest_general', get_string('generalsettings', 'theme_simplest'));

    $name = 'theme_simplest/navbardark';
    $title = get_string('navbardark', 'theme_simplest');
    $description = get_string('navbardark_desc', 'theme_simplest');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Background image setting.
    $name = 'theme_simplest/backgroundimage';
    $title = get_string('backgroundimage', 'theme_simplest');
    $description = get_string('backgroundimage_desc', 'theme_simplest');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $body-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_simplest/brandcolor';
    $title = get_string('brandcolor', 'theme_simplest');
    $description = get_string('brandcolor_desc', 'theme_simplest');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#1e3799');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_simplest/redir';
    $title = get_string('redir', 'theme_simplest');
    $description = get_string('redir_desc', 'theme_simplest');
    $setting = new admin_setting_configcheckbox($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_simplest/simpleusermenu';
    $title = get_string('simpleusermenu', 'theme_simplest');
    $description = get_string('simpleusermenu_desc', 'theme_simplest');
    $setting = new admin_setting_configcheckbox($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Must add the page after definiting all the settings!
    $settings->add($page);

    // Advanced settings.
    $page = new admin_settingpage('theme_simplest_advanced', get_string('advancedsettings', 'theme_boost'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_simplest/scsspre',
        get_string('rawscsspre', 'theme_simplest'), get_string('rawscsspre_desc', 'theme_simplest'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_simplest/scss', get_string('rawscss', 'theme_simplest'),
        get_string('rawscss_desc', 'theme_simplest'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);
}
