<?php

declare(strict_types=1);

namespace PhpCfdi\SatWsDescargaMasiva;

use InvalidArgumentException;

class DateTimePeriod
{
    /**
     * @var DateTime
     */
    private $start;

    /**
     * @var DateTime
     */
    private $end;

    public function __construct(DateTime $start, DateTime $end)
    {
        if (-1 === $end->compareTo($start)) {
            throw new InvalidArgumentException('The final date must be greater than the initial date');
        }

        $this->start = $start;
        $this->end = $end;
    }

    public function getStart(): DateTime
    {
        return $this->start;
    }

    public function getEnd(): DateTime
    {
        return $this->end;
    }
}
