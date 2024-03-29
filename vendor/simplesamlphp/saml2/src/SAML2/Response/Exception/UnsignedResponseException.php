<?php

declare(strict_types=1);

namespace SAML2\Response\Exception;

use SAML2\Exception\Throwable;

class UnsignedResponseException extends \RuntimeException implements Throwable
{
}
