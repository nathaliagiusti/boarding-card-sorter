<?php

namespace App\Test;

use App\BoardingCard;
use App\JourneySorter;
use PHPUnit\Framework\TestCase;

class JourneySorterTest extends TestCase
{
    /**
     * @dataProvider boardingCardsProvider
     *
     * @param array $boardingCards
     * @param array $expectedSortedBoardingCards
     */
    public function testSortShouldReturnSortedBoardingCards(array $boardingCards, array $expectedSortedBoardingCards)
    {
        $journeySorter = new JourneySorter();
        $result        = $journeySorter->sort($boardingCards);

        $this->assertEquals($expectedSortedBoardingCards, $result);
    }

    /**
     * @return array
     */
    public function boardingCardsProvider() : array
    {
        return [
            'reverse order ' => [$this->getBoardingCards(), $this->getSortedBoardingCards()],
        ];
    }

    /**
     * @return array
     */
    private function getBoardingCards() : array
    {
        $sortedBoardingCards = $this->getSortedBoardingCards();

        return array_reverse($sortedBoardingCards);
    }

    /**
     * @return array
     */
    private function getSortedBoardingCards() : array
    {
        $boardingCards = [];

        $boardingCard = new BoardingCard();

        $boardingCard
            ->setFrom('Kiev')
            ->setTo('Lviv');

        $boardingCards[] = $boardingCard;

        $boardingCard = new BoardingCard();

        $boardingCard
            ->setFrom('Lviv')
            ->setTo('Lviv Danylo Halytskyi International Airport');

        $boardingCards[] = $boardingCard;

        $boardingCard = new BoardingCard();

        $boardingCard
            ->setFrom('Lviv Danylo Halytskyi International Airport')
            ->setTo('Stockholm');

        $boardingCards[] = $boardingCard;

        $boardingCard = new BoardingCard();

        $boardingCard
            ->setFrom('Stockholm')
            ->setTo('Amsterdam Schiphol');

        $boardingCards[] = $boardingCard;

        $boardingCard = new BoardingCard();

        $boardingCard
            ->setFrom('Amsterdam Schiphol')
            ->setTo('Rotterdam');

        $boardingCards[] = $boardingCard;

        return $boardingCards;
    }
}