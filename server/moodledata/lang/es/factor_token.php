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
 * Strings for component 'factor_token', language 'es', version '4.5'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'Token MFA creado.';
$string['form:trust'] = 'Confiar en este dispositivo para {$a}.';
$string['pluginname'] = 'Confiar en este dispositivo';
$string['privacy:metadata'] = 'El plugin Trust this device no almacena ningún dato personal.';
$string['settings:expireovernight'] = 'La confianza expira por la noche';
$string['settings:expireovernight_help'] = 'Esto fuerza a los tokens a expirar durante la noche, evitando a los usuarios interrupciones diurnas. Se les solicitará autenticarse con MFA al principio del día siguiente tras la expiración.';
$string['settings:expiry'] = 'Duración de la confianza';
$string['settings:expiry_help'] = 'El periodo de confianza en un dispositivo antes de requerir una nueva autenticación MFA.';
$string['summarycondition'] = 'el usuario ha confiado anteriormente en este dispositivo';
$string['tokenstoredindevice'] = 'El usuario con id {$a->userid} tiene un token MFA almacenado en su dispositivo. <br> Información: {$a->string}.';
