@section('title-page')
    Action
@endsection

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Action</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item">Action</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            Action
            <h5>1. Call sum function default with parameter 7 and 6 <button type="submit" class="btn btn-primary"
                    wire:click="sumNumber(7,6)">Sum</button></h5>
            <h5>Result : {{ $sum_default }}</h5>
            <h5>2. Display text with enter</h5>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Display Message</h3>
                </div>
                <form>
                    <div class="card-body">  
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea type="text" class="form-control"
                                        wire:keydown.enter="displayMessage($event.target.value)" rows="3"
                                        placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Result</label>
                                    <textarea type="text" class="form-control" rows="3">{{ $message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>     
            </div>
            <h5>3. Sum two numbers with input</h5>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Sum Number</h3>
                </div>
                <form wire:submit.prevent="getSum">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Number 1</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." wire:model="sum1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Number 2</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." wire:model="sum2">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <h4 class="float-right">Result : 
                            @if (!$sum)
                                0
                            @else
                                {{ $sum }}
                            @endif
                        </h4>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
