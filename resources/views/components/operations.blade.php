<div class="container">

    <hr>

    <div class="row">
        @foreach ($exercises as $exercise)
            <div class="col-3 display-6 mb-3">
                <span class="bad bg-dark">
                    {{ str_pad($exercise['exercise_number'], 2, '0', STR_PAD_LEFT) }}
                </span>
                <span>
                    {{ $exercise['exercise'] }}
                </span>
            </div>
        @endforeach
    </div>
    <hr>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href="{{ route('home') }}" class="btn btn-primary px-5">VOLTAR</a>
        </div>
        <div class="col text-end">
            <a href="{{ route('export-exercises') }}" class="btn btn-secondary px-5">DESCARREGAR EXERCÍCIOS</a>
            <a href="{{ route('print-exercises') }}" class="btn btn-secondary px-5">IMPRIMIR EXERCÍCIOS</a>
        </div>
    </div>
</div>
