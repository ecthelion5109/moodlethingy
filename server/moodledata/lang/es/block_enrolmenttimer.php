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
 * Strings for component 'block_enrolmenttimer', language 'es', version '4.5'.
 *
 * @package     block_enrolmenttimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activecountdown'] = 'Conteo decremente activo';
$string['activecountdown_help'] = 'Cuenta activamente, usando JavaScript, el tiempo restante que el estudiante tiene para acceder al curso.';
$string['completionpercentage'] = 'Porcentaje para notificación';
$string['completionpercentage_help'] = 'Este es el porcentaje del \'Total del Curso\' que el estudiante debe de obtener para que se le mande un Email de Finalización.';
$string['completionsmessage'] = 'Email de Finalización del Curso';
$string['completionsmessage_help'] = 'Email que se enviará, felicitando al estudiante por finalizar el curso. Aquí puede Usted usar las personalizaciones siguientes; [[user_name]] [[course_name]]';
$string['completionsmessagechk'] = 'Habilitar Email de Finalización';
$string['completionsmessagechk_help'] = 'Habilita/deshabilita el Email de finalización';
$string['daystoalertenrolmentend'] = 'Días para alertar';
$string['daystoalertenrolmentend_help'] = 'Los días antes de que termine la inscripción, cuando se enviará el Email de alerta';
$string['displayNothingNoDateSet'] = 'Ocultar bloque (Sin Fecha de Fin configurada)';
$string['displayNothingNoDateSet_help'] = 'Le oculta el bloque a los usuarios que no tengan fecha de fin configurada; si se deshabilita, se mostrará un mensaje a esos estudiantes.';
$string['displayTextCounter'] = 'Mostrar contador de texto';
$string['displayTextCounter_help'] = 'Muestra el tiempo restante en un texto que se pone debajo del contador principal';
$string['displayUnitLabels'] = 'Mostrar Etiquetas de Unidades';
$string['displayUnitLabels_help'] = 'Muestra cada unidad debajo del contador principal';
$string['emailsubject'] = 'Asunto del Email';
$string['emailsubject_completion_default'] = 'Curso Completado';
$string['emailsubject_expiring_default'] = 'Inscripción Caducando';
$string['emailsubject_help'] = 'Asunto del Email que será enviado al usuario';
$string['enrolmenttimer'] = 'Vigencia de inscripción';
$string['enrolmenttimer:addinstance'] = 'Añadir un nuevo contador de tiempo restante de inscripción';
$string['expirytext'] = 'hasta que tu matrícula expire';
$string['forceDefaults'] = 'Forzar valores por defecto';
$string['forceDefaults_help'] = 'Deshabilita la habilidad de que los profesores cambien las configuraciones para cada instancia del bloque';
$string['forceTwoDigits'] = 'Forzar 2 dígitos';
$string['forceTwoDigits_help'] = 'Forza el contador principal de tiempo restante a que siempre muestre al menos 2 dígitos (por ejemplo, le quedan 01 horas)';
$string['instance_title'] = 'Configurar el título de esta instancia de bloque';
$string['key_days'] = 'días';
$string['key_hours'] = 'horas';
$string['key_minutes'] = 'minutos';
$string['key_months'] = 'meses';
$string['key_seconds'] = 'segundos';
$string['key_weeks'] = 'semanas';
$string['key_years'] = 'años';
$string['noDateSet'] = 'Tu suscripción no expira';
$string['pluginname'] = 'Contador de suscripción';
$string['privacy:metadata'] = 'El bloque del Contador del Tiempo Restante de Inscripción solamente procesa datos del usuario.';
$string['settings_general'] = 'Ajustes generales';
$string['settings_notifications_alert'] = 'Configuraciones de Notificaciones de Email de Alerta';
$string['settings_notifications_completion'] = 'Configuraciones de Notificaciones de Email de Finalización';
$string['settings_notifications_defaults'] = 'Configurar opciones por defecto para la instancia';
$string['timeleftmessage'] = 'Mensaje de Advertencia de Tiempo Restante';
$string['timeleftmessage_help'] = 'Email que será enviado al estudiante, informándole de cuanto tiempo le resta del curso; por ejemplo, le quedan 10 días. Aquí puede Usted usar las siguientes personalizaciones; [[user_name]] [[course_name]] [[days_to_alert]]';
$string['timeleftmessagechk'] = 'Habilitar Email para Advertencia de Tiempo Restante';
$string['timeleftmessagechk_help'] = 'Habilita/deshabilita Email de alerta';
$string['viewoptions'] = 'Incrementos mostrados';
$string['viewoptions_desc'] = 'Seleccionar los incrementos a mostrar en el bloque';
