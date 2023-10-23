# PHPUNIT + DOUBLES

Nesse exemplo o meu intuito é demostrar como criar um teste unitário com phpunit e a aplicação de doubles
para simular o comportamento de uma classe.

## 1º Como Funciona a Classe "Cart".
A classe "Cart" recebe os dados de um produto e adiciona uma taxa ao valor do mesmo 
através da classe "Fee". 

## 2º Como Funciona a Classe "Fee".
A classe "Fee" comunica-se com uma api de números aleatórios para simular o valor da taxa 
que vai ser adicionada ao valor do produto.

## 3º O Desafio.
Como testar a classe "Cart" se ela está integrada a uma outra classe("Fee") e essa 
classe não fornece um valor fixo?

## 4º A Solução.
Usar doubles para simular a classe "Fee" com valor fixo.
```
<?php>
 $obgFee = $this->createStub(Fee::class);//Double da classe 'Fee'.
 $obgFee->method('GetTotalfee')->willReturn(1);//Fixando valor ao metodo 'GetTotalfee' da classe 'Fee'.  
```
## 5º O Teste.
Comparar o valor enviado com o valor esperado.
$resultCart == $valueexpected;
```
$this->assertEquals($resultCart, $valueexpected);
```


## 👨‍💻 Executar o Projeto

### Passo a passo
Clone o Repositório.
```sh
git clone git@github.com:FelipeDevFull/phpteste.git
```
Acesse a Pasta do Projeto.
```sh
cd phpteste
```

Abrir no vscode.
```sh
code .
```
Executar o Teste.
```sh
vendor/bin/phpunit --colors Tests/unit/CartTest.php
```