<?php

namespace Sirius\Validation\Rule;

use Sirius\Validation\Rule\Email as Rule;

class EmailTest extends \PHPUnit_Framework_TestCase
{

    function setUp()
    {
        $this->rule = new Rule();
    }

    function testValidation()
    {
        $this->assertFalse($this->rule->validate(''));
        $this->assertTrue($this->rule->validate('me@domain.com'));
    }
}
