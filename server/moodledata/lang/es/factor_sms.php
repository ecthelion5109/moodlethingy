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
 * Strings for component 'factor_sms', language 'es', version '4.5'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gestionar número de teléfono móvil';
$string['action:revoke'] = 'Eliminar número de teléfono móvil';
$string['addnumber'] = 'Número de móvil';
$string['clientnotfound'] = 'No se ha encontrado el cliente de AWS Service. El cliente debe ser un nombre de clase correcto. P.ej. \\Aws\\S3\\S3Client';
$string['editphonenumber'] = 'Editar número de teléfono';
$string['editphonenumberinfo'] = 'Si no obtuvo el código o introdujo el número equivocado, por favor, edite el número y vuelva a intentarlo';
$string['error:emptyverification'] = 'Código vacío. Inténtelo de nuevo.';
$string['error:wrongphonenumber'] = 'El número de teléfono que ha dado no está en un formato válido.';
$string['error:wrongverification'] = 'Código incorrecto. Inténtelo de nuevo.';
$string['errorawsconection'] = 'Error conectando al servidor AWS: {$a}';
$string['errorsmssent'] = 'Error al enviar un mensaje SMS con su código de verificación.';
$string['event:smssent'] = 'Mensaje SMS enviado';
$string['event:smssentdescription'] = 'Al usuario con id {$a->userid} se le envió un código de veriicación mediante SMS <br> Información: {$a->debuginfo}';
$string['info'] = 'Enviar un código de verificación al número de teléfono que usted elija.';
$string['logindesc'] = 'Acabamos de enviar un SMS con un código de 6 dígitos a su teléfono móvil: {$a}';
$string['loginoption'] = 'Obtener un código enviado a su teléfono móvil';
$string['loginskip'] = 'No recibí ningún código';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Introduzca el código de verificación enviado a su móvil';
$string['managefactor'] = 'Gestionar SMS';
$string['managefactorbutton'] = 'Gestionar';
$string['manageinfo'] = 'Usted está usando "{$a}" para autenticarse.';
$string['phonehelp'] = 'Introduzca su número de móvil (incluyendo código de país) para recibir un código de verificación.';
$string['pluginname'] = 'SMS Mobile phone';
$string['privacy:metadata'] = 'El plugin SMS Mobile phone no almacena ningún dato personal';
$string['revokefactorconfirmation'] = '¿Eliminar SMS "{$a}"?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'Clave';
$string['settings:aws:key_help'] = 'Credencial de clave Amazon API';
$string['settings:aws:region'] = 'Región';
$string['settings:aws:region_help'] = 'Región de Amazon API gateway';
$string['settings:aws:secret'] = 'Secreto';
$string['settings:aws:secret_help'] = 'Credencial secreta de Amazon API';
$string['settings:aws:usecredchain'] = 'Usar la cadena de proveedor de credencial por defecto para encontrar credenciales AWS';
$string['settings:countrycode'] = 'Número de código de país';
$string['settings:countrycode_help'] = 'El código de llamada sin el + inicial por defecto si los usuarios no introducen un número internacional con un prefijo +.

Vea este enlace para una lista de códigos de llamadas: {$a}';
$string['settings:duration'] = 'Duración de validez';
$string['settings:duration_help'] = 'El periodo de tiempo durante el que el código es válido.';
$string['settings:gateway'] = 'SMS gateway';
$string['settings:gateway_help'] = 'El proveedor de SMS a través del cual desea enviar mensajes';
$string['setupfactor'] = 'Configuración de SMS';
$string['setupfactorbutton'] = 'Configurar SMS';
$string['setupsubmitcode'] = 'Guardar';
$string['setupsubmitphone'] = 'Enviar código';
$string['smsstring'] = '{$a->code} es su {$a->fullname} código de seguridad de un solo uso.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Usar un código de seguridad de un solo uso.';
