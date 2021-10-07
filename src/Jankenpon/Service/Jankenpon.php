<?php

namespace src\Jankenpon\Service;

/**
 * Description of Jankenpon
 *
 * @author SONDA
 */
class Jankenpon
{

    public function play($player1, $player2)
    {
        if (($player1 == "papel" && $player2 == "pedra") ||
                ($player1 == "pedra" && $player2 == "tesoura") ||
                ($player1 == "tesoura" && $player2 == "papel"))
            return "Jogador 1";

        if ($player1 === $player2)
            return "empate";

        return "Jogador 2";
    }

}
