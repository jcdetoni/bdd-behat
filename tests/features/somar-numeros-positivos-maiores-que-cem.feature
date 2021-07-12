#language: pt
  Funcionalidade: somar dois números positivos menores que 100
    Eu, como usuário
    Quero somar dois números positivos menores que 100
    Para obter um resultado

    Regras:
      - Os dois números devem ser positivos
      - Os números não podem ser maiores que 100

  @unidade
  Cenário: Soma de dois números positivos e menores que 100
    Quando eu tentar somar o número "10" com o número "15"
    Então eu vou ver o número "25"

  @unidade
  Cenário: Soma de dois números onde o primeiro número é negativo
    Quando eu tentar somar o número negativo "-10" e o número "30"
    Então eu vou ver a mensagem de erro negativo "Inválido: um dos números é negativo"

  @unidade
  Cenário: Soma de dois números onde o segundo número é negativo
    Quando eu tentar somar o número "10" e o número negativo "-30"
    Então eu vou ver a mensagem de erro negativo "Inválido: um dos números é negativo"

  @unidade
  Cenário: Soma de dois números onde o primeiro número é maior que 100
    Quando eu tentar somar o número maior que cem "200" e o número "30"
    Então eu vou ver a mensagem de erro maior que cem "Inválido: um dos números é maior que 100"

  @unidade
  Cenário: Soma de dois números onde o segundo número é maior que 100
    Quando eu tentar somar o número "10" e o número maior que cem "200"
    Então eu vou ver a mensagem de erro maior que cem "Inválido: um dos números é maior que 100"