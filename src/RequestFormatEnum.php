<?php

namespace AdOceanSdk;

enum RequestFormatEnum
{
    case BODY;
    case JSON;
    case QUERY;
    case FORM_PARAMS;
    case MULTIPART;
}
