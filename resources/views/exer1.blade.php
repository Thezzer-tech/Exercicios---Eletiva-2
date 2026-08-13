@extends('layout')
@section('title', 'exercicio 1')
@section('conteudo') 
        <h1>exercicio</h1>
        <form method="post" action="/exer1resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o primeiro valor:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o valor 2:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @isset($soma)
        <p>Soma: {{ $soma }}
    @endisset
@endsection()