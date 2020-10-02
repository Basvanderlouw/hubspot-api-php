<?php

namespace HubSpot\Discovery\Crm\Companies;

use HubSpot\Client\Crm\Companies\Api\AssociationsApi;
use HubSpot\Client\Crm\Companies\Api\BasicApi;
use HubSpot\Client\Crm\Companies\Api\BatchApi;
use HubSpot\Client\Crm\Companies\Api\SearchApi;
use HubSpot\Discovery\Crm\ObjectDiscovery;

/**
 * @method AssociationsApi associationsApi()
 * @method BasicApi        basicApi()
 * @method BatchApi        batchApi()
 * @method SearchApi       searchApi()
 */
class Discovery extends ObjectDiscovery
{
}
