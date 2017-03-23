<?php
/**
 * File AxeFactory.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory;

/**
 * Class AxeFactory
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\TelecommunicationFactory
 */
class AxeFactory extends TelecommunicationFactory
{
  /**
   * @param $content
   * @return AxeCall
   */
  public function createCall(string $content): Call
  {
    return new AxeCall($content);
  }
}
