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
 * Strings for component 'enrol_arlo', language 'es_ar', version '4.5'.
 *
 * @package     enrol_arlo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowhiddencourses_help'] = 'Nota: Es necesario deshabilitar los mensajes de bienvenida del curso para ajustarlos adecuadamente.';
$string['coursewelcome'] = 'Bienvenida al curso';
$string['customwelcomemessage'] = 'Mensaje personalizado de bienvenida';
$string['customwelcomemessage_help'] = 'Un mensaje de bienvenida personalizado puede ser agregado como texto plano o en formato Moodle-auto, incluyendo etiquetas HTML y etiquetas multi lenguaje.

Las siguientes variables pueden ser incluidas en el mensaje:

* Nombre del curso {$a->coursename}
* Enlace al curso {$a->courseurl}
* Primer Nombre de la persona usuaria {$a->firstname}
* Nombre completo de la persona usuaria {$a->fullname}
* Nombre de usuario/a {$a->username}
* Enlace de recuperación de contraseña {$a->forgotpasswordurl}';
$string['privacy:metadata:enrol_arlo_emailqueue:type'] = 'Bienvenida a nueva persona usuaria o curso.';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de bienvenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si se activa, se recibirá un mensaje de bienvenida vía correo electrónico cuando una persona se inscribe en el curso.';
$string['welcometocourse'] = 'Te damos la bienvenida a {$a}';
