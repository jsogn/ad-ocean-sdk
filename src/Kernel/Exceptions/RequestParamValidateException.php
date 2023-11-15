<?php

namespace AdOceanSdk\Kernel\Exceptions;

class RequestParamValidateException extends \Exception
{
    protected $code    = 999999;
    protected $message = 'request params are invalid';

}