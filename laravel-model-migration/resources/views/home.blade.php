@extends ('layouts.main')

@section('title')

@section('content')
    <section id="sezione-home">
        <div class="card">
            <div class="vacanza-body">
                <h3>{{ $vacanze->location }}</h3>
                <h4></h4>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>
@endsection