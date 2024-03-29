# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subsno** | **int** | Subscription Id - primary key together with extno | 
**extno** | **int** | Subscription Extension Id - how many times a subscription has been extended | 
**cusno** | **int** | Customer getting the subscription | 
**paycusno** | **int** | Customer paying for the subscription | 
**kind** | **string** |  | 
**state** | **string** |  | 
**pricegroup** | **string** |  | [optional] 
**package** | [**\PersonaClient\Model\Package**](Package.md) |  | 
**dates** | [**\PersonaClient\Model\SubscriptionDates**](SubscriptionDates.md) |  | 
**extsubsexists** | **bool** | If the extension of this subscription exists | 
**campaign** | [**\PersonaClient\Model\PackageCampaign**](PackageCampaign.md) |  | [optional] 
**paused** | [**\PersonaClient\Model\PausedSubscription[]**](PausedSubscription.md) | Pause periods of this subscription | [optional] 
**receiver** | **string** | The name of subscription receiver | [optional] 
**delivery_address** | [**\PersonaClient\Model\DeliveryAddress**](DeliveryAddress.md) |  | [optional] 
**pending_address_changes** | [**\PersonaClient\Model\PendingAddressChange[]**](PendingAddressChange.md) | Pending and ongoing temporary address changes | [optional] 
**order_number** | **string** | Order number of subscription | [optional] 
**payment_method** | **string** |  | [optional] 
**payment_method_id** | **int** |  | [optional] 
**delivery_trouble_end** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


