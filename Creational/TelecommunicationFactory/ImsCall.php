<?php
/**
 * File ImsCall.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory;

/**
 * Class ImsCall
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\TelecommunicationFactory
 */
class ImsCall extends Call
{
  const IMS_COST = 4;

  /**
   * @return string
   */
  public function handleCall()
  {
    return str_split($this->getCall(), 1);
  }

  /**
   * @param $time
   * @return int
   */
  public function getCost(int $time)
  {
    return $this->chargeCall(ImsCall::IMS_COST, $time);
  }
}
