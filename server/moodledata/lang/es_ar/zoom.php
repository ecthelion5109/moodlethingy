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
 * Strings for component 'zoom', language 'es_ar', version '4.5'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtocalendar'] = 'Agregar al calendario';
$string['allmeetings_desc'] = 'Con este ajuste, puede controlar si se mostrará o no un enlace a la página de índice de un vínculo de actividad de Zoom en la parte inferior de cada página de resumen de instancia de actividad. Esta configuración sólo afecta a la presentación del enlace en las páginas de resumen de actividades de Zoom. Incluso si decide no mostrar el enlace allí, se podría seguir accediendo a la página de índice de actividades de Zoom a través de otros enlaces dentro del curso.';
$string['alternative_hosts_desc'] = 'Con esta configuración, puede controlar si la opción de elegir cuentas anfitrionas alternativas se muestra o no en la configuración de la instancia de actividad. Hay dos tipos de widgets disponibles: Un campo de entrada simple que acepta direcciones de correo electrónico separadas por comas. Y un selector con autocompletado que proporciona una fácil selección de personas que están inscriptas en el curso, tienen una cuenta de Zoom y tienen un rol fuera de {$a->roles}. Cuentas anfitrionas alternativas que pueden haber sido configuradas por docentes en Zoom directamente pero que no son seleccionables desde el selector de personas de Moodle se siguen mostrando en la página de resumen de la actividad y también se conservan cuando se actualiza una reunión desde Moodle.';
$string['alternative_hosts_disable'] = 'Desactivar la opción de cuentas anfitrionas alternativas';
$string['alternative_hosts_help'] = 'La opción de cuenta anfitriona alternativa le permite programar reuniones y designar a otras personas para que también comiencen la reunión. Estas personas recibirán un correo electrónico de Zoom notificándoles que se agregaron como cuentas anfitrionas alternativas, con un enlace para iniciar la reunión. \\n\\nComo formato de entrada, proporcione las direcciones de correo electrónico de las cuentas anfitrionas alternativas. Puede separar varios correos electrónicos con una coma (sin espacios).';
$string['alternative_hosts_inputfield'] = 'Mostrar la opción de cuentas anfitrionas alternativas como campo de entrada simple';
$string['alternative_hosts_picker'] = 'Mostrar la opción de cuentas anfitrionas alternativas como selector de cuentas con autocompletado';
$string['alternative_hosts_picker_help'] = 'La opción de cuentas anfitrionas alternativas le permite programar reuniones y designar a otras personas inscriptas en este curso para iniciar la reunión también. Estas personas recibirán un correo electrónico de Zoom notificándoles que se agregaron como anfitriones alternativos, con un enlace para iniciar la reunión.\\n\\nPuedes elegir una o varias personas anfitrionas alternativas en función de las necesidades de tu reunión.\\n\\nSi no puede encontrar una persna en particular en este selector, esta persona no está inscripta en este curso con un rol apropiado o no tiene una cuenta elegible en Zoom.';
$string['alternative_hosts_picker_noneselected'] = 'Ninguna cuentas anfitrionas alternativas seleccionada';
$string['alternative_hosts_picker_placeholder'] = 'Seleccionar personas usuarias';
$string['cachedef_zoomid'] = 'El ID de cuenta de Zoom';
$string['changehost'] = 'Cambiar cuenta anfitriona';
$string['displayleadtime_desc'] = 'Si se activa, el tiempo de espera se mostrará. De esta manera, las personas son informadas de que/cuando pueden unirse a la reunión antes de la hora de inicio programada. Esto podría evitar que las personas recarguen constantemente la página hasta que puedan unirse.';
$string['displaypassword_help'] = 'Si está habilitado, el código de acceso de la reunión siempre se mostrará a las cuentas que no son anfitrionas.';
$string['externaluser'] = 'Persona externa';
$string['firstjoin'] = 'Primera persona que pueda unirse';
