# # Package

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Package identifier | 
**name** | **string** | Package name | 
**info** | **string[]** | Package description | 
**paper** | [**\PersonaClient\Model\Paper**](Paper.md) |  | 
**digital_only** | **bool** | All products in this package are digital | 
**products** | [**\PersonaClient\Model\Product[]**](Product.md) | The Products contained in a package | 
**offers** | [**\PersonaClient\Model\PackageOffer[]**](PackageOffer.md) | Offers for the package | 
**campaigns** | [**\PersonaClient\Model\PackageCampaign[]**](PackageCampaign.md) | Active campaigns for the package | 
**next_delivery** | [**\DateTime**](\DateTime.md) |  | [optional] 
**can_pause** | **bool** | Does the package allow delivery pauses | 
**can_temp_addr** | **bool** | Does the package allow temporary address changes | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


