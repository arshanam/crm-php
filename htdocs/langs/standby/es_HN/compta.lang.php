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

$compta = array(
		'CHARSET' => 'UTF-8',
		'VATToPay' => 'ISV ventas',
		'VATReceived' => 'ISV repercutido',
		'VATToCollect' => 'ISV compras',
		'VATSummary' => 'Balance de ISV',
		'VATPaid' => 'ISV Pagado',
		'VATCollected' => 'ISV recuperado',
		'PaymentVat' => 'Pago ISV',
		'NewVATPayment' => 'Nuevo pago de ISV',
		'VATPayment' => 'Pago ISV',
		'VATPayments' => 'Pagos ISV',
		'SocialContributionsPayments' => 'Pagos cargas sociales',
		'ShowVatPayment' => 'Ver pagos ISV',
		'TotalVATReceived' => 'Total ISV percibido',
		'RulesResultDue' => '- Los importes mostrados son importes totales<br>- Incluye las facturas, cargas e ISV debidos, que estén pagadas o no.<br>- Se basa en la fecha de validación para las facturas y el ISV y en la fecha de vencimiento para las cargas.<br>',
		'RulesResultInOut' => '- Los importes mostrados son importes totales<br>- Incluye los pagos realizados para las facturas, cargas e ISV.<br>- Se basa en la fecha de pago de las mismas.<br>',
		'VATReportByCustomersInInputOutputMode' => 'Informe por cliente del ISV repercutido y pagado (ISV pagado)',
		'VATReportByCustomersInDueDebtMode' => 'Informe por cliente del ISV repercutido y pagado (ISV debido)',
		'VATReportByQuartersInInputOutputMode' => 'Informe por tasa del ISV repercutido y pagado (ISV pagado)',
		'VATReportByQuartersInDueDebtMode' => 'Informe por tasa del ISV repercutido y pagado (ISV debido)',
		'SeeVATReportInInputOutputMode' => 'Ver el informe <b>%sISV pagado%s</b> para un modo de cálculo estandard',
		'SeeVATReportInDueDebtMode' => 'Ver el informe <b>%sISV debido%s</b> para un modo de cálculo con la opción sobre lo debido',
		'RulesVATIn' => '- Para los servicios, el informe incluye el ISV de los pagos efectivamente recibidos o emitidos basándose en la fecha del pago.<br>- Para los bienes materiales, incluye el ISV de las facturas basándose en la fecha de la factura.',
		'RulesVATDue' => '- Para los servicios, el informe incluye el ISV de las facturas debidas, pagadas o no basándose en la fecha de estas facturas.<br>- Para los bienes materiales, incluye el ISV de las facturas basándose en la fecha de la factura.',
		'COMPTA_VAT_ACCOUNT' => 'Código contable por defecto para el ISV (si no está definido en el diccionario "Tasas de ISV")',
);
?>