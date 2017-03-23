<?php
/**
 * File TelecommunicationFactory.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory;

/**
 * Class TelecommunicationFactory
 *
 * In this case, the Telecommunication factory is a contracted to make a call.
 * There are two ways of make a call: Circuit-Switch(AXE) and Packet-Switch(IMS) network.
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\TelecommunicationFactory
 */
abstract class TelecommunicationFactory
{
  /**
   * There are 2 type of calls: AXE call and IMS call
   *
   * @param $content
   * @return object
   */
  abstract public function createCall(string $content): Call;
}
