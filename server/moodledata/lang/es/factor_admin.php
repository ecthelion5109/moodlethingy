<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'factor_admin', language 'es', version '4.5'.
 *
 * @package     factor_admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Este factor permite NO ser un administrador contar como un factor. Su uso esperado es asegurar a los administradores el requisito de una seguridad mayor, de modo que los usos habituales lo obtienen libremente, mientras que los administradores deben usar otros factores.';
$string['pluginname'] = 'No administrador';
$string['privacy:metadata'] = 'El plugin Non-administrator factor no almacena ningún dato personal';
$string['settings:weight_help'] = 'Se le da peso a los usuarios habituales para este factor, de modo que los administradores deben tener más factores que un usuario normal para acceder.';
$string['summarycondition'] = 'no es un administrador';
