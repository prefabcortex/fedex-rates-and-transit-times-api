<?php

declare(strict_types=1);

namespace Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture;

use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AccountNumber;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Address;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Address1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Address2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AlcoholDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Alert;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AncillaryFeeAndTax;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\AncillaryFeesAndTaxes;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BatteryClassificationDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Brokeraddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailBroker;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailBrokerRateReply;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\BrokerDetailRateReply;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CODTransportationChargesDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CommercialInvoice;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Commit;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CommitDetail1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Commodity;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Contact;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Contact2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ContactAndAddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CurrencyExchangeRate;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CustomerMessage;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CustomsClearanceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError401;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError403;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError404;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError500;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\CXSError503;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DangerousGoodsContainer;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DangerousGoodsDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DelayDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipient;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientAddress;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\DeliveryOnInvoiceAcceptanceDetailRecipientContact;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Dimensions;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Dimensions1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtCharge;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtCommodityTax;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1AppliedPreferentialTradeAgreement;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\EdtTaxDetail1TaxRatesItem;
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
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityPackagingDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityPackingDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HazardousCommodityQuantityDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\HoldAtLocationDetail;
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
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedPackageDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatedShipmentDetailPickupRateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateOutputVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateParty;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateReplyDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RateRequestControlParameters;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Rebate;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RecommendedDocumentSpecification;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedPackageLineItem;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipment;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentCustomsClearanceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentSmartPostInfoDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestedShipmentSpecialServicesRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RequestePackageLineItemDimensions;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\SelfNormalizingModel;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceDescription;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceSubOptionDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ServiceTypeDetailVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentCODDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentDryIceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentLegRateDetail1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentRateDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequested;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequestedReturnShipmentDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\ShipmentSpecialServicesRequestedShipmentCODDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\SmartPostInfoDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\SmsDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\StandaloneBatteryDetails;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Surcharge2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Tax2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\TransitDays;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\UploadDocumentReferenceDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingChargeDetail;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingCharges;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\VariableHandlingCharges1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Version;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight1;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight1_2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\Weight2;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\AccountNumberConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Address1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Address2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\AddressConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\AlcoholDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\AlertConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\AncillaryFeeAndTaxConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\AncillaryFeesAndTaxesConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\BatteryClassificationDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\BrokeraddressConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\BrokerDetailBrokerConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\BrokerDetailBrokerRateReplyConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\BrokerDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\BrokerDetailRateReplyConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CODTransportationChargesDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CommercialInvoiceConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CommitConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CommitDetail1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CommodityConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Contact2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ContactAndAddressConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ContactConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CurrencyExchangeRateConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CustomerMessageConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CustomsClearanceDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CXSError401Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CXSError403Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CXSError404Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CXSError500Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CXSError503Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\CXSErrorConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DangerousGoodsContainerConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DangerousGoodsDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DateDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DelayDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DeliveryOnInvoiceAcceptanceDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DeliveryOnInvoiceAcceptanceDetailRecipientAddressConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DeliveryOnInvoiceAcceptanceDetailRecipientConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DeliveryOnInvoiceAcceptanceDetailRecipientContactConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Dimensions1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\DimensionsConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EdtChargeConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EdtCommodityTaxConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EdtTaxDetail1AppliedPreferentialTradeAgreementConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EdtTaxDetail1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EdtTaxDetail1TaxRatesItemConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EdtTaxDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EmailLabelDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EMailNotificationDetailPrintedReferenceConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EmailNotificationRecipientConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EmailOptionsRequestedConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\EmailRecipientConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ErrorResponseVO401Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ErrorResponseVO403Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ErrorResponseVO404Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ErrorResponseVO500Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ErrorResponseVO503Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ErrorResponseVOConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\FullSchemaQuoteRateConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityContentConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityDescriptionConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityInnerReceptacleDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityOptionDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityPackagingDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityPackingDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HazardousCommodityQuantityDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HoldAtLocationDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\HomeDeliveryPremiumDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\InternationalControlledExportDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\InternationalTrafficInArmsRegulationsDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\LocaleConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Money1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\MoneyConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\OperationalDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PackageCODDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PackageRateDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PackageSpecialServicesRequestedConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ParameterConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ParsedPersonNameConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Party2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PartyConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PaymentConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PayorConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PayorResponsiblePartyConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PendingShipmentProcessingOptionsRequestedConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PhoneNumberConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\PickupDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ProductNameConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RatcResponseVOConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateAddressConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateDiscount1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateDiscount2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateDiscountConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RatedPackageDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RatedShipmentDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RatedShipmentDetailPickupRateDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateOutputVOConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RatePartyConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateReplyDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RateRequestControlParametersConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RebateConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RecommendedDocumentSpecificationConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RequestedPackageLineItemConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RequestedShipmentConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RequestedShipmentCustomsClearanceDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RequestedShipmentSmartPostInfoDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RequestedShipmentSpecialServicesRequestedConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\RequestePackageLineItemDimensionsConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ServiceDescriptionConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ServiceSubOptionDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ServiceTypeDetailVOConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentCODDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentDryIceDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentLegRateDetail1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentRateDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentSpecialServicesRequestedConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentSpecialServicesRequestedReturnShipmentDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\ShipmentSpecialServicesRequestedShipmentCODDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\SmartPostInfoDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\SmsDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\StandaloneBatteryDetailsConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Surcharge1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Surcharge2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\SurchargeConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Tax1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Tax2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\TaxConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\TransitDaysConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\UploadDocumentReferenceDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\VariableHandlingChargeDetailConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\VariableHandlingCharges1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\VariableHandlingChargesConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\VersionConstraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Weight1_2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Weight1Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\Weight2Constraint;
use Prefabcortex\FedexRatesAndTransitTimesApi\Validator\WeightConstraint;
use Symfony\Component\Validator\Constraint;

/**
 * The data providers over ModelFixtures: one schema-conformant instance of every model in this
 * package, and what each is checked against.
 *
 * Values are the ones the API description states — `example` or `default` where it gives one, a
 * typed placeholder where it does not. They are shaped like real data, not equal to it: nothing
 * here has been sent to the service, so a value being accepted by the schema says nothing about it
 * being accepted by the server.
 */
final class ModelFixtureProviders
{
    /**
     * Every model that could be built and reads back what it writes, keyed by class name so a
     * failure names the model.
     *
     * @return iterable<string, array{SelfNormalizingModel, callable(array<int|string, mixed>): SelfNormalizingModel}>
     */
    public static function roundTrips(): iterable
    {
        yield 'EdtCommodityTax' => [ModelFixtures::buildEdtCommodityTax(), EdtCommodityTax::fromArray(...)];
        yield 'EdtTaxDetail1' => [ModelFixtures::buildEdtTaxDetail1(), EdtTaxDetail1::fromArray(...)];
        yield 'EdtTaxDetail1TaxRatesItem' => [
            ModelFixtures::buildEdtTaxDetail1TaxRatesItem(),
            EdtTaxDetail1TaxRatesItem::fromArray(...),
        ];
        yield 'EdtTaxDetail1AppliedPreferentialTradeAgreement' => [
            ModelFixtures::buildEdtTaxDetail1AppliedPreferentialTradeAgreement(),
            EdtTaxDetail1AppliedPreferentialTradeAgreement::fromArray(...),
        ];
        yield 'VariableHandlingCharges1' => [
            ModelFixtures::buildVariableHandlingCharges1(),
            VariableHandlingCharges1::fromArray(...),
        ];
        yield 'AncillaryFeeAndTax' => [ModelFixtures::buildAncillaryFeeAndTax(), AncillaryFeeAndTax::fromArray(...)];
        yield 'RateDiscount2' => [ModelFixtures::buildRateDiscount2(), RateDiscount2::fromArray(...)];
        yield 'Rebate' => [ModelFixtures::buildRebate(), Rebate::fromArray(...)];
        yield 'Surcharge2' => [ModelFixtures::buildSurcharge2(), Surcharge2::fromArray(...)];
        yield 'PickupDetail' => [ModelFixtures::buildPickupDetail(), PickupDetail::fromArray(...)];
        yield 'Tax2' => [ModelFixtures::buildTax2(), Tax2::fromArray(...)];
        yield 'RatcResponseVO' => [ModelFixtures::buildRatcResponseVO(), RatcResponseVO::fromArray(...)];
        yield 'RateOutputVO' => [ModelFixtures::buildRateOutputVO(), RateOutputVO::fromArray(...)];
        yield 'RateReplyDetail' => [ModelFixtures::buildRateReplyDetail(), RateReplyDetail::fromArray(...)];
        yield 'CustomerMessage' => [ModelFixtures::buildCustomerMessage(), CustomerMessage::fromArray(...)];
        yield 'RatedShipmentDetail' => [ModelFixtures::buildRatedShipmentDetail(), RatedShipmentDetail::fromArray(...)];
        yield 'RatedShipmentDetailPickupRateDetail' => [
            ModelFixtures::buildRatedShipmentDetailPickupRateDetail(),
            RatedShipmentDetailPickupRateDetail::fromArray(...),
        ];
        yield 'VariableHandlingCharges' => [
            ModelFixtures::buildVariableHandlingCharges(),
            VariableHandlingCharges::fromArray(...),
        ];
        yield 'EdtCharge' => [ModelFixtures::buildEdtCharge(), EdtCharge::fromArray(...)];
        yield 'EdtTaxDetail' => [ModelFixtures::buildEdtTaxDetail(), EdtTaxDetail::fromArray(...)];
        yield 'RatedPackageDetail' => [ModelFixtures::buildRatedPackageDetail(), RatedPackageDetail::fromArray(...)];
        yield 'PackageRateDetail' => [ModelFixtures::buildPackageRateDetail(), PackageRateDetail::fromArray(...)];
        yield 'Weight' => [ModelFixtures::buildWeight(), Weight::fromArray(...)];
        yield 'Weight1' => [ModelFixtures::buildWeight1(), Weight1::fromArray(...)];
        yield 'Surcharge' => [ModelFixtures::buildSurcharge(), Surcharge::fromArray(...)];
        yield 'RateDiscount' => [ModelFixtures::buildRateDiscount(), RateDiscount::fromArray(...)];
        yield 'ShipmentLegRateDetail1' => [
            ModelFixtures::buildShipmentLegRateDetail1(),
            ShipmentLegRateDetail1::fromArray(...),
        ];
        yield 'RateDiscount1' => [ModelFixtures::buildRateDiscount1(), RateDiscount1::fromArray(...)];
        yield 'Surcharge1' => [ModelFixtures::buildSurcharge1(), Surcharge1::fromArray(...)];
        yield 'Tax1' => [ModelFixtures::buildTax1(), Tax1::fromArray(...)];
        yield 'CurrencyExchangeRate' => [
            ModelFixtures::buildCurrencyExchangeRate(),
            CurrencyExchangeRate::fromArray(...),
        ];
        yield 'AncillaryFeesAndTaxes' => [
            ModelFixtures::buildAncillaryFeesAndTaxes(),
            AncillaryFeesAndTaxes::fromArray(...),
        ];
        yield 'ShipmentRateDetail' => [ModelFixtures::buildShipmentRateDetail(), ShipmentRateDetail::fromArray(...)];
        yield 'OperationalDetail' => [ModelFixtures::buildOperationalDetail(), OperationalDetail::fromArray(...)];
        yield 'ServiceDescription' => [ModelFixtures::buildServiceDescription(), ServiceDescription::fromArray(...)];
        yield 'ProductName' => [ModelFixtures::buildProductName(), ProductName::fromArray(...)];
        yield 'BrokerDetail' => [ModelFixtures::buildBrokerDetail(), BrokerDetail::fromArray(...)];
        yield 'BrokerDetailRateReply' => [
            ModelFixtures::buildBrokerDetailRateReply(),
            BrokerDetailRateReply::fromArray(...),
        ];
        yield 'BrokerDetailBroker' => [ModelFixtures::buildBrokerDetailBroker(), BrokerDetailBroker::fromArray(...)];
        yield 'BrokerDetailBrokerRateReply' => [
            ModelFixtures::buildBrokerDetailBrokerRateReply(),
            BrokerDetailBrokerRateReply::fromArray(...),
        ];
        yield 'Party' => [ModelFixtures::buildParty(), Party::fromArray(...)];
        yield 'Address' => [ModelFixtures::buildAddress(), Address::fromArray(...)];
        yield 'Contact' => [ModelFixtures::buildContact(), Contact::fromArray(...)];
        yield 'ParsedPersonName' => [ModelFixtures::buildParsedPersonName(), ParsedPersonName::fromArray(...)];
        yield 'AccountNumber' => [ModelFixtures::buildAccountNumber(), AccountNumber::fromArray(...)];
        yield 'Brokeraddress' => [ModelFixtures::buildBrokeraddress(), Brokeraddress::fromArray(...)];
        yield 'Commit' => [ModelFixtures::buildCommit(), Commit::fromArray(...)];
        yield 'CommitDetail1' => [ModelFixtures::buildCommitDetail1(), CommitDetail1::fromArray(...)];
        yield 'DateDetail' => [ModelFixtures::buildDateDetail(), DateDetail::fromArray(...)];
        yield 'DelayDetail' => [ModelFixtures::buildDelayDetail(), DelayDetail::fromArray(...)];
        yield 'TransitDays' => [ModelFixtures::buildTransitDays(), TransitDays::fromArray(...)];
        yield 'ServiceSubOptionDetail' => [
            ModelFixtures::buildServiceSubOptionDetail(),
            ServiceSubOptionDetail::fromArray(...),
        ];
        yield 'Alert' => [ModelFixtures::buildAlert(), Alert::fromArray(...)];
        yield 'ErrorResponseVO' => [ModelFixtures::buildErrorResponseVO(), ErrorResponseVO::fromArray(...)];
        yield 'CXSError' => [ModelFixtures::buildCXSError(), CXSError::fromArray(...)];
        yield 'Parameter' => [ModelFixtures::buildParameter(), Parameter::fromArray(...)];
        yield 'ErrorResponseVO401' => [ModelFixtures::buildErrorResponseVO401(), ErrorResponseVO401::fromArray(...)];
        yield 'CXSError401' => [ModelFixtures::buildCXSError401(), CXSError401::fromArray(...)];
        yield 'ErrorResponseVO403' => [ModelFixtures::buildErrorResponseVO403(), ErrorResponseVO403::fromArray(...)];
        yield 'CXSError403' => [ModelFixtures::buildCXSError403(), CXSError403::fromArray(...)];
        yield 'ErrorResponseVO404' => [ModelFixtures::buildErrorResponseVO404(), ErrorResponseVO404::fromArray(...)];
        yield 'CXSError404' => [ModelFixtures::buildCXSError404(), CXSError404::fromArray(...)];
        yield 'ErrorResponseVO500' => [ModelFixtures::buildErrorResponseVO500(), ErrorResponseVO500::fromArray(...)];
        yield 'CXSError500' => [ModelFixtures::buildCXSError500(), CXSError500::fromArray(...)];
        yield 'ErrorResponseVO503' => [ModelFixtures::buildErrorResponseVO503(), ErrorResponseVO503::fromArray(...)];
        yield 'CXSError503' => [ModelFixtures::buildCXSError503(), CXSError503::fromArray(...)];
        yield 'FullSchemaQuoteRate' => [ModelFixtures::buildFullSchemaQuoteRate(), FullSchemaQuoteRate::fromArray(...)];
        yield 'Version' => [ModelFixtures::buildVersion(), Version::fromArray(...)];
        yield 'RateRequestControlParameters' => [
            ModelFixtures::buildRateRequestControlParameters(),
            RateRequestControlParameters::fromArray(...),
        ];
        yield 'RequestedShipment' => [ModelFixtures::buildRequestedShipment(), RequestedShipment::fromArray(...)];
        yield 'RateParty' => [ModelFixtures::buildRateParty(), RateParty::fromArray(...)];
        yield 'RateAddress' => [ModelFixtures::buildRateAddress(), RateAddress::fromArray(...)];
        yield 'Address2' => [ModelFixtures::buildAddress2(), Address2::fromArray(...)];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipient::fromArray(...),
        ];
        yield 'SmsDetail' => [ModelFixtures::buildSmsDetail(), SmsDetail::fromArray(...)];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItem::fromArray(...),
        ];
        yield 'Money' => [ModelFixtures::buildMoney(), Money::fromArray(...)];
        yield 'Money1' => [ModelFixtures::buildMoney1(), Money1::fromArray(...)];
        yield 'Weight2' => [ModelFixtures::buildWeight2(), Weight2::fromArray(...)];
        yield 'Weight1_2' => [ModelFixtures::buildWeight12(), Weight1_2::fromArray(...)];
        yield 'StandaloneBatteryDetails' => [
            ModelFixtures::buildStandaloneBatteryDetails(),
            StandaloneBatteryDetails::fromArray(...),
        ];
        yield 'RequestePackageLineItemDimensions' => [
            ModelFixtures::buildRequestePackageLineItemDimensions(),
            RequestePackageLineItemDimensions::fromArray(...),
        ];
        yield 'Dimensions' => [ModelFixtures::buildDimensions(), Dimensions::fromArray(...)];
        yield 'Dimensions1' => [ModelFixtures::buildDimensions1(), Dimensions1::fromArray(...)];
        yield 'VariableHandlingChargeDetail' => [
            ModelFixtures::buildVariableHandlingChargeDetail(),
            VariableHandlingChargeDetail::fromArray(...),
        ];
        yield 'PackageSpecialServicesRequested' => [
            ModelFixtures::buildPackageSpecialServicesRequested(),
            PackageSpecialServicesRequested::fromArray(...),
        ];
        yield 'AlcoholDetail' => [ModelFixtures::buildAlcoholDetail(), AlcoholDetail::fromArray(...)];
        yield 'DangerousGoodsDetail' => [
            ModelFixtures::buildDangerousGoodsDetail(),
            DangerousGoodsDetail::fromArray(...),
        ];
        yield 'DangerousGoodsContainer' => [
            ModelFixtures::buildDangerousGoodsContainer(),
            DangerousGoodsContainer::fromArray(...),
        ];
        yield 'HazardousCommodityContent' => [
            ModelFixtures::buildHazardousCommodityContent(),
            HazardousCommodityContent::fromArray(...),
        ];
        yield 'HazardousCommodityQuantityDetail' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail(),
            HazardousCommodityQuantityDetail::fromArray(...),
        ];
        yield 'HazardousCommodityInnerReceptacleDetail' => [
            ModelFixtures::buildHazardousCommodityInnerReceptacleDetail(),
            HazardousCommodityInnerReceptacleDetail::fromArray(...),
        ];
        yield 'HazardousCommodityOptionDetail' => [
            ModelFixtures::buildHazardousCommodityOptionDetail(),
            HazardousCommodityOptionDetail::fromArray(...),
        ];
        yield 'HazardousCommodityDescription' => [
            ModelFixtures::buildHazardousCommodityDescription(),
            HazardousCommodityDescription::fromArray(...),
        ];
        yield 'HazardousCommodityPackingDetail' => [
            ModelFixtures::buildHazardousCommodityPackingDetail(),
            HazardousCommodityPackingDetail::fromArray(...),
        ];
        yield 'PhoneNumber' => [ModelFixtures::buildPhoneNumber(), PhoneNumber::fromArray(...)];
        yield 'HazardousCommodityPackagingDetail' => [
            ModelFixtures::buildHazardousCommodityPackagingDetail(),
            HazardousCommodityPackagingDetail::fromArray(...),
        ];
        yield 'PackageCODDetail' => [ModelFixtures::buildPackageCODDetail(), PackageCODDetail::fromArray(...)];
        yield 'BatteryClassificationDetail' => [
            ModelFixtures::buildBatteryClassificationDetail(),
            BatteryClassificationDetail::fromArray(...),
        ];
        yield 'Party2' => [ModelFixtures::buildParty2(), Party2::fromArray(...)];
        yield 'Contact2' => [ModelFixtures::buildContact2(), Contact2::fromArray(...)];
        yield 'RequestedShipmentSpecialServicesRequested' => [
            ModelFixtures::buildRequestedShipmentSpecialServicesRequested(),
            RequestedShipmentSpecialServicesRequested::fromArray(...),
        ];
        yield 'ShipmentSpecialServicesRequested' => [
            ModelFixtures::buildShipmentSpecialServicesRequested(),
            ShipmentSpecialServicesRequested::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetail' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetail(),
            DeliveryOnInvoiceAcceptanceDetail::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipient::fromArray(...),
        ];
        yield 'InternationalTrafficInArmsRegulationsDetail' => [
            ModelFixtures::buildInternationalTrafficInArmsRegulationsDetail(),
            InternationalTrafficInArmsRegulationsDetail::fromArray(...),
        ];
        yield 'PendingShipmentProcessingOptionsRequested' => [
            ModelFixtures::buildPendingShipmentProcessingOptionsRequested(),
            PendingShipmentProcessingOptionsRequested::fromArray(...),
        ];
        yield 'RecommendedDocumentSpecification' => [
            ModelFixtures::buildRecommendedDocumentSpecification(),
            RecommendedDocumentSpecification::fromArray(...),
        ];
        yield 'EmailLabelDetail' => [ModelFixtures::buildEmailLabelDetail(), EmailLabelDetail::fromArray(...)];
        yield 'EmailRecipient' => [ModelFixtures::buildEmailRecipient(), EmailRecipient::fromArray(...)];
        yield 'EmailOptionsRequested' => [
            ModelFixtures::buildEmailOptionsRequested(),
            EmailOptionsRequested::fromArray(...),
        ];
        yield 'Locale' => [ModelFixtures::buildLocale(), Locale::fromArray(...)];
        yield 'UploadDocumentReferenceDetail' => [
            ModelFixtures::buildUploadDocumentReferenceDetail(),
            UploadDocumentReferenceDetail::fromArray(...),
        ];
        yield 'ShipmentDryIceDetail' => [
            ModelFixtures::buildShipmentDryIceDetail(),
            ShipmentDryIceDetail::fromArray(...),
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetail::fromArray(...),
        ];
        yield 'ContactAndAddress' => [ModelFixtures::buildContactAndAddress(), ContactAndAddress::fromArray(...)];
        yield 'Address1' => [ModelFixtures::buildAddress1(), Address1::fromArray(...)];
        yield 'ShipmentSpecialServicesRequestedShipmentCODDetail' => [
            ModelFixtures::buildShipmentSpecialServicesRequestedShipmentCODDetail(),
            ShipmentSpecialServicesRequestedShipmentCODDetail::fromArray(...),
        ];
        yield 'ShipmentCODDetail' => [ModelFixtures::buildShipmentCODDetail(), ShipmentCODDetail::fromArray(...)];
        yield 'CODTransportationChargesDetail' => [
            ModelFixtures::buildCODTransportationChargesDetail(),
            CODTransportationChargesDetail::fromArray(...),
        ];
        yield 'InternationalControlledExportDetail' => [
            ModelFixtures::buildInternationalControlledExportDetail(),
            InternationalControlledExportDetail::fromArray(...),
        ];
        yield 'HomeDeliveryPremiumDetail' => [
            ModelFixtures::buildHomeDeliveryPremiumDetail(),
            HomeDeliveryPremiumDetail::fromArray(...),
        ];
        yield 'RequestedShipmentCustomsClearanceDetail' => [
            ModelFixtures::buildRequestedShipmentCustomsClearanceDetail(),
            RequestedShipmentCustomsClearanceDetail::fromArray(...),
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetail::fromArray(...),
        ];
        yield 'CommercialInvoice' => [ModelFixtures::buildCommercialInvoice(), CommercialInvoice::fromArray(...)];
        yield 'Payment' => [ModelFixtures::buildPayment(), Payment::fromArray(...)];
        yield 'Payor' => [ModelFixtures::buildPayor(), Payor::fromArray(...)];
        yield 'PayorResponsibleParty' => [
            ModelFixtures::buildPayorResponsibleParty(),
            PayorResponsibleParty::fromArray(...),
        ];
        yield 'Commodity' => [ModelFixtures::buildCommodity(), Commodity::fromArray(...)];
        yield 'ServiceTypeDetailVO' => [ModelFixtures::buildServiceTypeDetailVO(), ServiceTypeDetailVO::fromArray(...)];
        yield 'RequestedShipmentSmartPostInfoDetail' => [
            ModelFixtures::buildRequestedShipmentSmartPostInfoDetail(),
            RequestedShipmentSmartPostInfoDetail::fromArray(...),
        ];
        yield 'SmartPostInfoDetail' => [ModelFixtures::buildSmartPostInfoDetail(), SmartPostInfoDetail::fromArray(...)];
        yield 'EMailNotificationDetailPrintedReference' => [
            ModelFixtures::buildEMailNotificationDetailPrintedReference(),
            EMailNotificationDetailPrintedReference::fromArray(...),
        ];
        yield 'ShipmentSpecialServicesRequestedReturnShipmentDetail' => [
            ModelFixtures::buildShipmentSpecialServicesRequestedReturnShipmentDetail(),
            ShipmentSpecialServicesRequestedReturnShipmentDetail::fromArray(...),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddress::fromArray(...),
        ];
        yield 'Tax' => [ModelFixtures::buildTax(), Tax::fromArray(...)];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContact::fromArray(...),
        ];
    }

    /**
     * Each model with the wire names its document must carry.
     *
     * @return iterable<string, array{SelfNormalizingModel, callable(array<int|string, mixed>): SelfNormalizingModel, list<string>}>
     */
    public static function documentsMissingARequiredProperty(): iterable
    {
        yield 'Weight' => [ModelFixtures::buildWeight(), Weight::fromArray(...), ['units', 'value']];
        yield 'BrokerDetail' => [ModelFixtures::buildBrokerDetail(), BrokerDetail::fromArray(...), ['broker', 'type']];
        yield 'BrokerDetailRateReply' => [
            ModelFixtures::buildBrokerDetailRateReply(),
            BrokerDetailRateReply::fromArray(...),
            ['broker', 'type'],
        ];
        yield 'BrokerDetailBroker' => [
            ModelFixtures::buildBrokerDetailBroker(),
            BrokerDetailBroker::fromArray(...),
            ['address', 'contact'],
        ];
        yield 'BrokerDetailBrokerRateReply' => [
            ModelFixtures::buildBrokerDetailBrokerRateReply(),
            BrokerDetailBrokerRateReply::fromArray(...),
            ['address'],
        ];
        yield 'FullSchemaQuoteRate' => [
            ModelFixtures::buildFullSchemaQuoteRate(),
            FullSchemaQuoteRate::fromArray(...),
            ['accountNumber', 'requestedShipment'],
        ];
        yield 'RequestedShipment' => [
            ModelFixtures::buildRequestedShipment(),
            RequestedShipment::fromArray(...),
            ['shipper', 'recipient', 'pickupType', 'requestedPackageLineItems'],
        ];
        yield 'RateParty' => [ModelFixtures::buildRateParty(), RateParty::fromArray(...), ['address']];
        yield 'RateAddress' => [
            ModelFixtures::buildRateAddress(),
            RateAddress::fromArray(...),
            ['postalCode', 'countryCode'],
        ];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipient::fromArray(...),
            ['emailAddress'],
        ];
        yield 'SmsDetail' => [
            ModelFixtures::buildSmsDetail(),
            SmsDetail::fromArray(...),
            ['phoneNumber', 'phoneNumberCountryCode'],
        ];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItem::fromArray(...),
            ['weight'],
        ];
        yield 'Weight2' => [ModelFixtures::buildWeight2(), Weight2::fromArray(...), ['units', 'value']];
        yield 'RequestePackageLineItemDimensions' => [
            ModelFixtures::buildRequestePackageLineItemDimensions(),
            RequestePackageLineItemDimensions::fromArray(...),
            ['length', 'width', 'height', 'units'],
        ];
        yield 'Dimensions' => [
            ModelFixtures::buildDimensions(),
            Dimensions::fromArray(...),
            ['length', 'width', 'height', 'units'],
        ];
        yield 'VariableHandlingChargeDetail' => [
            ModelFixtures::buildVariableHandlingChargeDetail(),
            VariableHandlingChargeDetail::fromArray(...),
            ['rateElementBasis'],
        ];
        yield 'AlcoholDetail' => [
            ModelFixtures::buildAlcoholDetail(),
            AlcoholDetail::fromArray(...),
            ['alcoholRecipientType'],
        ];
        yield 'PhoneNumber' => [
            ModelFixtures::buildPhoneNumber(),
            PhoneNumber::fromArray(...),
            ['areaCode', 'countryCode'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipient::fromArray(...),
            ['address', 'contact'],
        ];
        yield 'EmailRecipient' => [
            ModelFixtures::buildEmailRecipient(),
            EmailRecipient::fromArray(...),
            ['emailAddress'],
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetail::fromArray(...),
            ['locationId'],
        ];
        yield 'RequestedShipmentCustomsClearanceDetail' => [
            ModelFixtures::buildRequestedShipmentCustomsClearanceDetail(),
            RequestedShipmentCustomsClearanceDetail::fromArray(...),
            ['commodities'],
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetail::fromArray(...),
            ['commodities'],
        ];
        yield 'PayorResponsibleParty' => [
            ModelFixtures::buildPayorResponsibleParty(),
            PayorResponsibleParty::fromArray(...),
            ['accountNumber'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddress::fromArray(...),
            ['countryCode'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContact::fromArray(...),
            ['companyName', 'personName', 'phoneNumber'],
        ];
    }

    /**
     * Each model with, per wire name, a value of a type that property cannot hold.
     *
     * Only properties whose type is a single closed shape appear. A union may legitimately accept
     * what looks like the wrong type, and a schema stating no type accepts anything.
     *
     * @return iterable<string, array{SelfNormalizingModel, callable(array<int|string, mixed>): SelfNormalizingModel, array<array-key, int|string>}>
     */
    public static function documentsWithAMistypedProperty(): iterable
    {
        yield 'Weight' => [
            ModelFixtures::buildWeight(),
            Weight::fromArray(...),
            ['units' => 42, 'value' => 'not-a-number'],
        ];
        yield 'BrokerDetail' => [
            ModelFixtures::buildBrokerDetail(),
            BrokerDetail::fromArray(...),
            ['broker' => 'not-an-object', 'type' => 42],
        ];
        yield 'BrokerDetailRateReply' => [
            ModelFixtures::buildBrokerDetailRateReply(),
            BrokerDetailRateReply::fromArray(...),
            ['broker' => 'not-an-object', 'type' => 42],
        ];
        yield 'BrokerDetailBroker' => [
            ModelFixtures::buildBrokerDetailBroker(),
            BrokerDetailBroker::fromArray(...),
            ['address' => 'not-an-object'],
        ];
        yield 'BrokerDetailBrokerRateReply' => [
            ModelFixtures::buildBrokerDetailBrokerRateReply(),
            BrokerDetailBrokerRateReply::fromArray(...),
            ['address' => 'not-an-object'],
        ];
        yield 'FullSchemaQuoteRate' => [
            ModelFixtures::buildFullSchemaQuoteRate(),
            FullSchemaQuoteRate::fromArray(...),
            ['accountNumber' => 'not-an-object', 'requestedShipment' => 'not-an-object'],
        ];
        yield 'RequestedShipment' => [
            ModelFixtures::buildRequestedShipment(),
            RequestedShipment::fromArray(...),
            [
                'shipper' => 'not-an-object',
                'recipient' => 'not-an-object',
                'pickupType' => 42,
                'requestedPackageLineItems' => 'not-an-object',
            ],
        ];
        yield 'RateParty' => [
            ModelFixtures::buildRateParty(),
            RateParty::fromArray(...),
            ['address' => 'not-an-object'],
        ];
        yield 'RateAddress' => [
            ModelFixtures::buildRateAddress(),
            RateAddress::fromArray(...),
            ['postalCode' => 42, 'countryCode' => 42],
        ];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipient::fromArray(...),
            ['emailAddress' => 42],
        ];
        yield 'SmsDetail' => [
            ModelFixtures::buildSmsDetail(),
            SmsDetail::fromArray(...),
            ['phoneNumber' => 42, 'phoneNumberCountryCode' => 42],
        ];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItem::fromArray(...),
            ['weight' => 'not-an-object'],
        ];
        yield 'Weight2' => [
            ModelFixtures::buildWeight2(),
            Weight2::fromArray(...),
            ['units' => 42, 'value' => 'not-a-number'],
        ];
        yield 'RequestePackageLineItemDimensions' => [
            ModelFixtures::buildRequestePackageLineItemDimensions(),
            RequestePackageLineItemDimensions::fromArray(...),
            ['length' => 'not-a-number', 'width' => 'not-a-number', 'height' => 'not-a-number', 'units' => 42],
        ];
        yield 'Dimensions' => [
            ModelFixtures::buildDimensions(),
            Dimensions::fromArray(...),
            ['length' => 'not-a-number', 'width' => 'not-a-number', 'height' => 'not-a-number', 'units' => 42],
        ];
        yield 'VariableHandlingChargeDetail' => [
            ModelFixtures::buildVariableHandlingChargeDetail(),
            VariableHandlingChargeDetail::fromArray(...),
            ['rateElementBasis' => 42],
        ];
        yield 'AlcoholDetail' => [
            ModelFixtures::buildAlcoholDetail(),
            AlcoholDetail::fromArray(...),
            ['alcoholRecipientType' => 42],
        ];
        yield 'PhoneNumber' => [
            ModelFixtures::buildPhoneNumber(),
            PhoneNumber::fromArray(...),
            ['areaCode' => 42, 'countryCode' => 42],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipient::fromArray(...),
            ['address' => 'not-an-object', 'contact' => 'not-an-object'],
        ];
        yield 'EmailRecipient' => [
            ModelFixtures::buildEmailRecipient(),
            EmailRecipient::fromArray(...),
            ['emailAddress' => 42],
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetail::fromArray(...),
            ['locationId' => 42],
        ];
        yield 'RequestedShipmentCustomsClearanceDetail' => [
            ModelFixtures::buildRequestedShipmentCustomsClearanceDetail(),
            RequestedShipmentCustomsClearanceDetail::fromArray(...),
            ['commodities' => 'not-an-object'],
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetail::fromArray(...),
            ['commodities' => 'not-an-object'],
        ];
        yield 'PayorResponsibleParty' => [
            ModelFixtures::buildPayorResponsibleParty(),
            PayorResponsibleParty::fromArray(...),
            ['accountNumber' => 'not-an-object'],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddress::fromArray(...),
            ['countryCode' => 42],
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContact::fromArray(...),
            ['companyName' => 42, 'personName' => 42, 'phoneNumber' => 42],
        ];
    }

    /**
     * Each model whose values all pass their constraints, with those constraints.
     *
     * @return iterable<string, array{SelfNormalizingModel, list<Constraint>}>
     */
    public static function modelsWithTheirConstraints(): iterable
    {
        yield 'EdtCommodityTax' => [ModelFixtures::buildEdtCommodityTax(), EdtCommodityTaxConstraint::constraints()];
        yield 'EdtTaxDetail1' => [ModelFixtures::buildEdtTaxDetail1(), EdtTaxDetail1Constraint::constraints()];
        yield 'EdtTaxDetail1TaxRatesItem' => [
            ModelFixtures::buildEdtTaxDetail1TaxRatesItem(),
            EdtTaxDetail1TaxRatesItemConstraint::constraints(),
        ];
        yield 'EdtTaxDetail1AppliedPreferentialTradeAgreement' => [
            ModelFixtures::buildEdtTaxDetail1AppliedPreferentialTradeAgreement(),
            EdtTaxDetail1AppliedPreferentialTradeAgreementConstraint::constraints(),
        ];
        yield 'VariableHandlingCharges1' => [
            ModelFixtures::buildVariableHandlingCharges1(),
            VariableHandlingCharges1Constraint::constraints(),
        ];
        yield 'AncillaryFeeAndTax' => [
            ModelFixtures::buildAncillaryFeeAndTax(),
            AncillaryFeeAndTaxConstraint::constraints(),
        ];
        yield 'RateDiscount2' => [ModelFixtures::buildRateDiscount2(), RateDiscount2Constraint::constraints()];
        yield 'Rebate' => [ModelFixtures::buildRebate(), RebateConstraint::constraints()];
        yield 'Surcharge2' => [ModelFixtures::buildSurcharge2(), Surcharge2Constraint::constraints()];
        yield 'PickupDetail' => [ModelFixtures::buildPickupDetail(), PickupDetailConstraint::constraints()];
        yield 'Tax2' => [ModelFixtures::buildTax2(), Tax2Constraint::constraints()];
        yield 'RatcResponseVO' => [ModelFixtures::buildRatcResponseVO(), RatcResponseVOConstraint::constraints()];
        yield 'RateOutputVO' => [ModelFixtures::buildRateOutputVO(), RateOutputVOConstraint::constraints()];
        yield 'RateReplyDetail' => [ModelFixtures::buildRateReplyDetail(), RateReplyDetailConstraint::constraints()];
        yield 'CustomerMessage' => [ModelFixtures::buildCustomerMessage(), CustomerMessageConstraint::constraints()];
        yield 'RatedShipmentDetail' => [
            ModelFixtures::buildRatedShipmentDetail(),
            RatedShipmentDetailConstraint::constraints(),
        ];
        yield 'RatedShipmentDetailPickupRateDetail' => [
            ModelFixtures::buildRatedShipmentDetailPickupRateDetail(),
            RatedShipmentDetailPickupRateDetailConstraint::constraints(),
        ];
        yield 'VariableHandlingCharges' => [
            ModelFixtures::buildVariableHandlingCharges(),
            VariableHandlingChargesConstraint::constraints(),
        ];
        yield 'EdtCharge' => [ModelFixtures::buildEdtCharge(), EdtChargeConstraint::constraints()];
        yield 'EdtTaxDetail' => [ModelFixtures::buildEdtTaxDetail(), EdtTaxDetailConstraint::constraints()];
        yield 'RatedPackageDetail' => [
            ModelFixtures::buildRatedPackageDetail(),
            RatedPackageDetailConstraint::constraints(),
        ];
        yield 'PackageRateDetail' => [
            ModelFixtures::buildPackageRateDetail(),
            PackageRateDetailConstraint::constraints(),
        ];
        yield 'Weight' => [ModelFixtures::buildWeight(), WeightConstraint::constraints()];
        yield 'Weight1' => [ModelFixtures::buildWeight1(), Weight1Constraint::constraints()];
        yield 'Surcharge' => [ModelFixtures::buildSurcharge(), SurchargeConstraint::constraints()];
        yield 'RateDiscount' => [ModelFixtures::buildRateDiscount(), RateDiscountConstraint::constraints()];
        yield 'ShipmentLegRateDetail1' => [
            ModelFixtures::buildShipmentLegRateDetail1(),
            ShipmentLegRateDetail1Constraint::constraints(),
        ];
        yield 'RateDiscount1' => [ModelFixtures::buildRateDiscount1(), RateDiscount1Constraint::constraints()];
        yield 'Surcharge1' => [ModelFixtures::buildSurcharge1(), Surcharge1Constraint::constraints()];
        yield 'Tax1' => [ModelFixtures::buildTax1(), Tax1Constraint::constraints()];
        yield 'CurrencyExchangeRate' => [
            ModelFixtures::buildCurrencyExchangeRate(),
            CurrencyExchangeRateConstraint::constraints(),
        ];
        yield 'AncillaryFeesAndTaxes' => [
            ModelFixtures::buildAncillaryFeesAndTaxes(),
            AncillaryFeesAndTaxesConstraint::constraints(),
        ];
        yield 'ShipmentRateDetail' => [
            ModelFixtures::buildShipmentRateDetail(),
            ShipmentRateDetailConstraint::constraints(),
        ];
        yield 'OperationalDetail' => [
            ModelFixtures::buildOperationalDetail(),
            OperationalDetailConstraint::constraints(),
        ];
        yield 'ServiceDescription' => [
            ModelFixtures::buildServiceDescription(),
            ServiceDescriptionConstraint::constraints(),
        ];
        yield 'ProductName' => [ModelFixtures::buildProductName(), ProductNameConstraint::constraints()];
        yield 'BrokerDetail' => [ModelFixtures::buildBrokerDetail(), BrokerDetailConstraint::constraints()];
        yield 'BrokerDetailRateReply' => [
            ModelFixtures::buildBrokerDetailRateReply(),
            BrokerDetailRateReplyConstraint::constraints(),
        ];
        yield 'BrokerDetailBroker' => [
            ModelFixtures::buildBrokerDetailBroker(),
            BrokerDetailBrokerConstraint::constraints(),
        ];
        yield 'BrokerDetailBrokerRateReply' => [
            ModelFixtures::buildBrokerDetailBrokerRateReply(),
            BrokerDetailBrokerRateReplyConstraint::constraints(),
        ];
        yield 'Party' => [ModelFixtures::buildParty(), PartyConstraint::constraints()];
        yield 'Address' => [ModelFixtures::buildAddress(), AddressConstraint::constraints()];
        yield 'Contact' => [ModelFixtures::buildContact(), ContactConstraint::constraints()];
        yield 'ParsedPersonName' => [ModelFixtures::buildParsedPersonName(), ParsedPersonNameConstraint::constraints()];
        yield 'AccountNumber' => [ModelFixtures::buildAccountNumber(), AccountNumberConstraint::constraints()];
        yield 'Brokeraddress' => [ModelFixtures::buildBrokeraddress(), BrokeraddressConstraint::constraints()];
        yield 'Commit' => [ModelFixtures::buildCommit(), CommitConstraint::constraints()];
        yield 'CommitDetail1' => [ModelFixtures::buildCommitDetail1(), CommitDetail1Constraint::constraints()];
        yield 'DateDetail' => [ModelFixtures::buildDateDetail(), DateDetailConstraint::constraints()];
        yield 'DelayDetail' => [ModelFixtures::buildDelayDetail(), DelayDetailConstraint::constraints()];
        yield 'TransitDays' => [ModelFixtures::buildTransitDays(), TransitDaysConstraint::constraints()];
        yield 'ServiceSubOptionDetail' => [
            ModelFixtures::buildServiceSubOptionDetail(),
            ServiceSubOptionDetailConstraint::constraints(),
        ];
        yield 'Alert' => [ModelFixtures::buildAlert(), AlertConstraint::constraints()];
        yield 'ErrorResponseVO' => [ModelFixtures::buildErrorResponseVO(), ErrorResponseVOConstraint::constraints()];
        yield 'CXSError' => [ModelFixtures::buildCXSError(), CXSErrorConstraint::constraints()];
        yield 'Parameter' => [ModelFixtures::buildParameter(), ParameterConstraint::constraints()];
        yield 'ErrorResponseVO401' => [
            ModelFixtures::buildErrorResponseVO401(),
            ErrorResponseVO401Constraint::constraints(),
        ];
        yield 'CXSError401' => [ModelFixtures::buildCXSError401(), CXSError401Constraint::constraints()];
        yield 'ErrorResponseVO403' => [
            ModelFixtures::buildErrorResponseVO403(),
            ErrorResponseVO403Constraint::constraints(),
        ];
        yield 'CXSError403' => [ModelFixtures::buildCXSError403(), CXSError403Constraint::constraints()];
        yield 'ErrorResponseVO404' => [
            ModelFixtures::buildErrorResponseVO404(),
            ErrorResponseVO404Constraint::constraints(),
        ];
        yield 'CXSError404' => [ModelFixtures::buildCXSError404(), CXSError404Constraint::constraints()];
        yield 'ErrorResponseVO500' => [
            ModelFixtures::buildErrorResponseVO500(),
            ErrorResponseVO500Constraint::constraints(),
        ];
        yield 'CXSError500' => [ModelFixtures::buildCXSError500(), CXSError500Constraint::constraints()];
        yield 'ErrorResponseVO503' => [
            ModelFixtures::buildErrorResponseVO503(),
            ErrorResponseVO503Constraint::constraints(),
        ];
        yield 'CXSError503' => [ModelFixtures::buildCXSError503(), CXSError503Constraint::constraints()];
        yield 'FullSchemaQuoteRate' => [
            ModelFixtures::buildFullSchemaQuoteRate(),
            FullSchemaQuoteRateConstraint::constraints(),
        ];
        yield 'Version' => [ModelFixtures::buildVersion(), VersionConstraint::constraints()];
        yield 'RateRequestControlParameters' => [
            ModelFixtures::buildRateRequestControlParameters(),
            RateRequestControlParametersConstraint::constraints(),
        ];
        yield 'RequestedShipment' => [
            ModelFixtures::buildRequestedShipment(),
            RequestedShipmentConstraint::constraints(),
        ];
        yield 'RateParty' => [ModelFixtures::buildRateParty(), RatePartyConstraint::constraints()];
        yield 'RateAddress' => [ModelFixtures::buildRateAddress(), RateAddressConstraint::constraints()];
        yield 'Address2' => [ModelFixtures::buildAddress2(), Address2Constraint::constraints()];
        yield 'EmailNotificationRecipient' => [
            ModelFixtures::buildEmailNotificationRecipient(),
            EmailNotificationRecipientConstraint::constraints(),
        ];
        yield 'SmsDetail' => [ModelFixtures::buildSmsDetail(), SmsDetailConstraint::constraints()];
        yield 'RequestedPackageLineItem' => [
            ModelFixtures::buildRequestedPackageLineItem(),
            RequestedPackageLineItemConstraint::constraints(),
        ];
        yield 'Money' => [ModelFixtures::buildMoney(), MoneyConstraint::constraints()];
        yield 'Money1' => [ModelFixtures::buildMoney1(), Money1Constraint::constraints()];
        yield 'Weight2' => [ModelFixtures::buildWeight2(), Weight2Constraint::constraints()];
        yield 'Weight1_2' => [ModelFixtures::buildWeight12(), Weight1_2Constraint::constraints()];
        yield 'StandaloneBatteryDetails' => [
            ModelFixtures::buildStandaloneBatteryDetails(),
            StandaloneBatteryDetailsConstraint::constraints(),
        ];
        yield 'RequestePackageLineItemDimensions' => [
            ModelFixtures::buildRequestePackageLineItemDimensions(),
            RequestePackageLineItemDimensionsConstraint::constraints(),
        ];
        yield 'Dimensions' => [ModelFixtures::buildDimensions(), DimensionsConstraint::constraints()];
        yield 'Dimensions1' => [ModelFixtures::buildDimensions1(), Dimensions1Constraint::constraints()];
        yield 'VariableHandlingChargeDetail' => [
            ModelFixtures::buildVariableHandlingChargeDetail(),
            VariableHandlingChargeDetailConstraint::constraints(),
        ];
        yield 'PackageSpecialServicesRequested' => [
            ModelFixtures::buildPackageSpecialServicesRequested(),
            PackageSpecialServicesRequestedConstraint::constraints(),
        ];
        yield 'AlcoholDetail' => [ModelFixtures::buildAlcoholDetail(), AlcoholDetailConstraint::constraints()];
        yield 'DangerousGoodsDetail' => [
            ModelFixtures::buildDangerousGoodsDetail(),
            DangerousGoodsDetailConstraint::constraints(),
        ];
        yield 'DangerousGoodsContainer' => [
            ModelFixtures::buildDangerousGoodsContainer(),
            DangerousGoodsContainerConstraint::constraints(),
        ];
        yield 'HazardousCommodityContent' => [
            ModelFixtures::buildHazardousCommodityContent(),
            HazardousCommodityContentConstraint::constraints(),
        ];
        yield 'HazardousCommodityQuantityDetail' => [
            ModelFixtures::buildHazardousCommodityQuantityDetail(),
            HazardousCommodityQuantityDetailConstraint::constraints(),
        ];
        yield 'HazardousCommodityInnerReceptacleDetail' => [
            ModelFixtures::buildHazardousCommodityInnerReceptacleDetail(),
            HazardousCommodityInnerReceptacleDetailConstraint::constraints(),
        ];
        yield 'HazardousCommodityOptionDetail' => [
            ModelFixtures::buildHazardousCommodityOptionDetail(),
            HazardousCommodityOptionDetailConstraint::constraints(),
        ];
        yield 'HazardousCommodityDescription' => [
            ModelFixtures::buildHazardousCommodityDescription(),
            HazardousCommodityDescriptionConstraint::constraints(),
        ];
        yield 'HazardousCommodityPackingDetail' => [
            ModelFixtures::buildHazardousCommodityPackingDetail(),
            HazardousCommodityPackingDetailConstraint::constraints(),
        ];
        yield 'PhoneNumber' => [ModelFixtures::buildPhoneNumber(), PhoneNumberConstraint::constraints()];
        yield 'HazardousCommodityPackagingDetail' => [
            ModelFixtures::buildHazardousCommodityPackagingDetail(),
            HazardousCommodityPackagingDetailConstraint::constraints(),
        ];
        yield 'PackageCODDetail' => [ModelFixtures::buildPackageCODDetail(), PackageCODDetailConstraint::constraints()];
        yield 'BatteryClassificationDetail' => [
            ModelFixtures::buildBatteryClassificationDetail(),
            BatteryClassificationDetailConstraint::constraints(),
        ];
        yield 'Party2' => [ModelFixtures::buildParty2(), Party2Constraint::constraints()];
        yield 'Contact2' => [ModelFixtures::buildContact2(), Contact2Constraint::constraints()];
        yield 'RequestedShipmentSpecialServicesRequested' => [
            ModelFixtures::buildRequestedShipmentSpecialServicesRequested(),
            RequestedShipmentSpecialServicesRequestedConstraint::constraints(),
        ];
        yield 'ShipmentSpecialServicesRequested' => [
            ModelFixtures::buildShipmentSpecialServicesRequested(),
            ShipmentSpecialServicesRequestedConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetail' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetail(),
            DeliveryOnInvoiceAcceptanceDetailConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipient' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipient(),
            DeliveryOnInvoiceAcceptanceDetailRecipientConstraint::constraints(),
        ];
        yield 'InternationalTrafficInArmsRegulationsDetail' => [
            ModelFixtures::buildInternationalTrafficInArmsRegulationsDetail(),
            InternationalTrafficInArmsRegulationsDetailConstraint::constraints(),
        ];
        yield 'PendingShipmentProcessingOptionsRequested' => [
            ModelFixtures::buildPendingShipmentProcessingOptionsRequested(),
            PendingShipmentProcessingOptionsRequestedConstraint::constraints(),
        ];
        yield 'RecommendedDocumentSpecification' => [
            ModelFixtures::buildRecommendedDocumentSpecification(),
            RecommendedDocumentSpecificationConstraint::constraints(),
        ];
        yield 'EmailLabelDetail' => [ModelFixtures::buildEmailLabelDetail(), EmailLabelDetailConstraint::constraints()];
        yield 'EmailRecipient' => [ModelFixtures::buildEmailRecipient(), EmailRecipientConstraint::constraints()];
        yield 'EmailOptionsRequested' => [
            ModelFixtures::buildEmailOptionsRequested(),
            EmailOptionsRequestedConstraint::constraints(),
        ];
        yield 'Locale' => [ModelFixtures::buildLocale(), LocaleConstraint::constraints()];
        yield 'UploadDocumentReferenceDetail' => [
            ModelFixtures::buildUploadDocumentReferenceDetail(),
            UploadDocumentReferenceDetailConstraint::constraints(),
        ];
        yield 'ShipmentDryIceDetail' => [
            ModelFixtures::buildShipmentDryIceDetail(),
            ShipmentDryIceDetailConstraint::constraints(),
        ];
        yield 'HoldAtLocationDetail' => [
            ModelFixtures::buildHoldAtLocationDetail(),
            HoldAtLocationDetailConstraint::constraints(),
        ];
        yield 'ContactAndAddress' => [
            ModelFixtures::buildContactAndAddress(),
            ContactAndAddressConstraint::constraints(),
        ];
        yield 'Address1' => [ModelFixtures::buildAddress1(), Address1Constraint::constraints()];
        yield 'ShipmentSpecialServicesRequestedShipmentCODDetail' => [
            ModelFixtures::buildShipmentSpecialServicesRequestedShipmentCODDetail(),
            ShipmentSpecialServicesRequestedShipmentCODDetailConstraint::constraints(),
        ];
        yield 'ShipmentCODDetail' => [
            ModelFixtures::buildShipmentCODDetail(),
            ShipmentCODDetailConstraint::constraints(),
        ];
        yield 'CODTransportationChargesDetail' => [
            ModelFixtures::buildCODTransportationChargesDetail(),
            CODTransportationChargesDetailConstraint::constraints(),
        ];
        yield 'InternationalControlledExportDetail' => [
            ModelFixtures::buildInternationalControlledExportDetail(),
            InternationalControlledExportDetailConstraint::constraints(),
        ];
        yield 'HomeDeliveryPremiumDetail' => [
            ModelFixtures::buildHomeDeliveryPremiumDetail(),
            HomeDeliveryPremiumDetailConstraint::constraints(),
        ];
        yield 'RequestedShipmentCustomsClearanceDetail' => [
            ModelFixtures::buildRequestedShipmentCustomsClearanceDetail(),
            RequestedShipmentCustomsClearanceDetailConstraint::constraints(),
        ];
        yield 'CustomsClearanceDetail' => [
            ModelFixtures::buildCustomsClearanceDetail(),
            CustomsClearanceDetailConstraint::constraints(),
        ];
        yield 'CommercialInvoice' => [
            ModelFixtures::buildCommercialInvoice(),
            CommercialInvoiceConstraint::constraints(),
        ];
        yield 'Payment' => [ModelFixtures::buildPayment(), PaymentConstraint::constraints()];
        yield 'Payor' => [ModelFixtures::buildPayor(), PayorConstraint::constraints()];
        yield 'PayorResponsibleParty' => [
            ModelFixtures::buildPayorResponsibleParty(),
            PayorResponsiblePartyConstraint::constraints(),
        ];
        yield 'Commodity' => [ModelFixtures::buildCommodity(), CommodityConstraint::constraints()];
        yield 'ServiceTypeDetailVO' => [
            ModelFixtures::buildServiceTypeDetailVO(),
            ServiceTypeDetailVOConstraint::constraints(),
        ];
        yield 'RequestedShipmentSmartPostInfoDetail' => [
            ModelFixtures::buildRequestedShipmentSmartPostInfoDetail(),
            RequestedShipmentSmartPostInfoDetailConstraint::constraints(),
        ];
        yield 'SmartPostInfoDetail' => [
            ModelFixtures::buildSmartPostInfoDetail(),
            SmartPostInfoDetailConstraint::constraints(),
        ];
        yield 'EMailNotificationDetailPrintedReference' => [
            ModelFixtures::buildEMailNotificationDetailPrintedReference(),
            EMailNotificationDetailPrintedReferenceConstraint::constraints(),
        ];
        yield 'ShipmentSpecialServicesRequestedReturnShipmentDetail' => [
            ModelFixtures::buildShipmentSpecialServicesRequestedReturnShipmentDetail(),
            ShipmentSpecialServicesRequestedReturnShipmentDetailConstraint::constraints(),
        ];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientAddress' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientAddress(),
            DeliveryOnInvoiceAcceptanceDetailRecipientAddressConstraint::constraints(),
        ];
        yield 'Tax' => [ModelFixtures::buildTax(), TaxConstraint::constraints()];
        yield 'DeliveryOnInvoiceAcceptanceDetailRecipientContact' => [
            ModelFixtures::buildDeliveryOnInvoiceAcceptanceDetailRecipientContact(),
            DeliveryOnInvoiceAcceptanceDetailRecipientContactConstraint::constraints(),
        ];
    }
}
