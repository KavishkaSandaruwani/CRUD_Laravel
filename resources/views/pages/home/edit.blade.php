@extends('layout.web')

@section('content')

<br><br>
<form action="{{ route('create.update',$task->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 ">
              <center><h2 class="page-title">EDIT PRODUCT INFORMATION</h2><br>

                <div class="mb-3">
                    <div class="col-lg-6 ">
                    <label for="formGroupExampleInput" class="form-label">Edit Product Name</label>
                    <input type="text" name="name" value="{{ $task->name }}" class="form-control" id="formGroupExampleInput" placeholder="">
                  </div>
                </div>
                  <div class="mb-3">
                    <div class="col-lg-6 ">
                    <label for="formGroupExampleInput2" class="form-label">Edit Product Details</label>
                    <input type="text" name="details" value="{{ $task->details }}" class="form-control" id="formGroupExampleInput2" placeholder=""><br>
                  </div>
                  </div>

                <button type="submit" class="btn btn-info" value="update">Update</button>

                <center>
            </div>
            <div class="button-back">
                <a class="btn btn-outline-primary" href="{{ route('create') }}">Back</a>
            </div>
        </div>

</form>    
        

@endsection

@push('css')
    <style>
        .page-title{
         padding-top: 2%;
         color:rgb(17, 17, 128);
         
        }

        .button-back{
          display: flex;
           justify-content: flex-end;
           height: 28vh;
           align-items: flex-end;
          
        }

      </style>
@endpush
