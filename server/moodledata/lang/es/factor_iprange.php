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
 * Strings for component 'factor_iprange', language 'es', version '4.5'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = '¡Nadie aprobará este factor actualmente! Usted puede añadir su propia dirección de IP (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'Su IP (<i>{$a->ip}</i>) está en la lista y usted pasará este factor.';
$string['allowedipshasntmyip'] = 'Si IP (<i>{$a->ip}</i>) no está en la lista y usted no pasará este factor.';
$string['pluginname'] = 'Rango de IP';
$string['privacy:metadata'] = 'El plugin de factor de rango de IP (IP Range Factor) no almacena ningún dato personal.';
$string['settings:safeips'] = 'Rangos de IP seguros';
$string['settings:safeips_help'] = 'Introduzca una lista de direcciones IP o subredes que cuenten como un aprobado en factor. Si está vacío, nadie aprobará este factor. {$a->info} {$a->syntax}';
$string['summarycondition'] = 'está en una red segura';
