<?php
/* Copyright (C) 2001-2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2011 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2010 Regis Houssin        <regis@dolibarr.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 *       \file       htdocs/admin/pdf.php
 *       \brief      Page to setup PDF options
 *       \version    $Id: pdf.php,v 1.1 2011/08/10 23:48:09 eldy Exp $
 */

require("../main.inc.php");
require_once(DOL_DOCUMENT_ROOT."/lib/usergroups.lib.php");
require_once(DOL_DOCUMENT_ROOT."/lib/admin.lib.php");
require_once(DOL_DOCUMENT_ROOT."/lib/functions2.lib.php");
require_once(DOL_DOCUMENT_ROOT."/core/class/html.formother.class.php");
require_once(DOL_DOCUMENT_ROOT."/core/class/html.formadmin.class.php");

$langs->load("admin");
$langs->load("languages");
$langs->load("other");

$langs->load("companies");
$langs->load("products");
$langs->load("members");

if (!$user->admin)
  accessforbidden();


if (isset($_POST["action"]) && $_POST["action"] == 'update')
{
	dolibarr_set_const($db, "MAIN_PROFID1_IN_ADDRESS",    $_POST["MAIN_PROFID1_IN_ADDRESS"],'chaine',0,'',$conf->entity);
	dolibarr_set_const($db, "MAIN_PROFID2_IN_ADDRESS",    $_POST["MAIN_PROFID2_IN_ADDRESS"],'chaine',0,'',$conf->entity);
	dolibarr_set_const($db, "MAIN_PROFID3_IN_ADDRESS",    $_POST["MAIN_PROFID3_IN_ADDRESS"],'chaine',0,'',$conf->entity);
	dolibarr_set_const($db, "MAIN_PROFID4_IN_ADDRESS",    $_POST["MAIN_PROFID4_IN_ADDRESS"],'chaine',0,'',$conf->entity);

	$_SESSION["mainmenu"]="";   // Le gestionnaire de menu a pu changer

	Header("Location: ".$_SERVER["PHP_SELF"]."?mainmenu=home&leftmenu=setup");
	exit;
}


/*
 * View
 */

$wikihelp='EN:First_setup|FR:Premiers_param&eacute;trages|ES:Primeras_configuraciones';
llxHeader('',$langs->trans("Setup"),$wikihelp);

$html=new Form($db);
$formother=new FormOther($db);
$formadmin=new FormAdmin($db);

print_fiche_titre($langs->trans("PDF"),'','setup');

print $langs->trans("PDFDesc")."<br>\n";
print "<br>\n";


if (isset($_GET["action"]) && $_GET["action"] == 'edit')	// Edit
{
    print '<form method="post" action="'.$_SERVER["PHP_SELF"].'">';
    print '<input type="hidden" name="token" value="'.$_SESSION['newtoken'].'">';
    print '<input type="hidden" name="action" value="update">';

    clearstatcache();


    // PDF
    print_fiche_titre($langs->trans("PDFAddressForging"),'','').'<br>';
	$var=true;
    print '<table summary="more" class="noborder" width="100%">';
    print '<tr class="liste_titre"><td>'.$langs->trans("Parameter").'</td><td colspan="2">'.$langs->trans("Value").'</td></tr>';

    // Show prof id 1 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId1",$mysoc->pays_code).'</td><td>';
	print $html->selectyesno('MAIN_PROFID1_IN_ADDRESS',isset($conf->global->MAIN_PROFID1_IN_ADDRESS)?$conf->global->MAIN_PROFID1_IN_ADDRESS:0,1);
    print '</td></tr>';

    // Show prof id 2 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId2",$mysoc->pays_code).'</td><td>';
	print $html->selectyesno('MAIN_PROFID2_IN_ADDRESS',isset($conf->global->MAIN_PROFID2_IN_ADDRESS)?$conf->global->MAIN_PROFID2_IN_ADDRESS:0,1);
    print '</td></tr>';

    // Show prof id 3 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId3",$mysoc->pays_code).'</td><td>';
	print $html->selectyesno('MAIN_PROFID3_IN_ADDRESS',isset($conf->global->MAIN_PROFID3_IN_ADDRESS)?$conf->global->MAIN_PROFID3_IN_ADDRESS:0,1);
    print '</td></tr>';

    // Show prof id 4 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId4",$mysoc->pays_code).'</td><td>';
	print $html->selectyesno('MAIN_PROFID4_IN_ADDRESS',isset($conf->global->MAIN_PROFID4_IN_ADDRESS)?$conf->global->MAIN_PROFID4_IN_ADDRESS:0,1);
    print '</td></tr>';

	print '</table>';


    print '<br><center>';
    print '<input class="button" type="submit" value="'.$langs->trans("Save").'">';
    print '</center>';

    print '</form>';
    print '<br>';
}
else	// Show
{
    $var=true;

    print_fiche_titre($langs->trans("PDFAddressForging"),'','').'<br>';
    print '<table class="noborder" width="100%">';
    print '<tr class="liste_titre"><td>'.$langs->trans("Parameter").'</td><td>'.$langs->trans("Value").'</td></tr>';

    // Show prof id 1 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId1",$mysoc->pays_code).'</td><td>';
    print yn($conf->global->MAIN_PROFID1_IN_ADDRESS,1);
    print '</td></tr>';

    // Show prof id 2 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId2",$mysoc->pays_code).'</td><td>';
    print yn($conf->global->MAIN_PROFID2_IN_ADDRESS,1);
    print '</td></tr>';

    // Show prof id 3 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId3",$mysoc->pays_code).'</td><td>';
    print yn($conf->global->MAIN_PROFID3_IN_ADDRESS,1);
    print '</td></tr>';

    // Show prof id 4 in address into pdf
    $var=!$var;
    print '<tr '.$bc[$var].'><td>'.$langs->trans("ShowProfIdInAddress").' - '.$langs->transcountry("ProfId4",$mysoc->pays_code).'</td><td>';
    print yn($conf->global->MAIN_PROFID4_IN_ADDRESS,1);
    print '</td></tr>';

    print '</table>'."\n";


    print '<div class="tabsAction">';
    print '<a class="butAction" href="'.$_SERVER["PHP_SELF"].'?action=edit">'.$langs->trans("Modify").'</a>';
    print '</div>';
	print '<br>';
}


$db->close();

llxFooter('$Date: 2011/08/10 23:48:09 $ - $Revision: 1.1 $');
?>