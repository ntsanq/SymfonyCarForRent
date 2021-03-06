<?php

namespace App\Request;

use Symfony\Component\Validator\Constraints as Assert;

class CarRequest extends BaseRequest
{
    const ORDER_TYPE_LIST = ['asc', 'desc'];
    const DEFAULT_LIMIT = 10;
    const DEFAULT_ORDER_TYPE = 'desc';
    const DEFAULT_ORDER_BY = 'createdAt';

    #[Assert\Type('string')]
    private $color = '';

    #[Assert\Type('int')]
    private $seats = 0;

    #[Assert\Type('string')]
    private $brand = '';

    #[Assert\Type('string')]
    private $orderBy = self::DEFAULT_ORDER_BY;

    #[Assert\Choice(choices: self::ORDER_TYPE_LIST, message: 'choose a valid column to order type')]
    #[Assert\Type('string')]
    private $orderType = self::DEFAULT_ORDER_TYPE;

    #[Assert\Type('int')]
    private $limit = self::DEFAULT_LIMIT;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSeats(): int
    {
        return $this->seats;
    }

    /**
     * @param int $seats
     */
    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getOrderBy(): string
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     */
    public function setOrderBy(string $orderBy): void
    {
        $this->orderBy = $orderBy;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

}
