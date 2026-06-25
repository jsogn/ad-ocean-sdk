<?php

return array (
  'openProjectRejectReasonGetApi' => 
  array (
    'desc' => '获取投放项目审核建议',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1854930234989579',
    'call' => 'AdOceanSdk\\OcProject\\Api\\ProjectRejectReasonGetApi',
    'params' => 'AdOceanSdk\\OcProject\\Params\\ProjectRejectReasonGetParams',
    'response' => 'AdOceanSdk\\OcProject\\Response\\ProjectRejectReasonGetResponse',
    'request_method' => 'GET',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/oc_project/reject_reason/get/',
    'generated_files' => 
    array (
      0 => 'OcProject/Params/ProjectRejectReasonGetParams.php',
      1 => 'OcProject/Data/ProjectRejectReasonGetResponseListProjectRejectData.php',
      2 => 'OcProject/Data/ProjectRejectReasonGetResponseListMaterialRejectData.php',
      3 => 'OcProject/Data/ProjectRejectReasonGetResponseListData.php',
      4 => 'OcProject/Data/ProjectRejectReasonGetResponseData.php',
      5 => 'OcProject/Response/ProjectRejectReasonGetResponse.php',
      6 => 'OcProject/Api/ProjectRejectReasonGetApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
  'openUniProjectAwemeAuthorizedGetApi' => 
  array (
    'desc' => '获取全域创编可用抖音号',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1854930373174281',
    'call' => 'AdOceanSdk\\UNI\\Api\\UniProjectAwemeAuthorizedGetApi',
    'params' => 'AdOceanSdk\\UNI\\Params\\UniProjectAwemeAuthorizedGetParams',
    'response' => 'AdOceanSdk\\UNI\\Response\\UniProjectAwemeAuthorizedGetResponse',
    'request_method' => 'GET',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/uni_project/aweme/authorized/get/',
    'generated_files' => 
    array (
      0 => 'UNI/Params/UniProjectAwemeAuthorizedGetParams.php',
      1 => 'UNI/Data/UniProjectAwemeAuthorizedGetResponseAwemeIdListData.php',
      2 => 'UNI/Data/UniProjectAwemeAuthorizedGetResponseData.php',
      3 => 'UNI/Response/UniProjectAwemeAuthorizedGetResponse.php',
      4 => 'UNI/Api/UniProjectAwemeAuthorizedGetApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
  'openUniProjectCreatePostApi' => 
  array (
    'desc' => '新建全域投放项目',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1854206019149016',
    'call' => 'AdOceanSdk\\UNI\\Api\\UniProjectCreatePostApi',
    'params' => 'AdOceanSdk\\UNI\\Params\\UniProjectCreatePostParams',
    'response' => 'AdOceanSdk\\UNI\\Response\\UniProjectCreatePostResponse',
    'request_method' => 'POST',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/uni_project/create/',
    'generated_files' => 
    array (
      0 => 'UNI/Data/UniProjectCreatePostParamRelatedProductData.php',
      1 => 'UNI/Data/UniProjectCreatePostParamAudienceGeolocationData.php',
      2 => 'UNI/Data/UniProjectCreatePostParamAudienceData.php',
      3 => 'UNI/Data/UniProjectCreatePostParamBrandInfoData.php',
      4 => 'UNI/Data/UniProjectCreatePostParamVideoMaterialListData.php',
      5 => 'UNI/Data/UniProjectCreatePostParamPlayletSeriesUrlInfoData.php',
      6 => 'UNI/Data/UniProjectCreatePostParamTitleMaterialListData.php',
      7 => 'UNI/Data/UniProjectCreatePostParamProductInfoData.php',
      8 => 'UNI/Params/UniProjectCreatePostParams.php',
      9 => 'UNI/Data/UniProjectCreatePostResponseData.php',
      10 => 'UNI/Response/UniProjectCreatePostResponse.php',
      11 => 'UNI/Api/UniProjectCreatePostApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
  'openUniProjectListGetApi' => 
  array (
    'desc' => '获取全域投放项目列表',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1854926110406984',
    'call' => 'AdOceanSdk\\UNI\\Api\\UniProjectListGetApi',
    'params' => 'AdOceanSdk\\UNI\\Params\\UniProjectListGetParams',
    'response' => 'AdOceanSdk\\UNI\\Response\\UniProjectListGetResponse',
    'request_method' => 'GET',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/uni_project_list/get/',
    'generated_files' => 
    array (
      0 => 'UNI/Data/UniProjectListGetParamFilteringData.php',
      1 => 'UNI/Params/UniProjectListGetParams.php',
      2 => 'UNI/Data/UniProjectListGetResponseListRelatedProductData.php',
      3 => 'UNI/Data/UniProjectListGetResponseListBrandInfoData.php',
      4 => 'UNI/Data/UniProjectListGetResponseListAudienceGeolocationData.php',
      5 => 'UNI/Data/UniProjectListGetResponseListAudienceData.php',
      6 => 'UNI/Data/UniProjectListGetResponseListData.php',
      7 => 'UNI/Data/UniProjectListGetResponseData.php',
      8 => 'UNI/Response/UniProjectListGetResponse.php',
      9 => 'UNI/Api/UniProjectListGetApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
  'openUniProjectListGetGetApi' => 
  array (
    'desc' => '获取全域投放项目列表',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1854926110406984',
    'call' => 'AdOceanSdk\\UNI\\Api\\UniProjectListGetGetApi',
    'params' => 'AdOceanSdk\\UNI\\Params\\UniProjectListGetGetParams',
    'response' => 'AdOceanSdk\\UNI\\Response\\UniProjectListGetGetResponse',
    'request_method' => 'GET',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/uni_project_list/get/',
    'generated_files' => 
    array (
      0 => 'UNI/Data/UniProjectListGetGetParamFilteringData.php',
      1 => 'UNI/Params/UniProjectListGetGetParams.php',
      2 => 'UNI/Data/UniProjectListGetGetResponseListRelatedProductData.php',
      3 => 'UNI/Data/UniProjectListGetGetResponseListBrandInfoData.php',
      4 => 'UNI/Data/UniProjectListGetGetResponseListAudienceGeolocationData.php',
      5 => 'UNI/Data/UniProjectListGetGetResponseListAudienceData.php',
      6 => 'UNI/Data/UniProjectListGetGetResponseListData.php',
      7 => 'UNI/Data/UniProjectListGetGetResponseData.php',
      8 => 'UNI/Response/UniProjectListGetGetResponse.php',
      9 => 'UNI/Api/UniProjectListGetGetApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
  'openUniProjectMonetizationModePostApi' => 
  array (
    'desc' => '批量更新项目变现模式',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1858725855069700',
    'call' => 'AdOceanSdk\\UNI\\Api\\UniProjectMonetizationModePostApi',
    'params' => 'AdOceanSdk\\UNI\\Params\\UniProjectMonetizationModePostParams',
    'response' => 'AdOceanSdk\\UNI\\Response\\UniProjectMonetizationModePostResponse',
    'request_method' => 'POST',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/uni_project/monetization_mode/update/',
    'generated_files' => 
    array (
      0 => 'UNI/Data/UniProjectMonetizationModePostParamProjectListData.php',
      1 => 'UNI/Params/UniProjectMonetizationModePostParams.php',
      2 => 'UNI/Data/UniProjectMonetizationModePostResponseErrorsData.php',
      3 => 'UNI/Data/UniProjectMonetizationModePostResponseData.php',
      4 => 'UNI/Response/UniProjectMonetizationModePostResponse.php',
      5 => 'UNI/Api/UniProjectMonetizationModePostApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
  'openUniProjectUpdatePostApi' => 
  array (
    'desc' => '编辑全域投放项目',
    'doc' => 'https://open.oceanengine.com/labels/7/docs/1854910852321354',
    'call' => 'AdOceanSdk\\UNI\\Api\\UniProjectUpdatePostApi',
    'params' => 'AdOceanSdk\\UNI\\Params\\UniProjectUpdatePostParams',
    'response' => 'AdOceanSdk\\UNI\\Response\\UniProjectUpdatePostResponse',
    'request_method' => 'POST',
    'request_url' => 'https://api.oceanengine.com/open_api/v3.0/uni_project/update/',
    'generated_files' => 
    array (
      0 => 'UNI/Data/UniProjectUpdatePostParamBrandInfoData.php',
      1 => 'UNI/Data/UniProjectUpdatePostParamAudienceGeolocationData.php',
      2 => 'UNI/Data/UniProjectUpdatePostParamAudienceData.php',
      3 => 'UNI/Data/UniProjectUpdatePostParamPlayletSeriesUrlInfoData.php',
      4 => 'UNI/Data/UniProjectUpdatePostParamProductInfoData.php',
      5 => 'UNI/Data/UniProjectUpdatePostParamTitleMaterialListData.php',
      6 => 'UNI/Params/UniProjectUpdatePostParams.php',
      7 => 'UNI/Data/UniProjectUpdatePostResponseErrorListData.php',
      8 => 'UNI/Data/UniProjectUpdatePostResponseData.php',
      9 => 'UNI/Response/UniProjectUpdatePostResponse.php',
      10 => 'UNI/Api/UniProjectUpdatePostApi.php',
    ),
    'naming_strategy' => 'legacy',
  ),
);
