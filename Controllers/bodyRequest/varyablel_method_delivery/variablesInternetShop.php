<?php

require_once "Controllers/bodyRequest/varyablel_method_delivery/variables.php";

class variablesInternetShop extends variables
{

    //Позиции товаров в упаковке
    //Только для заказов "интернет-магазин"
    //Не более 126 уникальных строк в одном заказе
    //Общее количество товаров в заказе может быть от 1 до 10000
    protected string $items;
    //Доп. сбор за доставку товаров, общая стоимость которых попадает в интервал (в том числе и НДС)
    protected string $sum;
    //Сумма дополнительного сбора (в том числе и НДС)
    protected string $additional_fee_amount;
    //Если заказ международный, эти поля должны быть
    //Вес брутто
    protected string $weight_gross;
    //Дата инвойса
    //Только для международных заказов с типом "интернет-магазин". Если поле заполнено, то заказ автоматически становится международным.
    protected string $date_invoice;
    //Грузоотправитель
    //Только для международных заказов с типом "интернет-магазин". Если поле заполнено, то заказ автоматически становится международным.
    protected string $shipper_name;
    //Адрес грузоотправителя
    //Только для международных заказов с типом "интернет-магазин". Если поле заполнено, то заказ автоматически становится международным.
    protected string $shipper_address;
    // Оплата за товар при получении (за единицу товара в указанной валюте, значение >=0) — наложенный платеж, в случае предоплаты значение = 0
    protected string $payment_method;
    // Сумма наложенного платежа (в случае предоплаты = 0)
    protected string $cash_on_delivery;
    //Идентификатор/артикул товара
    //Артикул товара может содержать только символы: [A-z А-я 0-9 ! @ " # № $ ; % ^ : & ? * () _ - + = ? < > , .{ } [ ] \ / , пробел]
    //При передаче одинаковых артикулов в рамках одной упаковки, артикул будет заменяться на:
    //{ware_key}_1, {ware_key}_2 и так далее.
    protected string $ware_key;
    //Объявленная стоимость товара (за единицу товара в указанной валюте, значение >=0). С данного значения рассчитывается страховка
    protected string $cost;
    //Вес (за единицу товара, в граммах)
    protected string $weight;
    //Количество единиц товара (в штуках)
    //Количество одного товара в заказе может быть от 1 до 999
    protected string $amount;

}