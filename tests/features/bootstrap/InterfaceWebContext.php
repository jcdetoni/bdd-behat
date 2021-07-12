<?php
/**
 * @date 12/07/21
 * @time 08:42
 */

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class InterfaceWebContext extends \Behat\MinkExtension\Context\MinkContext
{
    /**
     * @When eu estou na tela inicial :arg1
     */
    public function euEstouNaTelaInicial($arg1)
    {
        $this->visit($arg1);
    }

    /**
     * @Then eu deveria ver o título :arg1
     */
    public function euVouVerOTitulo($arg1)
    {
        $this->assertPageContainsText($arg1);
    }

    /**
     * @When eu estou na tela :arg1
     */
    public function euEstouNaTela($arg1)
    {
        $this->visit($arg1);
    }

    /**
     * @When eu preencho o campo :arg1 com o valor :arg2
     */
    public function euPreenchoOCampoComOValor($arg1, $arg2)
    {
        $this->fillField($arg1, $arg2);
    }

    /**
     * @When pressiono o botão :arg1
     */
    public function pressionoOBotao($arg1)
    {
        $this->pressButton($arg1);
    }

    /**
     * @Then eu deveria ver o número :arg1 na caixa :arg2
     */
    public function euDeveriaVerONumero($arg1, $arg2)
    {
        $this->assertPageContainsText($arg1);
    }
}