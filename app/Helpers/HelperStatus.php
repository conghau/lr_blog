<?php
namespace App\Helper;
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 03/08/2016
 * Time: 17:37
 */
class HelperStatus {
  public static function enableStatus() {

  }

  /**
   * Check state has enable or not
   *
   * @return TRUE if enabled else return FALSE
   */
  public static function checkStatus($type, $current_status) {
    return ($current_status^$type);
  }
}