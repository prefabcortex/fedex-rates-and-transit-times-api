<?php

declare(strict_types=1);

namespace Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture;

use DateTime;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AccountNumber;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Address;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Address1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Address2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AlcoholDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AlcoholDetailAlcoholRecipientType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Alert;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AlertAlertType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AncillaryFeeAndTax;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AncillaryFeeAndTaxType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AncillaryFeesAndTaxes;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BatteryClassificationDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Brokeraddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailBroker;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailBrokerRateReply;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailRateReply;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailRateReplyType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CODTransportationChargesDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CommercialInvoice;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CommercialInvoiceShipmentPurpose;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Commit;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CommitDetail1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Commodity;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Contact;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Contact2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ContactAndAddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CurrencyExchangeRate;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CustomerMessage;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CustomsClearanceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CustomsClearanceDetailFreightOnValue;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError401;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError403;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError404;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError500;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError503;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DangerousGoodsContainer;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DangerousGoodsDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DangerousGoodsDetailOptionsItem;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DangerousGoodsDetailRegulation;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DelayDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipient;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientAddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientContact;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Dimensions;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Dimensions1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Dimensions1Units;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtCharge;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtCommodityTax;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1AppliedPreferentialTradeAgreement;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1TaxRatesItem;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1TaxType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EmailLabelDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EMailNotificationDetailPrintedReference;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EmailNotificationRecipient;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EmailOptionsRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EmailRecipient;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ErrorResponseVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ErrorResponseVO401;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ErrorResponseVO403;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ErrorResponseVO404;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ErrorResponseVO500;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ErrorResponseVO503;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\FullSchemaQuoteRate;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityContent;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityDescription;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityInnerReceptacleDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityOptionDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityOptionDetailLabelTextOption;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityPackagingDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityPackingDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityQuantityDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HoldAtLocationDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HoldAtLocationDetailLocationType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HomeDeliveryPremiumDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\InternationalControlledExportDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\InternationalTrafficInArmsRegulationsDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Locale;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Money;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Money1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\OperationalDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PackageCODDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PackageRateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PackageSpecialServicesRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PackageSpecialServicesRequestedSignatureOptionType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Parameter;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ParsedPersonName;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Party;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Party2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Payment;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Payor;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PayorResponsibleParty;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PendingShipmentProcessingOptionsRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PhoneNumber;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\PickupDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ProductName;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatcResponseVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateAddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateDiscount;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateDiscount1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateDiscount2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateDiscount2RateDiscountType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedPackageDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailFreightChargeBasis;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetailMinimumChargeType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetailPickupBaseChargeDescription;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetailPricingCode;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetailRateType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetailRatingBasis;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetailSpecialRatingAppliedItem;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailRatedWeightMethod;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailRateType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateOutputVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateParty;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateReplyDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateRequestControlParameters;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateRequestControlParametersRateSortOrder;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateRequestControlParametersVariableOptions;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Rebate;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RebateRebateType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RecommendedDocumentSpecification;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedPackageLineItem;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipment;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentCustomsClearanceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentPickupType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentRateRequestTypeItem;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentSmartPostInfoDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentSpecialServicesRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestePackageLineItemDimensions;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceDescription;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceSubOptionDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceSubOptionDetailSmartPostIndiciaType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceTypeDetailVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentCODDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentDryIceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentLegRateDetail1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentRateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentRateDetailRatingBasis;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequestedReturnShipmentDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequestedReturnShipmentDetailReturnType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequestedShipmentCODDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\SmartPostInfoDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\SmsDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\StandaloneBatteryDetails;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\StandaloneBatteryDetailsBatteryMaterialType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge2Level;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge2SurchargeType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax2TaxType;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\TransitDays;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\TransitDaysMinimumTransitTime;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\UploadDocumentReferenceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingChargeDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingChargeDetailRateElementBasis;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingCharges;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingCharges1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Version;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight1_2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight1_2Units;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight2;

final class ModelFixtures
{
    public static function buildEdtCommodityTax(): EdtCommodityTax
    {
        return EdtCommodityTax::builder()
            ->setHarmonizedCode('harmonizedCode')
            ->build();
    }

    public static function buildEdtTaxDetail1(): EdtTaxDetail1
    {
        return EdtTaxDetail1::builder()
            ->setTaxType(EdtTaxDetail1TaxType::ADDITIONAL_TAXES)
            ->setTaxcode('taxcode')
            ->setEffectiveDate('2019-12-06')
            ->setName('VAT')
            ->setDescription('Christmas')
            ->setFormula('VAT Payable = Output VAT – Input VAT')
            ->build();
    }

    public static function buildEdtTaxDetail1TaxRatesItem(): EdtTaxDetail1TaxRatesItem
    {
        return EdtTaxDetail1TaxRatesItem::builder()->build();
    }

    public static function buildEdtTaxDetail1AppliedPreferentialTradeAgreement(): EdtTaxDetail1AppliedPreferentialTradeAgreement
    {
        return EdtTaxDetail1AppliedPreferentialTradeAgreement::builder()
            ->setId('description')
            ->setName('description')
            ->setDescription('description')
            ->build();
    }

    public static function buildVariableHandlingCharges1(): VariableHandlingCharges1
    {
        return VariableHandlingCharges1::builder()->build();
    }

    public static function buildAncillaryFeeAndTax(): AncillaryFeeAndTax
    {
        return AncillaryFeeAndTax::builder()
            ->setType(AncillaryFeeAndTaxType::CLEARANCE_ENTRY_FEE)
            ->setDescription('description')
            ->build();
    }

    public static function buildRateDiscount2(): RateDiscount2
    {
        return RateDiscount2::builder()
            ->setRateDiscountType(RateDiscount2RateDiscountType::INCENTIVE)
            ->setDescription('description')
            ->setPercent(0.0)
            ->build();
    }

    public static function buildRebate(): Rebate
    {
        return Rebate::builder()
            ->setRebateType(RebateRebateType::EARNED)
            ->setDescription('description')
            ->setPercent(0.0)
            ->build();
    }

    public static function buildSurcharge2(): Surcharge2
    {
        return Surcharge2::builder()
            ->setSurchargeType(Surcharge2SurchargeType::COD)
            ->setLevel(Surcharge2Level::PACKAGE)
            ->setDescription('description')
            ->build();
    }

    public static function buildPickupDetail(): PickupDetail
    {
        return PickupDetail::builder()
            ->setReadyDateTime(new DateTime('2024-01-01'))
            ->setLatestPickupDateTime(new DateTime('2024-01-01'))
            ->setCourierInstructions('Leave package at reception')
            ->build();
    }

    public static function buildTax2(): Tax2
    {
        return Tax2::builder()
            ->setTaxType(Tax2TaxType::VAT)
            ->setDescription('description')
            ->build();
    }

    public static function buildRatcResponseVO(): RatcResponseVO
    {
        return RatcResponseVO::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildRateOutputVO(): RateOutputVO
    {
        return RateOutputVO::builder()
            ->setQuoteDate('2019-12-18')
            ->setIsEncoded(false)
            ->build();
    }

    public static function buildRateReplyDetail(): RateReplyDetail
    {
        return RateReplyDetail::builder()
            ->setServiceType('FEDEX_GROUND')
            ->setServiceName('FedEx Ground®')
            ->setPackagingType('YOUR_PACKAGING')
            ->setSignatureOptionType('SERVICE_DEFAULT')
            ->build();
    }

    public static function buildCustomerMessage(): CustomerMessage
    {
        return CustomerMessage::builder()
            ->setCode('SERVICE.TYPE.INTERNATIONAL.MESSAGE')
            ->setMessage('Rate does not include dities & taxes, clearance entry fees or other import fees.  The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees')
            ->build();
    }

    public static function buildRatedShipmentDetail(): RatedShipmentDetail
    {
        return RatedShipmentDetail::builder()
            ->setRateType(RatedShipmentDetailRateType::ACCOUNT)
            ->setRatedWeightMethod(RatedShipmentDetailRatedWeightMethod::ACTUAL)
            ->setTotalDutiesTaxesAndFees(445.54)
            ->setTotalDiscounts(445.54)
            ->setTotalDutiesAndTaxes(445.54)
            ->setTotalAncillaryFeesAndTaxes(445.54)
            ->setTotalNetFedExCharge(445.54)
            ->setQuoteNumber('quoteNumber')
            ->setFreightChargeBasis(RatedShipmentDetailFreightChargeBasis::FLAT)
            ->setTotalVatCharge(445.54)
            ->setTotalNetCharge(445.54)
            ->setTotalBaseCharge(445.54)
            ->setTotalNetChargeWithDutiesAndTaxes(445.54)
            ->build();
    }

    public static function buildRatedShipmentDetailPickupRateDetail(): RatedShipmentDetailPickupRateDetail
    {
        return RatedShipmentDetailPickupRateDetail::builder()
            ->setRateType(RatedShipmentDetailPickupRateDetailRateType::PAYOR_ACCOUNT_PACKAGE)
            ->setRateScale('*USER IMS20160104  LD067110')
            ->setRateZone('CA003O')
            ->setRatingBasis(RatedShipmentDetailPickupRateDetailRatingBasis::SHIPMENT_WEIGHT_BASED)
            ->setPricingCode(RatedShipmentDetailPickupRateDetailPricingCode::ACTUAL)
            ->setMinimumChargeType(RatedShipmentDetailPickupRateDetailMinimumChargeType::EARNED_DISCOUNT)
            ->setSpecialRatingApplied([RatedShipmentDetailPickupRateDetailSpecialRatingAppliedItem::FEDEX_ONE_RATE])
            ->setFuelSurchargePercent(121.0)
            ->setPickupBaseChargeDescription(RatedShipmentDetailPickupRateDetailPickupBaseChargeDescription::Pickup_Area_Surcharge)
            ->build();
    }

    public static function buildVariableHandlingCharges(): VariableHandlingCharges
    {
        return VariableHandlingCharges::builder()
            ->setTotalCustomerCharge(445.54)
            ->setVariableHandlingCharge(403.2)
            ->build();
    }

    public static function buildEdtCharge(): EdtCharge
    {
        return EdtCharge::builder()
            ->setHarmonizedCode('harmonizedCode')
            ->build();
    }

    public static function buildEdtTaxDetail(): EdtTaxDetail
    {
        return EdtTaxDetail::builder()
            ->setEdtTaxType('TaxType')
            ->setAmount(785.12)
            ->setTaxableValue(562.23)
            ->setName('name')
            ->setDescription('description')
            ->setFormula('formula')
            ->setEffectiveDate('2019-12-06')
            ->build();
    }

    public static function buildRatedPackageDetail(): RatedPackageDetail
    {
        return RatedPackageDetail::builder()
            ->setEffectiveNetDiscount(0.0)
            ->setGroupNumber(10)
            ->build();
    }

    public static function buildPackageRateDetail(): PackageRateDetail
    {
        return PackageRateDetail::builder()
            ->setRatedWeightMethod('dimensional')
            ->setTotalTaxes(1257.25)
            ->setTotalFreightDiscounts(1257.26)
            ->setBaseCharge(125.0)
            ->setTotalRebates(12.0)
            ->setNetFreight(10.0)
            ->setTotalSurcharges(569.0)
            ->setNetFedExCharge(125.32)
            ->setNetCharge(563.0)
            ->build();
    }

    public static function buildWeight(): Weight
    {
        return Weight::builder(
            // units
            'LB',
            // value
            22.0,
        )->build();
    }

    public static function buildWeight1(): Weight1
    {
        return Weight1::builder()
            ->setValue(10.0)
            ->build();
    }

    public static function buildSurcharge(): Surcharge
    {
        return Surcharge::builder()
            ->setType('FUEL')
            ->setDescription('Fuel Surcharge')
            ->setAmount(5.42)
            ->setLevel('level')
            ->setName('name')
            ->build();
    }

    public static function buildRateDiscount(): RateDiscount
    {
        return RateDiscount::builder()
            ->setAmount(95.0)
            ->build();
    }

    public static function buildShipmentLegRateDetail1(): ShipmentLegRateDetail1
    {
        return ShipmentLegRateDetail1::builder()
            ->setPricingCode('ACTUAL')
            ->setLegDescription('legDescription')
            ->setTotalNetCharge(87.5)
            ->setTotalBaseCharge(87.5)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildRateDiscount1(): RateDiscount1
    {
        return RateDiscount1::builder()
            ->setAmount(87.5)
            ->setName('name')
            ->setDescription('description')
            ->setType('type')
            ->setPercent(10.5)
            ->build();
    }

    public static function buildSurcharge1(): Surcharge1
    {
        return Surcharge1::builder()
            ->setAmount(87.5)
            ->setLevel('level')
            ->setName('name')
            ->setDescription('description')
            ->setType('type')
            ->build();
    }

    public static function buildTax1(): Tax1
    {
        return Tax1::builder()
            ->setAmount(87.5)
            ->build();
    }

    public static function buildCurrencyExchangeRate(): CurrencyExchangeRate
    {
        return CurrencyExchangeRate::builder()
            ->setFromCurrency('USD')
            ->setIntoCurrency('USD')
            ->setRate(87.5)
            ->build();
    }

    public static function buildAncillaryFeesAndTaxes(): AncillaryFeesAndTaxes
    {
        return AncillaryFeesAndTaxes::builder()
            ->setAmount(87.5)
            ->setDescription('description')
            ->setType('type')
            ->build();
    }

    public static function buildShipmentRateDetail(): ShipmentRateDetail
    {
        return ShipmentRateDetail::builder()
            ->setCurrency('USD')
            ->setRateZone('CA003O')
            ->setRatingBasis(ShipmentRateDetailRatingBasis::SHIPMENT_WEIGHT_BASED)
            ->setPricingCode('ACTUAL')
            ->setTotalFreightDiscount(856.3200000000001)
            ->setSpecialRatingApplied(['REPLACE_ME'])
            ->setTotalSurcharges(586.25)
            ->setFuelSurchargePercent(10.5)
            ->setDimDivisor(10)
            ->build();
    }

    public static function buildOperationalDetail(): OperationalDetail
    {
        return OperationalDetail::builder()
            ->setOriginLocationIds(['REPLACE_ME'])
            ->setCommitDays(['REPLACE_ME'])
            ->setServiceCode('06')
            ->setAirportId('MEM')
            ->setScac('scac')
            ->setOriginServiceAreas(['REPLACE_ME'])
            ->setDeliveryDay('SAT')
            ->setOriginLocationNumbers([0])
            ->setDestinationPostalCode('38017')
            ->setCommitDate('2019-07-22T08:30:00')
            ->setAstraDescription('INTL1ST')
            ->setDeliveryDate('2019-07-22T08:30:00')
            ->setDeliveryEligibilities(['REPLACE_ME'])
            ->setIneligibleForMoneyBackGuarantee(false)
            ->setMaximumTransitTime('THREE_DAYS')
            ->setAstraPlannedServiceLevel('astraPlannedServicelevel')
            ->setDestinationLocationIds(['REPLACE_ME'])
            ->setDestinationLocationStateOrProvinceCodes(['REPLACE_ME'])
            ->setTransitTime('THREE_DAYS')
            ->setPackagingCode('M1M1M1')
            ->setDestinationLocationNumbers([0])
            ->setPublishedDeliveryTime('THREE_DAYS')
            ->setCountryCodes(['REPLACE_ME'])
            ->setStateOrProvinceCodes(['REPLACE_ME'])
            ->setUrsaPrefixCode('PrefixCode')
            ->setUrsaSuffixCode('SuffixCode')
            ->setDestinationServiceAreas(['REPLACE_ME'])
            ->setOriginPostalCodes(['REPLACE_ME'])
            ->setCustomTransitTime('THREE_DAYS')
            ->build();
    }

    public static function buildServiceDescription(): ServiceDescription
    {
        return ServiceDescription::builder()
            ->setServiceType('INTERNATIONAL_FIRST')
            ->setCode('92')
            ->setAstraDescription('INTL1ST')
            ->setDescription('FedEx Ground')
            ->setServiceId('EP1000000135')
            ->setServiceCategory('parcel')
            ->build();
    }

    public static function buildProductName(): ProductName
    {
        return ProductName::builder()
            ->setType('medium')
            ->setEncoding('utf-8')
            ->setValue('FedEx International FirstÂ®')
            ->build();
    }

    public static function buildBrokerDetail(): BrokerDetail
    {
        $address = Address::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
        $broker = BrokerDetailBroker::builder(
            // address
            $address,
            // contact
            'REPLACE_ME',
        )->build();

        return BrokerDetail::builder(
            // broker
            $broker,
            // type
            BrokerDetailType::IMPORT,
        )->build();
    }

    public static function buildBrokerDetailRateReply(): BrokerDetailRateReply
    {
        $address = Address::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
        $broker = BrokerDetailBrokerRateReply::builder($address)->build();

        return BrokerDetailRateReply::builder(
            // broker
            $broker,
            // type
            BrokerDetailRateReplyType::EXPORT,
        )->build();
    }

    public static function buildBrokerDetailBroker(): BrokerDetailBroker
    {
        $address = Address::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();

        return BrokerDetailBroker::builder(
            // address
            $address,
            // contact
            'REPLACE_ME',
        )->build();
    }

    public static function buildBrokerDetailBrokerRateReply(): BrokerDetailBrokerRateReply
    {
        $address = Address::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();

        return BrokerDetailBrokerRateReply::builder($address)->build();
    }

    public static function buildParty(): Party
    {
        return Party::builder()->build();
    }

    public static function buildAddress(): Address
    {
        return Address::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
    }

    public static function buildContact(): Contact
    {
        return Contact::builder()
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneNumber('1234567890')
            ->setPhoneExtension('1234')
            ->setFaxNumber('1234567890')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildParsedPersonName(): ParsedPersonName
    {
        return ParsedPersonName::builder()
            ->setFirstName('firstName')
            ->setLastName('lastName')
            ->setMiddleName('middleName')
            ->setSuffix('suffix')
            ->build();
    }

    public static function buildAccountNumber(): AccountNumber
    {
        return AccountNumber::builder()
            ->setValue('Your account number')
            ->build();
    }

    public static function buildBrokeraddress(): Brokeraddress
    {
        return Brokeraddress::builder()
            ->setStreetLines(['REPLACE_ME'])
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('90210')
            ->setCountryCode('US')
            ->setResidential(false)
            ->setClassification('residential')
            ->setGeographicCoordinates('geographicCoordinates')
            ->setUrbanizationCode('code')
            ->setCountryName('India')
            ->build();
    }

    public static function buildCommit(): Commit
    {
        return Commit::builder()
            ->setSmartPostCommitTime('commitTime')
            ->setSaturdayDelivery(false)
            ->setAlternativeCommodityNames(['REPLACE_ME'])
            ->setLabel('Deliverydate unavailable')
            ->setCommitMessageDetails('Message')
            ->setCommodityName('DOCUMENTS')
            ->build();
    }

    public static function buildCommitDetail1(): CommitDetail1
    {
        return CommitDetail1::builder()
            ->setSmartPostCommitTime('commitTime')
            ->setSaturdayDelivery(false)
            ->setAlternativeCommodityNames(['REPLACE_ME'])
            ->setLabel('Deliverydate unavailable')
            ->setCommitMessageDetails('Message')
            ->setCommodityName('DOCUMENTS')
            ->build();
    }

    public static function buildDateDetail(): DateDetail
    {
        return DateDetail::builder()
            ->setDayOfWeek('THU')
            ->setDayFormat('2020-07-16T10:30:00')
            ->build();
    }

    public static function buildDelayDetail(): DelayDetail
    {
        return DelayDetail::builder()
            ->setDate('2023-11-25')
            ->setDayOfWeek('THU')
            ->setLevel('Country')
            ->setPoint('Origin')
            ->setType('holiday')
            ->setDescription('Christmas')
            ->build();
    }

    public static function buildTransitDays(): TransitDays
    {
        return TransitDays::builder()
            ->setDescription('2-7 Business Days')
            ->setMinimumTransitTime(TransitDaysMinimumTransitTime::TWO_DAYS)
            ->setMaximumTransitTime('SEVEN_DAYS')
            ->build();
    }

    public static function buildServiceSubOptionDetail(): ServiceSubOptionDetail
    {
        return ServiceSubOptionDetail::builder()
            ->setSmartPostIndiciaType(ServiceSubOptionDetailSmartPostIndiciaType::PRESORTED_STANDARD)
            ->build();
    }

    public static function buildAlert(): Alert
    {
        return Alert::builder()
            ->setAlertType(AlertAlertType::WARNING)
            ->setMessage('Shipper Postal-City Mismatch.')
            ->build();
    }

    public static function buildErrorResponseVO(): ErrorResponseVO
    {
        return ErrorResponseVO::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildCXSError(): CXSError
    {
        return CXSError::builder()->build();
    }

    public static function buildParameter(): Parameter
    {
        return Parameter::builder()->build();
    }

    public static function buildErrorResponseVO401(): ErrorResponseVO401
    {
        return ErrorResponseVO401::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError401(): CXSError401
    {
        return CXSError401::builder()->build();
    }

    public static function buildErrorResponseVO403(): ErrorResponseVO403
    {
        return ErrorResponseVO403::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError403(): CXSError403
    {
        return CXSError403::builder()->build();
    }

    public static function buildErrorResponseVO404(): ErrorResponseVO404
    {
        return ErrorResponseVO404::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError404(): CXSError404
    {
        return CXSError404::builder()->build();
    }

    public static function buildErrorResponseVO500(): ErrorResponseVO500
    {
        return ErrorResponseVO500::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->setCustomerTransactionId('AnyCo_order123456789')
            ->build();
    }

    public static function buildCXSError500(): CXSError500
    {
        return CXSError500::builder()->build();
    }

    public static function buildErrorResponseVO503(): ErrorResponseVO503
    {
        return ErrorResponseVO503::builder()
            ->setTransactionId('624deea6-b709-470c-8c39-4b5511281492')
            ->build();
    }

    public static function buildCXSError503(): CXSError503
    {
        return CXSError503::builder()->build();
    }

    public static function buildFullSchemaQuoteRate(): FullSchemaQuoteRate
    {
        $accountNumber = AccountNumber::builder()
            ->setValue('Your account number')
            ->build();
        $address = RateAddress::builder(
            // postalCode
            '65247',
            // countryCode
            'US',
        )
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setResidential(false)
            ->build();
        $shipper = RateParty::builder($address)->build();
        $address_1 = RateAddress::builder(
            // postalCode
            '65247',
            // countryCode
            'US',
        )
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setResidential(false)
            ->build();
        $recipient = RateParty::builder($address_1)->build();
        $weight = Weight2::builder(
            // units
            'LB',
            // value
            22.0,
        )->build();
        $requestedPackageLineItem = RequestedPackageLineItem::builder($weight)
            ->setSubPackagingType('BAG')
            ->setGroupPackageCount(1)
            ->build();
        $requestedShipment = RequestedShipment::builder(
            // shipper
            $shipper,
            // recipient
            $recipient,
            // pickupType
            RequestedShipmentPickupType::DROPOFF_AT_FEDEX_LOCATION,
            // requestedPackageLineItems
            [$requestedPackageLineItem],
        )
            ->setServiceType('STANDARD_OVERNIGHT')
            ->setPreferredCurrency('USD')
            ->setRateRequestType([RequestedShipmentRateRequestTypeItem::LIST])
            ->setShipDateStamp('2019-09-05')
            ->setDocumentShipment(false)
            ->setPackagingType('YOUR_PACKAGING')
            ->setTotalPackageCount(3)
            ->setTotalWeight(87.5)
            ->build();

        return FullSchemaQuoteRate::builder(
            // accountNumber
            $accountNumber,
            // requestedShipment
            $requestedShipment,
        )
            ->setCarrierCodes(['REPLACE_ME'])
            ->build();
    }

    public static function buildVersion(): Version
    {
        return Version::builder()
            ->setMajor(0)
            ->setMinor(0)
            ->setPatch(0)
            ->build();
    }

    public static function buildRateRequestControlParameters(): RateRequestControlParameters
    {
        return RateRequestControlParameters::builder()
            ->setReturnTransitTimes(false)
            ->setServicesNeededOnRateFailure(true)
            ->setVariableOptions(RateRequestControlParametersVariableOptions::FREIGHT_GUARANTEE)
            ->setRateSortOrder(RateRequestControlParametersRateSortOrder::SERVICENAMETRADITIONAL)
            ->build();
    }

    public static function buildRequestedShipment(): RequestedShipment
    {
        $address = RateAddress::builder(
            // postalCode
            '65247',
            // countryCode
            'US',
        )
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setResidential(false)
            ->build();
        $shipper = RateParty::builder($address)->build();
        $address_1 = RateAddress::builder(
            // postalCode
            '65247',
            // countryCode
            'US',
        )
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setResidential(false)
            ->build();
        $recipient = RateParty::builder($address_1)->build();
        $weight = Weight2::builder(
            // units
            'LB',
            // value
            22.0,
        )->build();
        $requestedPackageLineItem = RequestedPackageLineItem::builder($weight)
            ->setSubPackagingType('BAG')
            ->setGroupPackageCount(1)
            ->build();

        return RequestedShipment::builder(
            // shipper
            $shipper,
            // recipient
            $recipient,
            // pickupType
            RequestedShipmentPickupType::DROPOFF_AT_FEDEX_LOCATION,
            // requestedPackageLineItems
            [$requestedPackageLineItem],
        )
            ->setServiceType('STANDARD_OVERNIGHT')
            ->setPreferredCurrency('USD')
            ->setRateRequestType([RequestedShipmentRateRequestTypeItem::LIST])
            ->setShipDateStamp('2019-09-05')
            ->setDocumentShipment(false)
            ->setPackagingType('YOUR_PACKAGING')
            ->setTotalPackageCount(3)
            ->setTotalWeight(87.5)
            ->build();
    }

    public static function buildRateParty(): RateParty
    {
        $address = RateAddress::builder(
            // postalCode
            '65247',
            // countryCode
            'US',
        )
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setResidential(false)
            ->build();

        return RateParty::builder($address)->build();
    }

    public static function buildRateAddress(): RateAddress
    {
        return RateAddress::builder(
            // postalCode
            '65247',
            // countryCode
            'US',
        )
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setResidential(false)
            ->build();
    }

    public static function buildAddress2(): Address2
    {
        return Address2::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('TN')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
    }

    public static function buildEmailNotificationRecipient(): EmailNotificationRecipient
    {
        return EmailNotificationRecipient::builder('REPLACE_ME')->build();
    }

    public static function buildSmsDetail(): SmsDetail
    {
        return SmsDetail::builder(
            // phoneNumber
            'REPLACE_ME',
            // phoneNumberCountryCode
            'REPLACE_ME',
        )->build();
    }

    public static function buildRequestedPackageLineItem(): RequestedPackageLineItem
    {
        $weight = Weight2::builder(
            // units
            'LB',
            // value
            22.0,
        )->build();

        return RequestedPackageLineItem::builder($weight)
            ->setSubPackagingType('BAG')
            ->setGroupPackageCount(1)
            ->build();
    }

    public static function buildMoney(): Money
    {
        return Money::builder()
            ->setAmount(100.0)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildMoney1(): Money1
    {
        return Money1::builder()
            ->setAmount(12.45)
            ->setCurrency('USD')
            ->build();
    }

    public static function buildWeight2(): Weight2
    {
        return Weight2::builder(
            // units
            'LB',
            // value
            22.0,
        )->build();
    }

    public static function buildWeight12(): Weight1_2
    {
        return Weight1_2::builder()
            ->setUnits(Weight1_2Units::LB)
            ->setValue(10.0)
            ->build();
    }

    public static function buildStandaloneBatteryDetails(): StandaloneBatteryDetails
    {
        return StandaloneBatteryDetails::builder()
            ->setBatteryMaterialType(StandaloneBatteryDetailsBatteryMaterialType::LITHIUM_METAL)
            ->build();
    }

    public static function buildRequestePackageLineItemDimensions(): RequestePackageLineItemDimensions
    {
        return RequestePackageLineItemDimensions::builder(
            // length
            0,
            // width
            0,
            // height
            0,
            // units
            'REPLACE_ME',
        )->build();
    }

    public static function buildDimensions(): Dimensions
    {
        return Dimensions::builder(
            // length
            0,
            // width
            0,
            // height
            0,
            // units
            'REPLACE_ME',
        )->build();
    }

    public static function buildDimensions1(): Dimensions1
    {
        return Dimensions1::builder()
            ->setLength(100)
            ->setWidth(50)
            ->setHeight(30)
            ->setUnits(Dimensions1Units::CM)
            ->build();
    }

    public static function buildVariableHandlingChargeDetail(): VariableHandlingChargeDetail
    {
        return VariableHandlingChargeDetail::builder(VariableHandlingChargeDetailRateElementBasis::NET_CHARGE)->build();
    }

    public static function buildPackageSpecialServicesRequested(): PackageSpecialServicesRequested
    {
        return PackageSpecialServicesRequested::builder()
            ->setSpecialServiceTypes(['REPLACE_ME'])
            ->setSignatureOptionType(PackageSpecialServicesRequestedSignatureOptionType::SERVICE_DEFAULT)
            ->build();
    }

    public static function buildAlcoholDetail(): AlcoholDetail
    {
        return AlcoholDetail::builder(AlcoholDetailAlcoholRecipientType::LICENSEE)
            ->setShipperAgreementType('Retailer')
            ->build();
    }

    public static function buildDangerousGoodsDetail(): DangerousGoodsDetail
    {
        return DangerousGoodsDetail::builder()
            ->setOptions([DangerousGoodsDetailOptionsItem::HAZARDOUS_MATERIALS])
            ->setRegulation(DangerousGoodsDetailRegulation::ADR)
            ->build();
    }

    public static function buildDangerousGoodsContainer(): DangerousGoodsContainer
    {
        return DangerousGoodsContainer::builder()
            ->setOfferor('Offeror Name')
            ->setNumberOfContainers(10)
            ->setContainerType('Copper Box')
            ->build();
    }

    public static function buildHazardousCommodityContent(): HazardousCommodityContent
    {
        return HazardousCommodityContent::builder()->build();
    }

    public static function buildHazardousCommodityQuantityDetail(): HazardousCommodityQuantityDetail
    {
        return HazardousCommodityQuantityDetail::builder()
            ->setUnits('LB')
            ->build();
    }

    public static function buildHazardousCommodityInnerReceptacleDetail(): HazardousCommodityInnerReceptacleDetail
    {
        return HazardousCommodityInnerReceptacleDetail::builder()->build();
    }

    public static function buildHazardousCommodityOptionDetail(): HazardousCommodityOptionDetail
    {
        return HazardousCommodityOptionDetail::builder()
            ->setLabelTextOption(HazardousCommodityOptionDetailLabelTextOption::APPEND)
            ->setCustomerSuppliedLabelText('LabelText')
            ->build();
    }

    public static function buildHazardousCommodityDescription(): HazardousCommodityDescription
    {
        return HazardousCommodityDescription::builder()
            ->setSubsidiaryClasses(['REPLACE_ME'])
            ->setLabelText('labelText')
            ->setTechnicalName('technicalName')
            ->setAuthorization('Authorization Information')
            ->setReportableQuantity(false)
            ->setPercentage(10.0)
            ->setId('ID')
            ->setProperShippingName('ShippingName')
            ->setHazardClass('hazardClass')
            ->build();
    }

    public static function buildHazardousCommodityPackingDetail(): HazardousCommodityPackingDetail
    {
        return HazardousCommodityPackingDetail::builder()
            ->setPackingInstructions('instruction')
            ->setCargoAircraftOnly(false)
            ->build();
    }

    public static function buildPhoneNumber(): PhoneNumber
    {
        return PhoneNumber::builder(
            // areaCode
            '202',
            // countryCode
            'US',
        )
            ->setExtension('3245')
            ->setPersonalIdentificationNumber('9545678')
            ->setLocalNumber('23456')
            ->build();
    }

    public static function buildHazardousCommodityPackagingDetail(): HazardousCommodityPackagingDetail
    {
        return HazardousCommodityPackagingDetail::builder()
            ->setCount(20)
            ->setUnits('Liter')
            ->build();
    }

    public static function buildPackageCODDetail(): PackageCODDetail
    {
        return PackageCODDetail::builder()->build();
    }

    public static function buildBatteryClassificationDetail(): BatteryClassificationDetail
    {
        return BatteryClassificationDetail::builder()->build();
    }

    public static function buildParty2(): Party2
    {
        return Party2::builder()->build();
    }

    public static function buildContact2(): Contact2
    {
        return Contact2::builder()
            ->setPersonName('John Taylor')
            ->setEmailAddress('sample@company.com')
            ->setPhoneNumber('1234567890')
            ->setPhoneExtension('1234')
            ->setFaxNumber('1234567890')
            ->setCompanyName('Fedex')
            ->build();
    }

    public static function buildRequestedShipmentSpecialServicesRequested(): RequestedShipmentSpecialServicesRequested
    {
        return RequestedShipmentSpecialServicesRequested::builder()
            ->setSpecialServiceTypes(['REPLACE_ME'])
            ->build();
    }

    public static function buildShipmentSpecialServicesRequested(): ShipmentSpecialServicesRequested
    {
        return ShipmentSpecialServicesRequested::builder()
            ->setSpecialServiceTypes(['REPLACE_ME'])
            ->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetail(): DeliveryOnInvoiceAcceptanceDetail
    {
        return DeliveryOnInvoiceAcceptanceDetail::builder()->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetailRecipient(): DeliveryOnInvoiceAcceptanceDetailRecipient
    {
        $address = DeliveryOnInvoiceAcceptanceDetailRecipientAddress::builder('US')
            ->setStreetLines(['REPLACE_ME'])
            ->build();
        $contact = DeliveryOnInvoiceAcceptanceDetailRecipientContact::builder(
            // companyName
            'FedEx',
            // personName
            'John Taylor',
            // phoneNumber
            '9013577890',
        )
            ->setFaxNumber('9013577890')
            ->build();

        return DeliveryOnInvoiceAcceptanceDetailRecipient::builder(
            // address
            $address,
            // contact
            $contact,
        )->build();
    }

    public static function buildInternationalTrafficInArmsRegulationsDetail(): InternationalTrafficInArmsRegulationsDetail
    {
        return InternationalTrafficInArmsRegulationsDetail::builder()
            ->setLicenseOrExemptionNumber('432345')
            ->build();
    }

    public static function buildPendingShipmentProcessingOptionsRequested(): PendingShipmentProcessingOptionsRequested
    {
        return PendingShipmentProcessingOptionsRequested::builder()->build();
    }

    public static function buildRecommendedDocumentSpecification(): RecommendedDocumentSpecification
    {
        return RecommendedDocumentSpecification::builder()->build();
    }

    public static function buildEmailLabelDetail(): EmailLabelDetail
    {
        return EmailLabelDetail::builder()->build();
    }

    public static function buildEmailRecipient(): EmailRecipient
    {
        return EmailRecipient::builder('REPLACE_ME')->build();
    }

    public static function buildEmailOptionsRequested(): EmailOptionsRequested
    {
        return EmailOptionsRequested::builder()->build();
    }

    public static function buildLocale(): Locale
    {
        return Locale::builder()->build();
    }

    public static function buildUploadDocumentReferenceDetail(): UploadDocumentReferenceDetail
    {
        return UploadDocumentReferenceDetail::builder()
            ->setDescription('ShippingDocumentSpecification')
            ->setDocumentId('98123')
            ->build();
    }

    public static function buildShipmentDryIceDetail(): ShipmentDryIceDetail
    {
        return ShipmentDryIceDetail::builder()
            ->setPackageCount(12)
            ->build();
    }

    public static function buildHoldAtLocationDetail(): HoldAtLocationDetail
    {
        return HoldAtLocationDetail::builder('YBZA')
            ->setLocationType(HoldAtLocationDetailLocationType::FEDEX_ONSITE)
            ->build();
    }

    public static function buildContactAndAddress(): ContactAndAddress
    {
        return ContactAndAddress::builder()->build();
    }

    public static function buildAddress1(): Address1
    {
        return Address1::builder()
            ->setCity('Beverly Hills')
            ->setStateOrProvinceCode('CA')
            ->setPostalCode('65247')
            ->setCountryCode('US')
            ->setResidential(false)
            ->build();
    }

    public static function buildShipmentSpecialServicesRequestedShipmentCODDetail(): ShipmentSpecialServicesRequestedShipmentCODDetail
    {
        return ShipmentSpecialServicesRequestedShipmentCODDetail::builder()
            ->setRemitToName('FedEx')
            ->build();
    }

    public static function buildShipmentCODDetail(): ShipmentCODDetail
    {
        return ShipmentCODDetail::builder()
            ->setRemitToName('FedEx')
            ->build();
    }

    public static function buildCODTransportationChargesDetail(): CODTransportationChargesDetail
    {
        return CODTransportationChargesDetail::builder()->build();
    }

    public static function buildInternationalControlledExportDetail(): InternationalControlledExportDetail
    {
        return InternationalControlledExportDetail::builder()->build();
    }

    public static function buildHomeDeliveryPremiumDetail(): HomeDeliveryPremiumDetail
    {
        return HomeDeliveryPremiumDetail::builder()
            ->setShipTimestamp('2020-04-24')
            ->build();
    }

    public static function buildRequestedShipmentCustomsClearanceDetail(): RequestedShipmentCustomsClearanceDetail
    {
        $commodity = Commodity::builder()
            ->setDescription('DOCUMENTS')
            ->setQuantity(1)
            ->setNumberOfPieces(1)
            ->setCountryOfManufacture('US')
            ->setQuantityUnits('PCS')
            ->setName('DOCUMENTS')
            ->setHarmonizedCode('080211')
            ->setPartNumber('P1')
            ->build();

        return RequestedShipmentCustomsClearanceDetail::builder([$commodity])
            ->setFreightOnValue(CustomsClearanceDetailFreightOnValue::CARRIER_RISK)
            ->build();
    }

    public static function buildCustomsClearanceDetail(): CustomsClearanceDetail
    {
        $commodity = Commodity::builder()
            ->setDescription('DOCUMENTS')
            ->setQuantity(1)
            ->setNumberOfPieces(1)
            ->setCountryOfManufacture('US')
            ->setQuantityUnits('PCS')
            ->setName('DOCUMENTS')
            ->setHarmonizedCode('080211')
            ->setPartNumber('P1')
            ->build();

        return CustomsClearanceDetail::builder([$commodity])
            ->setFreightOnValue(CustomsClearanceDetailFreightOnValue::CARRIER_RISK)
            ->build();
    }

    public static function buildCommercialInvoice(): CommercialInvoice
    {
        return CommercialInvoice::builder()
            ->setShipmentPurpose(CommercialInvoiceShipmentPurpose::GIFT)
            ->build();
    }

    public static function buildPayment(): Payment
    {
        return Payment::builder()->build();
    }

    public static function buildPayor(): Payor
    {
        return Payor::builder()->build();
    }

    public static function buildPayorResponsibleParty(): PayorResponsibleParty
    {
        return PayorResponsibleParty::builder([])->build();
    }

    public static function buildCommodity(): Commodity
    {
        return Commodity::builder()
            ->setDescription('DOCUMENTS')
            ->setQuantity(1)
            ->setNumberOfPieces(1)
            ->setCountryOfManufacture('US')
            ->setQuantityUnits('PCS')
            ->setName('DOCUMENTS')
            ->setHarmonizedCode('080211')
            ->setPartNumber('P1')
            ->build();
    }

    public static function buildServiceTypeDetailVO(): ServiceTypeDetailVO
    {
        return ServiceTypeDetailVO::builder()->build();
    }

    public static function buildRequestedShipmentSmartPostInfoDetail(): RequestedShipmentSmartPostInfoDetail
    {
        return RequestedShipmentSmartPostInfoDetail::builder()
            ->setHubId('5531')
            ->build();
    }

    public static function buildSmartPostInfoDetail(): SmartPostInfoDetail
    {
        return SmartPostInfoDetail::builder()
            ->setHubId('5531')
            ->build();
    }

    public static function buildEMailNotificationDetailPrintedReference(): EMailNotificationDetailPrintedReference
    {
        return EMailNotificationDetailPrintedReference::builder()->build();
    }

    public static function buildShipmentSpecialServicesRequestedReturnShipmentDetail(): ShipmentSpecialServicesRequestedReturnShipmentDetail
    {
        return ShipmentSpecialServicesRequestedReturnShipmentDetail::builder()
            ->setReturnType(ShipmentSpecialServicesRequestedReturnShipmentDetailReturnType::PRINT_RETURN_LABEL)
            ->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(): DeliveryOnInvoiceAcceptanceDetailRecipientAddress
    {
        return DeliveryOnInvoiceAcceptanceDetailRecipientAddress::builder('US')
            ->setStreetLines(['REPLACE_ME'])
            ->build();
    }

    public static function buildTax(): Tax
    {
        return Tax::builder()
            ->setAmount(408.97)
            ->setName('Denmark VAT')
            ->setDescription('Denmark VAT')
            ->setType('VAT')
            ->build();
    }

    public static function buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(): DeliveryOnInvoiceAcceptanceDetailRecipientContact
    {
        return DeliveryOnInvoiceAcceptanceDetailRecipientContact::builder(
            // companyName
            'FedEx',
            // personName
            'John Taylor',
            // phoneNumber
            '9013577890',
        )
            ->setFaxNumber('9013577890')
            ->build();
    }
}
