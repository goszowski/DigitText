<?php

namespace Helldar\DigitText;

use PHPUnit_Framework_TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-09 at 12:52:45.
 */
class DigitTextTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var DigitText
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new DigitText();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($this->object);
    }

    /**
     * @covers Helldar\DigitText\DigitText::text
     *
     * @todo   Implement testText().
     */
    public function testText()
    {
        $result0 = $this->object->text();
        $result1 = $this->object->text(64);
        $result2 = $this->object->text(764);
        $result3 = $this->object->text(2866);
        $result3 = $this->object->text(2866);
        $result4 = $this->object->text('10,000');
        $result5 = $this->object->text(14383);
        $result6 = $this->object->text(20383);
        $result7 = $this->object->text(72383);
        $result8 = $this->object->text(764383);
        $result9 = $this->object->text(700383);

        $result10 = $this->object->text(2644383);
        $result11 = $this->object->text(7644383);
        $result12 = $this->object->text(70043783);
        $result13 = $this->object->text(786443783);

//        $this->assertEquals('ноль', $result0);
//        $this->assertEquals('шестьдесят четыре', $result1);
//        $this->assertEquals('семьсот шестьдесят четыре', $result2);
//        $this->assertEquals('две тысячи восемьсот шестьдесят шесть', $result3);
        $this->assertEquals('десять тысяч', $result4);
        $this->assertEquals('четырнадцать тысячи триста восемьдесят три', $result5);
        $this->assertEquals('двадцать тысяч триста восемьдесят три', $result6);
        $this->assertEquals('семьдесят две тысячи триста восемьдесят три', $result7);
        $this->assertEquals('семьсот шестьдесят четыре тысячи триста восемьдесят три', $result8);
        $this->assertEquals('семьсот тысяч триста восемьдесят три', $result9);
        $this->assertEquals('два миллиона шестьсот сорок четыре тысячи триста восемьдесят три', $result10);
        $this->assertEquals('семь миллионов шестьсот сорок четыре тысячи триста восемьдесят три', $result11);
        $this->assertEquals('семьдесят миллионов сорок три тысячи семьсот восемьдесят три', $result12);
        $this->assertEquals('семьсот восемьдесят шесть миллионов четыреста сорок три тысячи семьсот восемьдесят три', $result13);
    }
}
