<?php

declare(strict_types=1);

namespace AdOceanSdk;

enum RequestFormatEnum
{
    case BODY;
    case JSON;
    case QUERY;
    case FORM_PARAMS;
    case MULTIPART;
}
