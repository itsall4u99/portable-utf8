<?php

use voku\helper\UTF8 as u;

/**
 * Class Utf8StrSplitTest
 */
class Utf8StrSplitTest extends PHPUnit_Framework_TestCase
{
  public function test_split_one_char()
  {
    $str = 'Iñtërnâtiônàlizætiøn';
    $array = array(
        'I',
        'ñ',
        't',
        'ë',
        'r',
        'n',
        'â',
        't',
        'i',
        'ô',
        'n',
        'à',
        'l',
        'i',
        'z',
        'æ',
        't',
        'i',
        'ø',
        'n',
    );

    self::assertEquals($array, u::split($str));
  }

  public function test_split_five_chars()
  {
    $str = 'Iñtërnâtiônàlizætiøn';
    $array = array(
        'Iñtër',
        'nâtiô',
        'nàliz',
        'ætiøn',
    );

    self::assertEquals($array, u::split($str, 5));
  }

  public function test_split_six_chars()
  {
    $str = 'Iñtërnâtiônàlizætiøn';
    $array = array(
        'Iñtërn',
        'âtiônà',
        'lizæti',
        'øn',
    );

    self::assertEquals($array, u::split($str, 6));
  }

  public function test_split_long()
  {
    $str = 'Iñtërnâtiônàlizætiøn';
    $array = array(
        'Iñtërnâtiônàlizætiøn',
    );

    self::assertEquals($array, u::split($str, 40));
  }

  public function test_split_newline()
  {
    $str = "\nIñtërn\nâtiônàl\nizætiøn\n\n";
    $array = array(
        "\n",
        'I',
        'ñ',
        't',
        'ë',
        'r',
        'n',
        "\n",
        'â',
        't',
        'i',
        'ô',
        'n',
        'à',
        'l',
        "\n",
        'i',
        'z',
        'æ',
        't',
        'i',
        'ø',
        'n',
        "\n",
        "\n",
    );

    self::assertEquals($array, u::split($str));
  }
}
