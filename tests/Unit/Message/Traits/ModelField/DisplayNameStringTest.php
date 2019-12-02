<?php

declare(strict_types = 1);

namespace AvtoDev\Tests\Unit\Message\Traits\ModelField;

use AvtoDev\CloudPayments\Message\Traits\ModelField\DisplayNameString;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

/**
 * @group unit
 */
class DisplayNameStringTest extends TestCase
{
    protected $class;

    /** @var \Faker\Generator */
    protected $facker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->facker = Factory::create();

        $this->class = new class {
            use DisplayNameString;
        };
    }

    public function test()
    {
        $this->class->setDisplayName($some = $this->facker->sentence);

        $this->assertSame($some, $this->class->getDisplayName());
    }
}
