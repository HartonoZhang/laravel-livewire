@section('title-page')
    Life Cycle Hook
@endsection

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Life Cycle Hook</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item">Life Cycle Hook</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." wire:model="title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." wire:model="name">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Result</h3>
                </div>
                <div class="card-body">
                    <p>Title : {{ $title }}</p>
                    <p>Name : {{ $name }}</p>
                </div>
                <div class="card-footer">
                    <h3>Life Cycle Method Hook</h3>
                    @foreach ($info as $item)
                        <p>{{ $item }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>  
</div>
