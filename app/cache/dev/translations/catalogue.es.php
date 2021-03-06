<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'The fields {{ fields }} were not expected.' => 'No se esperaban los campos {{ fields }}.',
    'The fields {{ fields }} are missing.' => 'Faltan los campos {{ fields }}.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La anchura de la imagen es demasiado grande ({{ width }}px). La anchura máxima permitida son {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La anchura de la imagen es demasiado pequeña ({{ width }}px). La anchura mínima requerida son {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida son {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida son {{ min_height }}px.',
    'This value should be the user current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). Maxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). Mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Imágenes cuadradas no son permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontal ({{ width }}x{{ height }}px). Imágenes orientada horizontal no está permitido.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada vertical ({{ width }}x{{ height }}px). Imágenes orientada vertical no está permitido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe de enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario',
    'fos_user.username.short' => '[-Inf,Inf]El nombre de usuario es demasiado corto',
    'fos_user.username.long' => '[-Inf,Inf]El nombre de usuario es demasiado largo',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo',
    'fos_user.email.short' => '[-Inf,Inf]La dirección de correo es demasiado corta',
    'fos_user.email.long' => '[-Inf,Inf]La dirección de correo es demasiado larga',
    'fos_user.email.invalid' => 'La dirección de correo no es válida',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña',
    'fos_user.password.short' => '[-Inf,Inf]La contraseña es demasiado corta',
    'fos_user.password.mismatch' => 'La contraseña ingresada no coincide',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña',
    'fos_user.new_password.short' => '[-Inf,Inf]La nueva contraseña es demasiado corta',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre',
    'fos_user.group.short' => '[-Inf,Inf]El nombre es demasiado corto',
    'fos_user.group.long' => '[-Inf,Inf]El nombre es demasiado largo',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Agregar nuevo',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Borrar',
    'btn_batch' => 'OK',
    'btn_create' => 'Crear',
    'btn_create_and_edit_again' => 'Crear y editar',
    'btn_create_and_create_a_new_one' => 'Crear y agregar otro',
    'btn_create_and_return_to_list' => 'Crear y regresar al listado',
    'btn_filter' => 'Filtrar',
    'btn_update' => 'Actualizar',
    'btn_update_and_edit_again' => 'Actualizar',
    'btn_update_and_return_to_list' => 'Actualizar y cerrar',
    'link_delete' => 'Borrar',
    'link_action_create' => 'Agregar nuevo',
    'link_action_list' => 'Volver a la lista',
    'link_action_show' => 'Mostrar',
    'link_action_edit' => 'Editar',
    'link_add' => 'Agregar nuevo',
    'link_list' => 'Listar',
    'link_reset_filter' => 'Resetear',
    'title_create' => 'Crear',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Editar "%name%"',
    'title_list' => 'Listar',
    'link_next_pager' => 'Siguiente',
    'link_previous_pager' => 'Anterior',
    'link_first_pager' => 'Primero',
    'link_last_pager' => 'Último',
    'Admin' => 'Siap',
    'link_expand' => 'expandir/ocultar',
    'no_result' => 'No hay resultados',
    'confirm_msg' => '¿Estás seguro?',
    'action_edit' => 'Editar',
    'action_show' => 'Mostrar',
    'all_elements' => 'Todos los elementos',
    'flash_batch_empty' => 'Acción cancelada. Ningún item seleccionado.',
    'flash_create_success' => 'Elemento creado satisfactoriamente.',
    'flash_create_error' => 'Se ha producido un error durante la creación del elemento.',
    'flash_edit_success' => 'Elemento actualizado satisfactoriamente.',
    'flash_edit_error' => 'Se ha producido un error durante la actualización del elemento.',
    'flash_batch_delete_success' => 'Los elementos seleccionados fueron eliminados satisfactoriamente.',
    'flash_batch_delete_error' => 'Se ha producido un error durante la eliminación de los elementos selecciondaos.',
    'flash_delete_error' => 'Se ha producido un error durante la eliminación del elemento.',
    'flash_delete_success' => 'Elemento eliminado satisfactoriamente.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Confirmar borrado',
    'message_delete_confirmation' => '¿Está seguro que quiere borrar el elemento seleccionado?',
    'btn_delete' => 'Sí, borrar',
    'title_batch_confirmation' => 'Confirme la operación',
    'message_batch_confirmation' => '{0}¿Está seguro que quiere confirmar y ejecutar esta acción para todos los elementos seleccionados?|[1,+Inf[¿Está seguro que quiere confirmar y ejecutar esta acción para todos los %count% elementos seleccionados?',
    'message_batch_all_confirmation' => '¿Está seguro que quiere confirmar y ejecutar esta acción para todos los elementos?',
    'btn_execute_batch_action' => 'Sí, ejecutar',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'label_type_contains' => 'contiene',
    'label_type_not_contains' => 'no contiene',
    'label_type_equals' => 'es igual a',
    'label_type_not_equals' => 'no es igual a',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'está vacío',
    'label_date_type_not_null' => 'no está vacío',
    'label_date_type_between' => 'entre',
    'label_date_type_not_between' => 'no entre',
    'label_filters' => 'Filtros',
    'delete_or' => 'o',
    'link_action_history' => 'Revisiones',
    'td_action' => 'Acción',
    'td_revision' => 'Revisiones',
    'td_timestamp' => 'Fecha',
    'td_username' => 'Autor',
    'label_view_revision' => 'Ver Revisión',
    'list_results_count' => '1 resultado|%count% resultados',
    'label_export_download' => 'Exportar',
    'loading_information' => 'Cargando información...',
    'btn_preview' => 'Vista preliminar',
    'btn_preview_approve' => 'Aprobar',
    'btn_preview_decline' => 'Cancelar',
    'label_per_page' => 'Por página',
    'list_select' => 'Seleccionar',
    'confirm_exit' => 'Tienes cambios sin guardar.',
    'link_edit_acl' => 'Editar ACL',
    'btn_update_acl' => 'Actualizar ACL',
    'flash_acl_edit_success' => 'ACL actualitzada correctamente.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Ninguna selección',
    'title_search_results' => 'Resultados de la búsqueda: %query%',
    'search_placeholder' => 'Buscar',
    'no_results_found' => 'No se han encontrado resultados',
    'add_new_entry' => 'añadir nueva entrada',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Nombre de usuario o Contraseña inválido',
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado',
    'group.flash.created' => 'El grupo ha sido creado',
    'group.flash.deleted' => 'El grupo ha sido borrado',
    'security.login.username' => 'Nombre de usuario:',
    'security.login.password' => 'Contraseña:',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'resetting.password_already_requested' => 'La contraseña para este usuario ya ha sido solicitada dentro de las 24 horas.',
    'resetting.check_email' => 'Un email ha sido enviado a %email%. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.',
    'resetting.request.invalid_username' => 'El usuario o dirección de correo "%username%" no existe.',
    'resetting.request.username' => 'Nombre de usuario:',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito',
    'resetting.email.subject' => 'Bienvenido %username%!',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo:',
    'form.username' => 'Nombre de usuario:',
    'form.email' => 'Email:',
    'form.current_password' => 'Contraseña actual:',
    'form.password' => 'Contraseña:',
    'form.password_confirmation' => 'Repita la contraseña:',
    'form.new_password' => 'Nueva contraseña:',
    'form.new_password_confirmation' => 'Repita la contraseña:',
  ),
  'SonataUserBundle' => 
  array (
    'title_user_registration' => 'Registro de Usuario',
    'title_user_account' => 'Perfil de Usuario',
    'title_user_edit_profile' => 'Editar',
    'title_user_authentication' => 'Autenticación',
    'sonata_user_submit' => 'Enviar',
    'breadcrumb.link_user_list' => 'Usuarios',
    'breadcrumb.link_user_create' => 'Crear',
    'breadcrumb.link_user_edit' => 'Editar',
    'breadcrumb.link_user_delete' => 'Borrar',
    'breadcrumb.link_group_list' => 'Grupos',
    'breadcrumb.link_group_create' => 'Crear',
    'breadcrumb.link_group_edit' => 'Editar',
    'users' => 'Usuarios',
    'groups' => 'Grupos',
    'switch_user_exit' => 'Terminar modo de suplantación de usuarios',
    'switch_user' => 'Suplantar usuario',
    'user_block_logout' => 'Cerrar sesión',
    'form.label_username' => 'Nombre de usuario',
    'form.label_email' => 'Dirección de correo electrónico',
    'form.label_plain_password' => 'Contraseña',
    'form.label_groups' => 'Grupos',
    'form.label_roles' => 'Perfiles',
    'form.label_locked' => 'Bloqueado',
    'form.label_expired' => 'Expirado',
    'form.label_enabled' => 'Habilitado',
    'form.label_credentials_expired' => 'Credenciales caducadas',
    'form.label_name' => 'Nombre',
    'filter.label_username' => 'Nombre de usuario',
    'filter.label_name' => 'Nombre',
    'filter.label_email' => 'Dirección de correo electrónico',
    'filter.label_locked' => 'Bloqueado',
    'filter.label_id' => 'ID',
    'filter.label_groups' => 'Grupos',
    'filter.label_firstname' => 'Nombre',
    'filter.label_lastname' => 'Apellido',
    'list.label_username' => 'Nombre de usuario',
    'list.label_name' => 'Nombre',
    'list.label_email' => 'Dirección de correo electrónico',
    'list.label_groups' => 'Grupos',
    'list.label_locked' => 'Bloqueado',
    'list.label_enabled' => 'Habilitado',
    'list.label_created_at' => 'Creado en',
    'list.label_impersonating' => 'Suplantar usuario',
    'list.label_roles' => 'Perfiles',
    'list.label_firstname' => 'Nombre',
    'list.label_lastname' => 'Apellido',
    'label_two_step_code' => 'Verificación de dos pasos',
    'message_two_step_code_help' => 'Ingrese el código de verificación generado por la aplicación de su móvil.',
    'label_two_step_code_error' => 'El código de verificación no es válido.',
    'sonata_user' => 'Usuario',
    'General' => 'General',
    'Groups' => 'Grupos',
    'Management' => 'Administración',
    'field.label_roles_editable' => 'Roles',
    'form.label_date_of_birth' => 'Fecha de nacimiento',
    'form.label_firstname' => 'Nombre',
    'form.label_lastname' => 'Apellido',
    'form.label_website' => 'Sitio web',
    'form.label_biography' => 'Biografía',
    'form.label_gender' => 'Sexo',
    'form.label_locale' => 'Localización',
    'form.label_timezone' => 'Zona horaria',
    'form.label_phone' => 'Teléfono',
    'form.label_facebook_uid' => 'UID de Facebook',
    'form.label_facebook_name' => 'Nombre en Facebook',
    'form.label_twitter_uid' => 'UID de Twitter',
    'form.label_twitter_name' => 'Nombre en Twitter',
    'form.label_gplus_uid' => 'UID de Google+',
    'form.label_gplus_name' => 'Nombre en Google+',
    'form.label_token' => 'Token',
    'form.label_two_step_verification_code' => 'Código de verificación de dos pasos',
    'show.label_username' => 'Nombre de usuario',
    'show.label_email' => 'Correo electrónico',
    'show.label_groups' => 'Grupos',
    'show.label_date_of_birth' => 'Fecha de nacimiento',
    'show.label_firstname' => 'Nombre',
    'show.label_lastname' => 'Apellido',
    'show.label_website' => 'Sitio web',
    'show.label_biography' => 'Biografía',
    'show.label_gender' => 'Sexo',
    'show.label_locale' => 'Localización',
    'show.label_timezone' => 'Zona horaria',
    'show.label_phone' => 'Teléfono',
    'show.label_facebook_uid' => 'UID de Facebook',
    'show.label_facebook_name' => 'Nombre en Facebook',
    'show.label_twitter_uid' => 'UID de Twitter',
    'show.label_twitter_name' => 'Nombre en Twitter',
    'show.label_gplus_uid' => 'UID de Google+',
    'show.label_gplus_name' => 'Nombre en Google+',
    'show.label_token' => 'Token',
    'show.label_two_step_verification_code' => 'Código de verificación de dos pasos',
    'breadcrumb.link_user_show' => 'Mostrar',
    'gender_unknown' => 'Desconocido',
    'gender_female' => 'Femenino',
    'gender_male' => 'Masculino',
    'sonata_profile_title' => 'Dashboard',
    'link_show_profile' => 'Dashboard',
    'link_edit_profile' => 'Perfil',
    'title_user_edit_authentication' => 'Autenticación',
    'link_edit_authentication' => 'Autenticación',
    'label_profile_gender' => 'Género',
    'label_profile_firstname' => 'Nombre',
    'label_profile_lastname' => 'Apellido',
    'label_profile_website' => 'Sitio Web',
    'label_profile_dob' => 'Fecha de nacimiento',
    'label_profile_biography' => 'Biografía',
    'label_profile_locale' => 'Idioma',
    'label_profile_timezone' => 'Zona horaria',
    'label_profile_phone' => 'Teléfono',
    'profile.flash.updated' => 'El perfil ha sido actualizado exitosamente',
    'sonata_change_password_link' => 'Cambiar contraseña',
    'link_register' => 'Registrar',
    'link_login' => 'Iniciar sesión',
    'link_logout' => 'Cerrar sesión',
    'registration.flash.user_created' => 'La cuenta ha sido actualizada exitosamente',
    'forgotten_password' => 'Restablecer contraseña',
    'sonata_user_profile_breadcrumb_index' => 'Dashboard',
    'sonata_user_profile_breadcrumb_edit' => 'Editar perfil',
    'sonata_user_already_authenticated' => 'Usted ya ha iniciado sesión',
    'security.login.username' => 'Usuario',
    'security.login.password' => 'Contraseña',
    'form.username' => 'Usuario',
    'form.email' => 'Email',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Verificar contraseña',
    'Bad credentials' => 'Error en las credenciales',
  ),
  'messages' => 
  array (
    'establecimiento' => 'Establecimiento de salud',
    'id_modalidad' => 'Modalidad de atención',
    'Id Municipio' => 'Municipio',
    'idModalidadEstab' => 'Modalidad del Establecimiento',
    'Id Tipo Establecimiento' => 'Tipo Establecimiento',
    'form.label_id_establecimiento' => 'Establecimiento',
    'Action' => 'Acción',
    'Mnt Ambiente Area Establecimiento List' => 'Servicios de hospitalización',
    'Mnt Modalidad Establecimiento List' => 'Modalidad del Establecimiento - Listado',
    'Ctl Establecimiento List' => 'Establecimiento - Listado',
    'Mnt Area Mod Estab List' => 'Áreas de atención del Establecimiento',
    'Mnt Aten Area Mod Estab List' => 'Servicios Hospitalización',
    'Mnt Aten Area Mod Estab Edit' => 'Editando Servicio',
    'Mnt Paciente List' => 'Buscar Paciente',
    'Mnt Conexion List' => 'Conexion - Listado',
    'Mnt Expediente List' => 'Expedientes Creados',
    'Mnt Expediente Listarexpedientes' => '',
    'idAreaCotizacion' => 'Área Cotización',
    'numeroDocIdeResponsable' => 'Número Documento Responsable',
    'nombreProporcionoDatos' => 'Nombre',
    'numeroDocIdeProporDatos' => 'Número de Documento *',
    'numeroDocIdePaciente' => 'Número Documento Paciente *',
    'idDepartamentoDomicilio' => 'Departamento Domicilio *',
    'idDepartamentoNacimiento' => 'Departamento Nacimiento *',
    'idCantonDomicilio' => 'Cantón Domicilio',
    'idDocPaciente' => 'Tipo Documento *',
    'idDocProporcionoDatos' => 'Tipo Documento *',
    'idDocResponsable' => 'Tipo Documento Legal Responsable *',
    'idEstadoCivil' => 'Estado Familiar *',
    'idMunicipioDomicilio' => 'Municipio Domicilio *',
    'idMunicipioNacimiento' => 'Municipio Nacimiento *',
    'idNacionalidad' => 'Nacionalidad *',
    'idOcupacion' => 'Ocupación *',
    'idPaisNacimiento' => 'País de Nacimiento *',
    'idParentescoResponsable' => 'Parentesco Responsable*',
    'idParentescoProporDatos' => 'Parentesco de Persona que Proporcionó Datos con Paciente *',
    'idSexo' => 'Sexo *',
    'telefonoCasa' => 'Teléfono Casa',
    'telefonoTrabajo' => 'Teléfono Trabajo',
    'telefonoResponsable' => 'Teléfono Responsable',
    'idCreacionExpediente' => 'Área Creación Expediente',
    'idPaciente' => 'Paciente',
    'numero' => 'Número',
    'Mnt Paciente View' => '',
    'change_password.flash.success' => 'Cambio Contraseña Con Éxito',
    'fos_user.password.mismatch' => 'La nueva constraseña no coinciden',
    'Mnt Empleado List' => 'Listado de Empleados',
    'Mnt Cie10 List' => 'Diágnosticos CIE10',
    'Mnt Ciq List' => 'Prócedimiento Médicos CIE9',
    'Mnt Paciente Buscaremergencia' => 'Buscar Paciente para Emergencia',
    'Sec Ingreso List' => '',
    'Sec Procedencia Ingreso List' => 'Listado de Pacientes Ingresado',
    'Sec Emergencia List' => 'Listado de Pacientes en Emergencia',
    'Cit Citas Dia List' => 'Citas',
  ),
));


return $catalogue;
