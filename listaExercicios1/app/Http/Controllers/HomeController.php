<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function listaExercicio()
    {
        return view("listaExercicios");
    }

    public function exercicio1()
    {
        return view("exercicio1");
    }

    public function resultadoex1(Request $request)
    {
        $valor = $request['valor'];
        $preco = $request['preco'];
        $troco = $valor - $preco;
        return "O troco é de R$ $troco";
    }

    public function exercicio2()
    {
        return view("exercicio2");
    }

    public function resultadoex2(Request $request)
    {
        $valor = $request['valor'];
        $quantidade = $request['quantidade'];
        $precoFinal = $valor * $quantidade;
        return "O troco é de R$ $precoFinal";
    }

    public function exercicio3()
    {
        return view("exercicio3");
    }

    public function resultadoex3(Request $request)
    {
        $valor = $request['valor'];
        if ($valor > 10) {
            return "O valor é maior que 10";
        } elseif ($valor == 10) {
            return "O valor é igual a 10";
        } else
            return "O valor é menor que 10";
    }

    public function exercicio4()
    {
        return view("exercicio4");
    }

    public function resultadoex4(Request $request)
    {
        $valor = $request['valor'];
        if ($valor > 0) {
            return "O valor é positivo";
        } elseif ($valor == 0) {
            return "O valor é igual a zero";
        } else
            return "O valor é negativo";
    }

    public function exercicio5()
    {
        return view("exercicio5");
    }

    public function resultadoex5(Request $request)
    {
        $nt1 = $request['nt1'];
        $nt2 = $request['nt2'];
        $nt3 = $request['nt3'];
        $nt4 = $request['nt4'];

        $media = ($nt1 + $nt2 + $nt3 + $nt4) / 4;

        if ($media >= 7) {
            return "Aprovado!!";
        }
        else {
            return "Reprovado!!";
        }
    }
}
