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
 * Add page to admin menu.
 *
 * @package    local_codechecker
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) { // needs this condition or there is error on login page
    $ADMIN->add('development', new admin_externalpage('local_codechecker',
            get_string('pluginname', 'local_codechecker'),
            new moodle_url('/local/codechecker/index.php')));
      // New settings page
    $page = new admin_settingpage('codechecker', 'codechecker');
    $page->add(new admin_setting_configtext('local_codechecker/exclude',
          get_string('exclude', 'local_codechecker'),
          get_string('exclude_text', 'local_codechecker'),
		  get_string('exclude_filenames','local_codechecker')));    
    // Add settings page to navigation tree
    $ADMIN->add('localplugins', $page);
}
   
 