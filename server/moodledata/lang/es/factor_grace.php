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
 * Strings for component 'factor_grace', language 'es', version '4.5'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Permite acceder sin otro factor durante un periodo de tiempo específico.';
$string['pluginname'] = 'Periodo de gracia';
$string['preferences'] = 'Preferencias de usuario';
$string['privacy:metadata'] = 'El plugin de periodo de gracia Grace Period Factor no almacena ningún dato personal';
$string['redirectsetup'] = 'Usted debe completar la configuración de la autenticación multi-factor antes de poder continuar.';
$string['revokeexpiredfactors'] = 'Revocar factores de gracia expirados';
$string['settings:customwarning'] = 'Contenido del banner de aviso';
$string['settings:customwarning_help'] = 'Añada contenido aquí para reemplazar la notificación de aviso de gracia con HTML personalizado. Añadir {timeremaining} al texto lo reemplazará con el periodo de gracia actual para el usuario, y {setuplink} lo reemplazará con la URL de la página de configuración para el usuario.';
$string['settings:forcesetup'] = 'Configuración de forzar factor';
$string['settings:forcesetup_help'] = 'Fuerza que un usuario vaya a la página de preferencias para configurar MFA cuando el periodo de gracia expira. Si se deshabilita, los usuarios no podrán autenticarse cuando el periodo de gracia haya expirado.';
$string['settings:graceperiod'] = 'Periodo de gracia';
$string['settings:graceperiod_help'] = 'Periodo de tiempo durante el que los usuarios pueden acceder al sitio sin haber configurado y habilitado factores.';
$string['settings:ignorelist'] = 'Factores ignorados';
$string['settings:ignorelist_help'] = 'El periodo de gracia no dará puntos si hay otros factores que puedan usar los usuarios para autenticarse con MFA. Culaquier factor que esté aquí no contará con periodo de gracia cuando se decida dar puntos. Esto puede permitir al periodo de gracia permitir autenticación si otro factor, como el correo electrónico, tiene problemas de configuración o de sistema.';
$string['setupfactors'] = 'En este momento está usted en periodo de gracia, y puede que no tenga configurados suficientes factores de autenticación una vez que termine el periodo de gracia.
  Visite {$a->url} para comprobar su estado de autenticación, y configure más factores de autenticación. Si periodo de gracia expira en {$a->time}.';
$string['summarycondition'] = 'está dentro del periodo de gracia';
