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
 * Strings for component 'factor_webauthn', language 'es', version '4.5'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gestionar llave de seguridad';
$string['action:revoke'] = 'Eliminar llave de seguridad';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Híbrido';
$string['authenticator:internal'] = 'Interno';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nombre de clave de seguridad';
$string['error'] = 'Fallo en la autenticación';
$string['error:alreadyregistered'] = 'Este código de llave de seguridad ya se ha registrado.';
$string['info'] = 'Use una llave de seguridad física o un scanner de huella dactilar.';
$string['logindesc'] = 'Clique "continuar"para usar su llave de seguridad.';
$string['loginoption'] = 'Usar llave de seguridad';
$string['loginskip'] = 'No tengo mi clave de seguridad';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que es usted mediante llave de seguridad';
$string['managefactor'] = 'Gestionar llave de seguridad';
$string['managefactorbutton'] = 'Gestionar';
$string['manageinfo'] = 'Usted está usando "{$a}" para autenticarse.';
$string['pluginname'] = 'Clave de seguridad';
$string['privacy:metadata'] = 'El plugin Security key factor no almacena ningún dato personal';
$string['register'] = 'Registrar llave de seguridad';
$string['replacefactor'] = 'Sustituir llave de seguridad';
$string['replacefactorconfirmation'] = '¿Sustituir la llave de seguridad "{$a}"?';
$string['revokefactorconfirmation'] = '¿Eliminar la llave de seguridad "{$a}"?';
$string['settings:authenticatortypes'] = 'Tipos de autenticador';
$string['settings:authenticatortypes_help'] = 'Alternar ciertos tipos de autenticador';
$string['settings:userverification'] = 'Verificación de usuario';
$string['settings:userverification_help'] = 'Sirve para verificar que la persona que se está autenticando es de hecho quien dice ser. La verificación de usuario puede tener distintas formas, como una contraseña, PIN, huella dactilar, etc.';
$string['setupfactor'] = 'Configurar llave de seguridad';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Registre una llave de seguridad.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Dé un nombre a su llave.';
$string['setupfactor:intro'] = 'Una llave de seguridad es un dispositivo físico que usted puede usar para autenticarse. Pueden ser tokens de USB, dispositivos Bluetooth o incluso scanners de huella dactilar de su ordenador o de su teléfono móvil.';
$string['setupfactor:securitykeyinfo'] = 'Esto le ayuda a identificar qué llave de seguridad está usando.';
$string['setupfactorbutton'] = 'Configuración';
$string['summarycondition'] = 'usando un autenticador soportado por WebAuthn';
$string['userverification:discouraged'] = 'No se pudo utilizar la verificación de usuario, por ejemplo para minimizar la interacción del usuario';
$string['userverification:preferred'] = 'Se prefiere verificación de usuario, la autenticación no fallará si falta la verificación de usuario';
$string['userverification:required'] = 'Se requiere verificación de usuario (p.ej., mediante pin). La autenticación falla si la clave no tiene verificación de usuario';
