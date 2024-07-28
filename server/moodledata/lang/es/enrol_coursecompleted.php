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
 * Strings for component 'enrol_coursecompleted', language 'es', version '4.5'.
 *
 * @package     enrol_coursecompleted
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftercourse'] = 'Después de completar el curso: {$a}';
$string['cachedef_compcourses'] = 'Caché de matriculación al completar curso';
$string['compcourse'] = 'Curso completado';
$string['compcourse_help'] = 'Qué curso tiene que ser completado.';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro de querer eliminar estas matriculaciones de usuario?';
$string['confirmbulkediteenrolment'] = '¿Está seguro de querer cambiar estas matriculaciones de usuario?';
$string['coursecompleted:config'] = 'Configurar instancias de matriculación al completar curso';
$string['coursecompleted:enrolpast'] = 'Matricular usuarios que completaron cursos en el pasado';
$string['coursecompleted:manage'] = 'Gestionar usuarios matriculados';
$string['coursecompleted:unenrol'] = 'Desmatricular (dar de baja) usuarios del curso';
$string['coursecompleted:unenrolself'] = 'Desmatricular (darse de baja a sí mismo) del curso';
$string['customwelcome'] = 'Mensaje personalizado de bienvenida';
$string['customwelcome_help'] = 'Un mensaje personalizado de bienvenida puede ser añadido como texto simple o formato auto-Moodle, incluyendo marcas (tags) HTML y marcas multi-idioma.

Los siguientes elementos remplazables pueden ser incluidos en el mensaje:

* Nombre del curso {$a->coursename}
* Nombre del curso completado {$a->completed}
* Enlace hacia la página del perfil del usuario {$a->profileurl}
* Email del usuario {$a->email}
* Nombre completo del usuario {$a->fullname}';
$string['defaultrole'] = 'Asignación de rol predeterminado';
$string['defaultrole_desc'] = 'Seleccionar el rol a asignar a usuarios cuando sean matriculados.';
$string['deleteselectedusers'] = 'Eliminar matriculaciones seleccionadas en finalización del curso';
$string['editselectedusers'] = 'Editar matriculaciones seleccionadas en finalización del curso';
$string['editusers'] = 'Cambiar matriculaciones de usuarios';
$string['enrolenddate'] = 'Fecha de matriculación';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios serán matriculados automáticamente solo hasta esta fecha.';
$string['enrolperiod'] = 'Duración de la matriculación';
$string['enrolperiod_desc'] = 'Duración de tiempo que la matriculación es válida. Si se configura a cero, la duración de la matriculación será ilimitada de forma predeterminada.';
$string['enrolperiod_help'] = 'Duración de tiempo que la matriculación es válida, comenzando con el momento en que el usuario es matriculado. Si se deshabilita, la duración de la matriculación será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente serán matriculados automáticamente a partir de esta fecha en adelante.';
$string['group'] = 'Conservar el grupo';
$string['group_help'] = 'Tratar de añadir usuarios a un grupo con el mismo nombre';
$string['keepgroup'] = 'Configuraciones predeterminadas de conservar grupo';
$string['keepgroup_help'] = 'De forma predeterminada, intentar añadir usuarios a un grupo con el mismo nombre';
$string['pluginname'] = 'Matriculación por curso completado';
$string['pluginname_desc'] = 'El plugin de matriculación por curso completado le otorga acceso a otros cursos una vez que haya completado un curso.';
$string['privacy:metadata'] = 'El plugin de matriculación por curso completado no afecta ni almacena ningún dato del usuario';
$string['processexpirationstask'] = 'Tarea de expiración de matriculación por curso completado';
$string['status'] = 'Habilitada';
$string['status_desc'] = 'Permitir matriculación por defecto por curso completado';
$string['status_help'] = 'Esta configuración determina si es habilitada la matriculación por curso completado.';
$string['status_link'] = 'enrol/coursecompleted';
$string['svglearnpath'] = 'Mostrar ruta de aprendizaje';
$string['svglearnpath_help'] = 'Mostrar (posible) ruta de aprendizaje usando íconos SVG.';
$string['unenrolusers'] = 'Desmatricular (dar de baja) usuarios';
$string['uponcompleting'] = 'Al completar el curso {$a}';
$string['usersenrolled'] = '{$a} Usuarios matriculados';
$string['welcome'] = 'Enviar mensaje de Bienvenida al curso';
$string['welcome_help'] = 'Cuando un usuario es matriculado en un curso al completar otro curso, puede enviarse un mensaje de bienvenida por email.';
$string['welcometocourse'] = 'Bienvenido/a a {$a->coursename}!

¡Felicitaciones!

Después de completar exitosamente {$a->completed}, ahora está automáticamente matriculado en el siguiente curso: {$a->coursename}.';
$string['willbeenrolled'] = 'Usted será matriculado en este curso una vez que complete el curso {$a}';
