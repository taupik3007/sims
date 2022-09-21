@extends('layouts.admin-layout')
@section('content')
<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
      <table id="default-datatable" class="table table-bordered">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kelas</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($class as $key=>$class)
            <tr>
              
                   <td>{{$key+1}}</td>
                   <td>{{$class->class_name." ".$class->major_name." "."$class->class_number    "}}</td>
                   <td><a href="" class="btn btn-primary btn-sm">awikwok</a></td>
             
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nomor</th>
                <th>Kelas</th>
                <th>Aksi</th>
              
            </tr>
        </tfoot>
    </table>
    </div>
    </div>
  </div>
</div>
</div>
@endsection