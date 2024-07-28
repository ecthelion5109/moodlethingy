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
 * Strings for component 'accredible', language 'es_ar', version '4.5'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Agregar un certificado o instancia de emblema';
$string['accredible:manage'] = 'Gestionar un certificado o instancia de emblema';
$string['accredible:student'] = 'Recuperar un certificado o emblema';
$string['accredible:view'] = 'Ver un certificado o emblema';
$string['accrediblegroup'] = 'Grupo Accredible';
$string['achievementid'] = 'ID de logro / nombre de cohorte (debe ser único)';
$string['activitygroupdescription'] = 'Los grupos de credenciales deben haberse creado en el <a href="{$a}" target="_blank">Panel de Accredible</a> antes de que se puedan emitir las credenciales. Si no aparece ninguno, verifique su llave API para asegurarse de que la integración esté configurada';
$string['activityname'] = 'Nombre de la actividad';
$string['additionalactivitiesone'] = 'Cuidado: Estás agregando más de una actividad a un curso. <br/>Todas estas actividades son visibles por estudiantes. Asegurate de brindarles diferentes nombres.';
$string['additionalactivitiesthree'] = 'Este es el nombre que va a aparecer en el certificado.';
$string['additionalactivitiestwo'] = 'Certificados/emblemas van a aparecer en la página de actividad únicamente si fueron agregadas con este identificador de logro.';
$string['apikeyhelp'] = 'Ingrese su clave API de accredible.com';
$string['apikeylabel'] = 'Clave API';
$string['autoissueheader'] = 'Criterios de emisión automáticos';
$string['certificatename'] = 'Nombre del certificado o emblema';
$string['certificateurl'] = 'Enlace del certificado o emblema';
$string['chooseexam'] = 'Seleccionar cuestionario final';
$string['completionissuecheckbox'] = 'Sí, emitir cuando se completó el curso';
$string['completionissueheader'] = 'Criterio de auto-emisión: cuando se complete el curso';
$string['dashboardlink'] = 'Enlace al panel de Accredible';
$string['dashboardlinktext'] = 'Para eliminar o aplicar estilo a las credenciales, inicie sesión en <a href="https://dashboard.accredible.com" target="_blank">panel</a>.';
$string['datecreated'] = 'Fecha de creación';
$string['description'] = 'Descripción';
$string['emptygradeattributekeyname'] = 'La calificación final del curso será asignada al atributo personalizado Accredible seleccionado. Si aún no ha creado un atributo personalizado, puede hacerlo en la <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Seleccione si desea alojar datos en la UE (Francfurt) en lugar de EE. UU.';
$string['eulabel'] = 'Servidor EU (Frankfurt)';
$string['eventcertificatecreated'] = 'Se publicó una credencial en Accredible';
$string['gotodashboard'] = 'Para actualizar la apariencia de sus insignias y certificados, visite: <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Elija la calificación Moodle para incluir:';
$string['gradeattributekeynameselect'] = 'Elija un atributo de diseño Accredible:';
$string['gradeissueheader'] = 'Criterio de emisión automática: por calificación final del examen';
$string['groupselect'] = 'Grupo';
$string['id'] = 'ID';
$string['includegradeattributecheckbox'] = 'Sí, incluir calificación en la credencial';
$string['includegradeattributedescription'] = 'Incluir calificación en la credencial';
$string['indexheader'] = 'Todos los certificados/emblemas para {$a}';
$string['issued'] = 'En agenda';
$string['manualheader'] = 'Emitir certificados/insignias manualmente';
$string['modulename'] = 'Certificados e insignias de Accredible';
$string['modulename_help'] = 'El módulo de actividad de certificados e insignias de Accredible le permite emitir certificados o insignias de cursos a los estudiantes en accredible.com.

Agrega la actividad donde quieras que tus alumnos vean su certificado o credencial.';
$string['modulename_link'] = 'mod/accredible/vista';
$string['modulenameplural'] = 'Certificados/insignias en Accredible';
$string['nocertificates'] = 'No hay certificados ni insignias.';
$string['nouserswarning'] = 'Debe elegir un grupo Accredible para ver la lista de usuarios.';
$string['overview'] = 'Descripción';
$string['passinggrade'] = 'Nota porcentual necesaria para aprobar el curso (%)';
$string['pluginadministration'] = 'Administración de certificados/insignias de Accredible';
$string['pluginname'] = 'Certificados e insignias de Accredible';
$string['privacy:metadata:accredible'] = 'Para integrarse con Accredible, los datos del usuario deben intercambiarse con ese servicio.';
$string['privacy:metadata:accredible:email'] = 'Su dirección de correo electrónico se envía a Accredible para emitir una credencial.';
$string['privacy:metadata:accredible:fullname'] = 'Su nombre completo se envía a Accredible para emitir una credencial.';
$string['privacy:metadata:accredible:quizgrade'] = 'La calificación de su examen puede enviarse a Accredible para emitir una credencial.';
$string['recipient'] = 'Recipiente';
$string['templatename'] = 'Nombre de la cohorte (de panel)';
$string['unissueddescription'] = 'Estas personas han cumplido con los requisitos para este certificado, pero aún no se les ha emitido un certificado. Seleccione aquellas para quienes le gustaría emitir certificados.';
$string['unissuedheader'] = 'Certificados/insignias no emitidos';
$string['usestemplatesdescription'] = 'Asegúrese de tener una cohorte en el panel con el mismo nombre que su ID de logro.';
$string['viewheader'] = 'Certificados y emblemas para {$a}';
$string['viewimgcomplete'] = 'Clic para ver tu certificado o emblema';
$string['viewimgincomplete'] = 'Curso en progreso';
$string['viewsubheader'] = 'Identificador de grupo: {$a}';
$string['viewsubheaderold'] = 'ID de logro: ($a)';
