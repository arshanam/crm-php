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

$bills = array(
		'CHARSET' => 'UTF-8',
		'Bill' => 'Rechnung',
		'Bills' => 'Rechnungen',
		'BillsCustomers' => 'Kundenrechnungen',
		'BillsCustomer' => 'Customer\'s invoice',
		'BillsSuppliers' => 'Lieferantenrechnungen',
		'BillsCustomersUnpaid' => 'Kunden wegen eines nicht bezahlten Rechnungen',
		'BillsCustomersUnpaidForCompany' => 'Kunden wegen eines nicht bezahlten Rechnungen für %s',
		'BillsSuppliersUnpaid' => 'Lieferanten nicht bezahlten Rechnungen',
		'BillsSuppliersUnpaidForCompany' => 'Unpaid supplier\'s invoices for %s',
		'BillsUnpaid' => 'Unbezahlte',
		'BillsLate' => 'Late payments',
		'BillsStatistics' => 'Statistik Kundenrechnungen',
		'BillsStatisticsSuppliers' => 'Statistik Lieferantenrechnungen',
		'DisabledBecauseNotErasable' => 'Disabled because can not be erased',
		'InvoiceStandard' => 'Standardrechnung',
		'InvoiceStandardAsk' => 'Standardrechnung',
		'InvoiceStandardDesc' => 'Dies ist das Standard-Rechnungsformat',
		'InvoiceDeposit' => 'Anzahlung Rechnung',
		'InvoiceDepositAsk' => 'Anzahlung Rechnung',
		'InvoiceDepositDesc' => 'Diese Art der Rechnung erfolgt, wenn eine Anzahlung eingegangen ist.',
		'InvoiceProForma' => 'Proforma Rechnung',
		'InvoiceProFormaAsk' => 'Proforma Rechnung',
		'InvoiceProFormaDesc' => '<b>Proforma Rechnung</b> ist ein Bild eines echten Rechnung, hat aber keine Buchhaltung Wert.',
		'InvoiceReplacement' => 'Ersatzrechnung',
		'InvoiceReplacementAsk' => 'Ersatzrechnung für Rechnung',
		'InvoiceReplacementDesc' => '<b>Ersatzrechnungen</b> dienen dem Storno und vollständigen Ersatz einer Rechnung ohne bereits erfolgtem Zahlungseingang. <br><br> Hinweis: Rechnungen mit Zahlungseingang können nicht ersetzt werden. Falls noch nicht geschlossen, werden ersetzte Rechnungen automatisch als \'Aufgegeben geschlossen\' markiert.',
		'InvoiceAvoir' => 'Gutschrift',
		'InvoiceAvoirAsk' => 'Gutschrift zur Rechnungskorrektur',
		'InvoiceAvoirDesc' => 'Eine <b>Gutschrift</b> ist eine negative Rechnung zur Begleichung von Wertdifferenzen zwischen Rechnungssummen und Zahlungseingängen (Zuviel bezahlt oder mangelhafte Lieferung).',
		'ReplaceInvoice' => 'Ersetze Rechnung %s',
		'ReplacementInvoice' => 'Ersatzrechnung',
		'ReplacedByInvoice' => 'Ersetzt durch Rechnung %s',
		'ReplacementByInvoice' => 'Ersetzt durch Rechnung',
		'CorrectInvoice' => 'Korrigiere Rechnung %s',
		'CorrectInvoice' => 'Korrigiere Rechnung %s',
		'CorrectionInvoice' => 'Rechungskorrektur',
		'UsedByInvoice' => 'Zur Bezahlung der Rechnung %s',
		'ConsumedBy' => 'Consumed von',
		'NotConsumed' => 'Nicht verbrauchte',
		'NoReplacableInvoice' => 'Keine ersatzfähige Rechnungsnummer',
		'NoInvoiceToCorrect' => 'Keine zu korrigierende Rechnung',
		'InvoiceHasAvoir' => 'Korrigiert durch eine oder mehrere Rechnungen',
		'CardBill' => 'Rechnungskarte',
		'PredefinedInvoices' => 'Vordefinierte Rechnungen',
		'Invoice' => 'Rechnung',
		'Invoices' => 'Rechnungen',
		'InvoiceLine' => 'Rechnungszeile',
		'BillLines' => 'Invoice lines',
		'InvoiceCustomer' => 'Kundenrechnung',
		'CustomerInvoice' => 'Kundenrechnung',
		'CustomersInvoices' => 'Kundenrechnungen',
		'SupplierInvoice' => 'Lieferantenrechnung',
		'SuppliersInvoices' => 'Lieferantenrechnungen',
		'SupplierBill' => 'Lieferantenrechnung',
		'SupplierBills' => 'Lieferantenrechnungen',
		'Payment' => 'Zahlung',
		'PaymentBack' => 'Rückzahlung',
		'Payments' => 'Zahlungen',
		'PaymentsBack' => 'Rückzahlungen',
		'DatePayment' => 'Zahlungsdatum',
		'DeletePayment' => 'Lösche Zahlung',
		'ConfirmDeletePayment' => 'Möchten Sie diese Zahlung wirklich löschen?',
		'ConfirmConvertToReduc' => 'Möchten Sie diese Gutschrift in einen absoluten Rabatt umwandeln? <br>Das Gutschriftsguthaben wird dadurch als Rabatt auswählbar und lässt sich dadurch auf eine offene oder zukünftige Kundenrechnung anwenden.',
		'SupplierPayments' => 'Lieferantenzahlungen',
		'ReceivedPayments' => 'Erhaltene Zahlungen',
		'ReceivedCustomersPayments' => 'Erhaltene Anzahlungen von Kunden',
		'ReceivedCustomersPaymentsToValid' => 'Erhaltene Kundenzahlungen zur Freigabe',
		'PaymentsReportsForYear' => 'Zahlungsbericht für %s',
		'PaymentsReports' => 'Zahlungsberichte',
		'PaymentsAlreadyDone' => 'Bereits getätigte Zahlungen',
		'PaymentRule' => 'Zahlungsregel',
		'PaymentMode' => 'Zahlungsart',
		'PaymentConditions' => 'Zahlungskonditionen',
		'PaymentConditionsShort' => 'Konditionen',
		'PaymentAmount' => 'Zahlungsbetrag',
		'ValidatePayment' => 'Validate payment',
		'PaymentHigherThanReminderToPay' => 'Zahlungsbetrag übersteigt Zahlungserinnerung',
		'HelpPaymentHigherThanReminderToPay' => 'Achtung, die Zahlung eines oder mehrerer Rechnungen ist höher als der Rest zu zahlen. <br> Bearbeiten Sie Ihre Eingabe, sonst bestätigen und denken über die Schaffung einer Gutschrift von mehr als der für jede overpaid Rechnungen.',
		'ClassifyPaid' => 'Als \'bezahlt\' markieren',
		'ClassifyPaidPartially' => 'Als \'teilweise bezahlt\' markieren',
		'ClassifyCanceled' => 'Als \'storniert\' markieren',
		'ClassifyClosed' => 'Als \'geschlossen\' markieren',
		'CreateBill' => 'Erstelle Rechnung',
		'AddBill' => 'Rechnung/Gutschrift erstellen',
		'DeleteBill' => 'Lösche Rechnung',
		'SearchACustomerInvoice' => 'Suche Kundenrechnung',
		'SearchASupplierInvoice' => 'Suche Lieferantenrechnung',
		'CancelBill' => 'Rechnung stornieren',
		'SendRemindByMail' => 'Zahlungserinnerung per E-Mail senden',
		'DoPayment' => 'Zahlung tätigen',
		'DoPaymentBack' => 'Rückzahlung tätigen',
		'ConvertToReduc' => 'In Rabatt umwandeln',
		'EnterPaymentReceivedFromCustomer' => 'Geben Sie die vom Kunden erhaltene Zahlung ein',
		'EnterPaymentDueToCustomer' => 'Kundenzahlung fällig stellen',
		'DisabledBecauseRemainderToPayIsZero' => 'Deaktiviert, da Zahlungserinnerung auf null steht',
		'Amount' => 'Betrag',
		'PriceBase' => 'Preis',
		'BillStatus' => 'Rechnungsstatus',
		'BillStatusDraft' => 'Entwurf (freizugeben)',
		'BillStatusPaid' => 'Bezahlt',
		'BillStatusPaidBackOrConverted' => 'Bezahlt oder in Rabatt umgewandelt',
		'BillStatusPaidBack' => 'Paid back',
		'BillStatusConvertedToReduc' => 'Converted into discount',
		'BillStatusConverted' => 'Umgerechnet auf Rabatt',
		'BillStatusCanceled' => 'Storniert',
		'BillStatusValidated' => 'Freigegeben (zu bezahlen)',
		'BillStatusStarted' => 'Begonnen',
		'BillStatusNotPaid' => 'Offen',
		'BillStatusClosedUnpaid' => 'Geschlossen (unbezahlt)',
		'BillStatusClosedPaidPartially' => 'Bezahlt (teilweise)',
		'BillShortStatusDraft' => 'Entwurf',
		'BillShortStatusPaid' => 'Bezahlt',
		'BillShortStatusPaidBackOrConverted' => 'Bearbeitet',
		'BillShortStatusConverted' => 'Verarbeitete',
		'BillShortStatusCanceled' => 'Storniert',
		'BillShortStatusValidated' => 'Freigegeben',
		'BillShortStatusStarted' => 'Begonnen',
		'BillShortStatusNotPaid' => 'Offen',
		'BillShortStatusClosedUnpaid' => 'Geschlossen',
		'BillShortStatusClosedPaidPartially' => 'Bezahlt (teilweise)',
		'PaymentStatusToValidShort' => 'Freizugeben',
		'ErrorVATIntraNotConfigured' => 'Intrakommunale UID-Nr. noch nicht definiert',
		'ErrorNoPaiementModeConfigured' => 'Keine standardmäßige Zahlungsart definiert. Beheben Sie diesen Fehler in den Einstellungen des Rechnungsmoduls.',
		'ErrorCreateBankAccount' => 'Legen Sie ein Bankkonto an und definieren Sie anschließend die Zahlungsarten in den Einstellungen des Rechnungsmoduls.',
		'ErrorBillNotFound' => 'Rechnung %s existiert nicht',
		'ErrorInvoiceAlreadyReplaced' => 'Fehler: Sie versuchen eine Ersatzrechnung für Rechnung %s freizugeben. Diese wurde allerdings bereits durch Rechnung %s ersetzt.',
		'ErrorDiscountAlreadyUsed' => 'Fehler: Dieser Rabatt ist bereits verbraucht.',
		'ErrorInvoiceAvoirMustBeNegative' => 'Fehler: Gutschriften verlangen nach einem negativen Rechnungsbetrag',
		'ErrorInvoiceOfThisTypeMustBePositive' => 'Fehler: Rechnungen dieses Typs verlangen nach einem positiven Rechnungsbetrag',
		'ErrorCantCancelIfReplacementInvoiceNotValidated' => 'Fehler: Sie können keine Rechnung stornieren, deren Ersatzrechnung sich noch im Status \'Entwurf\' befindet',
		'BillFrom' => 'Von',
		'BillTo' => 'An',
		'ActionsOnBill' => 'Maßnahmen zu dieser Rechnung',
		'NewBill' => 'Neue Rechnung',
		'Prélèvements' => 'Dauerauftrag',
		'Prélèvements' => 'Dauerauftrag',
		'LastBills' => '%s neueste Rechnungen',
		'LastCustomersBills' => '%s neueste Kundenrechnungen',
		'LastSuppliersBills' => 'Letzte %s Lieferantenrechnungen',
		'AllBills' => 'Alle Rechnungen',
		'OtherBills' => 'Sonstige Rechnungen',
		'DraftBills' => 'Rechnungsentwürfe',
		'CustomersDraftInvoices' => 'Entwürfe Kundenrechnungen',
		'SuppliersDraftInvoices' => 'Entwürfe Lieferantenrechnungen',
		'Unpaid' => 'Unbezahlte',
		'ConfirmDeleteBill' => 'Möchten Sie diese Rechnung wirklich löschen?',
		'ConfirmValidateBill' => 'Möchten Sie die Rechnung Nr. <b>%s</b> wirklich freigeben?',
		'ConfirmUnvalidateBill' => 'Are you sure you want to change invoice <b>%s</b> to draft status ?',
		'ConfirmClassifyPaidBill' => 'Sind Sie sicher, dass Sie ändern möchten <b>Rechnung %s,</b> um den Status bezahlt?',
		'ConfirmCancelBill' => 'Möchten Sie die Rechnung <b>%s</b> wirklich stornieren?',
		'ConfirmCancelBillQuestion' => 'Warum wollen Sie klassifizieren diese Rechnung "aufgegeben"?',
		'ConfirmClassifyPaidPartially' => 'Möchten Sie die Rechnung <b>%s</b> wirklich als \'teilweise bezahlt\' markieren?',
		'ConfirmClassifyPaidPartiallyQuestion' => 'Diese Rechnung wurde nicht vollständig bezahlt. Was sind Gründe für das Schließen dieser Rechnung?',
		'ConfirmClassifyPaidPartiallyReasonAvoir' => 'Der offene Zahlbetrag <b>( %s %s)</b> resultiert aus einem gewährten Skonto. Zur Korrektur der MwSt. lege ich eine Gutschrift an.',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVat' => 'Der offene Zahlbetrag <b>( %s %s)</b> resultiert aus einem gewährten Skonto. Ich akzeptiere den Verlust der MwSt. aus diesem Rabatt.',
		'ConfirmClassifyPaidPartiallyReasonDiscountVat' => 'Der offene Zahlbetrag <b>( %s %s)</b> resultiert aus einem gewährten Skonto. Ich stelle die Mehrwertsteuer aus diesem Rabatt über eine Gutschrift wiederher.',
		'ConfirmClassifyPaidPartiallyReasonBadCustomer' => 'Kundenverschulden',
		'ConfirmClassifyPaidPartiallyReasonProductReturned' => 'Produkte teilweise retourniert',
		'ConfirmClassifyPaidPartiallyReasonOther' => 'Betrag aus anderen Gründen uneinbringlich',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVatDesc' => 'Diese Wahl ist möglich, wenn Sie Ihre Rechnung mit passenden Kommentar versehen sein. (Beispiel «Nur die Steuer entsprechend dem Preis, der gezahlt worden tatsächlich gibt Rechte an Abzug»)',
		'ConfirmClassifyPaidPartiallyReasonDiscountVatDesc' => 'Diese Option steht Ihnen nur dann offen, falls Ihre Rechnung einen entsprechenden Vermerk enthält. (Beispiel: Nur der tatsächlich bezahlte Preis ist abzugsfähig)',
		'ConfirmClassifyPaidPartiallyReasonAvoirDesc' => 'Mit dieser Wahl, wenn alle anderen nicht passt',
		'ConfirmClassifyPaidPartiallyReasonBadCustomerDesc' => 'Unter <b>Kundenverschulden</b> fallen vor allem Zahlungsunwilligkeit-, bzw. -unfähigkeit (Insolvenz).',
		'ConfirmClassifyPaidPartiallyReasonProductReturnedDesc' => 'Wählen Sie diese Option, falls die Zahlungsdifferenz aus Warenrücksendungen resultiert.',
		'ConfirmClassifyPaidPartiallyReasonOtherDesc' => 'Wählen Sie diese Option, falls keine der anderen zutrifft: <br> - Mangelhafte oder falsche Lieferung <br> - Forderung auf Grund vergessenen Rabatts zu hoch <br> Korrigieren Sie in jedem Fall das Rechnungswesen über eine entsprechende Gutschrift.',
		'ConfirmClassifyAbandonReasonOther' => 'Andere',
		'ConfirmClassifyAbandonReasonOtherDesc' => 'Wählen Sie diese Option in allen anderen Fällen, z.B. wenn Sie planen, eine Ersatzrechnung anzulegen.',
		'ConfirmCustomerPayment' => 'Bestätigen Sie diesen Zahlungseingang für <b>%s</b>, %s?',
		'ConfirmValidatePayment' => 'Sind Sie sicher, dass Sie, um diese Zahlung? Keine Änderung kann erfolgen, wenn paiement ist validiert.',
		'ValidateBill' => 'Rechnung freigeben',
		'UnvalidateBill' => 'Unvalidate invoice',
		'NumberOfBills' => 'Anzahl der Rechnungen',
		'NumberOfBillsByMonth' => 'Nb of invoices by month',
		'AmountOfBills' => 'Anzahl der Rechnungen',
		'AmountOfBillsByMonthHT' => 'Amount of invoices by month (net of tax)',
		'ShowSocialContribution' => 'Zeige Sozialbeitrag',
		'ShowBill' => 'Zeige Rechnung',
		'ShowInvoice' => 'Zeige Rechnung',
		'ShowInvoiceReplace' => 'Zeige Ersatzrechnung',
		'ShowInvoiceAvoir' => 'Zeige Gutschrift',
		'ShowInvoiceDeposit' => 'Show Anzahlung Rechnung',
		'ShowPayment' => 'Zeige Zahlung',
		'File' => 'Datei',
		'AlreadyPaid' => 'Bereits bezahlt',
		'AlreadyPaidNoCreditNotesNoDeposits' => 'Bereits bezahlte (ohne Gutschriften und Einlagen)',
		'Abandoned' => 'Abandoned',
		'RemainderToPay' => 'Zu zahlender Restbetrag',
		'RemainderToTake' => 'Einzuhebender Restbetrag',
		'AmountExpected' => 'Höhe der Forderung',
		'ExcessReceived' => 'Erhaltener Überschuss',
		'EscompteOffered' => 'Rabatt angeboten (Skonto)',
		'SendBillRef' => 'Sende Rechnung %s',
		'SendReminderBillRef' => 'Rechnung senden %s (Zahlungserinnerung)',
		'StandingOrders' => 'Daueraufträge',
		'StandingOrder' => 'Dauerauftrag',
		'NoDraftBills' => 'Keine Rechnungsentwürfe',
		'NoOtherDraftBills' => 'Keine Rechnungsentwürfe Anderer',
		'RefBill' => 'Rechnungs Nr.',
		'ToBill' => 'Zu verrechnen',
		'RemainderToBill' => 'Zu verrechnender Restbetrag',
		'SendBillByMail' => 'Rechnung per E-Mail senden',
		'SendReminderBillByMail' => 'Erinnerung per E-Mail senden',
		'RelatedCommercialProposals' => 'Verknüpfte Angebote',
		'MenuToValid' => 'Zur Freigabe',
		'DateMaxPayment' => 'Zahlungsziel',
		'DateEcheance' => 'Zahlungsfrist (Limit)',
		'DateInvoice' => 'Rechnungsdatum',
		'NoInvoice' => 'Keine Rechnung',
		'ClassifyBill' => 'Rechnung einordnen',
		'NoSupplierBillsUnpaid' => 'Nr. Lieferanten Rechnungen unbezahlt',
		'SupplierBillsToPay' => 'Zu zahlende Lieferantenrechnungen',
		'CustomerBillsUnpaid' => 'Kunden wegen eines nicht bezahlten Rechnungen',
		'DispenseMontantLettres' => 'Automatisch generierte Dokumente unterliegen nicht den Formvorschriften eines Briefs.',
		'DispenseMontantLettres' => 'Automatisch generierte Dokumente unterliegen nicht den Formvorschriften eines Briefs.',
		'NonPercuRecuperable' => 'Nicht erstattungsfähig',
		'SetConditions' => 'Zahlungskonditionen einstellen',
		'SetMode' => 'Definiere Zahlungsart',
		'SetDate' => 'Datum',
		'SelectDate' => 'Select a date',
		'Billed' => 'In Rechnung gestellt',
		'RepeatableInvoice' => 'Rechnungsvorlage',
		'RepeatableInvoices' => 'Rechnungsvorlagen',
		'Repeatable' => 'Vorlage',
		'Repeatables' => 'Vorlagen',
		'ChangeIntoRepeatableInvoice' => 'In Rechnungsvorlage umwandeln',
		'CreateRepeatableInvoice' => 'Erstelle Rechnungsvorlage',
		'CreateFromRepeatableInvoice' => 'Aus Rechnungsvorlage erstellen',
		'CustomersInvoicesAndInvoiceLines' => 'Kundenrechnungen und -positionen',
		'CustomersInvoicesAndPayments' => 'Kundenrechnungen und -zahlungen',
		'ExportDataset_invoice_1' => 'Kundenrechnungen und -positionen',
		'ExportDataset_invoice_2' => 'Kundenrechnungen und -zahlungen',
		'ProformaBill' => 'Proforma-Rechnung:',
		'Reduction' => 'Ermäßigung',
		'ReductionShort' => 'Ermäßigung',
		'Reductions' => 'Ermäßigungen',
		'ReductionsShort' => 'Ermäßigungen',
		'Discount' => 'Rabatt',
		'Discounts' => 'Rabatte',
		'AddDiscount' => 'Rabattregel hinzufügen',
		'AddRelativeDiscount' => 'Create relative discount',
		'EditRelativeDiscount' => 'Edit relative discount',
		'AddGlobalDiscount' => 'Rabattregel hinzufügen',
		'EditGlobalDiscounts' => 'Edit absolute discounts',
		'AddCreditNote' => 'Create credit note',
		'ShowDiscount' => 'Zeige Rabatt',
		'ShowReduc' => 'Show the deduction',
		'RelativeDiscount' => 'Relativer Rabatt',
		'GlobalDiscount' => 'Rabattregel',
		'CreditNote' => 'Gutschrift',
		'CreditNotes' => 'Gutschriften',
		'Deposit' => 'Anzahlung',
		'Deposits' => 'Einlagen',
		'DiscountFromCreditNote' => 'Rabatt aus Gutschrift %s',
		'DiscountFromDeposit' => 'Die Zahlungen aus Anzahlung Rechnung %s',
		'AbsoluteDiscountUse' => 'Diese Art von Krediten verwendet werden kann auf der Rechnung vor der Validierung',
		'CreditNoteDepositUse' => 'Rechnung muss validiert werden, um mit diesem König von Krediten',
		'NewGlobalDiscount' => 'Neue Rabattregel',
		'NewRelativeDiscount' => 'Neue relative Rabatt',
		'NoteReason' => 'Anmerkung/Begründung',
		'ReasonDiscount' => 'Rabattgrund',
		'DiscountOfferedBy' => 'Rabatt angeboten von',
		'DiscountStillRemaining' => 'Noch verbleibender Rabatt',
		'DiscountAlreadyCounted' => 'Rabatt bereits berücksichtigt',
		'BillAddress' => 'Rechnungsanschrift',
		'HelpEscompte' => 'Bei diesem Rabatt handelt es sich um einen Skonto.',
		'HelpAbandonBadCustomer' => 'Dieser Betrag wurde aufgegeben (Kundennverschulden) ist als uneinbringlich zu werten.',
		'HelpAbandonOther' => 'Dieser Betrag wurde auf Grund eines Fehlers aufgegeben (falsche Rechnung oder an falschen Kunden)',
		'IdSocialContribution' => 'Sozialbeitrags id',
		'PaymentId' => 'Zahlung id',
		'InvoiceId' => 'Rechnungs ID',
		'InvoiceRef' => 'Rechnungs Nr.',
		'InvoiceDateCreation' => 'Datum der Rechnungserstellung',
		'InvoiceStatus' => 'Rechnungsstatus',
		'InvoiceNote' => 'Hinweis zur Rechnung',
		'InvoicePaid' => 'Rechnung bezahlt',
		'PaymentNumber' => 'Zahlung Nr.',
		'RemoveDiscount' => 'Rabatt entfernen',
		'WatermarkOnDraftBill' => 'Wasserzeichen auf den Rechnungsentwürfen (nichts, falls leer)',
		'InvoiceNotChecked' => 'No invoice selected',
		'CloneInvoice' => 'Rechnung duplizieren',
		'ConfirmCloneInvoice' => 'Möchten sie die Rechnung <b>%s</b> wirklich duplizieren?',
		'DisabledBecauseReplacedInvoice' => 'Aktion unzulässig, da die betreffende Rechnung ersetzt wurde',
		'DescTaxAndDividendsArea' => 'Dieser Bereich stellt eine Übersicht über alle Zahlungen, die für die Steuer-oder Sozialabgaben. Nur Datensätze mit der Bezahlung während der festgesetzten Jahr hier.',
		'NbOfPayments' => 'Zahl der Zahlungen',
		'SplitDiscount' => 'Split Rabatt in zwei',
		'ConfirmSplitDiscount' => 'Sind Sie sicher, dass Sie teilen wollen diesen Rabatt <b>von %s %s</b> in 2 niedrigere Rabatte?',
		'TypeAmountOfEachNewDiscount' => 'Input für jeden der zwei Teile:',
		'TotalOfTwoDiscountMustEqualsOriginal' => 'Insgesamt zwei neue Rabatt muss gleich zu den ursprünglichen Betrag Rabatt.',
		'ConfirmRemoveDiscount' => 'Sind Sie sicher, dass Sie möchten, entfernen Sie diesen Rabatt?',
		'RelatedBill' => 'Verwandte Rechnung',
		'RelatedBills' => 'Ähnliche Rechnungen',
		// PaymentConditions
		'PaymentConditionShortRECEP' => 'Prompt',
		'PaymentConditionRECEP' => 'Prompt nach Rechnungserhalt',
		'PaymentConditionShort30D' => '30 Tage',
		'PaymentCondition30D' => '30 Tage netto',
		'PaymentConditionShort30DENDMONTH' => '30 Tage ab Monatsende',
		'PaymentCondition30DENDMONTH' => '30 Tage ab Ende des Monats',
		'PaymentConditionShort60D' => '60 Tage',
		'PaymentCondition60D' => '60 Tage',
		'PaymentConditionShort60DENDMONTH' => '60 Tage ab Monatsende',
		'PaymentCondition60DENDMONTH' => '60 Tage ab Ende des Monats',
		'PaymentConditionShortPT_DELIVERY' => 'Delivery',
		'PaymentConditionPT_DELIVERY' => 'On delivery',
		'PaymentConditionShortPT_ORDER' => 'On order',
		'PaymentConditionPT_ORDER' => 'On order',
		'PaymentConditionShortPT_5050' => '50-50',
		'PaymentConditionPT_5050' => '50%% in advance, 50%% on delivery',
		// PaymentType
		'PaymentTypeVIR' => 'Banküberweisung',
		'PaymentTypeShortVIR' => 'Banküberweisung',
		'PaymentTypePRE' => 'Bankeinzug/Lastschrift',
		'PaymentTypeShortPRE' => 'Lastschrift',
		'PaymentTypeLIQ' => 'Bar',
		'PaymentTypeShortLIQ' => 'Bar',
		'PaymentTypeCB' => 'Kreditkarte',
		'PaymentTypeShortCB' => 'Kreditkarte',
		'PaymentTypeCHQ' => 'Scheck',
		'PaymentTypeShortCHQ' => 'Scheck',
		'PaymentTypeTIP' => 'TIP',
		'PaymentTypeShortTIP' => 'TIP',
		'PaymentTypeVAD' => 'Online-Zahlung',
		'PaymentTypeShortVAD' => 'Online-Zahlung',
		'PaymentTypeTRA' => 'Zahlung auf Rechnung',
		'PaymentTypeShortTRA' => 'Rechnung',
		'BankDetails' => 'Bankverbindung',
		'BankCode' => 'Bankleitzahl',
		'DeskCode' => 'Desk-Code',
		'BankAccountNumber' => 'Kontonummer',
		'BankAccountNumberKey' => 'Schlüssel',
		'Residence' => 'Wohnsitz',
		'IBANNumber' => 'IBAN-Nummer',
		'IBAN' => 'IBAN',
		'BIC' => 'BIC/SWIFT',
		'BICNumber' => 'BIC/SWIFT Code',
		'ExtraInfos' => 'Zusatzinformationen',
		'RegulatedOn' => 'Gebucht am',
		'ChequeNumber' => 'Schecknummer',
		'ChequeOrTransferNumber' => 'Scheck-/Überweisungsnummer',
		'ChequeMaker' => 'Scheckaussteller',
		'ChequeBank' => 'Scheckbank',
		'NetToBePaid' => 'Netto Zahlbetrag',
		'PhoneNumber' => 'Tel',
		'FullPhoneNumber' => 'Telefon',
		'TeleFax' => 'Fax',
		'PrettyLittleSentence' => 'Nehmen Sie die Höhe der Zahlungen, die aufgrund von Schecks, die in meinem Namen als Mitglied eines Accounting Association, die von der Steuerverwaltung.',
		'IntracommunityVATNumber' => 'Innergemeinschaftliche MwSt-Nummer',
		'PaymentByChequeOrderedTo' => 'Zahlung per Scheck zu zahlen sind, um %s an',
		'PaymentByChequeOrderedToShort' => 'Zahlung per Scheck zu zahlen sind, um',
		'SendTo' => 'an',
		'PaymentByTransferOnThisBankAccount' => 'Zahlung per Überweisung auf folgendes Konto',
		'VATIsNotUsedForInvoice' => '* Nicht für MwSt-art-CGI-293B',
		'LawApplicationPart1' => 'Durch die Anwendung des Gesetzes 80,335 von 12/05/80',
		'LawApplicationPart2' => 'Die Ware bleibt Eigentum der',
		'LawApplicationPart3' => 'der Verkäufer bis zur vollständigen Einlösung des',
		'LawApplicationPart4' => 'ihren Preis.',
		'LimitedLiabilityCompanyCapital' => 'SARL mit einem Kapital von',
		'UseLine' => 'Apply',
		'UseDiscount' => 'Verwenden',
		'UseCredit' => 'Verwenden Sie die Credit',
		'UseCreditNoteInInvoicePayment' => 'Reduzieren Sie die Zahlung mit dieser Gutschrift',
		'MenuChequeDeposits' => 'Schecks Einlagen',
		'MenuCheques' => 'Schecks',
		'MenuChequesReceipts' => 'Schecks Einnahmen',
		'NewChequeDeposit' => 'Neue Hinterlegung',
		'ChequesReceipts' => 'Schecks Einnahmen',
		'ChequesArea' => 'Schecks Einlagen Bereich',
		'ChequeDeposits' => 'Schecks Einlagen',
		'Cheques' => 'Schecks',
		'CreditNoteConvertedIntoDiscount' => 'Diese Gutschrift wurde in %s',
		'UsBillingContactAsIncoiveRecipientIfExist' => 'Verwenden Sie Kunden Abrechnung Kontakt-Adresse anstelle von Dritten als Empfänger-Adresse für Rechnungen',
		'ShowUnpaidAll' => 'Show all unpaid invoices',
		'ShowUnpaidLateOnly' => 'Show Ende unbezahlte Rechnung nur',
		'PaymentInvoiceRef' => 'Die Zahlung der Rechnung %s',
		'ValidateInvoice' => 'Validate Rechnung',
		'Cash' => 'Bargeld',
		'Reported' => 'Verspätet',
		'DisabledBecausePayments' => 'Nicht möglich, da gibt es einige Zahlungen',
		'CantRemovePaymentWithOneInvoicePaid' => 'Kann die Zahlung nicht entfernen, da es zumindest auf der Rechnung bezahlt klassifiziert',
		'ExpectedToPay' => 'Erwartete Zahlung',
		'PayedByThisPayment' => 'Bezahlt durch diese Zahlung',
		'ClosePaidInvoicesAutomatically' => 'Classify "Payed" all standard or replacement invoices entierely payed.',
		'AllCompletelyPayedInvoiceWillBeClosed' => 'All invoice with no remain to pay will be automatically closed to status "Payed".',
		////////// Types de contacts //////////
		'TypeContact_facture_internal_SALESREPFOLL' => 'Repräsentative Follow-up Debitorenrechnung',
		'TypeContact_facture_external_BILLING' => 'Debitorenrechnung Kontakt',
		'TypeContact_facture_external_SHIPPING' => 'Customer Versand Kontakt',
		'TypeContact_facture_external_SERVICE' => 'Kundenservice kontaktieren',
		'TypeContact_invoice_supplier_internal_SALESREPFOLL' => 'Repräsentative Follow-up Lieferantenrechnung',
		'TypeContact_invoice_supplier_external_BILLING' => 'Lieferantenrechnung Kontakt',
		'TypeContact_invoice_supplier_external_SHIPPING' => 'Supplier Versand Kontakt',
		'TypeContact_invoice_supplier_external_SERVICE' => 'Supplier Service Kontakt',
		// crabe PDF Model
		'PDFCrabeDescription' => 'Rechnung Modell Crabe. Eine vollständige Rechnung Modell (Support Mehrwertsteuer Option, Rabatte, Zahlungen Bedingungen, Logos, etc. ..)',
		// oursin PDF Model
		'PDFOursinDescription' => 'Rechnung Modell oursin',
		// NumRef Modules
		'TerreNumRefModelDesc1' => 'Zurück NUMERO mit Format %syymm-nnnn für Standardrechnungen und syymm%-nnnn für Gutschriften, wo ist JJ Jahr, MM Monat und nnnn ist eine Folge ohne Pause und keine Rückkehr auf 0',
		'TerreNumRefModelError' => 'Eine Rechnung, beginnend mit $ syymm existiert bereits und ist nicht kompatibel mit diesem Modell der Reihe. Entfernen oder umbenennen, um dieses Modul.'
);
?>