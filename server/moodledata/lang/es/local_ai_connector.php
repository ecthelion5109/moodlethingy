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
 * Strings for component 'local_ai_connector', language 'es', version '4.5'.
 *
 * @package     local_ai_connector
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deepaiapikey'] = 'Clave API DeepAI';
$string['deepaiapikey_desc'] = 'Clave API DeepAI';
$string['deepaisettings'] = 'Configuraciones de DeepAI';
$string['deepaisettings_help'] = 'Configuraciones de servicios  (Stable Diffusion) DeepAI (deepai.org)';
$string['frequency_penalty'] = 'Castigo por frecuencia';
$string['frequency_penalty_desc'] = 'Reduce la repetición de palabras que ya han  sido generadas. Cuenta cuantas veces ya ha sido usada la palabra.';
$string['max_length'] = 'Longitud máxima';
$string['model'] = 'Modelo';
$string['model_desc'] = 'El modelo usado para generar la finalización.';
$string['openaiapikey'] = 'Clave API OpenAI';
$string['openaiapikey_desc'] = 'La clave API para su  cuenta de OpenAI, de https://platform.openai.com/account/api-keys . Las claves de muestra se ven como esta: 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';
$string['openaisettings'] = 'Configuraciones de OpenAI';
$string['openaisettings_help'] = 'Configuraciones para servicios de OpenAI (ChatGPT, DALL-E)';
$string['pluginname'] = 'Conector de IA';
$string['presence_penalty'] = 'Penalización por presencia';
$string['presence_penalty_desc'] = 'Similar a la penalización por frecuencia, reduce la  probabilidad de usar una palabra que ya ha sido usada.
La diferencia es que no importa cuantas veces ha sido usada la palabra - solamente si fue o no usada.';
$string['privacy:metadata:ai_connector'] = 'Para generar texto o imagen, el  usuario necesita pasar texto del \'prompt\' o imagen.';
$string['privacy:metadata:ai_connector:image'] = 'Imagen es un argumento opcional que usted puede pasar para hacer una base para la imagen generada.';
$string['privacy:metadata:ai_connector:prompttext'] = 'El texto del \'prompt\' del usuario está siendo enviado a servicios API para generar respuesta.';
$string['sourceoftruth'] = 'Origen de la verdad';
$string['sourceoftruth_desc'] = 'Información que es específica para su organización. Será pasada a ChatGPT como hechos que deberían ser usados cuando se  fabrique la respuesta.';
$string['temperature'] = 'Temperatura';
$string['temperature_desc'] = 'En otras palabras, esto es "aleatoriedad" o "creatividad". Baja temperatura generará texto más coherente pero predecible. El  rango es de  0 a 1.';
$string['top_p'] = 'P superior';
$string['top_p_desc'] = 'Es usada para propósito similar a temperatura - mientras más baja, la salida será más correcta y determinística. el rango también es de 0 a 1.';
