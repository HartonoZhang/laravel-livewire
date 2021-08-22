@section('title-page')
    Home
@endsection

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">Laravel 8 Tutorial Livewire</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('component') }}">1. Component</a></li>
                    <li class="list-group-item"><a href="{{ route('route', 'SkyGod') }}">2. Route</a></li>
                    <li class="list-group-item"><a href="{{ route('propertybinding') }}">3. Property Binding</a></li>
                    <li class="list-group-item"><a href="{{ route('action') }}">4. Action</a></li>
                    <li class="list-group-item"><a href="{{ route('lifecycle') }}">5. Life Cycle Hook</a></li>
                    <li class="list-group-item"><a href="{{ route('validation') }}">6. Form Validation</a></li>
                    <li class="list-group-item"><a href="{{ route('crud') }}">7. CRUD</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
