<?php

namespace JGI\SwedishNameDaysBundle\Twig;

use JGI\NameDay\NameDay;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigExtensions extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('name_day', [$this, 'nameDay']),
        ];
    }

    /**
     * @param \DateTimeInterface $date
     *
     * @return string[]
     */
    public function nameDay(\DateTimeInterface $date)
    {
        return (new NameDay())->getNamesByDate($date);
    }
}
