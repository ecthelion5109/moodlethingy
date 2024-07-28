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
 * Strings for component 'admin', language 'es_ar', version '4.5'.
 *
 * @package     admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso denegado';
$string['accountlocked'] = 'Su cuenta está bloqueada. Se enviará por correo electrónico un enlace para desbloqueo.';
$string['accounts'] = 'Cuentas';
$string['accountunlocked'] = 'Su cuenta fue desbloqueada. Puede acceder al sistema.';
$string['addcategory'] = 'Agregar una categoría';
$string['additionalhtml'] = 'HTML adicional';
$string['additionalhtml_desc'] = 'Estas opciones permiten especificar el código HTML a agregar en todas las páginas. Puede establecer el código HTML que se añadirá dentro de la etiqueta HEAD de la página, inmediatamente después de que se haya abierto la etiqueta BODY o inmediatamente antes de que  la etiqueta BODY se cierre. <br /> Hacer esto le permite agregar encabezados o pies de página personalizados en cada página o añadir fácilmente, con independencia del tema elegido, soporte para servicios como Google Analytics.';
$string['additionalhtml_heading'] = 'Acceso denegado';
$string['additionalhtmlfooter'] = 'BODY anterior esta cerrado';
$string['additionalhtmlfooter_desc'] = 'Este contenido se agregará a cada página justo antes de que se cierre la etiqueta body.';
$string['additionalhtmlhead'] = 'Dentro de HEAD';
$string['additionalhtmlhead_desc'] = 'El contenido aquí se agregará a cada página justo antes de que se cierre la etiqueta body.';
$string['additionalhtmltopofbody'] = 'Cuando BODY es abierto';
$string['additionalhtmltopofbody_desc'] = 'Este contenido se agregará a cada página inmediatamente después de la apertura de la etiqueta body.';
$string['admincategory'] = 'Categoría: {$a}';
$string['adminseesall'] = 'Los/las Administradores/as ven todo';
$string['adminseesallevents'] = 'Los/las Administradores/as ven todos los eventos';
$string['adminseesownevents'] = 'Los/las Administradores/as son los/las demás usuarios/as';
$string['advancedfeatures'] = 'Características avanzadas';
$string['agedigitalconsentverification'] = 'Verificación de la edad de consentimiento digital.';
$string['agedigitalconsentverification_desc'] = 'Habilita la verificación de la edad digital de consentimiento antes de mostrar la página de alta para auto-registrar usuarios. Esto protege a su sitio de menores de edad que se podrían anotar sin el consentimiento de sus madres, padres o tutores/as. Los detalles del <a target="_blank" href="{$a}">Contacto para soporte</a> son proporcionados a menores de edad para más asistencia.';
$string['ageofdigitalconsentmap'] = 'Edad digital de consentimiento';
$string['ageofdigitalconsentmap_desc'] = 'Aquí se puede especificar la edad digital de consentimiento predeterminada y la edad en cualquier país en el que difiera de la predeterminada. Ingrese cada edad en una nueva línea con formato: código de país, edad (separados por una coma). La edad predeterminada se indica con * en lugar del código de país. Los códigos de país son los especificados en ISO 3166-2.';
$string['allcountrycodes'] = 'Todos los códigos de país';
$string['allowattachments'] = 'Permitir adjuntos';
$string['allowbeforeblock'] = 'La lista de permitidos se procesará primero';
$string['allowbeforeblockdesc'] = 'Por defecto, las entradas de las IPs bloqueadas se procesan primero. Pero si esta opción se activa, las entradas de la lista de IPs permitidas se procesarán antes que la lista bloqueada.';
$string['allowcategorythemes'] = 'Permitir temas de categoría';
$string['allowcohortthemes'] = 'Permitir temas de cohorte';
$string['allowcoursethemes'] = 'Permitir temas de curso';
$string['allowedemaildomains'] = 'Dominios de email permitidos';
$string['allowediplist'] = 'Lista de IP permitidas';
$string['allowemailaddresses'] = 'Dominios de email permitidos';
$string['allowemojipicker'] = 'Selector de emoji';
$string['allowframembedding'] = 'Permitir incrustación de marcos';
$string['allowframembedding_help'] = 'Si está habilitado, este sitio puede estar incrustado en un marco en un sistema remoto, como se recomienda cuando se usa el complemento de inscripción \'Publicar como herramienta LTI\'. De lo contrario, se recomienda dejar la incrustación de marcos deshabilitada por razones de seguridad. Tenga en cuenta que para la aplicación móvil, esta configuración se ignora y siempre se permite la incrustación de marcos.';
$string['allowguestmymoodle'] = 'Permitir el acceso de invitados/as al Área Personal';
$string['allowindexing'] = 'Permitir la indexación por motores de búsqueda';
$string['allowindexing_desc'] = 'Esto determina si se va a permitir que los motores de búsqueda indexen su sitio. "En todas partes" permitirá que los motores de búsqueda busquen en todas partes, incluidas las páginas de inicio de sesión y registro, lo que significa que los sitios con Forzar inicio de sesión activado todavía están indexados. Para evitar el riesgo de spam relacionado con la búsqueda de la página de registro, use "En todas partes excepto en las páginas de inicio de sesión y registro". "Nowhere" le dirá a los motores de búsqueda que no indexen ninguna página. Tenga en cuenta que esto es solo una etiqueta en el encabezado del sitio. Depende del motor de búsqueda respetar la etiqueta.';
$string['allowindexingeverywhere'] = 'En todas partes';
$string['allowindexingexceptlogin'] = 'En todas partes excepto en las páginas de inicio de sesión y registro';
$string['allowindexingnowhere'] = 'En ninguna parte';
$string['allowobjectembed'] = 'Permitir etiquetas EMBED y OBJECT';
$string['allowthemechangeonurl'] = 'Permitir cambios de tema en el enlace (URL)';
$string['allowuserblockhiding'] = 'Permitir el acceso a bloques ocultos';
$string['allowusermailcharset'] = 'Permitir cambiar el conjunto de caracteres';
$string['allowuserswitchrolestheycantassign'] = 'Permitir a usuarios/as sin el permiso para asignar roles cambiar de rol.';
$string['allowuserthemes'] = 'Permitir estilos a usuario/a';
$string['alternativefullnameformat'] = 'Formato alternativo de nombre completo';
$string['alternativefullnameformat_desc'] = 'Define como se muestran los nombres a usuarios/as que tienen activada la capacidad "viewfullnames" (por defecto, disponible en cuentas con roles de gestor, docente o docente sin permisos de edición). Los marcadores que pueden ser usados vienen determinados por el parámetro \'Formato de nombre completo\'.';
$string['always'] = 'Siempre';
$string['appearance'] = 'Apariencia';
$string['aspellpath'] = 'Ruta de aspell';
$string['asyncbackupdisabled'] = 'Su sitio está actualmente configurado para utilizar copias de seguridad sincrónicas. Las copias de seguridad asincrónicas brindan una mejor experiencia de usuario.
Se habilitarán copias de seguridad asincrónicas para todos los sitios desde Moodle LMS 4.5 LTS.
Las copias de seguridad síncronas se eliminarán de Moodle LMS en la versión posterior a 4.5 LTS';
$string['authentication'] = 'Autenticación';
$string['authpreventaccountcreation'] = 'Prevenir creación de cuentas al autenticarse';
$string['authpreventaccountcreation_help'] = 'Cuando una persona se identifica, si aún no existe su cuenta, se crea una en el sitio de forma automática. Si se utiliza una base de datos externa para la identificación, por ejemplo LDAP, pero se desea restringir el acceso al sitio solo a usuarios/as con una cuenta existente, esta opción debe estar habilitada. Las nuevas cuentas tendrán que ser creadas manualmente o mediante la función de carga de usuarios/as. Tenga en cuenta que este ajuste no se aplica a la identificación MNet.';
$string['authsettings'] = 'Gestionar autenticación';
$string['autolang'] = 'Autodetectar lenguaje';
$string['autolangusercreation'] = 'Al crear la cuenta, configure el idioma del navegador como su idioma preferido';
$string['autologinguests'] = 'Acceso automático de personas invitadas';
$string['availableto'] = 'Disponible para';
$string['availabletoanyone'] = 'Disponible para cualquier persona visitante del sitio';
$string['availabletoauthenticated'] = 'Limitado a personas autenticadas';
$string['backgroundcolour'] = 'Color transparente';
$string['backup_shortname'] = 'Usar el nombre del curso en las copias de seguridad';
$string['backup_shortnamehelp'] = 'Usar el nombre del curso como parte del nombre de archivo de la copia de seguridad';
$string['backups'] = 'Copias de seguridad';
$string['badwordsconfig'] = 'Ingrese su lista de malas palabras, separadas por coma.';
$string['badwordsdefault'] = 'Si la lista personalizada está vacía, se utilizará una lista por defecto tomada del paquete de idioma';
$string['badwordslist'] = 'Lista personalizada de malas palabras';
$string['blockediplist'] = 'Lista de IP bloqueadas';
$string['blockinstances'] = 'Instancias';
$string['blockmultiple'] = 'Múltiple';
$string['blockprotect'] = 'Proteger instancias';
$string['blockprotect_help'] = 'Si bloquea un tipo particular de bloque, entonces nadie podrá agregar ni eliminar instancias. (Por supuesto, puede desbloquearlo nuevamente si necesita editar instancias).

Esto tiene como objetivo proteger bloques como la navegación y la configuración que son muy difíciles de recuperar si se eliminan accidentalmente.';
$string['blockprotectblock'] = 'Proteger instancias de {$a}';
$string['blockprotected'] = '{$a} instancias de bloque están protegidas.';
$string['blocksettings'] = 'Administrar bloques';
$string['blockunprotect'] = 'Desproteger';
$string['blockunprotectblock'] = 'Desproteger instancias de {$a}';
$string['blockunprotected'] = '{$a} instancias de bloque están desprotegidas.';
$string['bloglevel'] = 'Visibilidad del blog.';
$string['bookmarkadded'] = 'Marcador agregado.';
$string['bookmarkalreadyexists'] = 'Ya has marcado esta página como favorita.';
$string['bookmarkdeleted'] = 'Favorita borrada.';
$string['bookmarkthispage'] = 'Marcar como favorita esta página';
$string['cacheapplication'] = 'Caché de la aplicación';
$string['cacheapplicationhelp'] = 'Los ítems almacenados en caché se comparten entre todas las cuentas y expiran en un tiempo de vida determinado (ttl).';
$string['cachejs'] = 'Javascript caché';
$string['cachejs_help'] = 'El almacenamiento en caché y la compresión de Javascript mejoran enormemente el rendimiento de carga de la página. Se recomienda encarecidamente para sitios de producción. Los/las desarrolladores/as probablemente quieran desactivar esta característica.';
$string['cacherequest'] = 'Solicitar caché';
$string['cacherequesthelp'] = 'Caché específica de usuario/a que caduca cuando se completa la solicitud. Diseñada para remplazar áreas en donde estamos usando los almacenamientos estáticos.';
$string['cachesession'] = 'Caché de la sesión';
$string['cachesessionhelp'] = 'Caché específica del usuario/a que caduca cuando termina la sesión de la persona. Diseñada para aliviar la sobrecarga de la sesión.';
$string['cachesettings'] = 'Configuración de caché';
$string['cachetemplates'] = 'Plantillas de caché';
$string['cachetemplates_help'] = 'La caché de plantillas mejorará el rendimiento de carga y es altamente recomendado para sitios en producción. Los desarrolladores probablemente deseen mantener esta característica desactivada.';
$string['caching'] = 'Almacenamiento en caché';
$string['calendar_weekend'] = 'Días de fin de semana';
$string['calendarexportsalt'] = 'Sal de exportación de calendario';
$string['calendarsettings'] = 'Calendario';
$string['calendartype'] = 'Tipo de calendario';
$string['calendartype_desc'] = 'Elija un tipo de calendario por defecto para todo el sitio. Este ajuste se puede sobrescribir por los ajustes de la configuración del curso o por los del perfil personal de usuario/a';
$string['campaign'] = 'Campaña';
$string['cannotdeletemodfilter'] = 'No es posible desinstalar el \'{$a->filter}\' porque no es parte del módulo \'{$a->module}\'.';
$string['cannotuninstall'] = '{$a} no se puede desinstalar.';
$string['categoryemail'] = 'Correo';
$string['cfgwwwrootslashwarning'] = '$CFG->wwwroot definido de manera incorrecta en el archivo config.php. Incluye el caracter \'/\' al final, el cual debe ser removido.';
$string['cfgwwwrootwarning'] = '$CFG->wwwroot definido incorrectamente en el archivo config.php. El mismo debe coincidir con la URL que se está usando para acceder a esta página.';
$string['change'] = 'cambio';
$string['checkboxno'] = 'No';
$string['checkboxyes'] = 'Sí';
$string['checkupgradepending'] = 'Actualización';
$string['choosefiletoedit'] = 'Seleccione archivo para editar';
$string['cleanup'] = 'Limpieza';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 's';
$string['cliexitgraceful'] = 'Saliendo con gracia, por favor espere...';
$string['cliexitnow'] = 'Saliendo ahora mismo';
$string['cliincorrectvalueerror'] = 'Error, valor incorrecto "{$a->value}" para "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Valor incorrecto, por favor reintentar';
$string['clistatusdisabled'] = 'Estado: deshabilitado';
$string['clistatusenabled'] = 'Estado: habilitado';
$string['clistatusenabledlater'] = 'estado: el modo de mantenimiento CLI se habilitará el {$a}';
$string['clitypevalue'] = 'tipear el valor';
$string['clitypevaluedefault'] = 'tipear el valor, presionar Enter para usar el valor por defecto  ({$a})';
$string['cliunknowoption'] = 'Opciones no reconocidas:
   {$a}
Utilice la opción --help.';
$string['cliupgradecompletenomaintenanceupgrade'] = 'Para eliminar los cachés restantes después de pasar el tráfico de usuarios a un código nuevo:

   php admin/cli/purge_caches.php --muc
   php admin/cli/purge_caches.php --js
   php admin/cli/purge_caches.php --filtro
   php admin/cli/purge_caches.php --otro

Debe realizar estas purgas de forma aislada, con un espacio entre los comandos, para reducir los picos de carga en el servidor web.';
$string['cliupgradedefault'] = 'Nueva configuración: {$a}';
$string['cliupgradedefaultheading'] = 'Configurar nuevos valores predeterminados';
$string['cliupgradedefaultverbose'] = 'Nueva configuración: {$a->name}, Valor predeterminado: {$a->defaultsetting}';
$string['cliupgradefinished'] = 'La actualización de la línea de comando de  {$a->oldversion} a {$a->newversion} se completó correctamente.';
$string['cliupgrademaintenancenotrequired'] = 'Esta actualización NO dará como resultado el modo de mantenimiento para los usuarios.';
$string['cliupgrademaintenancerequired'] = 'Esta actualización DARÁ como resultado el modo de mantenimiento para los usuarios.';
$string['cliupgradenoneed'] = 'No se necesita actualización para la versión instalada {$a}. ¡Gracias por venir de todos modos!';
$string['cliupgradepending'] = 'Hay una actualización pendiente';
$string['cliupgradesetlock'] = 'La actualización se ha bloqueado solo para la ejecución CLI.';
$string['cliupgradeunsetlock'] = 'Se eliminó el bloqueo de actualización de ejecución de CLI existente.';
$string['cliyesnoprompt'] = 'Tipear y (significa sí) o n (significa no)';
$string['close'] = 'Cerrar';
$string['cohort_customfield'] = 'Campos personalizados de cohorte';
$string['commentsperpage'] = 'Comentarios mostrados por página';
$string['commonactivitysettings'] = 'Configuraciones de actividad comunes';
$string['commonfiltersettings'] = 'Configuraciones de filtro comunes';
$string['commonsettings'] = 'Configuraciones comunes';
$string['componentinstalled'] = 'Componente instalado';
$string['computedfromlogs'] = 'Calculado a partir de registros desde {$a}.';
$string['condifmodeditdefaults'] = 'Los valores predeterminados se utilizan en el formulario de configuración al crear una nueva actividad o recurso.';
$string['confeditorhidebuttons'] = 'Seleccione los botones que deberían estar ocultos en el editor HTML.';
$string['configallcountrycodes'] = 'Esta es la lista de países que pueden ser seleccionadas en varios lugares, por ejemplo, en el perfil de una persona. Si está en blanco (por defecto) se utilizará la lista de \'countries.php\' en el paquete de idioma Inglés estándar. Esta es la lista de la norma ISO 3166-1. De lo contrario, puede especificar una lista separada por comas de los códigos, por ejemplo, "GB, FR, ES. Si se agregan nuevos códigos, no estándar aquí, tendrá que agregarlos a countries.php en \'en\' y su paquete de idioma.';
$string['configallowassign'] = 'Para cada rol en la columna de la izquierda, seleccione qué roles pueden asignar a otros.';
$string['configallowattachments'] = 'Si está habilitado, los correos electrónicos enviados desde el sitio pueden tener archivos adjuntos, como insignias.';
$string['configallowcategorythemes'] = 'Si habilita esto, los temas se pueden configurar a nivel de categoría. Esto afectará a todas las categorías y cursos hijos, a menos que hayan establecido específicamente su propio tema. ADVERTENCIA: Habilitar temas de categorías puede afectar el rendimiento.';
$string['configallowcohortthemes'] = 'Si activa esto, se podrán asignar temas a nivel de cohorte. Esto afecta a todas las personas con solo una cohorte o con varias cohortes que usen el mismo tema.';
$string['configallowcoursethemes'] = 'Si está habilitado, los cursos podrán establecer sus propios temas. Los temas del curso anulan todas las demás opciones de temas (sitio, usuario, categoría, cohorte o temas definidos por URL).';
$string['configallowedemaildomains'] = 'Enumere los dominios de correo electrónico que pueden divulgarse en la sección "De" del correo electrónico saliente. La opción predeterminada "Vacío" utilizará la dirección sin respuesta para todos los correos electrónicos salientes. Se permite el uso de comodines, p.e. *.example.com permitirá correos electrónicos enviados desde cualquier subdominio de ejemplo.com, pero no desde el propio ejemplo.com. Esto requerirá una entrada por separado.';
$string['configallowemailaddresses'] = 'Para restringir nuevas direcciones de correo electrónico a dominios particulares, enumérelas aquí separadas por espacios. Todos los demás dominios serán rechazados. Para permitir subdominios, agregue el dominio con un \'.\' anterior. Para permitir un dominio raíz junto con sus subdominios, agregue el dominio dos veces, una con un \'.\' anterior. y una vez sin \'.\' p.e. .ourcollege.edu.au nuestrocollege.edu.au.';
$string['configallowemojipicker'] = 'El selector de emoji permite a los usuarios seleccionar emojis, como emoticones, para agregarlos a mensajes y otras áreas de texto a través de un botón de selección de emoji en la barra de herramientas de Atto.';
$string['configallowemojipickerincompatible'] = 'La configuración actual de su base de datos no admite emojis correctamente. Para habilitar el selector de emoji necesitarás <a href="https://docs.moodle.org/en/MySQL_full_unicode_support">actualizar tu base de datos para obtener compatibilidad total con Unicode</a>.';
$string['configallowguestmymoodle'] = 'Si está habilitado, visitantes sin cuenta pueden acceder al Panel. De lo contrario, estas personas serán redirigidas a la página de inicio del sitio.';
$string['configallowobjectembed'] = 'Como medida de seguridad predeterminada, normalmente no se puede incrustar multimedia (como Flash) en textos usando etiquetas EMBED y OBJECT explícitas en su HTML (aunque aún se puede hacer de forma segura usando el filtro mediaplugins). Si desea permitir estas etiquetas, habilite esta opción.';
$string['configallowoverride'] = 'Puede permitir que las personas con los roles del lado izquierdo anulen algunos de los roles de la columna.';
$string['configallowoverride2'] = 'Para cada rol en la columna de la izquierda, seleccione para qué roles se pueden establecer anulaciones.<br />Las personas también deben tener la capacidad moodle/role:override o moodle/role:safeoverride.';
$string['configallowswitch'] = 'Para cada rol en la columna de la izquierda, seleccione a qué roles pueden cambiar.<br />Las personas también deben tener la capacidad moodle/role:switchroles.';
$string['configallowthemechangeonurl'] = 'Si está habilitado, el tema se puede cambiar agregando:<br />?theme=nombredeltema a cualquier URL de Moodle (por ejemplo: mymoodlesite.com/?theme=afterburner) o <br />&theme=nombre del tema a cualquier URL interna de Moodle ( por ejemplo: mymoodlesite.com/course/view.php?id=2&theme=afterburner).';
$string['configallowuserblockhiding'] = '¿Quiere permitir ocultar/mostrar bloques laterales en todo este sitio? Esta función utiliza Javascript y cookies para recordar el estado de cada bloque plegable y solo afecta la vista de la persona.';
$string['configallowusermailcharset'] = 'Si está habilitado, se puede elegir un juego de caracteres de correo electrónico en las preferencias de mensajería.';
$string['configallowuserswitchrolestheycantassign'] = 'De forma predeterminada, se requiere moodle/role:assign para que las personas cambien de roles. Habilitar esta configuración elimina este requisito y da como resultado que los roles disponibles en el menú desplegable "Cambiar rol a" estén determinados únicamente por la configuración en la tabla "Permitir asignaciones de roles".
Se recomienda que la configuración en la tabla "Permitir asignaciones de roles" no permita a las personas cambiar a un rol con más capacidades que su rol existente.';
$string['configallowuserthemes'] = 'Si habilita esto, las personas podrán configurar sus propios temas. Los temas de usuario/a anulan los temas del sitio (pero no los temas del curso)';
$string['configallowview'] = 'Para cada rol en la columna de la izquierda, seleccione qué roles se pueden ver, buscar y filtrar.';
$string['configallusersaresitestudents'] = 'Para actividades en el inicio del sitio, ¿deberían todas las personas ser consideradas como estudiantes? Si la respuesta es afirmativa, entonces cualquier persona con cuenta tendrá permitido participar de las actividades como estudiante. De lo contrario, sólo personas con rol de estudiante en al menos un curso podrán participar. Sólo equipo de administración y docentes que se seleccionen podrán actuar como docentes en actividades del inicio del sitio.';
$string['configauthenticationplugins'] = 'Por favor, elija los complementos de autenticación que desea utilizar y organícelos en orden de falla.';
$string['configautolang'] = 'Detecta el idioma predeterminado desde la configuración del navegador, si está deshabilitada la configuración predeterminada del  sitio.';
$string['configautolangusercreation'] = 'Si está habilitado, cuando la cuenta de un usuario se crea automáticamente en el primer inicio de sesión (por ejemplo, usando autenticación LDAP u OAuth 2), el idioma del navegador de la persona se establece como su idioma preferido. De lo contrario, el idioma predeterminado del sitio se establece como el idioma preferido de la persona.';
$string['configautologinguests'] = '¿Las personas que no tienen cuenta deberían iniciar sesión automáticamente como visitantes cuando ingresan a cursos que lo permiten?';
$string['configbloglevel'] = 'Esta configuración le permite restringir el nivel al que se pueden ver los blogs de participantes en este sitio. Tenga en cuenta que especifican el contexto máximo del VISOR, no el cartel ni los tipos de publicaciones del blog. Los blogs también se pueden desactivar por completo si no los deseas.';
$string['configcalendarcustomexport'] = 'Habilita la exportación de rango de fechas personalizado del calendario';
$string['configcalendarexportsalt'] = 'Este texto aleatorio se utiliza para mejorar la seguridad de los tokens de autenticación utilizados para exportar calendarios. Tenga en cuenta que todos los tokens actuales se invalidan si cambia esta cadena hash.';
$string['configcookiesecure'] = 'Si el servidor acepta solo conexiones https, se recomienda habilitar el envío de cookies seguras. Si está habilitado, asegúrese de que el servidor web no acepte http:// o configure la redirección permanente a la dirección https:// e idealmente envíe encabezados HSTS. Cuando la dirección <em>wwwroot</em> no comienza con https://, esta configuración es ignorada.';
$string['configcountry'] = 'Si configura un país aquí, este país se seleccionará de forma predeterminada en las nuevas cuentas. Para obligar a elegir un país, simplemente déjelo sin configurar.';
$string['configcoursegraceperiodafter'] = 'Clasifique los cursos anteriores como en proceso durante estos días posteriores a la fecha de finalización del curso.';
$string['configcoursegraceperiodbefore'] = 'Clasifique los cursos futuros como en proceso durante estos días antes de la fecha de inicio del curso.';
$string['configcourseoverviewfilesext'] = 'Una lista separada por comas de las extensiones de archivo de imagen del curso permitidas.';
$string['configcourseoverviewfileslimit'] = 'La cantidad máxima de archivos que se pueden mostrar junto al resumen del curso en la página de lista de cursos. El primer archivo de imagen agregado se utiliza como imagen del curso en la descripción general del curso en los Paneles de cada participante; cualquier archivo adicional se muestra únicamente en la página de lista de cursos.';
$string['configcourserequestnotify'] = 'Escriba el nombre de la cuenta a ser notificada cuando se solicite un nuevo curso.';
$string['configcourserequestnotify2'] = 'Personas que serán notificadas cuando se solicite un curso. Aquí solo se enumeran las personas que pueden aprobar solicitudes de cursos.';
$string['configcoursesperpage'] = 'Ingrese la cantidad de cursos que se mostrarán por página en una lista de cursos.';
$string['confighiddenuserfields'] = 'Elija qué campos de información de las cuentas desea ocultar para otras personas que no sean admins o docentes. Esto incrementará la privacidad. Mantenga presionada la tecla CTRL para elegir múltiples campos.';
$string['configrequestedteachername'] = 'Palabra para "docente" usada en cursos solicitados';
$string['configrequestedteachersname'] = 'Palabra para "docentes" usada en cursos solicitados';
$string['cronerrorclionly'] = 'Lamentablemente el acceso a esta página a través de Internet fue deshabilitado por quienes administran.';
