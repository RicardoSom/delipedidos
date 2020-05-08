<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="fk_order_market_idx", columns={"market_id"}), @ORM\Index(name="fk_order_delivery_man1_idx", columns={"delivery_man_id"}), @ORM\Index(name="fk_order_shopper1_idx", columns={"shopper_id"}), @ORM\Index(name="fk_order_client1_idx", columns={"client_id"})})
 * @ORM\Entity
 */
class Order
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \Client
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \DeliveryMan
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="DeliveryMan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_man_id", referencedColumnName="id")
     * })
     */
    private $deliveryMan;

    /**
     * @var \Market
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Market")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="market_id", referencedColumnName="id")
     * })
     */
    private $market;

    /**
     * @var \Shopper
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Shopper")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shopper_id", referencedColumnName="id")
     * })
     */
    private $shopper;


}
