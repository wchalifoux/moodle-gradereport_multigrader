<?php
// This file is part of the Multi Course Grader report for Moodle by Barry Oosthuizen http://elearningstudio.co.uk
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
 * Defines site config settings for the multi grader report
 *
 * @package   gradereport_multigrader
 * @copyright 2012 onwards Barry Oosthuizen http://elearningstudio.co.uk
 * @author    Barry Oosthuizen
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    /// Add settings for this module to the $settings object (it's already defined)
    $settings->add(new admin_setting_configtext('grade_multigrader_studentsperpage', get_string('settings:studentsperpage', 'gradereport_multigrader'),
                                            get_string('settings:studentsperpage_help', 'gradereport_multigrader'), 1000));

    $settings->add(new admin_setting_configcheckbox('grade_multigrader_showuserimage', get_string('settings:showuserimage', 'gradereport_multigrader'),
                                                get_string('settings:showuserimage_help', 'gradereport_multigrader'), 0));

    // Export format settings
    $settings->add(new admin_setting_heading('grade_multigrader_exportformats',
            get_string('exportformats', 'gradereport_multigrader'),
            get_string('exportformats_desc', 'gradereport_multigrader')));

    $settings->add(new admin_setting_configcheckbox('grade_multigrader_enablexls',
            get_string('enableexport', 'gradereport_multigrader', 'XLSX'),
            get_string('enableexport_desc', 'gradereport_multigrader', get_string('pluginname', 'gradeexport_xls')), 0));

    $settings->add(new admin_setting_configcheckbox('grade_multigrader_enableods',
            get_string('enableexport', 'gradereport_multigrader', 'ODS'),
            get_string('enableexport_desc', 'gradereport_multigrader', get_string('pluginname', 'gradeexport_ods')), 0));

    $settings->add(new admin_setting_configcheckbox('grade_multigrader_enablexml',
            get_string('enableexport', 'gradereport_multigrader', 'XML'),
            get_string('enableexport_desc', 'gradereport_multigrader', get_string('pluginname', 'gradeexport_xml')), 0));

    $settings->add(new admin_setting_configcheckbox('grade_multigrader_enabletxt',
            get_string('enableexport', 'gradereport_multigrader', 'TXT'),
            get_string('enableexport_desc', 'gradereport_multigrader', get_string('pluginname', 'gradeexport_txt')), 0));
}
