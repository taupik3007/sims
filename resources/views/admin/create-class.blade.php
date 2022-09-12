@extends('layouts.admin-layout')
@section('content')
    <h4 class="page-title mt-4">Tambah Kelas</h4>
        <div class="row mt-4">
            <div class="col-lg-12 ">
              <div class="card">
                <div class="card-body">
           <h5 class="card-title text-primary">Tambah siswa</h5>
           <hr>
           <form method="post" action="">
            @csrf
           <div class="row">
                <label class="col-sm-3 col-form-label"> Kelas</label>
                <div class="col-sm-9">
                    <select class="form-control" name="kelas" required id="basic-select">
                        <option value="">Pilih</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        
                      </select>
                </div>
           </div>
           <div class="row mt-4">
            <label class="col-sm-3 col-form-label"> jurusan</label>
            <div class="col-sm-9">
                <select class="form-control" name="jurusan" required id="basic-select">
                    <option value="">Pilih</option>
                    @foreach ($major as $major)
                    <option value="{{$major->id_major}}">{{$major->major_name}}</option> 
                    @endforeach
                   
                  </select>
            </div>
        </div>
        <div class="row mt-4">
         <label class="col-sm-3 col-form-label"> Penomoran Kelas</label>
         <div class="col-sm-9">
            <input type="number" class="form-control" max="10" name="nomor" placeholder="Masukan Nomor Kelas" required>
         </div>
         
         
    </div>
    <div class="row mt-4">
     <label class="col-sm-3 col-form-label"></label>
     <div class="col-sm-9">
        <input type="submit" class="btn btn-primary btn-sm" value="Submit" >
        <input type="reset" class="btn btn-danger btn-sm" value="Reset" >
 
     </div>
        </form>
            
     
    
    
</div>
                  
            
                </div>
              </div>
            </div>
            
            
       
        </div>
@endsection