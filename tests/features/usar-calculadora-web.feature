#language: pt
  Funcionalidade: somar dois números positivos menores que 100 através do sistema web
    Eu, como usuário
    Quero somar dois números positivos menores que 100
    Para obter um resultado

    Regras:
    - Os dois números devem ser positivos
    - Os números não podem ser maiores que 100

  @web @javascript
  Cenário: Acessando
    Quando eu estou na tela inicial "/calculadora/index"
    Então eu deveria ver o título "Super calculadora - Soma de 0 a 10"

  @web @javascript
  Cenário: Soma de dois números positivos e menores que 100
    Quando eu estou na tela "/calculadora/index"
    E eu preencho o campo "Numero 1" com o valor "10"
    E eu preencho o campo "Numero 2" com o valor "15"
    E pressiono o botão "Somar"
    Então eu deveria ver o número "25" na caixa "Resultado"