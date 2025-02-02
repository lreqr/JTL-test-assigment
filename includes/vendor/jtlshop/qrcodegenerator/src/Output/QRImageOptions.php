<?php declare(strict_types=1);
/**
 *
 * @filesource   QRImageOptions.php
 * @created      08.12.2015
 * @package      chillerlan\QRCode\Output
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */

namespace qrcodegenerator\QRCode\Output;

use qrcodegenerator\QRCode\QRCode;

/**
 * Class QRImageOptions
 */
class QRImageOptions
{
    public $type = QRCode::OUTPUT_IMAGE_PNG;

    public $base64 = true;

    public $cachefile = null;

    public $pixelSize = 5;
    public $marginSize = 5;

    // not supported by jpg
    public $transparent = true;

    public $fgRed = 0;
    public $fgGreen = 0;
    public $fgBlue = 0;

    public $bgRed = 255;
    public $bgGreen = 255;
    public $bgBlue = 255;

    public $pngCompression = -1;
    public $jpegQuality = 85;
}
