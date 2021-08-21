@section('title-page')
    CRUD
@endsection

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CRUD</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item">CRUD</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @include('livewire.create')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Students</h4>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addStudentModal">
                                Add New Student
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>First Name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                           <td>{{ $student->firstname }}</td>
                                           <td>{{ $student->lastname }}</td>
                                           <td>{{ $student->email }}</td>
                                           <td>{{ $student->phone }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
