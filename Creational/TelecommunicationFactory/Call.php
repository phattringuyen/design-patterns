<?php
/**
 * File Call.php
 * @package design-patterns
 * @author pn
 * @version 1.0
 */
namespace DesignPatterns\Creational\TelecommunicationFactory;

/**
 * Class Call
 *
 * Handle all user's behavior when making a call
 *
 * @author Phat Ngyen <phatnt2721989@gmail.com>
 * @package DesignPatterns\Creational\TelecommunicationFactory
 */
abstract class Call
{
  /**
   * @var string
   */
  private $content;

  /**
   * Handle user call by reverting or packaging it
   *
   * @return return array|string
   */
  abstract public function handleCall();

  /**
   * Get cost of user call
   *
   * @param $time
   *
   * @return int
   */
  abstract public function getCost(int $time);

  /**
   * Call constructor
   * @param  $content
   */
  public function __construct(string $content)
  {
    $this->content = $content;
  }

  /**
   * Get user call content
   *
   * @return string
   */
  public function getCall()
  {
    return $this->content;
  }

  /**
   * Compute cost of a user call
   *
   * @param $cost
   * @param $time
   * @return int
   */
  public function chargeCall($cost, $time)
  {
    return $cost * $time;
  }
}
