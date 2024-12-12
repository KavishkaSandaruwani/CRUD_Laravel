@extends('layout.web')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">ADD NEW PRODUCT</h1><br>
        </div>

        <div class="col-lg-12">
            <form action="{{ route('create.store') }}" method="POST">
                @csrf

            <div class="row">
                <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="string" name="name" placeholder="Enter Product Name" required="" aria-label="default input example">
                    </div>
                </div>

              </br><div class="col-lg-5">
                <div class="form-floating">
                    <textarea class="form-control" type="text" name="details" placeholder="Leave a comment here" required="" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Add details</label>
                  </div>
                </div>

                <div class="col-lg-4">
                     <button type="submit" class="btn btn-primary" style="">Create</button><br>
                </div>

            </div>
        @if(@session()->has('success'))

           <div class="alert alert-success">


            {{ session()->get('success') }}

          </div>


        @endif
        </div>

            </div>
        </form>


        <div class="col-lg-12 mt-5">
            <table class="table table-striped table-hover">
                <thead class="table-dark col-lg-12">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key => $task)

                    <tr>
                        <th scope="row">{{ ++$key}}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->details }}</td>
                        <td>
                          <a href="{{ route('create.show',$task->id) }}" class="btn btn-primary">Show</a>
                          <a href="{{ route('create.edit',$task->id) }}" class="btn btn-success">Update</a>
                          <a href="{{ route('create.delete',$task->id) }}" class="btn btn-danger">Delete</a>
                        </td>

                      </tr>

                    @endforeach


                </tbody>
              </table>
        </div>


        </div>
    </div>
</div>
@endsection

@push('css')
    <style>
        .page-title{
         padding-top: 5%;
         color:rgb(17, 17, 128);

        }
    </style>
@endpush
