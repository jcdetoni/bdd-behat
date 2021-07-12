<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class SomarPositivosMenoresDe100Context implements Context
{
    use \BehatExpectException\ExpectException;

    private $somaPositivosMenoresDe100;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

    public function __construct()
    {
        $this->somaPositivosMenoresDe100 = new MySys\CalculosEspeciais\SomaPositivosMenoresDe100();
    }

    /**
     * @When eu tentar somar o número :arg1 com o número :arg2
     */
    public function euTentarSomarONumeroComONumero($arg1, $arg2)
    {
        $this->somaPositivosMenoresDe100->somar($arg1, $arg2);
    }

    /**
     * @Then eu vou ver o número :arg1
     */
    public function euVouVerONumero($arg1)
    {
        \PHPUnit\Framework\Assert::assertEquals(25, $arg1);
    }

    /**
     * @When eu tentar somar o número negativo :arg1 e o número :arg2
     */
    public function euTentarSomarONumeroNegativoEONumero($arg1, $arg2)
    {
        $this->shouldFail(
            function () use ($arg1 , $arg2) {
                $this->somaPositivosMenoresDe100->somar($arg1, $arg2);
            }
        );
    }

    /**
     * @When eu tentar somar o número :arg1 e o número negativo :arg2
     */
    public function euTentarSomarONumeroEONumeroNegativo($arg1, $arg2)
    {
        $this->shouldFail(
            function () use ($arg1 , $arg2) {
                $this->somaPositivosMenoresDe100->somar($arg1, $arg2);
            }
        );
    }

    /**
     * @When eu tentar somar o número maior que cem :arg1 e o número :arg2
     */
    public function euTentarSomarONumeroMaiorQueCemEONumero($arg1, $arg2)
    {
        $this->shouldFail(
            function () use ($arg1 , $arg2) {
                $this->somaPositivosMenoresDe100->somar($arg1, $arg2);
            }
        );
    }

    /**
     * @When eu tentar somar o número :arg1 e o número maior que cem :arg2
     */
    public function euTentarSomarONumeroEONumeroMaiorQueCem($arg1, $arg2)
    {
        $this->shouldFail(
            function () use ($arg1 , $arg2) {
                $this->somaPositivosMenoresDe100->somar($arg1, $arg2);
            }
        );
    }

    /**
     * @Then eu vou ver a mensagem de erro negativo :arg1
     */
    public function euVouVerAMensagemDeErroNegativo($arg1)
    {
        $this->assertCaughtExceptionMatches(
            \Exception::class,
            'Inválido: um dos números é negativo'
        );
    }

    /**
     * @Then eu vou ver a mensagem de erro maior que cem :arg1
     */
    public function euVouVerAMensagemDeErroMaiorQueCem($arg1)
    {
        $this->assertCaughtExceptionMatches(
            \Exception::class,
            'Inválido: um dos números é maior que 100'
        );
    }


}
