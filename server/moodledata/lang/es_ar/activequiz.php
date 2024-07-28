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
 * Strings for component 'activequiz', language 'es_ar', version '4.5'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Agregar una instancia de cuestionario activo';
$string['activequiz:attempt'] = 'Intentar un cuestionario activo';
$string['activequiz:control'] = 'Controlar un cuestionario activo (Generalmente solo para docentes)';
$string['activequiz:editquestions'] = 'Editar preguntas para un cuestionario activo.';
$string['activequiz:seeresponses'] = 'Ver respuestas de más estudiantes para calificar';
$string['activequiz:viewownattempts'] = 'Permite a estudiantes ver sus propios intentos en una prueba';
$string['activequizintro'] = 'Introducción';
$string['activequizsettings'] = 'Configuración general de cuestionarios activos';
$string['activitygrades'] = 'Calificaciones de la actividad:';
$string['addquestion'] = 'Agregar pregunta';
$string['addtoquiz'] = 'Agregar';
$string['anonymousresponses'] = 'Anonimizar respuestas de estudiantes';
$string['anonymousresponses_help'] = 'Anonimizar las respuestas de estudiantes para la vista docente de modo que si se muestra su pantalla, no se mostrarán los nombres de estudiantes o los nombres de los grupos.';
$string['anonymoususer'] = 'Persona anónima';
$string['assessed'] = 'Evaluado';
$string['assessed_help'] = 'Marque esta casilla para evaluar su cuestionario';
$string['attempt_grade'] = 'Calificación del intento';
$string['attemptno'] = 'Número de intento';
$string['attempts'] = 'Intentos';
$string['attemptstarted'] = 'Hay respuestas sin terminar, hacé clic para continuar respondiendo';
$string['attemptstartedalready'] = 'Integrantes del grupo ya comenzaron a responder este cuestionario';
$string['attemptview'] = 'Ver respuestas';
$string['cantaddquestiontwice'] = 'No se puede agregar la misma pregunta más de una vez';
$string['cantinitattempts'] = 'No es posible iniciar un intento de respuesta';
$string['closesession'] = 'Cerrar sesión';
$string['closingsession'] = 'Cerrando sesión...';
$string['countdatasetlabel'] = 'Número de respuesta';
$string['defaultquestiontime'] = 'Tiempo de respuesta predeterminado';
$string['defaultquestiontime_help'] = 'El tiempo predeterminado para mostrar cada pregunta.<br />
Esto puede ser anulado por preguntas individuales.';
$string['edit'] = 'Editar cuestionario';
$string['editpage_opensession_error'] = 'No puede editar una pregunta o diseño de cuestionario mientras una sesión está abierta.';
$string['enabledquestiontypes'] = 'Habilitar tipos de preguntas';
$string['enabledquestiontypes_info'] = 'Tipos de preguntas que están habilitados para su uso en instancias de la actividad de cuestionario activo.';
$string['endquestion'] = 'Terminar pregunta';
$string['errorregrade'] = 'Lo sentimos, hubo un error al tratar de volver a calificar todas las pruebas.';
$string['eventattemptstarted'] = 'Intento iniciado';
$string['eventattemptviewed'] = 'Intento visto';
$string['eventquestionanswered'] = 'Pregunta respondida por intento';
$string['eventquestionmanuallygraded'] = 'Pregunta calificada manualmente';
$string['feedbackintro'] = 'Comentarios para su pregunta. Espere a que el instructor comience la siguiente pregunta.';
$string['firstsession'] = 'Primera sesión';
$string['fullanonymize'] = 'Anonimizar completamente las respuestas de estudiantes';
$string['fullanonymize_help'] = 'Anonimizar completamente las respuestas de estudiantes. Tenga en cuenta que si selecciona esta opción, las respuestas de esta sesión no se calificarán ni se aplicarán a estudiantes.';
$string['gatheringresults'] = 'Recopilando resultados...';
$string['gotosession'] = 'Ir a la sesión en curso';
$string['grademethod'] = 'Método de calificación de la sesión';
$string['grademethod_help'] = 'Este es el método que se utiliza al calificar. Este método es para determinar la calificación con múltiples sesiones en el mismo cuestionario activo';
$string['gradesettings'] = 'Configuración de calificación';
$string['groupattendance'] = 'Permitir la asistencia de grupos';
$string['groupattendance_help'] = 'Si esta casilla está habilitada, la persona que realiza el cuestionario puede seleccionar qué estudiantes de su grupo están presentes.';
$string['grouping'] = 'Agrupamiento';
$string['grouping_help'] = 'Seleccione el agrupamiento que le gustaría usar para agrupar estudiantes';
$string['groupmembership'] = 'Membresía de grupo';
$string['groupworksettings'] = 'Configuración de grupo';
$string['hide_correct_answer'] = 'Ocultar respuesta correcta';
$string['hidenotresponded'] = 'Ocultar no respondido';
$string['hidestudentresponses'] = 'Ocultar respuestas';
$string['highestsessiongrade'] = 'Calificación más alta de la sesión';
$string['indvquestiontime'] = 'Tiempo de pregunta';
$string['indvquestiontime_help'] = 'Tiempo de pregunta en segundos';
$string['instructorquizinst'] = '<p>Por favor espere en esta página mientras el grupo de estudiantes se conecta. Una vez que se pulsa el botón de "iniciar el cuestionario", el cuestionario comenzará con la primera pregunta.</p>
    <p>
<p>Controles:</p>
    <ul>
        <li>
            Re-plantear pregunta
            <ul>
                <li>
                    Permite que se vuelva a plantear la actual o la anterior pregunta (disponible para docentes durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Próxima pregunta
            <ul>
                <li>
                    Continúa en la próxima pregunta (disponible durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            End question
            <ul>
                <li>
                  Finalizar la actual pregunta. Permite terminar el tiempo de una pregunta en forma temprana (disponible para docentes mientras la pregunta está corriendo).  <i>Si la pregunta no tiene tiempo límite, será necesario pulsar <b>finalizar pregunta.</b></i>
                </li>
            </ul>
        </li>
        <li>
            Go to question
            <ul>
                <li>
                    Abre una caja de diálogo para llevar a todas las personas a una pregunta específica del cuestionario (disponible durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Cerrar sesión
            <ul>
                <li>
                   Cierra la sesión actual, así como todos los intentos de estudiantes. Esto calificará automáticamente todos los intentos (disponible en cualquier momento).
                </li>
            </ul>
        </li>
        <li>
            Volver a cargar resultados
            <ul>
                <li>
                    Vuelve a cargar las respuestas en la caja de información. Permite ver cuántos estudiantes o grupos respondieron y cuántos no lo han realizado todavía (disponible para docentes durante la revisión de una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Ocultar/mostrar no respondidas
            <ul>
                <li>
                    Oculta o muestra la caja de información que muestra cuántas personas o grupos respondieron y cuántas personas o grupo todavía no lo hicieron (disponible cuando la pregunta se está respondiendo).
                </li>
            </ul>
        </li>
        <li>
            Mostrar respuesta correcta
            <ul>
                <li>
                    Brinda una visión de la pregunta con la respuesta correcta elegida (disponible durante la revisión de una pregunta). Esto no mostrará la respuesta correcta en caso de preguntas de calificación manual como ensayos o preguntas de dibujo.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = 'Hay una sesión abierta. Por favor, haga clic en el siguiente botón para ir a la sesión.';
$string['invalid_indvquestiontime'] = 'El tiempo de pregunta debe ser un número entero como 0 o superior.';
$string['invalid_numberoftries'] = 'El número de intentos debe ser un número entero como 1 o superior.';
$string['invalid_points'] = 'El puntaje es un dato requerido y debe ser un número mayor a 0.';
$string['invalidattemptaccess'] = 'No tenés permiso para acceder a este intento.';
$string['invalidgroupid'] = 'Se requiere un grupo válido para estudiantes.';
$string['invalidquestionattempt'] = 'Pregunta no válida ($a->questionname) está siendo agregada al intento de cuestionario.';
$string['isanonymous'] = 'Toda las respuestas de este cuestionario activo son anónimas';
$string['joinquiz'] = 'Unirse al cuestionario';
$string['joinquizinstructions'] = 'Pulsar debajo para unirse al cuestionario';
$string['jumptoquesetioninstructions'] = 'Elegí una pregunta a la que querés ir:';
$string['jumptoquestion'] = 'Ir a pregunta';
$string['lastsession'] = 'Última sesión';
$string['loading'] = 'Iniciando cuestionario';
$string['manualcomment'] = 'Comentario manual';
$string['manualcomment_help'] = 'El comentario que puede ser agregado por docentes cuando se está calificando un intento';
$string['marks'] = 'Calificaciones';
$string['marks_help'] = 'La calificación numérica para cada pregunta, y el puntaje total del intento';
$string['modulename'] = 'Cuestinario activo';
$string['modulename_help'] = '<p>La actividad Cuestionario Activo (Active Quiz) permite que se creen y administren cuestionarios en tiempo real. Todos los tipos de preguntas de cuestionario regulares se pueden usar en el Cuestionario Activo.</p>
<p>El Cuestionario Activo permite la participación individual o grupal. La asistencia en grupo es posible, por lo que los puntos otorgados durante el cuestionario activo solo se aplicarán a participantes que asistieron a la sesión. Las preguntas se pueden configurar para permitir múltiples intentos. Se puede establecer un límite de tiempo para finalizar automáticamente la pregunta, o el/la docente puede finalizar manualmente la pregunta y pasar a la siguiente. El/la docente también tiene la capacidad de saltar a diferentes preguntas mientras ejecuta la sesión. Los/las docentes pueden monitorear la participación grupal o individual, las respuestas en tiempo real de participantes y la pregunta que se sondea. </p>
<p>Cada intento de examen se marca automáticamente como un examen regular (con la excepción de las preguntas de ensayo y PoodLL) y la calificación se registra en el libro de calificaciones. La calificación de la participación del grupo se puede realizar automáticamente transfiriendo la calificación del único respondedor a los demás miembros del grupo. </p>
<p>El/la docente tiene opciones para mostrar sugerencias, dar comentarios y mostrar las respuestas correctas a los estudiantes al completar el cuestionario.</p>
<p>Los cuestionarios activos pueden usarse como un vehículo para brindar aprendizaje basado en equipos dentro de Moodle.</p>';
$string['modulenameplural'] = 'Cuestionarios Activos';
$string['nextquestion'] = 'Siguiente pregunta';
$string['no_questions'] = 'No hay preguntas agregadas a este cuestionario';
$string['nochangegroups'] = 'No puede cambiar de grupo después de crear sesiones o no hay agrupamientos definidos para este curso.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'No hay comentarios para esta pregunta.';
$string['nosession'] = 'No hay sesión abierta';
$string['notime'] = 'Sin límite de tiempo';
$string['notime_help'] = 'Marque este campo para no tener cronómetro en esta pregunta. <p>Luego, se le pedirá al/la docente que haga clic en el botón Finalizar pregunta para que finalice la pregunta</p>';
$string['notresponded'] = 'Número no respondido de los intentos';
$string['notries'] = 'No le quedan intentos para esta pregunta';
$string['numberoftries'] = 'Cantidad de intentos';
$string['numberoftries_help'] = 'Cantidad de intentos para responder una pregunta. Los/las estudiantes aún estarán sujetos al límite de tiempo de preguntas.';
$string['overallgrade'] = 'Calificación general: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Porcentaje de respuestas totales';
$string['pluginadministration'] = 'Administración del cuestionario activo';
$string['pluginname'] = 'Cuestionario activo';
$string['points'] = 'Puntos de la pregunta';
$string['points_help'] = 'El número de puntos que le gustaría que valiera esta pregunta';
$string['qdeleteerror'] = 'No se pudo borrar la pregunta';
$string['qdeletesucess'] = 'Pregunta borrada exitosamente';
$string['qmoveerror'] = 'No se pudo mover la pregunta';
$string['qmovesuccess'] = 'Pregunta movida exitosamente';
$string['question'] = 'Pregunta';
$string['questiondelete'] = 'Borrar pregunta {$a}';
$string['questionedit'] = 'Editar pregunta';
$string['questionfinished'] = 'Pregunta finalizada, esperando los resultados';
$string['questionlist'] = 'Lista de preguntas';
$string['questionmovedown'] = 'Mover pregunta {$a} abajo';
$string['questionmoveup'] = 'Mover pregunta {$a} arriba';
$string['quiznotrunning'] = 'El cuestionario no se está ejecutando en este momento: espere a que el/la docente lo inicie. Use el botón recargar para recargar esta página y verificar nuevamente';
$string['regradeallgrades'] = 'Recalificar todas las notas';
$string['reload_results'] = 'Recargar los resultados';
$string['repollquestion'] = 'Pregunta de re-encuesta';
$string['response_attempt_controls'] = 'Intento de Editar/Ver';
$string['responses'] = 'Ver las respuestas';
$string['reviewafter'] = 'Una vez cerradas las sesiones';
$string['reviewoptionsettings'] = 'Revisar opciones';
$string['savequestion'] = 'Guardar pregunta';
$string['scale'] = 'Calificación Máxima';
$string['scale_help'] = 'Este valor (integer) escalará los puntos que se reciban en el cuestionario a este valor.';
$string['select_group'] = 'Elija su grupo';
$string['selectsession'] = 'Seleccionar sesión para ver:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Promedio de la sesión';
$string['sessionclosed'] = 'La  sesión está cerrada';
$string['sessionname'] = 'Nombre de la sesión';
$string['sessionname_required'] = 'Se requiere un nombre para la sesión';
$string['sessionnametext'] = '<span style="font-weight: bold">Sesión: </span>';
$string['show_correct_answer'] = 'Mostrar la respuesta correcta';
$string['showhistoryduringquiz'] = 'Mostrar el historial de respuestas';
$string['showhistoryduringquiz_help'] = 'Mostrar el historial de respuestas del grupo o estudiante/a para esta pregunta mientras revisa las respuestas a una pregunta durante un cuestionario.';
$string['shownotresponded'] = 'Mostrar no respondidas';
$string['showstudentresponses'] = 'Mostrar respuestas';
$string['start_session'] = 'Iniciar Sesión';
$string['startedon'] = 'Iniciado';
$string['startquiz'] = 'Iniciar cuestionario';
$string['studentquizinst'] = '<p>Espere a que el/la docente comience el cuestionario. Una vez que comience, verá un temporizador que cuenta regresivamente hasta el inicio de la primera pregunta.</p>';
$string['successregrade'] = 'Cuestionario recalificado exitosamente';
$string['teacherjoinquizinstruct'] = 'Use esto si desea probar un cuestionario usted mismo/a<br />(también deberá iniciar el cuestionario en una ventana separada)';
$string['teacherstartinstruct'] = 'Use esto para iniciar un examen para que sus estudiantes realicen<br />Use el cuadro de texto para definir un nombre para esta sesión (ayuda al revisar los resultados en una fecha posterior).';
$string['theattempt'] = 'El intento';
$string['theattempt_help'] = 'Si el/la estudiante puede revisar el intento en absoluto.';
$string['timecompleted'] = 'Tiempo completado';
$string['timemodified'] = 'Tiempo modificado';
$string['timertext'] = 'Su pregunta terminará y se enviará automáticamente en:';
$string['trycount'] = 'Le quedan {$a->tries} intentos';
$string['unabletocreate_session'] = 'No se puede crear la sesión';
$string['view'] = 'Ver el cuestionario';
$string['viewstats'] = 'Ver estadísticas del cuestionario';
$string['waitforquestion'] = 'Esperando a que se envíe la pregunta:';
$string['waitforquestiontime'] = 'Esperar al turno de preguntas';
$string['waitforquestiontime_help'] = 'El tiempo de espera para que una pregunta comience/lleve a tiempo.';
$string['waitforrevewingend'] = 'El/la docente está revisando la pregunta anterior. Espere a que comience la siguiente pregunta.';
$string['waitstudent'] = 'Esperando la conexión de estudiantes';
$string['workedingroups'] = 'Se trabajará en grupos.';
$string['workedingroups_help'] = 'Marque esta casilla para indicar que los/las estudiantes trabajarán en grupos. Asegúrese de seleccionar un agrupamiento a continuación';
