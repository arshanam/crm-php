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

$stocks = array(
		'CHARSET' => 'UTF-8',
		'WarehouseCard' => 'Склад-карты',
		'Warehouse' => 'Склад',
		'Warehouses' => 'Warehouses',
		'NewWarehouse' => 'Новый склад / Фондовый области',
		'WarehouseEdit' => 'Изменить склад',
		'MenuNewWarehouse' => 'Новый склад',
		'WarehouseOpened' => 'Склад открыт',
		'WarehouseClosed' => 'Склад закрыто',
		'WarehouseSource' => 'Источник склад',
		'WarehouseSourceNotDefined' => 'No warehouse defined,',
		'AddOne' => 'Add one',
		'WarehouseTarget' => 'Целевой показатель на складе',
		'ValidateSending' => 'Удалить отправке',
		'CancelSending' => 'Отменить отправку',
		'DeleteSending' => 'Удалить отправке',
		'Stock' => 'Фондовый',
		'Stocks' => 'Акции',
		'Movement' => 'Движение',
		'Movements' => 'Перевозкой',
		'ErrorWarehouseRefRequired' => 'Склад ссылкой зовут требуется',
		'ErrorWarehouseLabelRequired' => 'Склад этикетке необходимо',
		'CorrectStock' => 'Правильно запас',
		'ListOfWarehouses' => 'Список складов',
		'ListOfStockMovements' => 'Список акций движения',
		'StocksArea' => 'Акции области',
		'Location' => 'Вместо',
		'LocationSummary' => 'Сокращенное наименование расположение',
		'NumberOfProducts' => 'Общее количество продукции',
		'LastMovement' => 'Последнее движение',
		'LastMovements' => 'Последние движения',
		'Units' => 'Единицы',
		'Unit' => 'Единица',
		'StockCorrection' => 'Правильно запас',
		'StockMovement' => 'Трансфер',
		'StockMovements' => 'Фондовый переводы',
		'NumberOfUnit' => 'Количество единиц',
		'UnitPurchaseValue' => 'Unit purchase price',
		'TotalStock' => 'Всего на складе',
		'StockTooLow' => 'Фондовый слишком низкими',
		'StockLowerThanLimit' => 'Stock lower than alert limit',
		'EnhancedValue' => 'Значение',
		'PMPValue' => 'Значение',
		'PMPValueShort' => 'WAP',
		'EnhancedValueOfWarehouses' => 'Склады стоимости',
		'UserWarehouseAutoCreate' => 'Создать запас автоматически при создании пользователя',
		'QtyDispatched' => 'Количество направил',
		'OrderDispatch' => 'Приказ диспетчерского',
		'RuleForStockManagementDecrease' => 'Правило для управления запасами сокращение',
		'RuleForStockManagementIncrease' => 'Правило для управления запасами увеличить',
		'DeStockOnBill' => 'Снижение реальных запасов на счета / кредитных нот',
		'DeStockOnValidateOrder' => 'Снижение реальных запасов по заказам записки',
		'DeStockOnShipment' => 'Снижение реальных запасов отгрузки проверки',
		'ReStockOnBill' => 'Увеличение реальных запасов на счета / кредитных нот',
		'ReStockOnValidateOrder' => 'Увеличение реальных запасов по заказам записки',
		'ReStockOnDispatchOrder' => 'Увеличение реальных запасов на ручной посылаем в склады, после получения заказа поставщиком',
		'OrderStatusNotReadyToDispatch' => 'Заказ еще не или не более статуса, который позволяет отправку товаров на складе склады.',
		'StockDiffPhysicTeoric' => 'Причина разницы запас физических и теоретических',
		'NoPredefinedProductToDispatch' => 'Нет предопределенного продуктов для данного объекта. Так что не диспетчеризации в акции не требуется.',
		'DispatchVerb' => 'Отправка',
		'StockLimitShort' => 'Предельные',
		'StockLimit' => 'Фондовый предел для оповещения',
		'PhysicalStock' => 'Физическая запас',
		'RealStock' => 'Real фондовая',
		'TheoreticalStock' => 'Therocial запас',
		'VirtualStock' => 'Виртуальный запас',
		'MininumStock' => 'Минимальный запас',
		'StockUp' => 'Запасти',
		'MininumStockShort' => 'Фондовый мин',
		'StockUpShort' => 'Запасти',
		'IdWarehouse' => 'Идентификатор склад',
		'DescWareHouse' => 'Описание склада',
		'LieuWareHouse' => 'Локализация склад',
		'WarehousesAndProducts' => 'Склады и продукты',
		'AverageUnitPricePMPShort' => 'Средняя цена входного',
		'AverageUnitPricePMP' => 'Средняя цена входного',
		'SellPriceMin' => 'Продажа Цена за штуку',
		'EstimatedStockValueSellShort' => 'Значение продать',
		'EstimatedStockValueSell' => 'Значение для продажи',
		'EstimatedStockValueShort' => 'Ориентировочная стоимость товарно-материальных запасов',
		'EstimatedStockValue' => 'Ориентировочная стоимость товарно-материальных запасов',
		'DeleteAWarehouse' => 'Удалить склад',
		'ConfirmDeleteWarehouse' => 'Вы уверены, что хотите удалить склад <b>%s?</b>',
		'PersonalStock' => 'Личный %s складе',
		'ThisWarehouseIsPersonalStock' => 'Этот склад представляет собой персональный запас %s %s',
		'SelectWarehouseForStockDecrease' => 'Выберите хранилище, чтобы использовать для снижения акции',
		'SelectWarehouseForStockIncrease' => 'Выберите склад для использования в запас увеличения',
		'LastWaitingSupplierOrders' => 'Orders waiting for receptions'
);
?>