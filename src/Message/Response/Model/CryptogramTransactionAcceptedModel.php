<?php

declare(strict_types = 1);

namespace AvtoDev\CloudPayments\Message\Response\Model;

use AvtoDev\CloudPayments\Message\Traits\ModelField\AccountIdStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\AmountFloat;
use AvtoDev\CloudPayments\Message\Traits\ModelField\AuthCodeString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\AuthDateIsoString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\AuthDateString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CardExpDateString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CardFirstSixString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CardHolderMessageString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CardLastFourString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CardTypeCodeInt;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CardTypeString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\ConfirmDateIsoStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\ConfirmDateStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CreatedDateIsoString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CreatedDateString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CurrencyCodeInt;
use AvtoDev\CloudPayments\Message\Traits\ModelField\CurrencyString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\DescriptionStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\EmailStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\InvoiceIdStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpAddressString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpCityStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpCountryString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpDistrictStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpLatitudeFloatNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpLongitudeFloatNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IpRegionStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IssuerBankCountryString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\IssuerString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\JsonDataStringNull;
use AvtoDev\CloudPayments\Message\Traits\ModelField\NameString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\ReasonCodeInt;
use AvtoDev\CloudPayments\Message\Traits\ModelField\ReasonString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\StatusCodeInt;
use AvtoDev\CloudPayments\Message\Traits\ModelField\StatusString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\TestModeBool;
use AvtoDev\CloudPayments\Message\Traits\ModelField\TokenString;
use AvtoDev\CloudPayments\Message\Traits\ModelField\TransactionIdInt;

/**
 * @see https://developers.cloudpayments.ru/#oplata-po-kriptogramme
 */
class CryptogramTransactionAcceptedModel extends AbstractModel
{
    use TransactionIdInt,
        AmountFloat,
        CurrencyString,
        CurrencyCodeInt,
        InvoiceIdStringNull,
        AccountIdStringNull,
        EmailStringNull,
        DescriptionStringNull,
        JsonDataStringNull,
        CreatedDateString,
        CreatedDateIsoString,
        AuthDateString,
        AuthDateIsoString,
        ConfirmDateStringNull,
        ConfirmDateIsoStringNull,
        AuthCodeString,
        TestModeBool,
        IpAddressString,
        IpCountryString,
        IpCityStringNull,
        IpRegionStringNull,
        IpDistrictStringNull,
        IpLatitudeFloatNull,
        IpLongitudeFloatNull,
        CardFirstSixString,
        CardLastFourString,
        CardExpDateString,
        CardTypeString,
        CardTypeCodeInt,
        IssuerString,
        IssuerBankCountryString,
        StatusString,
        StatusCodeInt,
        ReasonString,
        ReasonCodeInt,
        CardHolderMessageString,
        NameString,
        TokenString;

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'TransactionId'     => $this->getTransactionId(),
            'Amount'            => $this->getAmount(),
            'Currency'          => $this->getCurrency(),
            'CurrencyCode'      => $this->getCurrencyCode(),
            'InvoiceId'         => $this->getInvoiceId(),
            'AccountId'         => $this->getAccountId(),
            'Email'             => $this->getEmail(),
            'Description'       => $this->getDescription(),
            'JsonData'          => $this->getJsonData(),
            'CreatedDate'       => $this->getCreatedDate(),
            'CreatedDateIso'    => $this->getCreatedDateIso(),
            'AuthDate'          => $this->getAuthDate(),
            'AuthDateIso'       => $this->getAuthDateIso(),
            'ConfirmDate'       => $this->getConfirmDate(),
            'ConfirmDateIso'    => $this->getConfirmDateIso(),
            'AuthCode'          => $this->getAuthCode(),
            'TestMode'          => $this->isTestMode(),
            'IpAddress'         => $this->getIpAddress(),
            'IpCountry'         => $this->getIpCountry(),
            'IpCity'            => $this->getIpCity(),
            'IpRegion'          => $this->getIpRegion(),
            'IpDistrict'        => $this->getIpDistrict(),
            'IpLatitude'        => $this->getIpLatitude(),
            'IpLongitude'       => $this->getIpLongitude(),
            'CardFirstSix'      => $this->getCardFirstSix(),
            'CardLastFour'      => $this->getCardLastFour(),
            'CardExpDate'       => $this->getCardExpDate(),
            'CardType'          => $this->getCardType(),
            'CardTypeCode'      => $this->getCardTypeCode(),
            'Issuer'            => $this->getIssuer(),
            'IssuerBankCountry' => $this->getIssuerBankCountry(),
            'Status'            => $this->getStatus(),
            'StatusCode'        => $this->getStatusCode(),
            'Reason'            => $this->getReason(),
            'ReasonCode'        => $this->getReasonCode(),
            'CardHolderMessage' => $this->getCardHolderMessage(),
            'Name'              => $this->getName(),
            'Token'             => $this->getToken(),
        ];
    }
}
