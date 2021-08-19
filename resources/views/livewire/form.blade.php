@section('title-page')
    Property Binding
@endsection

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Property Binding</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item">Property Binding</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Property Binding</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." wire:model="name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Message:</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."
                                        wire:model="message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Favorite Colour:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Red" wire:model="colour">
                                        <label class="form-check-label">Red</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Green" wire:model="colour">
                                        <label class="form-check-label">Green</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Blue" wire:model="colour">
                                        <label class="form-check-label">Blue</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Status:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" value="Single"
                                            wire:model="status">
                                        <label class="form-check-label">Single</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" value="Married"
                                            wire:model="status">
                                        <label class="form-check-label">Married</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Favorite Fruit:</label>
                                    <select class="form-control" wire:model="fruit">
                                        <option value="Apple">Apple</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Banana">Banana</option>
                                        <option value="Mangga">Mangga</option>
                                        <option value="Strowberry">Strowberry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Result From Property Binding</h3>
                </div>
                <div class="card-body">
                    <p>Name : {{ $name }}</p>
                    <p>Message : {{ $message }}</p>
                    <p>Favorite Colour :
                        <ul>
                            @foreach ($colour as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </p>
                    <p>Status : {{ $status }}</p>
                    <p>Favorite Fruit : {{ $fruit }}</p>
                </div>
            </div>
        </div>
    </section>
</div>
