<?php

namespace JGI\SwedishNameDaysBundle\Twig;

use JGI\NameDay\NameDay;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SwedishNameDaysExtension extends AbstractExtension
{
    /**
     * @var NameDay
     */
    private $nameDay;

    /**
     * @param NameDay $nameDay
     */
    public function __construct(NameDay $nameDay)
    {
        $this->nameDay = $nameDay;
    }


    public function getFilters()
    {
        return [
            new TwigFilter('names', [$this, 'names']),
        ];
    }

    public function names(\DateTimeInterface $date): array
    {
        return $this->nameDay->getNamesByDate($date);
    }
}
