<?php

namespace tests\Jankenpon;

require_once './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use \src\Jankenpon\Service\Jankenpon;

final class JankenponTest extends TestCase
{

    protected $jankenpon;

    protected function setUp(): void
    {
        $this->jankenpon = new Jankenpon();
    }

    public function testEmpatePedraPedra(): void
    {
        $this->assertEquals("empate", $this->jankenpon->play("pedra", "pedra"));
    }

    public function testEmpatePapelPapel(): void
    {
        $this->assertEquals("empate", $this->jankenpon->play("papel", "papel"));
    }

    public function testEmpateTesouraTesoura(): void
    {
        $this->assertEquals("empate", $this->jankenpon->play("tesoura", "tesoura"));
    }

    public function testJogador1GanhaPapelPedra(): void
    {
        $this->assertEquals("Jogador 1", $this->jankenpon->play("papel", "pedra"));
    }

    public function testJogador1GanhaPedraTesoura(): void
    {
        $this->assertEquals("Jogador 1", $this->jankenpon->play("pedra", "tesoura"));
    }
    
    public function testJogador1GanhaTesouraPapel(): void
    {
        $this->assertEquals("Jogador 1", $this->jankenpon->play("tesoura", "papel"));
    }
    
    public function testJogador2GanhaPapelTesoura(): void
    {
        $this->assertEquals("Jogador 2", $this->jankenpon->play("papel", "tesoura"));
    }

    public function testJogador2GanhaPedraPapel(): void
    {
        $this->assertEquals("Jogador 2", $this->jankenpon->play("pedra", "papel"));
    }
    
    public function testJogador2GanhaTesouraPedra(): void
    {
        $this->assertEquals("Jogador 2", $this->jankenpon->play("tesoura", "pedra"));
    }    

}
