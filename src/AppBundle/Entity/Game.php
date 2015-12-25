<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AccountBundle\Model\Account as BaseAccount;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $game_id;

    /**
     * Get gameId
     *
     * @return integer
     */
    public function getGameId()
    {
        return $this->game_id;
    }
}
