<?php

namespace App;

class BoardingCard
{
    /** @var string */
    private $seat;

    /** @var string */
    private $transportType;

    /** @var string */
    private $number;

    /** @var string */
    private $from;

    /** @var string */
    private $to;

    /** @var string */
    private $transportationDetails;

    /**
     * @return string
     */
    public function getSeat(): string
    {
        return $this->seat;
    }

    /**
     * @param string $seat
     *
     * @return $this
     */
    public function setSeat(string $seat)
    {
        $this->seat = $seat;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * @param string $transportType
     *
     * @return BoardingCard
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return BoardingCard
     */
    public function setNumber(string $number): BoardingCard
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     *
     * @return BoardingCard
     */
    public function setFrom(string $from): BoardingCard
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     *
     * @return BoardingCard
     */
    public function setTo(string $to): BoardingCard
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransportationDetails(): string
    {
        return $this->transportationDetails;
    }

    /**
     * @param string $transportationDetails
     *
     * @return BoardingCard
     */
    public function setTransportationDetails(string $transportationDetails): BoardingCard
    {
        $this->transportationDetails = $transportationDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            'Take %s %s from %s to %s. Seat %s. %s',
            $this->getTransportType(),
            $this->getNumber(),
            $this->getFrom(),
            $this->getTo(),
            $this->getSeat(),
            $this->getTransportationDetails()
        );
    }

}