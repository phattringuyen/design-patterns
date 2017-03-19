<?php
/**
 * File AxeCall.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory;

/**
 * Class AxeCall
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\TelecommunicationFactory
 */
class AxeCall extends Call
{
  const AXE_COST = 2;

  /**
   * @return string
   */
  public function handleCall()
  {
    return strrev($this->getCall());
  }

  /**
   * @param $time
   * @return int
   */
  public function getCost(int $time)
  {
    return $this->chargeCall(AxeCall::AXE_COST, $time);
  }
}
