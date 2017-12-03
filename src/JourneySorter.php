<?php

namespace App;

class JourneySorter
{
    /**
     * It accepts an array containing BoardingCard instances and returns a sorted array.
     * @see \App\Test\JourneySorterTest::getSortedBoardingCards()
     *
     * @param BoardingCard[] $boardingCards
     *
     * @return array
     */
    public function sort(array $boardingCards) : array
    {
        $from = [];
        $to   = [];

        foreach ($boardingCards as $boardingCard) {
            /** @var BoardingCard $boardingCard */
            $from[$boardingCard->getFrom()] = $boardingCard;
            $to[$boardingCard->getTo()]     = $boardingCard;
        }

        return $this->createSortedBoardingCards($from, $to);
    }

    /**
     * @param array $from
     * @param array $to
     *
     * @return array
     */
    private function createSortedBoardingCards(array $from, array $to): array
    {
        $sortedBoardingCards   = [];
        $startPoint            = $this->getStartPoint($from, $to);
        $sortedBoardingCards[] = $startPoint;
        $nextDestination       = $startPoint->getTo();

        while (array_key_exists($nextDestination, $from)) {

            $sortedBoardingCards[] = $from[$nextDestination];
            $nextDestination       = $from[$nextDestination]->getTo();
        }

        return $sortedBoardingCards;
    }

    /**
     * @param array $from
     * @param array $to
     *
     * @return BoardingCard
     */
    private function getStartPoint(array $from, array $to): BoardingCard
    {
        foreach ($from as $startPointName => $boardingCard) {
            if (!array_key_exists($startPointName, $to)) {
                return $boardingCard;
            }
        }
    }
}