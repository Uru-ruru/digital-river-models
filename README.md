# Models for Digital River/ MyCommerce integrations
Описание API - https://api.shareit.com/HelpShareit/index.html
## Установка
```composer require uru/digital-river-models```
## Использование
Модель для добавления или обновление продукта:
```php
        $data = new Product();
        $data->setVendorId($vendorId);
        $data->setProductCode($productCode);
        $data->setName($fullName);
        $data->setProductType((new ProductTypeEnum(ProductTypeEnum::NMP)));
        $data->setStatus((new ProductStatusEnum(ProductStatusEnum::NSE)));
        $data->setDefaultCurrency(self::DEFAULT_CURRENCY);

        $priceScale = new PriceScale();
        $priceScale->setQuantityFrom(1);

        $price = new Price();
        $price->setCurrency(self::DEFAULT_CURRENCY);
        $price->setPrice($price);

        $priceScale->setPrices([$price]);
        $data->setPriceScale([$priceScale]);

        $productDescriptions = new ProductDescriptions();
        $productDescriptions->setLanguage('en');
        $productDescriptions->setDisplayName($fullName);
        $productDescriptions->setShortDescription($description);
        $productDescriptions->setFullDescription($fullDescription);

        $data->setDescriptions([$productDescriptions]);

        $exportRegulation = new ExportRegulations();
        $exportRegulation->setECCN((new ECCNIdEnum(ECCNIdEnum::EAR99)));
        $exportRegulation->setCountryOfOrigin('ru');
        if (!$licenseIsRequire) {
            $exportRegulation->setLicenseException((new LicenseExceptionsEnum(LicenseExceptionsEnum::NLR)));
        }
        $data->setExportRegulations($exportRegulation);

        $deliveryItems = new ProductDelivery();
        $deliveryItems->setDeliveryType((new DeliveryTypeEnum(DeliveryTypeEnum::EL5_KEY_INL)));
        $deliveryItems->setLicenseKeyDefinition((new LicenseKey($url)));

        $data->setProductDelivery([$deliveryItems]);
        
        // output to curl
        echo json_encode($data);
```
Модель корзины
```php
        $data = new Cart();
        $items = [];


        foreach ($basket as $basketItem) {
  
        $item = new CartItem();
        $item->setProductId($product_id);
        $item->setQuantity((int)$basketItem->getQuantity());
        $item->setVendorId((int)$basketItem->vendor_id);
        $item->addAdditionals(["name" => static::ADDITIONAL_BASKET_ITEM_FIELD, "value" => $basketItem->getId(), "hidden" => true]);
        // optional dinamic price
        $dyn_price = $basketItem->getPrice() . self::DEFAULT_CURRENCY . ",N";
        $item->setDynPrice($dyn_price, $dyn_price_pass);

        $items[] = $item;
        }

        $data->setItems($items);

        $address = new Address();
        $address->setFirstName($user['NAME']);
        $address->setLastName($user['LAST_NAME']);
        $address->setCompany($user->getCompanyName());
        $address->setAddress($user->getBillingAddressFull());
        $address->setPostalCode($user->getBillingAddressCode());
        $address->setCity($user->getBillingAddressCity());
        $address->setEmail($user->getEmail());
        $address->setCountry($user->countryCode());

        $data->setBillingAddress($address);

        $address->setCountry($user->countryCode());
        $address->setAddress($user->getDeliveryAddressFull());
        $address->setPostalCode($user->getDeliveryAddressCode());
        $address->setCity($user->getDeliveryAddressCity());

        $data->setShippingAddress($address);

        $dr_shopper_id = $user->findDigitalRiverShopperId();
        if ($dr_shopper_id) {
            $data->setShopperId($dr_shopper_id);
        }

        $data->setDisplayCurrency(self::DEFAULT_CURRENCY);
        $data->setProtect('all');
        $data->setFinalPageUrl($url);

        // output to curl
        echo json_encode($data);
```
