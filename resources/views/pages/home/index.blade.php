@extends('layout.web')

@section('content')




    <div class="row">
        <div class="col-lg-12 ">
              <center><h2 class="page-title">PRODUCT DETAILS</h2><center><br><br>
            </div>
            
        </div>

        <center><div class="col-lg-3 "  style="background-color:rgb(100, 127, 247)">
       <form class="show-form"> 
        <table class="text">
        <tr>
            <td>
           Product : {{ $task->name }}</td>
        </tr><br>
        <tr>
           <td>
           Details  : {{ $task->details }} </td>
        </tr>
        </table>

        
       </form>
    </div>
        </center>

        <div class="button-back">
            <a class="btn btn-outline-primary" href="{{ route('create') }}">Back</a>
        </div>

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
           height: 34vh;
           align-items: flex-end;
          
        }

        .show-form{
           border-style: solid;
           width: 100%;
           padding: 50px 30px;
           margin: 8px 0;
           box-sizing: border-box;;
        }

       .text{
           color: white;
           text-align: left;
           font-style: bold;
           
       }

    </style>
@endpush
