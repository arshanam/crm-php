<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
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

$boxes = array(
		'CHARSET' => 'UTF-8',
		'BoxLastRssInfos' => 'Fils d\'informació RSS',
		'BoxLastProducts' => 'Els %s últims productes/serveis',
		'BoxProductsAlertStock' => 'Products in stock alert',
		'BoxLastProductsInContract' => 'Els %s últims productes/serveis contractats',
		'BoxLastSupplierBills' => 'Últimes factures de proveïdors',
		'BoxLastCustomerBills' => 'Últimes factures a clients',
		'BoxOldestUnpaidCustomerBills' => 'Factures a clients més antigues pendents de pagament',
		'BoxOldestUnpaidSupplierBills' => 'Factures de proveïdors més antigues pendents de pagament',
		'BoxLastProposals' => 'Últims pressupostos',
		'BoxLastProspects' => 'Últims clients potencials modificats',
		'BoxLastCustomers' => 'Últims clients modificats',
		'BoxLastSuppliers' => 'Últims proveïdors modificats',
		'BoxLastCustomerOrders' => 'Últimes comandes',
		'BoxLastBooks' => 'Últims books',
		'BoxLastActions' => 'Últims esdeveniments',
		'BoxLastContracts' => 'Últims contractes',
		'BoxLastContacts' => 'Últims contactes/adreçes',
		'BoxLastMembers' => 'Últims membres modificats',
		'BoxCurrentAccounts' => 'Saldos comptes corrents',
		'BoxSalesTurnover' => 'Volum de vendes',
		'BoxTotalUnpaidCustomerBills' => 'Total factures a clients pendents de cobrament',
		'BoxTotalUnpaidSuppliersBills' => 'Total factures de proveïdors pendents de pagament',
		'BoxTitleLastBooks' => 'Els %s darrers marcadors registrats',
		'BoxTitleNbOfCustomers' => 'Nombre de clients',
		'BoxTitleLastRssInfos' => 'Les %s últimes infos de %s',
		'BoxTitleLastProducts' => 'Els %s darrers productes/serveis registrats',
		'BoxTitleProductsAlertStock' => 'Products in stock alert',
		'BoxTitleLastCustomerOrders' => 'Les %s darreres comandes de clients modificades',
		'BoxTitleLastSuppliers' => 'Els %s darrers proveïdors registrats',
		'BoxTitleLastCustomers' => 'Els %s darrers clients registrats',
		'BoxTitleLastModifiedSuppliers' => 'Els %s últims proveïdors modificats',
		'BoxTitleLastModifiedCustomers' => 'Els %s últims clients modificats',
		'BoxTitleLastCustomersOrProspects' => 'Els %s darrers clients o clients potencials registrats',
		'BoxTitleLastPropals' => 'Els %s darrers pressupostos registrats',
		'BoxTitleLastCustomerBills' => 'Les %s últimes factures a clients modificades',
		'BoxTitleLastSupplierBills' => 'Les %s últimes factures de proveïdors modificades',
		'BoxTitleLastProspects' => 'Els %s darrers clients potencials registrats',
		'BoxTitleLastModifiedProspects' => 'Els %s últims clients potencials modificats',
		'BoxTitleLastProductsInContract' => 'Els %s darrers productes/serveis contractats',
		'BoxTitleLastModifiedMembers' => 'Els %s últims membres modificats',
		'BoxTitleOldestUnpaidCustomerBills' => 'Les %s factures més antigues a clients pendents de cobrament',
		'BoxTitleOldestUnpaidSupplierBills' => 'Les %s factures més antigues de proveïdors pendents de pagament',
		'BoxTitleCurrentAccounts' => 'Saldos dels comptes corrents',
		'BoxTitleSalesTurnover' => 'Volum de vendes realitzades',
		'BoxTitleTotalUnpaidCustomerBills' => 'Pendent de clients',
		'BoxTitleTotalUnpaidSuppliersBills' => 'Pendent a proveïdors',
		'BoxTitleLastModifiedContacts' => 'Els últims %s contactes/adreçes modificades',
		'BoxMyLastBookmarks' => 'Els meus %s darrers marcadors',
		'BoxOldestExpiredServices' => 'Serveis antics expirats',
		'BoxLastExpiredServices' => 'Els %s contractes més antics amb serveis actius expirats',
		'BoxTitleLastActionsToDo' => 'Les %s últims esdeveniments a realitzar',
		'BoxTitleLastContracts' => 'Els %s últims contractes',
		'BoxTitleLastModifiedDonations' => 'Les %s últimes donacions modificades',
		'BoxTitleLastModifiedExpenses' => 'Els %s últims honoraris modificats',
		'BoxGlobalActivity' => 'Activitat global',
		'FailedToRefreshDataInfoNotUpToDate' => 'Error en el refresc del flux RSS. Data de l\'últim refresc :%s',
		'LastRefreshDate' => 'Data darrera actualització',
		'NoRecordedBookmarks' => 'No hi ha marcadors personals.',
		'ClickToAdd' => 'Haga feu clic aquí per afegir.',
		'NoRecordedCustomers' => 'Cap client registrat',
		'NoRecordedContacts' => 'Cap contacte registrat',
		'NoActionsToDo' => 'Sense esdeveniments a realitzar',
		'NoRecordedOrders' => 'Sense comandes de clients registrats',
		'NoRecordedProposals' => 'Sense pressupostos registrats',
		'NoRecordedInvoices' => 'Sense factures a clients registrades',
		'NoUnpaidCustomerBills' => 'Sense factures a clients pendents de cobrament',
		'NoRecordedSupplierInvoices' => 'Sense factures de proveïdors',
		'NoUnpaidSupplierBills' => 'Sense factures de proveïdors pendents de pagament',
		'NoModifiedSupplierBills' => 'Sense factures de proveïdors modificades',
		'NoRecordedProducts' => 'Sense productes/serveis registrats',
		'NoRecordedProspects' => 'Sense clients potencials registrats',
		'NoContractedProducts' => 'Sense productes/serveis contractats',
		'NoRecordedContracts' => 'Sense contractes registrats',
		// Latest supplier orders
		'BoxLatestSupplierOrders' => 'Últimes comandes a proveïdors',
		'BoxTitleLatestSupplierOrders' => 'Les %s últimes comandes a proveïdors',
		'NoSupplierOrder' => 'Sense comandes a proveïdors'
);
?>