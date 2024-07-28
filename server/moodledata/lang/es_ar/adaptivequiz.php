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
 * Strings for component 'adaptivequiz', language 'es_ar', version '4.5'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Capacidad estimada';
$string['abilityestimated_help'] = 'La capacidad estimada de quien se examina se alinea con la dificultad de la pregunta en la que la persona tiene un 50% de probabilidad de responder la pregunta correctamente. Para identificar el nivel de desempeño, haga coincidir el valor de la capacidad con el rango del nivel de las preguntas (vea el rango después del símbolo \'/\').';
$string['activityreports'] = 'Informe de intentos';
$string['adaptivequiz:addinstance'] = 'Añadir un nuevo cuestionario adaptable';
$string['adaptivequiz:attempt'] = 'Intentar cuestionario adaptable';
$string['adaptivequiz:reviewattempts'] = 'Revisar envíos de cuestionarios adaptables';
$string['adaptivequiz:viewreport'] = 'Ver informes de cuestionarios adaptables';
$string['adaptivequizname'] = 'Nombre';
$string['adaptivequizname_help'] = 'Ingresar el nombre de la instancia de Cuestionario Adaptable';
$string['all_attempts_deleted'] = 'Todos los intentos de Cuestionario adaptable fueron eliminados';
$string['all_grades_removed'] = 'Se eliminaron todas las calificaciones del Cuestionario Adaptable';
$string['answer'] = 'Respuesta';
$string['answers_display_name'] = 'Respuestas';
$string['attempt_questiondetails'] = 'Detalles de la pregunta';
$string['attempt_state'] = 'Estado del intento';
$string['attempt_summary'] = 'Resumen del intento';
$string['attempt_user'] = 'Usuario';
$string['attemptclosed'] = 'El intento ha sido cerrado manualmente.';
$string['attemptclosedstatus'] = 'Manualmente cerrado por {$a->current_user_name} (user-id: {$a->current_user_id}) on {$a->now}.';
$string['attemptdeleted'] = 'Intento borrado por  {$a->name} submitted on {$a->timecompleted}';
$string['attemptfeedback'] = 'Retroalimentación del intento';
$string['attemptfeedback_help'] = 'La retroalimentación del intento se muestra al usuario una vez que el intento está finalizado';
$string['attemptfeedbackdefaulttext'] = 'Has terminado el intento, ¡gracias por responder el cuestionario!';
$string['attemptfinishedtimestamp'] = 'Hora de finalización del intento';
$string['attemptfirst'] = 'Primer intento';
$string['attemptlast'] = 'Último intento';
$string['attemptnofirstquestion'] = 'Lo siento, pero no se puede definir la primera pregunta para iniciar el intento, posiblemente el cuestionario esté mal configurado.';
$string['attemptquestion_ability'] = 'Medida de habilidad';
$string['attemptquestion_abilitylogits'] = 'Medida de habilidad (logits)';
$string['attemptquestion_difficulty'] = 'Dificultad de la pregunta (logits)';
$string['attemptquestion_diffsum'] = 'Suma de dificultad';
$string['attemptquestion_level'] = 'Nivel de la pregunta';
$string['attemptquestion_rightwrong'] = 'Correcto/Incorrecto';
$string['attemptquestion_stderr'] = 'Error estándar  (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Progreso de las preguntas: {$a}';
$string['attemptquestionsprogress_help'] = 'El número máximo de preguntas que se muestra aquí no es necesariamente el número de preguntas que debe responder durante el cuestionario. Es el número MÁXIMO POSIBLE de preguntas que puede responder, el cuestionario puede terminar antes si la medida de habilidad está suficientemente definida.';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptsallowed_help'] = 'El número de veces que un estudiante puede intentar esta actividad.';
$string['attemptstarttime'] = 'Hora de inicio del intento';
$string['attemptstate'] = 'Estado del intento';
$string['attemptstopcriteria'] = 'Razón para detener el intento';
$string['attemptsusernoprevious'] = 'Aún no has intentado este cuestionario.';
$string['attemptsuserprevious'] = 'Tus intentos previos';
$string['attempttotaltime'] = 'Tiempo total  (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Volver a todas las preguntas';
$string['bestscore'] = 'Mejor puntuación';
$string['bestscorestderror'] = 'Error estándar';
$string['browsersecurity'] = 'Seguridad del navegador';
$string['browsersecurity_help'] = 'Si se selecciona "Ventana emergente de pantalla completa con algo de seguridad de JavaScript", el cuestionario solo comenzará si el estudiante tiene un navegador web habilitado para JavaScript, el cuestionario aparece en una ventana emergente de pantalla completa que cubre todas las demás ventanas y no tiene controles de navegación y los estudiantes no pueden, en la medida de lo posible, usar funciones como copiar y pegar';
$string['calcerrorwithinlimits'] = 'El error estándar calculado de {$a->calerror} está dentro de los límites impuestos por la actividad {$a->definederror}';
$string['closeattempt'] = 'Cerrar intento';
$string['completionattemptcompletedcminfo'] = 'Completa un intento';
$string['completionattemptcompletedform'] = 'El/La estudiante debe tener al menos un intento completo en esta actividad';
$string['confirmcloseattempt'] = '¿Está seguro de que desea cerrar y finalizar este intento de {$a->name}?';
$string['confirmcloseattemptscore'] = 'Se respondieron {$a->num_questions} preguntas y la puntuación hasta ahora es {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Este intento se inició el {$a->iniciado} y se actualizó por última vez el {$a->modificado}.';
$string['confirmdeleteattempt'] = 'Confirmando la eliminación del intento de {$a->name} enviado el {$a->timecompleted}';
$string['deleteattemp'] = 'Borrar intento';
$string['discrimination_display_name'] = 'Discriminación';
$string['downloadcsv'] = 'Descargar CSV';
$string['enterrequiredpassword'] = 'Ingrese la contraseña requerida';
$string['errorattemptstate'] = 'Hubo un error al determinar el estado del intento';
$string['errorclosingattempt_alreadycomplete'] = 'Este intento ya está completo, no se puede cerrar manualmente.';
$string['errorfetchingquest'] = 'No se puede obtener una pregunta para el nivel {$a->level}';
$string['errorlastattpquest'] = 'Error al verificar el valor de respuesta para el último intento de pregunta';
$string['errornumattpzero'] = 'El error con el número de preguntas intentadas es igual a cero, pero el usuario envió una respuesta a la pregunta anterior';
$string['errorsumrightwrong'] = 'La suma de respuestas correctas e incorrectas no es igual al número total de preguntas intentadas';
$string['eventattemptcompleted'] = 'Intento completado';
$string['formelementdecimal'] = 'Introduzca un número decimal. Máximo 10 dígitos de largo y máximo 5 dígitos a la derecha del punto decimal';
$string['formelementempty'] = 'Ingrese un número entero positivo de 1 a 999';
$string['formelementnegative'] = 'Ingrese un número positivo del 1 al 999';
$string['formelementnumeric'] = 'Ingrese un valor numérico del 1 al 999';
$string['formlowlevelgreaterthan'] = 'El nivel más bajo debe ser menor que el nivel más alto.';
$string['formminquestgreaterthan'] = 'El número mínimo de preguntas debe ser inferior al número máximo de preguntas.';
$string['formquestionpool'] = 'Seleccione al menos una categoría de pregunta';
$string['formstartleveloutofbounds'] = 'El nivel inicial debe ser un número que esté entre el nivel más bajo y el más alto.';
$string['formstderror'] = 'Debe ingresar un porcentaje menor que 50 y mayor o igual a 0';
$string['functiondisabledbysecuremode'] = 'Esa funcionalidad está actualmente deshabilitada.';
$string['gradehighest'] = 'La nota más alta';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Cuando se permiten múltiples intentos, los siguientes métodos están disponibles para calcular la calificación final del examen:

* La calificación más alta de todos los intentos.
* Primer intento (todos los demás intentos se ignoran)
* Último intento (todos los demás intentos se ignoran)';
$string['graphlegend_error'] = 'Error estándar';
$string['highestlevel'] = 'Mayor nivel de dificultad';
$string['highestlevel_help'] = 'El nivel más alto o más difícil del que la evaluación puede seleccionar preguntas. Durante un intento la actividad no irá más allá de este nivel de dificultad.';
$string['highlevelusers'] = 'Usuarios/as por encima del nivel de pregunta';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Informe de intentos de estudiantes individuales para {$a}';
$string['leveloutofbounds'] = 'Nivel solicitado {$a->level} fuera de los límites del intento';
$string['lowestlevel'] = 'Menor nivel de dificultad';
$string['lowestlevel_help'] = 'El nivel más bajo o menos difícil del que la evaluación puede seleccionar preguntas. Durante un intento la actividad no irá más allá de este nivel de dificultad.';
$string['lowlevelusers'] = 'Estudiantes por debajo del nivel de pregunta';
$string['maximumquestions'] = 'Máximo número de preguntas';
$string['maximumquestions_help'] = 'El número máximo de preguntas que el/la estudiante puede intentar.';
$string['maxquestattempted'] = 'Número máximo de preguntas intentadas';
$string['midlevelusers'] = 'Estudiantes cerca del nivel de pregunta';
$string['minimumquestions'] = 'Número mínimo de preguntas';
$string['minimumquestions_help'] = 'El número mínimo de preguntas que cada estudiante debe intentar.';
$string['missingtagprefix'] = 'Prefijo de etiqueta faltante';
$string['modformshowattemptprogress'] = 'Mostrar a los/las estudiantes el progreso del cuestionario.';
$string['modformshowattemptprogress_help'] = 'Cuando se selecciona, durante el intento, cada estudiante verá una barra de progreso que muestra cuántas preguntas se responden del número máximo.';
$string['modulename'] = 'Prueba adaptativa';
$string['modulename_help'] = 'La actividad Cuestionario Adaptativo, en inglés Adaptive Quiz, permite crear pruebas que miden de manera eficiente las habilidades de los/las participantes. Los cuestionarios adaptativos se componen de preguntas seleccionadas del banco de preguntas que están etiquetadas con una puntuación de dificultad. Las preguntas se eligen para que coincidan con el nivel de capacidad estimado del examinado actual. Si el examinado tiene éxito en una pregunta, a continuación se presenta una pregunta más desafiante. Si el examinado responde una pregunta incorrectamente, a continuación se presenta una pregunta menos desafiante. Esta técnica se desarrollará en una secuencia de preguntas que convergerán en el nivel de capacidad efectiva del examinado. La prueba se detiene cuando se determina la capacidad del examinado con la precisión requerida.

Esta actividad es más adecuada para determinar una medida de capacidad a lo largo de una escala unidimensional. Si bien la escala puede ser muy amplia, todas las preguntas deben proporcionar una medida de capacidad o aptitud en la misma escala. En una prueba de nivel, por ejemplo, las preguntas de nivel inferior en la escala que participantes principiantes pueden responder correctamente también deberían ser respondidas por expertos/as, mientras que las preguntas de nivel más alto de la escala solo deberían ser respondidas por expertos/as o por una suposición afortunada. Las preguntas que no discriminan entre participantes de diferentes habilidades harán que la prueba sea ineficaz y pueden proporcionar resultados no concluyentes.

Las preguntas utilizadas en el cuestionario adaptativo deben

  * calificarse automáticamente como correcto/incorrecto
  * ser etiquetadas con su dificultad al usar \'adpq_\' seguido de un número entero positivo que esté dentro del rango del cuestionario

El cuestionario adaptativo se puede configurar para

  * definir el rango de preguntas-dificultades/habilidades del usuario que se medirán. 1-10, 1-16 y 1-100 son ejemplos de rangos válidos.
  * definir la precisión requerida antes de que se detenga el cuestionario. Con frecuencia, un error del 5% en la medida de la capacidad es una regla de parada adecuada.
  * requieren un número mínimo de preguntas a ser respondidas.
  * requieren un número máximo de preguntas que puedan ser respondidas

Esta descripción y el proceso de prueba en esta actividad se basan en <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Cuestionario Adaptativo';
$string['na'] = 'n/a';
$string['name'] = 'Nombre';
$string['noattemptsallowed'] = 'No se permiten más intentos en esta actividad.';
$string['nonewmodules'] = 'No se encontraron instancias de Cuestionario Adaptativo';
$string['nopermission'] = 'No tienes permiso para ver este recurso';
$string['notinprogress'] = 'Este intento no está en progreso.';
$string['notyourattempt'] = 'Este no es tu intento de la actividad.';
$string['numofattemptshdr'] = 'Número de intentos';
$string['percent_correct_display_name'] = '% Correcto';
$string['pluginadministration'] = 'Cuestionario Adaptativo';
$string['pluginname'] = 'Cuestionario Adaptativo';
$string['question_report'] = 'Análisis de las preguntas';
$string['questionanalysisbtn'] = 'Análisis de las preguntas';
$string['questionnumber'] = 'Pregunta #';
$string['questionpool'] = 'Grupo de preguntas';
$string['questionpool_help'] = 'Seleccione la(s) categoría(s) de preguntas de donde la actividad extraerá preguntas durante un intento.';
$string['questions_report'] = 'Reporte de Preguntas';
$string['questionsattempted'] = 'Suma de preguntas intentadas';
$string['questionspoolerrornovalidstartingquestions'] = 'Las categorías de preguntas seleccionadas no contienen preguntas que estén etiquetadas correctamente para coincidir con el nivel de dificultad inicial seleccionado.';
$string['recentactquestionsattempted'] = 'Preguntas intentadas: {$a}';
$string['recentattemptstate'] = 'Estado del intento:';
$string['recentcomplete'] = 'Completado';
$string['recentinprogress'] = 'En progreso';
$string['reportanswersdistributionchartdisplaystacked'] = 'Barras de visualización apiladas';
$string['reportanswersdistributionchartnumrightlabel'] = 'Número de respuestas correctas';
$string['reportanswersdistributionchartnumwronglabel'] = 'Número de respuestas incorrectas';
$string['reportanswersdistributionchartxaxislabel'] = 'Dificultad de la pregunta';
$string['reportanswersdistributionchartyaxislabel'] = 'Número de respuestas';
$string['reportattemptadmanswerright'] = 'C';
$string['reportattemptadmanswerwrong'] = 'W';
$string['reportattemptadmchartadmdifflabel'] = 'Dificultad Administrada';
$string['reportattemptadmcharttargetdifflabel'] = 'Dificultad objetivo';
$string['reportattemptanswerdistributiontab'] = 'Distribución de las Respuestas';
$string['reportattemptgraphtab'] = 'Gráfico de Intentos';
$string['reportattemptgraphtabletitle'] = 'Vista de Tabla del Gráfico de Intentos';
$string['reportattemptquestionsdetailstab'] = 'Detalles de las Preguntas';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - revisando intento de {$a->fullname}  enviado el {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'Todas las personas que alguna vez hicieron intentos';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsenrolledwithattempts'] = 'participantes que realizaron intentos';
$string['reportattemptsenrolledwithnoattempts'] = 'participantes que no hicieron intentos';
$string['reportattemptsfilterformheader'] = 'Filtrado';
$string['reportattemptsfilterformsubmit'] = 'Filtro';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Incluir personas con inscripciones inactivas';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Si se incluyen personas con inscripciones suspendidas.';
$string['reportattemptsfilterusers'] = 'Mostrar';
$string['reportattemptsnotenrolled'] = 'personas no inscriptas que hicieron intentos';
$string['reportattemptspersistentfilter'] = 'Filtro persistente';
$string['reportattemptspersistentfilter_help'] = 'Cuando está marcada, la configuración de filtro a continuación se almacenará cuando se envíe y luego se aplicará cada vez que visite la página del informe.';
$string['reportattemptsprefsformheader'] = 'Preferencias de informe';
$string['reportattemptsprefsformsubmit'] = 'Aplicar';
$string['reportattemptsresetfilter'] = 'Restablecer filtro';
$string['reportattemptsshowinitialbars'] = 'Mostrar barra de iniciales';
$string['reportattemptsummarytab'] = 'Resumen del intento';
$string['reportattemptsusersperpage'] = 'Número de personas visualizadas:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - informe de intentos de usuarios/as individuales para {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - informe de intentos';
$string['reportuserattemptstitleshort'] = 'Intentos de {$a}';
$string['requirepassword'] = 'Se requiere contraseña';
$string['requirepassword_help'] = 'Se debe ingresar una contraseña antes de comenzar su intento.';
$string['requirepasswordmessage'] = 'Para intentar este cuestionario, necesita saber la contraseña del cuestionario.';
$string['resetadaptivequizsall'] = 'Eliminar todos los intentos de Prueba Adaptativa (Adaptive Quiz)';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisión del intento';
$string['reviewattemptreport'] = 'Revisión del intento de {$a->fullname} enviado el {$a->finished}';
$string['score'] = 'Puntaje';
$string['showabilitymeasure'] = 'Mostrar medida de habilidad a estudiantes';
$string['showabilitymeasure_help'] = 'A veces puede resultar útil revelar estimaciones de capacidad a los/las estudiantes después de realizar una prueba adaptativa. Con esta configuración habilitada, una persona puede ver la estimación de capacidad en el resumen de intentos y también justo después de terminar un intento.';
$string['standarderror'] = 'Error Estándar para detener';
$string['standarderror_help'] = 'Cuando la cantidad de error en la medida de la habilidad cae por debajo de esta cantidad, la prueba se detendrá. Ajuste este valor desde el valor predeterminado del 5% para requerir más o menos precisión en la medida de capacidad.';
$string['standarderrorhdr'] = 'Error estándar';
$string['startattemptbtn'] = 'Iniciar intento';
$string['startinglevel'] = 'Nivel inicial de dificultad';
$string['startinglevel_help'] = 'Cuando se comienza un intento, la actividad seleccionará aleatoriamente una pregunta que coincida con el nivel de dificultad.';
$string['statistic'] = 'Estadística';
$string['stopingconditionshdr'] = 'Condiciones de parada';
$string['submitanswer'] = 'Enviar respuesta';
$string['times_used_display_name'] = 'Intentos usados';
$string['updateattempterror'] = 'Error intentando actualizar registro de intento';
$string['user'] = 'Persona usuaria';
$string['value'] = 'Valor';
$string['wrongpassword'] = 'Contraseña incorrecta';
