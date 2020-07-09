<?php

use PHPUnit\Framework\TestCase;

class BasicsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.constants.predefined.php
     */
    public function testMagicConstants()
    {
        // The current line number of the file.
        $this->assertEquals(13, __LINE__);
        
        // The function name, or {closure} for anonymous functions.
        $this->assertEquals('testMagicConstants', __FUNCTION__);

        // The function name, or {closure} for anonymous functions.
        $this->assertEquals('BasicsTest', __CLASS__);

        // The class method name.
        $this->assertEquals('BasicsTest::testMagicConstants', __METHOD__);

        // The name of the current namespace.
        $this->assertEquals('', __NAMESPACE__);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.boolean.php
     */
    public function testConvertingToBoolean()
    {
        // Positive integers
        $this->assertEquals(true, (bool) 1);
        $this->assertEquals(true, (bool) 10);

        // Negative integers
        $this->assertEquals(true, (bool) -1);
        // TODO (bool) -10
        $this->assertEquals(true, (bool) -10);
        // TODO (bool) 0
        $this->assertEquals(false, (bool) 0);

        // Strings
        // TODO (bool) ''
        $this->assertEquals(0, (bool) '');
        // TODO (bool) 'not empty string'
        $this->assertEquals(1, (bool) 'false');
        // TODO (bool) 'not empty string'
        $this->assertEquals(0, (bool) '0');
        // Arrays
        // TODO (bool) []
        $this->assertEquals(0, (bool) []);
        // TODO (bool) [1, 2, 3]
        $this->assertEquals(1, (bool) [1, 2, 3]);
        // Null
        // TODO (bool) null
        $this->assertEquals(false, (bool) NULL);
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.arithmetic.php
     */
    public function testArithmeticOperators()
    {
        // Addition
        $this->assertEquals(3, 1 + 2);

        // Subtraction
        $this->assertEquals(1, 2 - 1);
        
        // Multiplication
        // TODO to be implemented
        $this->assertEquals(8, 4 * 2);
        
        // Division
        // TODO to be implemented
        $this->assertEquals(2, 4 / 2);
        
        // Modulo
        // TODO to be implemented
        $this->assertEquals(16, 2**4);

        // Exponentiation
        $this->assertEquals(1.6, 16e-1);
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function testOperatorsPrecedence()
    {
        $a = 1;
        $b = 2;
        $a = $b += 3;

        $this->assertEquals(5, $a);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.type-juggling.php
     */
    public function testTypeJuggling()
    {
        $foo = '1';
        $this->assertIsString($foo);

        $foo *= 2;
        $this->assertIsInt($foo);
        
        // TODO $foo = $foo * 1.3;
        $foo *= 1.3;
        $this->assertIsFloat($foo);

        // TODO $foo = 5 * '10 Little Piggies';
        $foo = 5 * '10 Little Piggies';
        $this->assertIsInt(50, $foo);
        
        // TODO $foo = 5 * '10 Small Pigs';
        $foo = 5 * '10 Small Pigs';
        $this->assertIsInt(50, $foo);
    }
}