<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// linkEvent事件行为描述，当event_type为LINK_ENENT，必填
class SiteTemplateSiteCreatePostParamBricksButtonLinkEventData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonLinkEventLinkData $link 链接信息，当link_event不为空时，必填
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonLinkEventLinkData $link;
    
}