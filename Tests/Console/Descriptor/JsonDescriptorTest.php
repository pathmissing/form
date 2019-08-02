<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Console\Descriptor;

use Symfony\Bridge\PhpUnit\ForwardCompatTestTrait;
use Symfony\Component\Form\Console\Descriptor\JsonDescriptor;

class JsonDescriptorTest extends AbstractDescriptorTest
{
    use ForwardCompatTestTrait;

    private function doSetUp()
    {
        putenv('COLUMNS=121');
    }

    private function doTearDown()
    {
        putenv('COLUMNS');
    }

    protected function getDescriptor()
    {
        return new JsonDescriptor();
    }

    protected function getFormat()
    {
        return 'json';
    }
}
