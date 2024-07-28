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
 * Strings for component 'course', language 'es_ar', version '4.5'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completion_automatic:todo'] = 'Pendiente:';
$string['completion_setby:auto:todo'] = 'Pendiente: {$a->condition} (establecido por {$a->setby})';
$string['customfield_islocked_help'] = 'Cuando el campo está bloqueado, solamente cuentas con permiso para "Modificar campos bloqueados" (por defecto solamente rol de Mánager) podrán cambiarlo en las configuraciones del curso.';
$string['customfield_visibletoall'] = 'Cualquier rol';
$string['customfield_visibletoteachers'] = 'Docentes';
$string['downloadcoursecontent_help'] = 'Esta configuración determina si el contenido del curso puede ser descargado por cuentas con permiso para descargar contenido del curso (por defecto rol de estudiante o docente).';
$string['noteachinginfomessage'] = 'Hola {$a->userfirstname},
<p>Los cursos con fechas de inicio en la próxima semana han sido identificados como cursos que no tienen inscripciones de docentes o estudiantes.</p>';
$string['privacy:metadata:activityfavouritessummary'] = 'El sistema del curso contiene información acerca de cuales elementos del selector de actividades han sido destacados por la persona usuaria.';
$string['privacy:metadata:completionsummary'] = 'El curso contiene información de finalización acerca de la persona usuaria.';
$string['privacy:metadata:favouritessummary'] = 'El curso contiene información relacionada con el curso que está siendo destacado por la persona usuaria.';
$string['studentsatriskinfomessage'] = 'Hola {$a->userfirstname},
<p>El grupo de estudiantes en el curso {$a->coursename} se han identificado como estudiantes en riesgo.</p>';
$string['target:coursecompetencies_help'] = 'Esta meta describe si un/una estudiante se considera en riesgo de no obtener las competencias asignadas al curso. Esta meta considera que todas las competencias asignadas al curso deben ser adquiridas al final del curso.';
$string['target:coursecompletion_help'] = 'Esta meta describe si el/la estudiante se considera en riesgo de no cumplir las condiciones de finalización del curso.';
$string['target:coursedropout_help'] = 'Esta meta describe si el/la estudiante se considera en riesgo de abandonar.';
$string['target:coursegradetopass_help'] = 'Esta meta describe si el/la estudiante está o no en riesgo de no obtener la calificación mínima para pasar el curso.';
$string['target:noaccesssincecoursestart_help'] = 'Esta meta describe estudiantes con inscripción activa que nunca accedieron a un curso.';
$string['target:noaccesssincecoursestartinfo'] = 'Este grupo de estudiantes tiene inscripción activa en un curso que comenzó, pero nunca accedieron al curso.';
$string['target:norecentaccesses_help'] = 'Esta meta identifica estudiantes que no han accedido a un curso en el cual tienen inscripción activa dentro del intervalo de análisis (por defecto el mes pasado).';
$string['target:norecentaccessesinfo'] = 'Este grupo de estudiantes no ha accedido al curso en el cual está inscripto dentro del intervalo del análisis (por defecto el mes pasado).';
$string['target:noteachingactivityinfo'] = 'Los siguientes cursos próximos a empezar en los días siguientes están en riesgo de no empezar porque no tienen docentes o estudiantes con inscripción activa.';
$string['targetlabelteachingyes'] = 'Cuentas con capacidades de enseñanza que tienen acceso al curso';
