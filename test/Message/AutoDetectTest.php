<?php

/**
 * Vonage Client Library for PHP
 *
 * @copyright Copyright (c) 2016-2020 Vonage, Inc. (http://vonage.com)
 * @license https://github.com/Vonage/vonage-php-sdk-core/blob/master/LICENSE.txt Apache License 2.0
 */

declare(strict_types=1);

namespace VonageTest\Message;

use VonageTest\VonageTestCase;
use Vonage\Message\AutoDetect;

class AutoDetectTest extends VonageTestCase
{
    /**
     * When creating a message, it should not auto-detect encoding by default
     */
    public function testAutoDetectEnabledByDefault(): void
    {
        $message = new AutoDetect('to', 'from', 'Example Message');

        $this->assertTrue($message->isEncodingDetectionEnabled());
    }
}
