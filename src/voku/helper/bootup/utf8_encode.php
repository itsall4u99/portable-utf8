<?php

/*
 * Copyright (C) 2013 Nicolas Grekas - p@tchwork.com
 *
 * This library is free software; you can redistribute it and/or modify it
 * under the terms of the (at your option):
 * Apache License v2.0 (http://apache.org/licenses/LICENSE-2.0.txt), or
 * GNU General Public License v2.0 (http://gnu.org/licenses/gpl-2.0.txt).
 */

use voku\helper\shim as s;

/**
 * @param string $str
 *
 * @return string
 */
function utf8_encode($str)
{
  return s\Xml::utf8_encode($str);
}

/**
 * @param string $str
 *
 * @return string
 */
function utf8_decode($str)
{
  return s\Xml::utf8_decode($str);
}
