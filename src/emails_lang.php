<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Actualitzacions del sistema disponibles';
$lang['emails_updates_available_message'] = <<<EOT
Hola,

S’han detectat actualitzacions del sistema per a {site_anchor}.

Aquestes actualitzacions poden incloure correccions de seguretat, millores de rendiment o noves funcions.
Recomanem revisar-les com més aviat millor.

Podeu revisar i gestionar les actualitzacions disponibles des del panell d’administració:
{link}

Si ja heu revisat o aplicat les actualitzacions, no cal que feu res més.

Aquest és un missatge automàtic del sistema enviat per {site_name}.
No respongueu a aquest correu electrònic.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Activació del compte';
$lang['emails_account_activation_request_message'] = <<<EOT
Hola {name},

Gràcies per registrar-te a {site_anchor}. El teu compte ha estat creat i cal activar-lo abans de poder-lo utilitzar.

Per activar el teu compte, fes clic a l’enllaç següent o copia i enganxa’l al teu navegador:
{link}

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Enllaç d\'activació nou';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hola {name},

Recentment has sol·licitat un nou enllaç d’activació a {site_anchor} perquè el teu compte no estava actiu.
Per activar el teu compte, fes clic a l’enllaç següent o copia i enganxa’l al teu navegador:
{link}

Si no has sol·licitat això, no es requereix cap acció addicional.

Aquesta acció va ser sol·licitada des d’aquesta adreça IP: {ip_link}.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Compte activat';
$lang['emails_account_activation_success_message'] = <<<EOT
Hola {name},

El teu compte a {site_anchor} s’ha activat correctament. Ara pots <a href="{login_url}" target="_blank" rel="noopener">iniciar sessió</a> quan vulguis.

Esperem que gaudeixis de la teva estada, si us plau, accepta les nostres salutacions cordials.

-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Compte pendent d\'aprovació';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hola {name},

Gràcies per unir-te a nosaltres a {site_anchor}. El teu compte està creat però necessita l’aprovació d’un administrador del lloc abans d’estar actiu.
Ens disculpem sincerament per aquest pas crucial, però és només per raons de seguretat.

Rebràs un correu electrònic de confirmació tan aviat com el teu compte sigui aprovat.

Esperem que gaudeixis de la teva estada, si us plau, accepta les nostres salutacions cordials.

-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Compte aprovat';
$lang['emails_account_approval_success_message'] = <<<EOT
Hola {name},

Bones notícies! El teu compte a {site_anchor} ha estat aprovat.

Ara pots iniciar sessió i començar a utilitzar el teu compte immediatament:
{link}

Estem encantats de tenir-te amb nosaltres.

-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Compte restaurat';
$lang['emails_account_restored_message'] = <<<EOT
Hola {name},

Aquest correu electrònic confirma que el teu compte a {site_anchor} ha estat restaurat amb èxit.

Benvingut de nou! Esperem que aquesta vegada gaudis de la teva estada.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Benvingut/da a {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hola {name},

La majoria de la gent té seqüències de correus de benvinguda realment llargues després de registrar-se al seu lloc web.

Bones notícies: no som com la majoria de la gent.
Però, de totes maneres, volem donar-te la benvinguda i agrair-te que t’ajunguis a nosaltres a {site_anchor}.

Esperem que gaudis de la teva estada, si us plau, accepta les nostres salutacions cordials.

-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Sol·licitud de canvi de correu';
$lang['emails_email_change_request_message'] = <<<EOT
Hola {name},

Estàs rebent aquest correu electrònic perquè hem rebut una sol·licitud per canviar el teu correu electrònic del teu compte a {site_anchor}.

Fes clic a l’enllaç següent o copia i enganxa al teu navegador si vols continuar:
{link}

Si no has sol·licitat un canvi de correu electrònic, no es requereix cap acció addicional.

Aquesta acció es va sol·licitar des d’aquesta adreça IP: {ip_link}.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Adreça de correu canviada';
$lang['emails_email_change_success_message'] = <<<EOT
Hola {name},

Aquest correu electrònic confirma que el teu correu electrònic utilitzat a {site_anchor} s’ha canviat amb èxit.

Si no has realitzat aquesta acció, si us plau, contacta’ns tan aviat com sigui possible per resoldre aquest problema.

Aquesta acció es va realitzar des d’aquesta adreça IP: {ip_link}.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Alerta d\'inici de sessió fallit';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hola {name},

Algú recentment ha intentat utilitzar contrasenyes incorrectes per accedir al teu compte de {site_name}.

Data del servidor: {date}
Dispositiu: {browser}, {platform}
Adreça IP: {ip_link}

Si no has estat tu, no et preocupis, l’intent d’inici de sessió no ha tingut èxit.

Si has estat tu i no recordes la contrasenya, fes clic a l’enllaç següent per restablir-la:
{reset_link}

Si tens dificultats per accedir al teu compte, posa’t en contacte amb el nostre equip o sol·licita un enllaç d’inici de sessió d’un sol clic.

-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Notificació d\'inici de sessió correcte';
$lang['emails_login_alert_success_message'] = <<<EOT
Hola {name},

T’enviem aquest correu electrònic després d’un inici de sessió correcte al teu compte de {site_name}.

Data del servidor: {date}
Dispositiu: {browser}, {platform}
Adreça IP: {ip_link}

Si has estat tu, pots ignorar aquest correu electrònic amb seguretat.
Si no has iniciat sessió, si us plau, canvia la teva contrasenya immediatament per protegir el teu compte.

Per a qualsevol ajuda, posa’t en contacte amb el nostre equip de suport.

-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Enllaç d\'inici de sessió ràpid';
$lang['emails_login_magic_link_message'] = <<<EOT
Hola {name},

Heu sol·licitat un inici de sessió amb un sol clic al vostre compte a {site_anchor}.

Feu clic a l’enllaç de sota o copieu i enganxeu al vostre navegador per iniciar sessió instantàniament:
{link}

Aquest enllaç caducarà en 15 minuts. Si no heu sol·licitat això, ignoreu aquest correu electrònic.

Aquesta acció es va sol·licitar des d’aquesta adreça IP: {ip_link}.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Autenticació de dos factors';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hola {name},

El teu codi d’autenticació de dos factors és: <strong>{code}</strong>

Sempre pots desactivar l’autenticació de dos factors a la configuració del teu compte.

Aquesta acció es va realitzar des d’aquesta adreça IP: {ip_link}.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Sol·licitud de restabliment de contrasenya';
$lang['emails_password_change_request_message'] = <<<EOT
Hola {name},

Estàs rebent aquest correu perquè hem rebut una sol·licitud de restabliment de contrasenya per al teu compte a {site_anchor}.

Fes clic a l’enllaç següent o copia i enganxa’l al teu navegador si desitges continuar:
{link}

Si no has sol·licitat el restabliment de la contrasenya, no es requereix cap acció addicional.

Aquesta acció va ser sol·licitada des d’aquesta adreça IP: {ip_link}.

Salutacions,
-- L’equip de {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Contrasenya canviada correctament';
$lang['emails_password_change_success_message'] = <<<EOT
Hola {name},

Aquest correu electrònic confirma que la teva contrasenya a {site_anchor} s’ha canviat amb èxit. Ara pots <a href="{login_url}" target="_blank" rel="noopener">iniciar sessió</a> amb la nova contrasenya.

Si no has realitzat aquesta acció, si us plau, contacta’ns el més aviat possible per resoldre aquest problema.

Aquesta acció es va realitzar des d’aquesta adreça IP: {ip_link}.

Salutacions cordials,
-- L’equip de {site_name}.
EOT;
