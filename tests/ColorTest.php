<?php

use PHPUnit\Framework\TestCase;
use Ypho\Colors\Color;

class ColorTest extends TestCase
{
    public function test_colors() {
        $this->assertIsArray(Color::COLORS);

        // Check if each color has 10 Shades
        foreach(Color::COLORS as $color) {
            $this->assertIsArray($color);
            $this->assertCount(10, $color);
        }
    }

    /**
     * @throws Exception
     */
    public function test_getSingleColor()
    {
        $this->assertEquals('#dbeafe', Color::getSingleColor('blue', 1));
        $this->assertEquals('#6366f1', Color::getSingleColor('indigo'));
        $this->assertEquals('#84cc16', Color::getSingleColor('lime'));

        $this->expectExceptionMessage('Given Palette and/or Shade not found!');
        Color::getSingleColor('nonExisting');
        Color::getSingleColor('green', 12345);
    }

    /**
     * @throws Exception
     */
    public function test_getColorPalette()
    {
        $this->assertIsArray(Color::getColorPalette('yellow'));
        $this->assertIsArray(Color::getColorPalette('orange'));

        $this->assertCount(10, Color::getColorPalette('sky'));

        $this->expectExceptionMessage('Given Palette not found!');
        $this->assertIsArray(Color::getColorPalette('NonExistingColor'));
    }

    /**
     * @throws Exception
     */
    public function test_getColorsByShade()
    {
        $this->assertIsArray(Color::getColorsByShade());
        $this->assertIsArray(Color::getColorsByShade(5, ['red', 'green', 'blue']));

        $this->assertCount(22, Color::getColorsByShade(8));
        $this->assertCount(3, Color::getColorsByShade(4, ['orange', 'red', 'yellow']));

        $this->expectExceptionMessage('Given Shade not found, choose between 0 and 9!');
        $this->assertIsArray(Color::getColorsByShade(123));

        $this->expectExceptionMessage('Given Palette and/or Shade not found!');
        $this->assertIsArray(Color::getColorsByShade(1, ['NonExistingColor']));
    }
}
