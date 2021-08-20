@section('title-page')
    Route
@endsection

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Route</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item">Route</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <h5>1. This is route component with paramter (Route/SkyGod)</h5>
            <h5>2. Example url parameter SkyGod to HartonoZhang (<a href="{{ route('route', 'HartonoZhang') }}">Click here</a>)</h5>
            <div class="card m-3 p-3">
                <h5>Name : {{ $name }}</h5>
                <h5>Hello {{ $name }}</h5>
            </div>
        </div>
    </section>  
</div>