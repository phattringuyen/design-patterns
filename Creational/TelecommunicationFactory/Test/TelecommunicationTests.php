<?php
/**
 * File ImsTests.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory\Test;

use DesignPatterns\Creational\TelecommunicationFactory\AxeFactory;
use DesignPatterns\Creational\TelecommunicationFactory\AxeCall;
use DesignPatterns\Creational\TelecommunicationFactory\ImsFactory;
use DesignPatterns\Creational\TelecommunicationFactory\ImsCall;
use PHPUnit\Framework\TestCase;

class TelecommunicationTests extends TestCase
{
  public function testCreateAxeCall()
  {
    $axe = new AxeFactory();
    $axeCall = $axe->createCall('abc');
    $chargeVal = $axeCall->getCost(2);
    $content = $axeCall->handleCall();

    $this->assertInstanceOf(AxeCall::class, $axeCall);
    $this->assertEquals(4, $chargeVal);
    $this->assertEquals('cba', $content);
  }

  public function testCreateImsCall()
  {
    $ims = new ImsFactory();
    $imsCall = $ims->createCall('abc');
    $chargeVal = $imsCall->getCost(2);
    $content = $imsCall->handleCall();

    $this->assertInstanceOf(ImsCall::class, $imsCall);
    $this->assertEquals(8, $chargeVal);
    $this->assertArraySubset(['a'], $content);
  }
}
