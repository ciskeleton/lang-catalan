<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Components';
$lang['admin_content'] = 'Contingut';
$lang['admin_database_backup'] = 'Còpies de Seguretat de la Base de Dades';
$lang['admin_extensions'] = 'Extensions';
$lang['admin_firewall'] = 'Firewall';
$lang['admin_help'] = 'Ajuda';
$lang['admin_languages'] = 'Idiomes';
$lang['admin_logs'] = 'Registres del Sistema';
$lang['admin_media'] = 'Biblioteca de Mitjans';
$lang['admin_modules'] = 'Mòduls';
$lang['admin_plugins'] = 'Complements';
$lang['admin_reports'] = 'Registre d’Activitat';
$lang['admin_settings'] = 'Configuració del Sistema';
$lang['admin_sysinfo'] = 'Informació del Sistema';
$lang['admin_system'] = 'Sistema';
$lang['admin_system_firewall'] = 'Firewall del Sistema';
$lang['admin_themes'] = 'Temes';
$lang['admin_updates'] = 'Actualitzacions del Sistema';
$lang['admin_users'] = 'Usuaris';
$lang['admin_view_site'] = 'Veure el Lloc';
$lang['per_page'] = 'Per Pàgina';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Gràcies per crear amb <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{No hi ha elements actius.} other{<b>#</b> de <b>%s</b> elements estan actius.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'La instal·lació ha fallat: %s';
$lang['admin_install_location_app'] = 'Només aquesta aplicació';
$lang['admin_install_location_core'] = 'Totes les aplicacions';
$lang['admin_install_location_select'] = '&#151; Seleccioneu la ubicació &#151;';
$lang['admin_install_update_confirm'] = 'Esteu segur que voleu actualitzar aquest paquet?';
$lang['admin_install_update_error'] = 'No s’ha pogut actualitzar el paquet.';
$lang['admin_install_update_skip_confirm'] = 'Esteu segur que voleu ometre aquesta actualització?';
$lang['admin_install_update_skip_error'] = 'No s’ha pogut ometre aquesta actualització.';
$lang['admin_install_update_skip_success'] = 'Actualització omesa correctament.';
$lang['admin_install_update_success'] = 'Paquet actualitzat correctament.';
$lang['admin_install_upload_tip'] = 'Instal·leu un paquet pujant aquí el seu fitxer <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'No s’ha pogut netejar els arxius de còpia de seguretat antics.';
$lang['admin_database_backup_clean_success'] = '%d arxius de còpia de seguretat eliminats. %d espai de disc alliberat.';
$lang['admin_database_backup_create'] = 'Crear Còpia de Seguretat';
$lang['admin_database_backup_create_confirm'] = 'Esteu segur que voleu crear una còpia de seguretat ara?';
$lang['admin_database_backup_create_error'] = 'No s’ha pogut crear l’arxiu de còpia de seguretat. Assegureu-vos que la carpeta <b>%s</b> té permisos d’escriptura.';
$lang['admin_database_backup_create_success'] = 'L’arxiu de còpia de seguretat de la base de dades <b>%s</b> s’ha creat correctament.';
$lang['admin_database_backup_delete_confirm'] = 'Esteu segur que voleu eliminar aquests arxius de còpia de seguretat?';
$lang['admin_database_backup_delete_error'] = 'No s’han pogut eliminar els arxius de còpia de seguretat seleccionats.';
$lang['admin_database_backup_delete_success'] = 'Els arxius de còpia de seguretat s’han eliminat correctament.';
$lang['admin_database_backup_download_error'] = 'No s’ha pogut descarregar l’arxiu de còpia de seguretat seleccionat.';
$lang['admin_database_backup_download_success'] = 'L’arxiu de còpia de seguretat s’ha descarregat correctament.';
$lang['admin_database_backup_lock_confirm'] = 'Esteu segur que voleu bloquejar aquests arxius de còpia de seguretat?';
$lang['admin_database_backup_lock_error'] = 'No s’han pogut bloquejar els arxius de còpia de seguretat seleccionats.';
$lang['admin_database_backup_lock_success'] = 'Els arxius de còpia de seguretat s’han bloquejat correctament.';
$lang['admin_database_backup_locked_error'] = 'No s’han pogut eliminar els arxius de còpia de seguretat bloquejats.';
$lang['admin_database_backup_missing_error'] = 'No s’ha trobat l’arxiu de còpia de seguretat.';
$lang['admin_database_backup_unlock_confirm'] = 'Esteu segur que voleu desbloquejar aquests arxius de còpia de seguretat?';
$lang['admin_database_backup_unlock_error'] = 'No s’han pogut desbloquejar els arxius de còpia de seguretat seleccionats.';
$lang['admin_database_backup_unlock_success'] = 'Els arxius de còpia de seguretat s’han desbloquejat correctament.';
$lang['admin_database_prune'] = 'Podar';
$lang['admin_database_prune_confirm'] = 'Esteu segur que voleu podar la base de dades? Es crearà una còpia de seguretat abans de l’execució.';
$lang['admin_database_prune_error'] = 'No s’ha pogut podar la base de dades.';
$lang['admin_database_prune_next'] = 'Proxima poda: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Base de dades podada correctament.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Eliminar Registres';
$lang['admin_logs_delete_confirm'] = 'Esteu segur que voleu eliminar els arxius de registre seleccionats?';
$lang['admin_logs_delete_error'] = 'No s’han pogut eliminar els arxius de registre.';
$lang['admin_logs_delete_success'] = 'Els arxius de registre s’han eliminat correctament.';
$lang['admin_logs_error_disabled'] = 'El registre actualment no està activat.';
$lang['admin_logs_error_empty'] = 'No s’han trobat registres.';
$lang['admin_logs_error_missing'] = 'O bé no s’ha pogut localitzar l’arxiu de registre, o estava buit.';
$lang['admin_logs_tip'] = 'El registre pot crear ràpidament arxius molt grans. Per als llocs en producció, penseu en eliminar els antics.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Esteu segur que voleu eliminar els correus seleccionats?';
$lang['admin_emails_delete_error'] = 'No s’han pogut eliminar els correus seleccionats.';
$lang['admin_emails_delete_success'] = 'Els correus seleccionats s’han eliminat correctament.';
$lang['admin_emails_email_from'] = 'Enviat Des de';
$lang['admin_emails_mail_queue'] = 'Cua de Correu';
$lang['admin_emails_mailer'] = 'Correu Massiu';
$lang['admin_emails_search'] = 'Cercar correus per assumpte o contingut...';
$lang['admin_emails_send_error'] = 'Ha fallat posar el correu a la cua. Intenteu-ho de nou.';
$lang['admin_emails_send_none'] = 'No hi ha usuaris que coincideixin amb els vostres criteris seleccionats.';
$lang['admin_emails_send_success'] = 'El correu s’ha posat a la cua i s’enviarà breument.';
$lang['admin_emails_send_to_banned'] = 'Enviar als usuaris prohibits.';
$lang['admin_emails_send_to_deleted'] = 'Enviar als usuaris eliminats.';
$lang['admin_emails_send_to_disabled'] = 'Enviar als usuaris inactius.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Afegir Usuari';
$lang['admin_users_all_users'] = 'Tots els Usuaris';
$lang['admin_users_ban_confirm'] = 'Esteu segur que voleu bloquejar els usuaris seleccionats?';
$lang['admin_users_ban_error'] = 'No s’han pogut bloquejar els usuaris seleccionats.';
$lang['admin_users_ban_success'] = 'Els usuaris seleccionats s’han bloquejat correctament.';
$lang['admin_users_delete_confirm'] = 'Esteu segur que voleu suprimir els usuaris seleccionats?';
$lang['admin_users_delete_error'] = 'No s’han pogut suprimir els usuaris seleccionats.';
$lang['admin_users_delete_success'] = 'Els usuaris seleccionats s’han suprimit correctament.';
$lang['admin_users_disable_confirm'] = 'Esteu segur que voleu desactivar els usuaris seleccionats?';
$lang['admin_users_disable_error'] = 'No s’han pogut desactivar els usuaris seleccionats.';
$lang['admin_users_disable_success'] = 'Els usuaris seleccionats s’han desactivat correctament.';
$lang['admin_users_edit'] = 'Editar Usuari';
$lang['admin_users_edit_error'] = 'No s’ha pogut actualitzar l’usuari.';
$lang['admin_users_edit_success'] = 'Usuari actualitzat correctament.';
$lang['admin_users_enable_confirm'] = 'Esteu segur que voleu activar els usuaris seleccionats?';
$lang['admin_users_enable_error'] = 'No s’han pogut activar els usuaris seleccionats.';
$lang['admin_users_enable_success'] = 'Els usuaris seleccionats s’han activat correctament.';
$lang['admin_users_groups'] = 'Grups';
$lang['admin_users_lock_confirm'] = 'Esteu segur que voleu bloquejar els usuaris seleccionats?';
$lang['admin_users_lock_error'] = 'No s’han pogut bloquejar els usuaris seleccionats.';
$lang['admin_users_lock_success'] = 'Usuaris seleccionats bloquejats correctament.';
$lang['admin_users_logged'] = 'Usuaris Connectats';
$lang['admin_users_manage'] = 'Gestionar Usuaris';
$lang['admin_users_remove_confirm'] = 'Esteu segur que voleu suprimir permanentment els usuaris seleccionats i totes les seves dades?';
$lang['admin_users_remove_error'] = 'No s’han pogut suprimir permanentment els usuaris seleccionats i totes les seves dades.';
$lang['admin_users_remove_success'] = 'Els usuaris seleccionats i totes les seves dades s’han suprimit correctament.';
$lang['admin_users_restore_confirm'] = 'Esteu segur que voleu restaurar els usuaris seleccionats?';
$lang['admin_users_restore_error'] = 'No s’han pogut restaurar els usuaris seleccionats.';
$lang['admin_users_restore_success'] = 'Els usuaris seleccionats s’han restaurat correctament.';
$lang['admin_users_search'] = 'Cercar per nom, nom d’usuari, o correu...';
$lang['admin_users_unban_confirm'] = 'Esteu segur que voleu desbloquejar els usuaris seleccionats?';
$lang['admin_users_unban_error'] = 'No s’han pogut desbloquejar els usuaris seleccionats.';
$lang['admin_users_unban_success'] = 'Els usuaris seleccionats s’han desbloquejat correctament.';
$lang['admin_users_unlock_confirm'] = 'Esteu segur que voleu desbloquejar els usuaris seleccionats?';
$lang['admin_users_unlock_error'] = 'No s’han pogut desbloquejar els usuaris seleccionats.';
$lang['admin_users_unlock_success'] = 'Usuaris seleccionats desbloquejats correctament.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for activity log section.
 */
$lang['admin_reports_clear'] = 'Netejar Registres';
$lang['admin_reports_clear_confirm'] = 'Esteu segur que voleu netejar el registre d’accions?';
$lang['admin_reports_clear_error'] = 'No s’ha pogut netejar el registre d’accions.';
$lang['admin_reports_clear_success'] = 'Registre d’accions netejat correctament.';
$lang['admin_reports_latest_actions'] = 'Darreres Accions';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for media library section.
 */
$lang['admin_media_delete_confirm'] = 'Esteu segur que voleu eliminar els arxius seleccionats?';
$lang['admin_media_delete_error'] = 'No s’han pogut eliminar els arxius.';
$lang['admin_media_delete_success'] = 'Arxius eliminats correctament.';
$lang['admin_media_file_delete_error'] = 'No s’ha pogut eliminar l’arxiu.';
$lang['admin_media_file_delete_success'] = 'Arxiu eliminat correctament.';
$lang['admin_media_file_update_error'] = 'No s’ha pogut actualitzar l’arxiu.';
$lang['admin_media_file_update_success'] = 'Arxiu actualitzat correctament.';
$lang['admin_media_search'] = 'Cercar per nom, descripció o nom de fitxer...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for modules management section.
 */
$lang['admin_modules_active_count'] = '=0{No hi ha mòduls actius.} other{<b>#</b> de <b>%s</b> mòduls estan actius.}';
$lang['admin_modules_add'] = 'Afegir Mòdul';
$lang['admin_modules_delete_confirm'] = 'Esteu segur que voleu eliminar el mòdul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'No s’ha pogut eliminar el mòdul.';
$lang['admin_modules_delete_error_active'] = 'Els mòduls actius no es poden suprimir.';
$lang['admin_modules_delete_success'] = 'Mòdul eliminat correctament.';
$lang['admin_modules_disable_all_confirm'] = 'Esteu segur que voleu desactivar tots els mòduls?';
$lang['admin_modules_disable_all_error'] = 'No s’han pogut desactivar tots els mòduls.';
$lang['admin_modules_disable_all_success'] = 'Tots els mòduls s’han desactivat correctament.';
$lang['admin_modules_disable_confirm'] = 'Esteu segur que voleu desactivar el mòdul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'No s’ha pogut desactivar el mòdul.';
$lang['admin_modules_disable_success'] = 'Mòdul desactivat correctament.';
$lang['admin_modules_enable_all_confirm'] = 'Esteu segur que voleu activar tots els mòduls?';
$lang['admin_modules_enable_all_error'] = 'No s’han pogut activar tots els mòduls.';
$lang['admin_modules_enable_all_success'] = 'Tots els mòduls s’han activat correctament.';
$lang['admin_modules_enable_confirm'] = 'Esteu segur que voleu activar el mòdul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'No s’ha pogut activar el mòdul.';
$lang['admin_modules_enable_success'] = 'Mòdul activat correctament.';
$lang['admin_modules_global'] = 'Mòdul global (compartit)';
$lang['admin_modules_install_confirm'] = 'Esteu segur que voleu instal·lar el mòdul: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'No s’ha pogut instal·lar el mòdul.';
$lang['admin_modules_install_success'] = 'Mòdul instal·lat correctament.';
$lang['admin_modules_install_tip'] = 'Els mòduls afegeixen noves característiques i funcionalitats al vostre lloc. Navegueu pels mòduls disponibles al <a href="%s" target="_blank" rel="noopener">directori de mòduls</a> o pugeu-ne un com a paquet <b>.zip</b>.';
$lang['admin_modules_update_confirm'] = 'Esteu segur que voleu actualitzar aquest mòdul?';
$lang['admin_modules_update_error'] = 'No s’ha pogut actualitzar el mòdul.';
$lang['admin_modules_update_success'] = 'Mòdul actualitzat correctament.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{No hi ha connectors actius.} other{<b>#</b> de <b>%s</b> connectors estan actius.}';
$lang['admin_plugins_add'] = 'Afegir complement';
$lang['admin_plugins_delete_confirm'] = 'Esteu segur que voleu eliminar el complement: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'No s’ha pogut eliminar el complement.';
$lang['admin_plugins_delete_error_active'] = 'Els connectors actius no es poden suprimir.';
$lang['admin_plugins_delete_success'] = 'Complement eliminat correctament.';
$lang['admin_plugins_disable_all_confirm'] = 'Esteu segur que voleu desactivar tots els complements?';
$lang['admin_plugins_disable_all_error'] = 'No s’han pogut desactivar tots els complements.';
$lang['admin_plugins_disable_all_success'] = 'Tots els complements s’han desactivat correctament.';
$lang['admin_plugins_disable_confirm'] = 'Esteu segur que voleu desactivar el complement: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'No s’ha pogut desactivar el complement.';
$lang['admin_plugins_disable_success'] = 'Complement desactivat correctament.';
$lang['admin_plugins_enable_all_confirm'] = 'Esteu segur que voleu activar tots els complements?';
$lang['admin_plugins_enable_all_error'] = 'No s’han pogut activar tots els complements.';
$lang['admin_plugins_enable_all_success'] = 'Tots els complements s’han activat correctament.';
$lang['admin_plugins_enable_confirm'] = 'Esteu segur que voleu activar el complement: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'No s’ha pogut activar el complement.';
$lang['admin_plugins_enable_success'] = 'Complement activat correctament.';
$lang['admin_plugins_global'] = 'Connector global (compartit)';
$lang['admin_plugins_install_confirm'] = 'Esteu segur que voleu instal·lar el connector: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'No s’ha pogut instal·lar el connector.';
$lang['admin_plugins_install_success'] = 'Connector instal·lat correctament.';
$lang['admin_plugins_install_tip'] = 'Els complements amplien les característiques existents amb opcions addicionals o integracions. Instal·leu des del <a href="%s" target="_blank" rel="noopener">directori de complements</a> o pugeu un arxiu <b>.zip</b>.';
$lang['admin_plugins_update_confirm'] = 'Esteu segur que voleu actualitzar aquest connector?';
$lang['admin_plugins_update_error'] = 'No s’ha pogut actualitzar el connector.';
$lang['admin_plugins_update_success'] = 'Connector actualitzat correctament.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for themes management section.
 */
$lang['admin_themes_add'] = 'Afegir Tema';
$lang['admin_themes_delete_confirm'] = 'Esteu segur que voleu eliminar el tema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'No s’ha pogut eliminar el tema.';
$lang['admin_themes_delete_error_active'] = 'No podeu eliminar el tema actualment actiu.';
$lang['admin_themes_delete_success'] = 'Tema eliminat correctament.';
$lang['admin_themes_disable_confirm'] = 'Esteu segur que voleu desactivar el tema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'No s’ha pogut desactivar el tema.';
$lang['admin_themes_disable_error_active'] = 'El tema actiu no es pot desactivar.';
$lang['admin_themes_disable_success'] = 'Tema desactivat correctament.';
$lang['admin_themes_enable_confirm'] = 'Esteu segur que voleu activar el tema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'No s’ha pogut activar el tema.';
$lang['admin_themes_enable_success'] = 'Tema activat correctament.';
$lang['admin_themes_install_confirm'] = 'Esteu segur que voleu instal·lar el tema: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'No s’ha pogut instal·lar el tema.';
$lang['admin_themes_install_success'] = 'Tema instal·lat correctament.';
$lang['admin_themes_install_tip'] = 'Els temes canvien l’aparença i el disseny del vostre lloc. Trieu de la <a href="%s" target="_blank" rel="noopener">biblioteca de temes</a> o pugeu un arxiu <b>.zip</b> per instal·lar el vostre.';
$lang['admin_themes_none_tip'] = 'Aquesta aplicació s’està executant sense cap tema. Instal·leu-ne un per personalitzar la interfície pública.';
$lang['admin_themes_update_confirm'] = 'Esteu segur que voleu actualitzar aquest tema?';
$lang['admin_themes_update_error'] = 'No s’ha pogut actualitzar el tema.';
$lang['admin_themes_update_success'] = 'Tema actualitzat correctament.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for menu locations section.
 */
$lang['admin_menus'] = 'Menús';
$lang['admin_menus_assign_error'] = 'No s’han pogut actualitzar les ubicacions del menú.';
$lang['admin_menus_assign_success'] = 'Ubicacions del menú actualitzades correctament.';
$lang['admin_menus_header'] = 'Hi ha <b>%s</b> ubicacions de menú disponibles.';
$lang['admin_menus_location'] = 'Ubicació';
$lang['admin_menus_locations'] = 'Ubicacions del Menú';
$lang['admin_menus_manage'] = 'Gestionar Menús';
$lang['admin_menus_menu'] = 'Menú Assignat';
$lang['admin_menus_none'] = '&#151; Cap &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for languages management section.
 */
$lang['admin_languages_add'] = 'Afegeix idioma';
$lang['admin_languages_default_confirm'] = 'Esteu segur que voleu fer que aquest idioma sigui l’idioma per defecte del lloc?';
$lang['admin_languages_default_error'] = 'No s’ha pogut canviar l’idioma per defecte.';
$lang['admin_languages_default_error_nochange'] = 'Aquest idioma ja és el per defecte.';
$lang['admin_languages_default_success'] = 'Idioma per defecte canviat correctament.';
$lang['admin_languages_delete_confirm'] = 'Esteu segur que voleu suprimir l’idioma: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'No s’ha pogut suprimir l’idioma.';
$lang['admin_languages_delete_error_active'] = 'Els idiomes actius no es poden suprimir.';
$lang['admin_languages_delete_error_default'] = 'L’idioma per defecte no es pot suprimir.';
$lang['admin_languages_delete_success'] = 'Idioma suprimit correctament.';
$lang['admin_languages_disable_all_confirm'] = 'Esteu segur que voleu desactivar tots els idiomes?';
$lang['admin_languages_disable_all_error'] = 'No s’han pogut desactivar tots els idiomes.';
$lang['admin_languages_disable_all_success'] = 'Tots els idiomes s’han desactivat correctament.';
$lang['admin_languages_disable_confirm'] = 'Esteu segur que voleu desactivar l’idioma: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'No s’ha pogut desactivar l’idioma.';
$lang['admin_languages_disable_error_default'] = 'La llengua predeterminada no es pot desactivar.';
$lang['admin_languages_disable_error_nochange'] = 'Aquest idioma ja està desactivat.';
$lang['admin_languages_disable_success'] = 'Idioma desactivat correctament.';
$lang['admin_languages_enable_all_confirm'] = 'Esteu segur que voleu activar tots els idiomes?';
$lang['admin_languages_enable_all_error'] = 'No s’han pogut activar tots els idiomes.';
$lang['admin_languages_enable_all_success'] = 'Tots els idiomes s’han activat correctament.';
$lang['admin_languages_enable_confirm'] = 'Esteu segur que voleu activar l’idioma: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'No s’ha pogut activar l’idioma.';
$lang['admin_languages_enable_error_nochange'] = 'Aquest idioma ja està activat.';
$lang['admin_languages_enable_success'] = 'Idioma activat correctament.';
$lang['admin_languages_install_confirm'] = 'Esteu segur que voleu instal·lar l\'idioma: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'No s’ha pogut instal·lar l’idioma.';
$lang['admin_languages_install_success'] = 'Idioma instal·lat correctament.';
$lang['admin_languages_install_tip'] = 'Els idiomes afegeixen traduccions per a la interfície i el contingut del vostre lloc. Consulteu els idiomes disponibles al <a href="%s" target="_blank" rel="noopener">directori d’idiomes</a> o pugeu un paquet <b>.zip</b> per instal·lar-ne un de propi.';
$lang['admin_languages_tip'] = 'Activeu, desactiveu i establiu l’idioma per defecte del lloc. Els idiomes activats estan disponibles per als visitants del lloc.';
$lang['admin_languages_update_confirm'] = 'Esteu segur que voleu actualitzar aquest idioma?';
$lang['admin_languages_update_error'] = 'No s’ha pogut actualitzar l’idioma.';
$lang['admin_languages_update_success'] = 'Idioma actualitzat correctament.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'El paquet ja existeix.';
$lang['package_archive_download_failed'] = 'No s’ha pogut baixar l’arxiu del paquet.';
$lang['package_backup_create_error'] = 'No s’ha pogut crear la còpia de seguretat del paquet.';
$lang['package_backup_dir_failed'] = 'No s’ha pogut crear el directori de còpia de seguretat %s';
$lang['package_backup_missing'] = 'El fitxer de còpia de seguretat no existeix.';
$lang['package_backup_path_error'] = 'No s’ha pogut resoldre el camí del fitxer de còpia de seguretat.';
$lang['package_backup_request_invalid'] = 'Sol·licitud de còpia de seguretat no vàlida.';
$lang['package_backup_restore_error'] = 'No s’ha pogut restaurar la còpia de seguretat del paquet.';
$lang['package_catalog_type_unknown'] = 'Tipus de catàleg desconegut.';
$lang['package_checksum_error'] = 'La verificació de la suma de comprovació (checksum) del paquet ha fallat.';
$lang['package_copy_files_error'] = 'No s’han pogut copiar els fitxers del paquet al destí.';
$lang['package_copy_updates_error'] = 'No s’han pogut copiar els fitxers d’actualització al destí.';
$lang['package_dest_dir_failed'] = 'No s’ha pogut crear el directori de destinació %s';
$lang['package_destination_error'] = 'No s’ha pogut resoldre el destí del paquet.';
$lang['package_download_dir_failed'] = 'No s’ha pogut crear el directori de baixada %s';
$lang['package_download_empty'] = 'La descàrrega del paquet ha retornat una resposta buida.';
$lang['package_download_request_invalid'] = 'Sol·licitud de descàrrega del paquet no vàlida.';
$lang['package_extract_failed'] = 'No s’ha pogut extreure el ZIP %s';
$lang['package_invalid_lang_files'] = 'Idioma no vàlid: falten els fitxers d’idioma requerits de l’aplicació.';
$lang['package_invalid_lang_structure'] = 'Idioma no vàlid: falten els directoris admin i/o ci3.';
$lang['package_invalid_missing_info'] = '%s no vàlid: falta "info.php".';
$lang['package_invalid_module_structure'] = 'Mòdul no vàlid: falten els directoris config i/o controllers requerits.';
$lang['package_invalid_plugin_boot'] = 'Complement (plugin) no vàlid: falta "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Complement (plugin) no vàlid: els complements no poden contenir controladors ni vistes.';
$lang['package_invalid_theme_boot'] = 'Tema no vàlid: falta "boot.php".';
$lang['package_invalid_theme_views'] = 'Tema no vàlid: falta el directori views.';
$lang['package_no_root_dir'] = 'El paquet no conté cap directori arrel.';
$lang['package_not_downloadable'] = 'El paquet no es pot descarregar públicament.';
$lang['package_not_in_registry'] = 'El paquet no està disponible al registre públic.';
$lang['package_request_invalid'] = 'Sol·licitud de paquet no vàlida.';
$lang['package_rollback_request_invalid'] = 'Sol·licitud de reversió no vàlida.';
$lang['package_root_mismatch'] = 'L’arrel de l’arxiu del paquet no coincideix amb %s';
$lang['package_single_root_required'] = 'El paquet ha de contenir exactament un directori arrel.';
$lang['package_source_error'] = 'No s’ha pogut resoldre l’origen del paquet.';
$lang['package_system_core_restricted'] = 'Els components del sistema no es poden instal·lar com a paquets.';
$lang['package_temp_dir_failed'] = 'No s’ha pogut crear el directori temporal %s';
$lang['package_type_unknown'] = 'Tipus de paquet desconegut.';
$lang['package_update_request_invalid'] = 'Sol·licitud d’actualització del paquet no vàlida.';
$lang['package_update_root_mismatch'] = 'L’arrel de l’arxiu d’actualització no coincideix amb %s.';
$lang['package_upload_dir_failed'] = 'No s’ha pogut crear el directori de càrrega %s';
$lang['package_url_invalid'] = 'URL de distribució del paquet no vàlid.';
$lang['package_write_failed'] = 'No s’ha pogut escriure el paquet a %s';
$lang['package_zip_not_found'] = 'El fitxer ZIP del paquet no existeix: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Noves actualitzacions disponibles!';
$lang['update_backup_error'] = 'No s’ha pogut crear una còpia de seguretat del paquet existent. L’actualització s’ha avortat.';
$lang['update_check_disabled'] = 'Les comprovacions automàtiques d’actualitzacions estan desactivades. Activeu-les per veure les actualitzacions.';
$lang['update_check_error'] = 'No s’ha pogut executar la comprovació d’actualitzacions en aquest moment.';
$lang['update_check_success'] = 'Comprovació d’actualitzacions completada amb èxit.';
$lang['update_install_error'] = 'No s’ha pogut instal·lar el paquet. S’ha mantingut la versió anterior.';
$lang['update_install_success'] = 'Paquet actualitzat correctament a la versió més recent.';
$lang['update_interval_3days'] = 'Cada 3 dies';
$lang['update_interval_biweekly'] = 'Cada 2 setmanes';
$lang['update_interval_daily'] = 'Cada dia';
$lang['update_interval_monthly'] = 'Una vegada al mes';
$lang['update_interval_weekly'] = 'Una vegada a la setmana';
$lang['update_not_available'] = 'El vostre lloc web està actualitzat.';
$lang['update_rollback_confirm'] = 'Esteu segur que voleu restaurar la versió anterior?';
$lang['update_rollback_error'] = 'No s’ha pogut restaurar la versió anterior. Pot ser necessària una intervenció manual.';
$lang['update_rollback_success'] = 'Versió anterior restaurada correctament.';
$lang['updates_available'] = 'Actualitzacions disponibles';
$lang['updates_check_now'] = 'Comprova ara';
$lang['updates_check_now_confirm'] = 'Esteu segur que voleu comprovar les actualitzacions ara?';
$lang['updates_current_version'] = 'Versió actual';
$lang['updates_enable'] = 'Activa les actualitzacions';
$lang['updates_last_check'] = 'Última comprovació: %s';
$lang['updates_latest_version'] = 'Última versió';
$lang['updates_next_check'] = 'Pròxima comprovació programada: %s';
$lang['updates_previous_version'] = 'Versió anterior';
$lang['updates_recent'] = 'Actualitzat recentment';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'No s’ha pogut bloquejar l’adreça IP especificada.';
$lang['admin_firewall_ban_success'] = 'L’adreça IP s’ha bloquejat correctament.';
$lang['admin_firewall_block_ip'] = 'Bloquejar adreça IP';
$lang['admin_firewall_delete_confirm'] = 'Esteu segur que voleu desbloquejar les adreces IP seleccionades?';
$lang['admin_firewall_delete_error'] = 'No s’han pogut desbloquejar les adreces IP seleccionades.';
$lang['admin_firewall_delete_success'] = 'Les adreces IP seleccionades s’han desbloquejat correctament.';
$lang['admin_firewall_duration'] = 'Durada del bloqueig';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Motiu del bloqueig';
$lang['admin_firewall_tip'] = 'Visualitzeu i gestioneu les adreces IP bloquejades pel tallafoc a causa d’infraccions repetides o activitat sospitosa.';

// Settings
$lang['404_ban_duration'] = 'Durada del bloqueig 404';
$lang['404_threshold'] = 'Límit de 404';
$lang['uri_ban_duration'] = 'Durada del bloqueig de URI';
$lang['uri_strike_threshold'] = 'Límit de URI';
