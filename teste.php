<?php 
    // class Carro{
    //     public function __construct(private string $modelo, private int $ano){}
    //     public function descricao()
    //     {
    //         echo $this->modelo . " " . $this->ano;
    //     }
    // }
    // $carro = new Carro("Fusca", 1973);
    // $carro->descricao();

    // $nomes = ["Ana", "Carlos", "Beatriz", "Jo", "Rafael"];
    // foreach ($nomes as $nome)
    //     {
    //         if ($nome === "Carlos") break;     
    //         if (strlen($nome) > 4) echo $nome . " ";
    //     }

//=================

//     $produtos = [
//     ["nome" => "Arroz", "preco" => 5.50],
//     ["nome" => "Feijão", "preco" => 8.00],
//     ["nome" => "Macarrão", "preco" => 3.00],
//     ["nome" => "Café", "preco" => 15.00],
//     ["nome" => "Açúcar", "preco" => 4.50],
// ];
// $contador = 0;
// foreach ($produtos as $produto)
//     {
//         if ($produto["preco"] < 4) continue; // inclusive, não sei se acertei no continue, lembrei por cagada; Pela definição, somente pula aquele valor?
//         if ($produto["nome"] === "Café") break;
//         echo $produto["nome"] . " " . $produto["preco"] . "<br> ";
//         $contador++;
//         }
//         echo "O array percorreu {$contador} produtos";  

// $nomes = ["Ana", "Beatriz", "Carlos"];
// $nomes[] = "Fábio";
// foreach ($nomes as $nome)
//     {
//         echo $nome . " ";
//     }
// echo $nomes[1];

// Percorra só alunos com status "ativo"
// Para cada um, imprima o primeiro nome apenas — não o nome completo
// Se a nota for abaixo de 5, imprima " — Reprovado" ao lado. Caso contrário, " — Aprovado"
// No final, imprima quantos ativos foram percorridos
// $alunos = [
//     ["nome" => "Ana Silva", "nota" => 8.5, "status" => "ativo"],
//     ["nome" => "Carlos Mendes", "nota" => 4.0, "status" => "ativo"],
//     ["nome" => "Beatriz Lima", "nota" => 7.0, "status" => "inativo"],
//     ["nome" => "Rafael Costa", "nota" => 9.5, "status" => "ativo"],
// ];

// $quantidade = 0;
// foreach($alunos as $aluno)
//     {
//         if ($aluno["status"] != "ativo") continue;
//         $nome = explode(" ", $aluno["nome"]);
//         $primeiroNome = array_shift($nome);
//         echo $primeiroNome . ($aluno["nota"] < 5 ? " - Reprovado<br>" : " -  Aprovado<br>");
//         $quantidade++;
//         }
//         echo $quantidade . " alunos percorridos";
?>