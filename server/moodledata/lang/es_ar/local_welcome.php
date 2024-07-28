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
 * Strings for component 'local_welcome', language 'es_ar', version '4.5'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Plugins de autorización';
$string['configure'] = 'Configurar este plugin';
$string['customprofilefields'] = 'Campos de perfil personalizados';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Nuevo/a usuario/a [[fullname]]</h3>
    Se ha creado una nueva cuenta con los siguientes detalles:</td></tr>
<tr><td>Name:</td><td>[[fullname]]</td></tr>
<tr><td>Username: </td><td>[[username]]</td></tr>
<tr><td>Email: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Nuevo ingreso en  [[sitename]] : [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Te damos la bienvenida [[fullname]]</h3>
   Tu cuenta de Moodle fue creada y está preparada para ser utilizada! Detalles de la cuenta creada en  [[sitelink]] :</td></tr>
<tr><td>Nombre:</td><td>[[fullname]]</td></tr>
<tr><td>Nombre de usuario/a: </td><td>[[username]]</td></tr>
<tr><td>Correo electrónico: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Si perdés tu contraseña podés recuperarla con este enlace:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Hola [[fullname]]. Te damos la bienvenida a [[sitename]].';
$string['defaultprofilefields'] = 'Campos de perfil por defecto';
$string['fieldname'] = 'Nombre del campo';
