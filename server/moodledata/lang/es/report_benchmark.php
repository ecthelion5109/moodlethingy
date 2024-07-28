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
 * Strings for component 'report_benchmark', language 'es', version '4.5'.
 *
 * @package     report_benchmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Benchmark (Comparativo) del Sistema';
$string['benchfail'] = '<b>¡ Advertencia !</b><br />El desempeño de su instalación Moodle no es óptimo.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Ver el reporte del Benchmark';
$string['benchshare'] = 'Compartir mi puntuación en el foro';
$string['benchsuccess'] = '<b>¡Felicitaciones!</b><br />El desempeño de su instalación Moodle parece perfecto.';
$string['cloadmoreinfo'] = 'Cargar el archivo de configuración  "config.php"';
$string['cloadname'] = 'Tiempo para cargar Moodle';
$string['coursereadmoreinfo'] = 'Leer un curso varias veces para revisar la velocidad de lectura de la base de datos';
$string['coursereadname'] = 'Desempeño de lectura del curso';
$string['coursewritemoreinfo'] = 'Escribir un curso varias veces para revisar la velocidad de escritura de la base de datos';
$string['coursewritename'] = 'Desempeño de escritura del curso';
$string['description'] = 'Descripción';
$string['duration'] = '{$a} s';
$string['during'] = 'Tiempo (segundos)';
$string['filereadmoreinfo'] = 'Leer un archivo varias veces para revisar la velocidad de lectura de la carpeta temporal de Moodle';
$string['filereadname'] = 'Desempeño de lectura de archivos';
$string['filewritemoreinfo'] = 'Escribir un archivo varias veces para revisar la velocidad de escritura de la carpeta temporal de Moodle';
$string['filewritename'] = 'Desempeño de escritura de archivos';
$string['info'] = 'Esta prueba de Comparativo no debe demorar más de un minuto y será abortada a los 2 minutos. Por favor, espere hasta que aparezcan los resultados.';
$string['infoaverage'] = 'Se recomienda tomar esta prueba varias veces para obtener un promedio significativo. Si el desempeño de su instalación no es óptimo, Usted encontrará algunas recomendaciones para mejorarlo en la <a href="https://docs.moodle.org/all/es/Recomendaciones_sobre_desempe%C3%B1o" target="_blank">Documentación Moodle</a>.';
$string['infodisclaimer'] = 'No se recomienda invocar este comparativo en una plataforma de producción, ya que podría resultar en degradación significativa del desempeño.';
$string['infodisclamer'] = 'No es recomendable el correr esta prueba de Benchmark (Comparativos) en una plataforma en producción.';
$string['limit'] = 'Límite aceptable';
$string['loginguestmoreinfo'] = 'Revisar el tiempo usado para cargar la página de ingreso de la cuenta de invitado';
$string['loginguestname'] = 'Desempeño del tiempo para conectarse con la cuenta de invitado';
$string['loginusermoreinfo'] = 'Medir el tiempo usado para cargar la página de ingreso de una cuenta falsa de usuario';
$string['loginusername'] = 'Tiempo para conectarse para una cuenta de usuario falsa';
$string['modulename'] = 'Benchmark (Comparativo) de Moodle';
$string['modulenameplural'] = 'Benchmarks (Comparativos) de Moodle';
$string['notificatiopagedownloadmoreinfo'] = 'Cargar la página de notificación de interfaz de administración para comprobar la velocidad del servidor web.';
$string['notificatiopagedownloadname'] = 'Tiempo de carga de la página de notificación de administración';
$string['over'] = 'Límite crítico';
$string['pluginname'] = 'Benchmark (Comparativo) de Moodle';
$string['points'] = '{$a} puntos';
$string['privacy:no_data_reason'] = 'El plugin de Report benchmark no almacena datos por sí mismo. Solamente accede a datos de otros plugins.';
$string['processormoreinfo'] = 'Se llama a una función PHP en un bucle para probar la velocidad del procesador';
$string['processorname'] = 'Velocidad de procesamiento del procesador';
$string['querytype1moreinfo'] = 'Ejecutar una consulta SQL compleja para probar la velocidad de la Base de datos';
$string['querytype1name'] = 'Desempeño de Base de Datos (#1)';
$string['querytype2moreinfo'] = 'Ejecutar una consulta SQL compleja para probar la velocidad de la Base de datos';
$string['querytype2name'] = 'Desempeño de Base de Datos (#2)';
$string['redo'] = 'Iniciar nuevamente la medición';
$string['score'] = 'Puntuación';
$string['scoremsg'] = 'Puntuación del Benchmark:';
$string['seconde'] = '{$a} segundos';
$string['slowdatabaselabel'] = 'La Base de Datos parece ser demasiado lenta.';
$string['slowdatabasesolution'] = '<ul><li>Revise  <a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank"> la integridad de la Base de Datos</a></li><li>Optimize  <a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank"> la Base de datos</a></li></ul>';
$string['slowharddrivelabel'] = 'El disco duro parece ser demasiado lento.';
$string['slowharddrivesolution'] = '<ul><li>Revise el estado del Disco Duro o de la carpeta temporal</li><li>Cambie el Disco Duro o la carpeta Temporal</li></ul>';
$string['slowprocessorlabel'] = 'Su procesador parece ser demasiado lento.';
$string['slowprocessorsolution'] = '<ul><li>Revisar que su configuración del equipo sea lo suficientemente alta para ejecutar Moodle.</li></ul>';
$string['slowserverlabel'] = 'Su servidor web parece ser demasiado lento.';
$string['slowserversolution'] = '<ul><li>Configure su Apache en modo <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processing</a>o cambie a <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Si su Moodle está instalado  en su computadora, configure cuidadosamente su antivirus para que no revise la instalación de Moodle.</li></ul>';
$string['slowweblabel'] = 'La página de ingreso está siendo cargada demasiado lenta.';
$string['slowwebsolution'] = '<ul><li><a href="/admin/purgecaches.php" target="_blank">Purgar la caché de Moodle</a>.</li></ul>';
$string['start'] = 'Iniciar la revisión';
$string['total'] = 'Tiempo total';
