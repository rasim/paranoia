<?php
namespace Paranoia\Formatter;

use Paranoia\Exception\InvalidArgumentException;

class MoneyFormatter implements FormatterInterface
{
    public function format($input)
    {
        if (!is_numeric($input)) {
            throw new InvalidArgumentException('The input value must be numeric.');
        }
        return round($input * 100);
    }
}
