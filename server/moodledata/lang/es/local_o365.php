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
 * Strings for component 'local_o365', language 'es', version '4.5'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_healthcheck'] = 'Comprobar estado';
$string['acp_maintenance'] = 'Herramientas de mantenimiento';
$string['acp_maintenance_debugdata'] = 'Generar paquete de datos para depuración (debug)';
$string['acp_maintenance_desc'] = 'Estas herramientas pueden ayudarte a resolver problemas comunes.';
$string['acp_maintenance_warning'] = 'Atención: Estas son herramientas avanzadas. Por favor úsalas únicamente si entiendes lo que estás haciendo.';
$string['acp_parentsite_desc'] = 'Sitio para compartir archivos del curso de Moodle.';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_tenants_actions'] = 'Acciones';
$string['acp_tenants_revokeaccess'] = 'Revocar Acceso';
$string['acp_userconnections'] = 'Conexiones de Usuarios';
$string['acp_userconnections_column_actions'] = 'Acciones';
$string['acp_userconnections_column_muser'] = 'Usuario de Moodle';
$string['acp_userconnections_column_o365user'] = 'Usuario de Microsoft 365';
$string['acp_userconnections_column_status'] = 'Estado de la Conexión';
$string['acp_userconnections_filtering_muserfullname'] = 'Nombre completo del usuario Moodle';
$string['acp_userconnections_filtering_musername'] = 'Nombre_de_usuario Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Nombre_de_usuario Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'El usuario Moodle ya está conectado a un usuario Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'El usuario Moodle ya está conectado a un usuario Microsoft 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'El usuario Moodle ya está apareado a un usuario Microsoft 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'El usuario Microsoft 365 ya está conectado a otro usuario Moodle';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'El usuario Microsoft 365 ya está apareado a otro usuario Moodle';
$string['acp_userconnections_manualmatch_musername'] = 'Usuario Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Nombre_de_usuario Microsoft 365';
$string['acp_userconnections_manualmatch_title'] = 'Apareamiento manual de usuario';
$string['acp_userconnections_manualmatch_uselogin'] = 'Ingresar con Microsoft 365';
$string['acp_userconnections_table_connected'] = 'Conectado';
$string['acp_userconnections_table_disconnect'] = 'Desconectado';
$string['acp_userconnections_table_match'] = 'Aparear';
$string['acp_userconnections_table_noconnection'] = 'Sin conexión';
$string['acp_userconnections_table_resync'] = 'Re-sincronizar';
$string['acp_userconnections_table_unmatch'] = 'Sin concordar';
$string['acp_usermatch'] = 'Comparación de usuarios';
$string['acp_usermatch_matchqueue_clearall'] = 'Limpiar todo';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Borrar "Errores"';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Borrar "En cola"';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Borrar "Exitosos"';
$string['acp_usermatch_matchqueue_column_muser'] = 'Usuario de Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Usuario de Office 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Estado';
$string['acp_usermatch_matchqueue_status_error'] = 'Error: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'En cola';
$string['acp_usermatch_matchqueue_status_success'] = 'Exitoso';
$string['acp_usermatch_upload'] = 'Paso 1 : Subir Nuevas Concordancias';
$string['acp_usermatch_upload_err_badmime'] = 'Tipo {$a} no está soportado. Por favor suba un CSV de texto-simple.';
$string['acp_usermatch_upload_submit'] = 'Añadir Archivo de Datos a la Cola para Coincidir';
$string['cachedef_groups'] = 'Almacena datos de grupo de Office 365.';
$string['calendar_event'] = 'Ver detalles';
$string['calendar_setting'] = 'Habilitar Sincronización de Calendario Outlook';
$string['calendar_site'] = 'Calendario de Sitio';
$string['calendar_user'] = 'Calendario personal (usuario)';
$string['course_selector_label'] = 'Seleccionar curso existente';
$string['erroracpauthoidcnotconfig'] = 'Por favor, configure primero las credenciales de aplicación en auth_oidc.';
$string['erroracplocalo365notconfig'] = 'Por favor, configure primero local_o365.';
$string['errorcouldnotrefreshtoken'] = 'No se pudo actualizar el token.';
$string['errorhttpclientbadtempfileloc'] = 'No se pudo abrir ubicación temporal para guardar el archivo.';
$string['errorhttpclientnofileinput'] = 'Sin archivo de parámetro httpclient::put';
$string['errornodirectaccess'] = 'El acceso directo a la página está prohibido';
$string['erroro365apibadcall'] = 'Error en la llamada a la API.';
$string['erroro365apibadcall_message'] = 'Error en llamada API: {$a}';
$string['erroro365apibadpermission'] = 'Permiso no encontrado';
$string['erroro365apicouldnotcreatesite'] = 'Problema al crear el sitio.';
$string['erroro365apicoursenotfound'] = 'Curso no encontrado.';
$string['erroro365apiinvalidmethod'] = 'httpmethod inválido pasó a apicall';
$string['erroro365apiinvalidtoken'] = 'Token inválido o caducado.';
$string['erroro365apinoparentinfo'] = 'No se ha encontrado información de la carpeta padre/raíz';
$string['erroro365apinotimplemented'] = 'Esto debe ser anulado.';
$string['erroro365apinotoken'] = 'No tienen un token para el recurso y usuario indicado, y no se puedo conseguir uno ¿Ha caducado el token de actualización del usuario?';
$string['erroro365apisiteexistsnolocal'] = 'El sitio ya existe pero no se pudo encontrar el registro local.';
$string['eventapifail'] = 'Falla de API';
$string['eventcalendarsubscribed'] = 'Usuario suscrito a un calendario';
$string['eventcalendarunsubscribed'] = 'Usuario desuscrito del calendario';
$string['healthcheck_fixlink'] = 'Haga clic aquí para arreglarlo.';
$string['healthcheck_ratelimit_result_passed'] = 'Las llamadas API Microsoft 365 son ejecutados a toda velocidad.';
$string['help_user_appassign'] = 'Asignar Usuarios a Ayuda de Aplicación';
$string['help_user_create'] = 'Crear Ayuda con Cuentas';
$string['help_user_delete'] = 'Eliminar Ayuda con Cuentas';
$string['help_user_nodelta'] = 'Ayuda para realizar una sincronización completa';
$string['help_user_update'] = 'Ayuda para Actualizar Todas las Cuentas';
$string['o365:manageconnectionlink'] = 'Enlazar Gestionar Conexión';
$string['o365:manageconnectionunlink'] = 'Desenlazar Gestionar Conexión';
$string['o365:managegroups'] = 'Gestionar Grupos';
$string['o365:viewgroups'] = 'Ver Grupos';
$string['other_login'] = 'Ingresar manualmente';
$string['personal_calendar'] = 'Personal';
$string['pluginname'] = 'Integración de Microsoft Office 365';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'La ID del usuario Moodle';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'La ID de la foto del usuario en Microsoft 365';
$string['privacy:metadata:local_o365_calidmap:eventid'] = 'La ID del evento en Moodle.';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'La ID del evento en Outlook.';
$string['privacy:metadata:local_o365_calidmap:userid'] = 'La ID del usuario propietario del evento.';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'La ID del calendario en Microsoft 365';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'La ID del usuario Moodle';
$string['privacy:metadata:local_o365_calsub:caltypeid'] = 'La ID asociada del calendario Moodle';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'La ID del calendario Microsoft 365';
$string['privacy:metadata:local_o365_calsub:timecreated'] = 'La hora de cuando fue creada la suscripción.';
$string['privacy:metadata:local_o365_connections:muserid'] = 'La ID del usuario Moodle';
$string['privacy:metadata:local_o365_matchqueue:completed'] = 'Si es que el registro ha sido o no procesado';
$string['privacy:metadata:local_o365_matchqueue:errormessage'] = 'El mensaje de error (si hubiera)';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'El nombre_de_usuario del usuario Moodle.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'El nombre_de_usuario del usuario Microsoft 365.';
$string['privacy:metadata:local_o365_objects:metadata'] = 'Cualquier metadato asociado';
$string['privacy:metadata:local_o365_objects:moodleid'] = 'La ID del objeto en Moodle';
$string['privacy:metadata:local_o365_objects:objectid'] = 'La ID del objeto de Microsoft 365';
$string['privacy:metadata:local_o365_objects:subtype'] = 'El asunto del objeto.';
$string['privacy:metadata:local_o365_objects:timecreated'] = 'La hora de cuando fue creado el registro.';
$string['privacy:metadata:local_o365_objects:timemodified'] = 'La hora de cuando fue modificado el registro.';
$string['privacy:metadata:local_o365_token:refreshtoken'] = 'El token de refresco.';
$string['privacy:metadata:local_o365_token:token'] = 'El  token.';
$string['privacy:metadata:local_o365_token:user_id'] = 'La ID del usuario Moodle';
$string['settings_debugmode'] = 'Grabar mensajes de depuración';
$string['settings_detectoidc'] = 'Credenciales de Aplicación';
$string['settings_detectoidc_credsinvalid'] = 'sLa credenciales no han sido enviadas o estás incompletas.';
$string['settings_detectoidc_credsinvalid_link'] = 'Configurar Credenciales';
$string['settings_detectoidc_credsvalid'] = 'Las credenciales se han establecido';
$string['settings_detectoidc_credsvalid_link'] = 'Cambiar';
$string['settings_detectoidc_details'] = 'Para comunicarse con Office365, Moodle necesita credenciales para identificarse. Éstas se establecen en el plugin de autenticación "OpenID Connect".';
$string['settings_detectperms'] = 'Permisos de Aplicación';
$string['settings_detectperms_details'] = 'Para el uso de las funciones de plugin, deben configurarse los permisos correctos para la aplicación en AzureAD.';
$string['settings_detectperms_errorfix'] = 'Se produjo un error al tratar de arreglar los permisos. Por favor, configurelos manualmente en Azure.';
$string['settings_detectperms_fixperms'] = 'Arreglar Permisos';
$string['settings_detectperms_invalid'] = 'Comprobar permisos en AzureAD';
$string['settings_detectperms_missing'] = 'Perdido:';
$string['settings_detectperms_nocreds'] = 'Es necesario establecer primero las Credenciales de Aplicación. Ver la configuración de arriba.';
$string['settings_detectperms_nounified'] = 'Unified API no está presente. Algunas nuevas características pueden no funcionar.';
$string['settings_detectperms_unifiednomissing'] = 'Todos los permisos Unified están presentes.';
$string['settings_detectperms_update'] = 'Actualizar';
$string['settings_detectperms_valid'] = 'Los permisos han sido establecidos.';
$string['settings_fieldmap'] = 'Mapeo de Campo del Usuario';
$string['settings_fieldmap_details'] = 'Configurar mapeo entre campos de usuario en Microsoft 365 y Moodle.';
$string['settings_header_advanced'] = 'Avanzado';
$string['settings_header_setup'] = 'Configuración';
$string['settings_header_teams'] = 'Configuraciones de Equipos';
$string['settings_header_tools'] = 'Herramientas';
$string['settings_healthcheck'] = 'Comprobar Estado';
$string['settings_healthcheck_details'] = 'Si algo no está funcionando correctamente, realizando una comprobación de estado  puede identificar el problema y proponer soluciones';
$string['settings_healthcheck_linktext'] = 'Realizar control de estado';
$string['settings_maintenance'] = 'Mantenimiento';
$string['settings_maintenance_linktext'] = 'Ver Herramientas de Mantenimiento';
$string['settings_o365china'] = 'Office 365 para China';
$string['settings_o365china_details'] = 'Active esta opción si está utilizando Office365 para China.';
$string['settings_odburl'] = 'URL de OneDrive for Business';
$string['settings_odburl_details'] = 'La URL utilizada para acceder a OneDrive for Business. Por lo general se puede determinar mediante su AzureAD tenant. Por ejemplo, si su AzureAD tenant es "contoso.onmicrosoft.com", lo más probable es que la URL sea  "contoso-my.sharepoint.com". Escriba sólo el nombre de dominio, no incluya http: // o https: //';
$string['settings_options_usersync'] = 'Sincronizar Usuario';
$string['settings_photoexpire'] = 'Tiempo de refresco de foto del perfil';
$string['settings_sds_coursecreation'] = 'Creación de Curso';
$string['settings_sds_coursecreation_enabled'] = 'Crear Cursos';
$string['settings_sds_coursecreation_enabled_desc'] = 'Crear cursos para estas escuelas';
$string['settings_sds_enrolment_enabled'] = 'Inscribir usuarios';
$string['settings_secthead_advanced'] = 'Configuraciones Avanzadas';
$string['settings_serviceresourceabstract_detect'] = 'Detectar';
$string['settings_serviceresourceabstract_detecting'] = 'Detectando...';
$string['settings_serviceresourceabstract_empty'] = 'Por favor, introduzca un valor o haga clic en "Detectar" para intentar detectar el valor correcto.';
$string['settings_serviceresourceabstract_invalid'] = 'Este valor no parece ser válido.';
$string['settings_serviceresourceabstract_nocreds'] = 'Por favor, establezca primero las credenciales de la aplicación.';
$string['settings_serviceresourceabstract_valid'] = '{$a} es válido.';
$string['settings_setup_step1'] = 'Paso 1/3: Registrar Moodle con Azure AD';
$string['settings_setup_step2'] = 'Paso 2/3: Elegir método de conexión';
$string['settings_setup_step3'] = 'Paso 3/3: consentimiento admin &amp; informaciónadicional';
$string['settings_userconnections'] = 'Conexiones';
$string['settings_usermatch'] = 'Coincidencia d eusuario';
$string['settings_usersynccreationrestriction'] = 'Restricción de Creación de Usuario';
$string['settings_usersynccreationrestriction_fieldval'] = 'Valor del campo';
$string['settings_usersynccreationrestriction_o365group'] = 'Membresía de Grupo de Microsoft 365';
$string['settings_usersynccreationrestriction_regex'] = 'Valor es una expresión regular';
$string['spsite_group_contributors_desc'] = 'Todos los usuarios que tienen acceso a administrar los archivos de curso {$a}';
$string['tab_name'] = 'Nombre de pestaña';
$string['task_calendarsyncin'] = 'Sincronizar eventos de O365 en Moodle';
$string['task_processmatchqueue_err_nomuser'] = 'No se encontraron usuarios Moodle con este nombre_de_usuario';
$string['task_processmatchqueue_err_noo365user'] = 'No se encontraron usuarios Microsoft 365 con este nombre_de_usuario';
$string['task_syncusers'] = 'Sincronizar usuarios con AAD.';
$string['teams_no_course'] = 'Usted no tiene ningún curso para añadir.';
$string['ucp_calsync_availcal'] = 'Calendarios de Moodle disponibles';
$string['ucp_calsync_desc'] = 'Seleccione los calendarios que serán sincronizados desde Moodle a su calendario de Outlook.';
$string['ucp_calsync_title'] = 'Sincronización del Calendario de Outlook';
$string['ucp_connection_desc'] = 'Aquí usted puede configurar cómo conectarse a Microsoft 365. Para utilizar las características de Microsoft 365 se debe estar conectado a la cuenta de Microsoft 365. A continuación se describe cómo puede usted hacerlo.';
$string['ucp_connection_disconnected'] = 'Usted no está conectado a Microsoft 365.';
$string['ucp_connection_linked'] = 'Enlazar sus cuentas Moodle y Microsoft 365';
$string['ucp_connection_linked_desc'] = 'Enlazar sus cuentas de Moodle y Microsoft 365 le permite utilizar las características de Microsoft 365 sin cambiar la forma de iniciar la sesión en Moodle. <br />Clicar en el enlace que aparece abajo le enviará a Microsoft 365 para realizar un inicio de sesión de una sola vez, después del cual usted volverá aquí. Podrá utilizar todas las características de Microsoft 365 sin tener que hacer ningún otro cambio en su cuenta de Moodle; iniciará la sesión en Moodle como lo hace siempre.';
$string['ucp_connection_linked_migrate'] = 'Cambiar a cuenta enlazada.';
$string['ucp_connection_linked_start'] = 'Enlazar su cuenta Moodle a una cuenta Microsoft 365.';
$string['ucp_connection_linked_stop'] = 'Des-enlazar su cuenta Moodle de la cuenta Microsoft 365.';
$string['ucp_connection_options'] = 'Opciones de conexión:';
$string['ucp_connection_start'] = 'Conectarse a Microsoft 365';
$string['ucp_connection_status'] = 'La conexión a Office365 está:';
$string['ucp_connection_stop'] = 'Desconectarse de Office365';
$string['ucp_connectionstatus'] = 'Estado de la conexión';
$string['ucp_features'] = 'Características de Office365';
$string['ucp_features_intro'] = 'A continuación se muestra una lista de las funciones que usted puede utilizar para mejorar Moodle con Microsoft 365.';
$string['ucp_features_intro_notconnected'] = 'Puede ser que algunas de estas funciones no estén disponibles hasta que no esté usted conectado a Microsoft 365.';
$string['ucp_general_intro'] = 'Desde aquí puede administrar su conexión a Office365.';
$string['ucp_general_intro_notconnected_nopermissions'] = 'Para conectarse a Microsoft 365 usted debe ponerse en contacto con el administrador del sitio.';
$string['ucp_index_calendar_desc'] = 'Aquí usted puede configurar la sincronización entre sus calendarios de Moodle y de Outlook. Puede exportar eventos del calendario de Moodle a Outlook, y llevar eventos de Outlook a Moodle.';
$string['ucp_index_calendar_title'] = 'Configuraciones de sincronización de Calendario de Outlook';
$string['ucp_index_connection_desc'] = 'Configurar cómo conectarse a Microsoft 365.';
$string['ucp_index_connection_title'] = 'Configuraciones de Conexión de Microsoft 365';
$string['ucp_index_connectionstatus_connect'] = 'Haga clic aquí para conectarse';
$string['ucp_index_connectionstatus_connected'] = 'Usted está actualmente conectado a Microsoft 365';
$string['ucp_index_connectionstatus_disconnect'] = 'Desconectar';
$string['ucp_index_connectionstatus_login'] = 'Haga clic aquí para ingresar.';
$string['ucp_index_connectionstatus_manage'] = 'Gestionar conexión';
$string['ucp_index_connectionstatus_notconnected'] = 'Usted actualmente no está conectado a Microsoft 365';
$string['ucp_index_connectionstatus_reconnect'] = 'Refrescar Conexión';
$string['ucp_index_connectionstatus_title'] = 'Estatus de conexión';
$string['ucp_index_connectionstatus_usinglinked'] = 'Usted está enlazado a una cuenta de Microsoft 365.';
$string['ucp_index_connectionstatus_usinglogin'] = 'Usted está actualmente usando Microsoft 365 para ingresar a Moodle.';
$string['ucp_index_onenote_desc'] = 'La integración con OneNote le permite a Usted usar OneNote de Microsoft 365 con Moodle. Usted puede completar tareas usando OneNote y puede tomar notas para su curso con facilidad.';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_notconnected'] = 'Por favor, conéctese a Microsoft 365 antes de acceder aquí.';
$string['ucp_o365accountconnected'] = 'Esta cuenta de Microsoft 365 ya está conectada con otra cuenta de Moodle.';
$string['ucp_options'] = 'Opciones';
$string['ucp_status_disabled'] = 'Sin Conexión';
$string['ucp_status_enabled'] = 'Activa';
$string['ucp_syncdir_both'] = 'Actualizar tanto Outlook como Moodle';
$string['ucp_syncdir_in'] = 'De Outlook a Moodle';
$string['ucp_syncdir_out'] = 'De Moodle a Outlook';
$string['ucp_syncdir_title'] = 'Comportamiento de la sincronización:';
$string['ucp_syncwith_title'] = 'Sincronizar con:';
$string['ucp_title'] = 'Administración de conexión a Office365';
$string['webservices_error_assignnotfound'] = 'No pudo encontrase el registro de tarea d emódulo recibido.';
$string['webservices_error_couldnotsavegrade'] = 'No se pudo guardar la calificación.';
$string['webservices_error_sectionnotfound'] = 'La sección de curso no se pudo encontrar.';
