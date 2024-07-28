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
 * Strings for component 'tool_courserating', language 'es', version '4.5'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = 'Deja una valoración';
$string['barwithrating'] = '{$a->rating} estrella representa el {$a->percent} de la valoración';
$string['cannotrate'] = 'No tienes permiso para dejar una valoración de este curso.';
$string['cannotview'] = 'No tienes permiso para ver las valoraciones de este curso.';
$string['cfielddescription'] = 'No edite, el contenido se completará automáticamente cada vez que alguien deje una valoración para este curso.';
$string['colorrating'] = 'Color de la valoración';
$string['colorratingconfig'] = 'Suele ser un poco más oscuro que el color de la estrella para obtener el mejor efecto visual.';
$string['colorstar'] = 'Color de las estrellas';
$string['courserating:delete'] = 'Eliminar valoraciones y reseñas de cursos, ver reseñas marcadas';
$string['courserating:rate'] = 'Deja una valoración para el curso.';
$string['courserating:reports'] = 'Ver informes de valoraciones de cursos';
$string['coursereviews'] = 'Reseñas del cursos';
$string['datasource_courseratings'] = 'Valoraciones del curso';
$string['deleterating'] = 'Borrar permanentemente';
$string['deletereason'] = 'Razón para borrar';
$string['displayempty'] = 'Mostrar estrellas grises si no hay valoraciones';
$string['displayemptyconfig'] = 'Para los cursos donde la valoración está habilitada pero aún no hay valoraciones, se muestran estrellas grises. Si no se seleccionan, no se mostrarán valoraciones de dichos cursos.';
$string['editrating'] = 'Edita tu valoración';
$string['entity_rating'] = 'Valoración del curso por usuario';
$string['entity_summary'] = 'Resumen de valoración del curso';
$string['event:flag_created'] = 'Valoración del curso marcada';
$string['event:flag_deleted'] = 'Marca de la valoración del curso revocada';
$string['event:rating_created'] = 'Valoración del curso creada';
$string['event:rating_deleted'] = 'Valoración del curso borrada';
$string['event:rating_updated'] = 'Valoración del curso actualizada';
$string['flagrating'] = 'Marca';
$string['parentcss'] = 'Selector CSS para elemento padre';
$string['parentcssconfig'] = 'La valoración del curso se mostrará en la página del curso como el último hijo del elemento DOM que coincide con este selector. Es posible que deba anularlo si el sitio utiliza un tema personalizado y desea especificar un tema principal personalizado. Si se deja vacío, se utilizará el valor predeterminado. Para Moodle 4.0 el valor predeterminado es "#page-header", para Moodle 3.11 el valor predeterminado es "#page-header .card-body, #page-header #course-header, #page-header".';
$string['percourseoverride'] = 'Anulaciones por curso';
$string['percourseoverrideconfig'] = 'Si está habilitado, se creará un campo de curso personalizado que permitirá establecer cuándo se puede valorar cada curso individualmente. El valor de la configuración "Cuándo se pueden valorar los cursos" se tratará como el valor predeterminado.';
$string['pluginname'] = 'Valoraciones del curso';
$string['privacy:metadata:tool_courserating:reason'] = 'Razón';
$string['privacy:metadata:tool_courserating:reasoncode'] = 'Código de razón';
$string['privacy:metadata:tool_courserating:timecreated'] = 'Fecha de creación';
$string['privacy:metadata:tool_courserating:timemodified'] = 'Fecha de modificación';
$string['privacy:metadata:tool_courserating_flag'] = 'Valoraciones marcadas';
$string['privacy:metadata:tool_courserating_flag:id'] = 'Id';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = 'Id de valoración';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'Id de usuario';
$string['privacy:metadata:tool_courserating_rating'] = 'Valoraciones del curso';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'Id de curso';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'Tiene reseña';
$string['privacy:metadata:tool_courserating_rating:id'] = 'Id';
$string['privacy:metadata:tool_courserating_rating:rating'] = 'Valoración';
$string['privacy:metadata:tool_courserating_rating:review'] = 'Reseña';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = 'Fecha de creación';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = 'Fecha de modificación';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'Usuario';
$string['ratebyanybody'] = 'Los estudiantes pueden valorar el curso en cualquier momento.';
$string['ratebycompleted'] = 'Los estudiantes pueden valorar solo después de completar el curso.';
$string['ratebydefault'] = 'El valor predeterminado es: "{$a}"';
$string['ratebynoone'] = 'Las valoraciones del curso están deshabilitadas';
$string['ratedcategory'] = 'Categoría donde se permiten valoraciones de cursos';
$string['rating'] = 'Valoración';
$string['rating_actions'] = 'Acciones';
$string['rating_hasreview'] = 'Tiene reseñas';
$string['rating_nofflags'] = 'Número de marcas';
$string['rating_rating'] = 'Valoración del curso';
$string['rating_review'] = 'Reseña';
$string['rating_timecreated'] = 'Fecha de creación';
$string['rating_timemodified'] = 'Fecha de modificación';
$string['ratingasstars'] = 'Valoración del curso como estrellas';
$string['ratingdeleted'] = 'Valoración borrada';
$string['ratinglabel'] = 'Valoración del curso';
$string['ratingmode'] = '¿Cuándo se pueden valorar los cursos?';
$string['ratingmodeconfig'] = 'Además, se comprueba la capacidad de valorar cursos.';
$string['reindextask'] = 'Volver a indexar las valoraciones de los cursos';
$string['review'] = 'Reseña (opcional)';
$string['revokeratingflag'] = 'Revocar';
$string['settingsdescription'] = 'Cambiar algunas de las configuraciones puede requerir volver a indexar todos los cursos y valoraciones de los cursos. Esto sucederá automáticamente en la próxima ejecución de cron.';
$string['showallratings'] = 'Mostrar todo';
$string['showmorereviews'] = 'Mostrar más';
$string['summary_avgrating'] = 'Valoración del curso';
$string['summary_cnt01'] = 'Proporción de valoraciones de 1 estrella';
$string['summary_cnt02'] = 'Proporción de valoraciones de 2 estrella';
$string['summary_cnt03'] = 'Proporción de valoraciones de 3 estrella';
$string['summary_cnt04'] = 'Proporción de valoraciones de 4 estrella';
$string['summary_cnt05'] = 'Proporción de valoraciones de 5 estrella';
$string['summary_cntall'] = 'Número de valoraciones';
$string['summary_cntreviews'] = 'Número de reseñas';
$string['summary_ratingmode'] = 'Modo de valoración del curso';
$string['summary_sumrating'] = 'Total de todas las valoraciones';
$string['usehtml'] = 'Utilizar el editor de texto enriquecido para las reseñas';
$string['usehtmlconfig'] = 'Permita que los estudiantes utilicen el editor de texto enriquecido para las reseñas, incluyan enlaces y adjunten archivos.';
$string['usersflagged'] = '{$a} usuarios han marcado esta reseña como inapropiada/ofensiva.';
$string['viewallreviews'] = 'Ver todas las reseñas';
$string['youflagged'] = 'Has marcado esta reseña como inapropiada/ofensiva.';
