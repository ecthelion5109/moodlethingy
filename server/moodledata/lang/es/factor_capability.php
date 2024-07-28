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
 * Strings for component 'factor_capability', language 'es', version '4.5'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'PROHÍBDE a un rol pasar el factor de usuario MFA.';
$string['pluginname'] = 'Permiso de usuario';
$string['privacy:metadata'] = 'El plugin User capability factor no almacena ningún dato personal';
$string['settings:adminpasses'] = 'Los administradores del sitio pueden pasar este factor';
$string['settings:adminpasses_help'] = 'Por defecto los administradores pasan todas las casillas de verificación de permisos, incluyendo esta que usa "factor/capability:cannotpassfactor", que quiere decir que fallarán en este factor.
  Si está activado, entonces todos los administradores de sitio pasarán este factor si no tienen este permiso desde otro rol.
  Si no está activado los administradores del sitio fallarán en este factor.';
$string['summarycondition'] = 'NO tiene el permiso factor/capability:cannotpassfactor en ningún rol, incluyendo el de administrador de sitio.';
