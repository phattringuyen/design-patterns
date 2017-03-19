<?php
/**
 * File ImsFactory.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory;

/**
 * Class ImsFactory
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\TelecommunicationFactory
 */
class ImsFactory extends TelecommunicationFactory
{
  /**
   * @param $content
   *
   * @return ImsCall
   */
  public function createCall(string $content): Call
  {
    return new ImsCall($content);
  }
}
