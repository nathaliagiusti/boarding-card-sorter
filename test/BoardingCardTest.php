<?php

namespace App\Test;

use App\BoardingCard;
use PHPUnit\Framework\TestCase;

class BoardingCardTest extends TestCase
{
    public function testConversionToString()
    {
        $boardingCard = new BoardingCard();

        $boardingCard
            ->setTransportationDetails('Gate 45B. Baggage drop at ticket counter 344.')
            ->setTransportType('flight')
            ->setNumber('BF134')
            ->setSeat('3A')
            ->setFrom('Lviv Danylo Halytskyi International Airport')
            ->setTo('Stockholm');

        $expectedBoardingCardDescription = 'Take flight BF134 from Lviv Danylo Halytskyi International Airport'
            . ' to Stockholm. Seat 3A. '
            . $boardingCard->getTransportationDetails();

        $this->assertEquals($expectedBoardingCardDescription, (string)$boardingCard);
    }
}
