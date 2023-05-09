<?php
require "./php/Carro.php";
 $carro1 = new Carro("Celta", "Cinza", "RGB-6666", 7);



 $carro1->set_cor("cinza");
 $carro1->get_cor();
 $carro1->corDoCarro();
 $carro1->ligar();
 $carro1->acelearar();
 $carro1->frear();
 $carro1->acionarSeta("direta");


require "./php/Produto.php";

 $produto1 = new Produto();
 $produto1->setNome("God of war");
 $produto1->setMarca("Santa monika");
 $produto1->setdescricao("O jogo do ano em 2019");
 $produto1->setValor(2500, 00);
 $produto1->imprimir();


require "./php/Cliente.php";

 $cliente = new Cliente();

 $cliente->setNome("Gordinho");
 $cliente->setCpf(12345123);
 $cliente->setDataNasc(2004);
 $cliente->setEndereco("João ferreira dos santos");
 $cliente->setEmail("Gordinho.barbosa@fatec.sp.gov.br");
 $cliente->setTelefone(18997896156);
 $cliente->verificarMaiorIdade();


require "./php/Professor.php";

 $professor = new Professor();

 $professor->setNome("Gordinho");
 $professor->setCpf(12345123);
 $professor->setDataNasc(2004);
 $professor->setEmail("Gordinho.barbosa@fatec.sp.gov.br");
 $professor->setTelefone(18997896156);
 $professor->setMateriaLecionada("Gameficacao");
 $professor->imprimir();

require "./php/Disciplina.php";

$disciplina = new Disciplina();

$disciplina->setNome("Gameficacao");
$disciplina->setCodigo(1);
$disciplina->setProfessorResponsavel("Gordinho");
$disciplina->setCargaHorariaTotal("20 horas");
$disciplina->setTurmas("1º AMS Analise e Desenv. de Sistemas");
$disciplina->setEmenta("Introdução ao estudo de games: conceitos, práticas e consstrução
<br>História dos games
<br>Edificação de pesquisas e desenvolvimento");
$disciplina->imprimir();
