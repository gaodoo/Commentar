<?php
/**
 * Generates a random string using /dev/urandom
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Security
 * @subpackage Generator
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Security\Generator;

use Commentar\Security\Generator;

/**
 * Generates a random string using /dev/urandom
 *
 * @category   Commentar
 * @package    Security
 * @subpackage Generator
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class Urandom implements Generator
{
    /**
     * Creates instance
     *
     * @throws \Commentar\Security\Generator\UnsupportedCryptoException When mcrypt is not installed
     */
    public function __construct()
    {
        if (!file_exists('/dev/urandom')) {
            throw new UnsupportedAlgorithmException('/dev/urandom isn\'t accessible on the system.');
        }
    }

    /**
     * Generates a random string
     *
     * @param int $length The length of the random string to be generated
     */
    public function generate($length)
    {
        $buffer = '';

        $f = @fopen('/dev/urandom', 'r');
        if ($f) {
            $read = 0;
            while ($read < $length) {
                $buffer .= fread($f, $length - $read);
                $read = strlen($buffer);
            }
            fclose($f);
        }

        return $buffer;
    }
}
