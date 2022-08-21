<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('output.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,100&display=swap" rel="stylesheet">
</head>
<body   >
    <header class="fixed min-w-full bg-gradient-to-r from-slate-300 to-white py-8 opacity-95 shadow-lg"></header>

   <section class=" min-h-screen font-poppins bg-cover  " style="background-image: url({{ asset('mahaputra.jpg')}}) ;">
    <div class=" min-w-full min-h-screen bg-white bg-opacity-70">
        <div class=" pt-32">
        <div class=" opacity-100 mx-auto bg-white max-w-md rounded-md shadow-md lg:max-w-4xl md:max-w-2xl">
            <h1 class=" py-3 font-bold px-8">Input Data</h1>
            <div class="px-3 ">
                <hr class="">
            </div>
            <div class="p-10 ">
                <form action="\admin\store-user" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="lg:flex">
                    <div class="w-full lg:w-1/2">
                    <span class=" font-semibold ">Nama</span>
                    <input type="text" id="name" name="nama" class="rounded disabled:bg-slate-300  w-full mt-1 mb-5 outline-none border font-light border-slate-300  focus:border-sky-300  focus:ring-1 p-2 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 " required   placeholder="Masukan Nama..">
                    <span class=" font-semibold mt-2">NIS</span>
                    <input  class="rounded disabled:bg-slate-300  w-full mt-1 mb-5 outline-none border border-slate-300 font-light  focus:border-sky-300  focus:ring-1 p-2 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700  " id="nis" name="nis" placeholder="Masukan NIS.." required  type="text">
                    <span class=" font-semibold ">Kelas</span>
                    <input  class="rounded disabled:bg-slate-300  w-full mt-1 mb-5 outline-none border border-slate-300 font-light  focus:border-sky-300  focus:ring-1 p-2 invalid:text-pink-700  invalid:focus:ring-pink-700 invalid:focus:border-pink-700  " id="class" name="kelas" type="text " required  placeholder="Masukan Kelas..">
                    <span class=" font-semibold ">Agama</span>
                    <input  class="rounded disabled:bg-slate-300  w-full mt-1 mb-5 outline-none border border-slate-300 font-light  focus:border-sky-300  focus:ring-1 p-2 invalid:text-pink-700   invalid:focus:ring-pink-700 invalid:focus:border-pink-700  " id="religion" name="agama" type="text" required  placeholder="Masukan Agama..">
                    <span class=" font-semibold mt-2">Jenis Kelamin</span>
                    <select name="" class="rounded disabled:bg-slate-300  w-full mt-1 mb-5 outline-none border border-slate-300 font-light  focus:border-sky-300  focus:ring-1 p-2  invalid:focus:ring-pink-700 invalid:focus:border-pink-700 " id="gender" name="jk"  required id="">
                        <option class="" value="">Pilih</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    <span class=" font-semibold ">Email</span>
                    <input  class="rounded font-light disabled:bg-slate-300   invalid:mb-0 w-full mt-1  outline-none border border-slate-300  focus:border-sky-300  focus:ring-1 p-2 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " id="email" name="email" type="email"   placeholder="Masukan email..">
                    <p class="invisible peer-invalid:visible text-pink-700 font-light">Email tidak valdi!</p>
                </div>
                <div class="w-full lg:w-1/2 sm:block lg:ml-4">
                    
                    <span class=" font-semibold mt-2">TTL</span>
                    <input  class="rounded font-light disabled:bg-slate-300   w-full mt-1 mb-5 outline-none border border-slate-300  focus:border-sky-300  focus:ring-1 p-2  invalid:focus:ring-pink-700 invalid:focus:border-pink-700  " id="date" name="ttl" required type="date">
                    <span class=" font-semibold mt-2 ">Foto</span>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" id="image" name="foto"  accept="image/png, image/gif, image/jpeg" class="block w-full text-sm text-slate-500 mt-1
                          file:mr-4 file:py-2 file:px-4
                          file:rounded file:border-0
                          file:text-sm file:font-semibold
                          file:bg-slate-300 file:text-slate-700
                          hover:file:bg-slate-200 mb-2
                        "/>
                      </label>
                    <span class="font-semibold">Alamat</span>
                    <textarea id="address" name="alamat" class="rounded font-light disabled:bg-slate-300   w-full mt-1 mb-5 outline-none border border-slate-300  focus:border-sky-300  focus:ring-1 p-2  invalid:focus:ring-pink-700 invalid:focus:border-pink-700 " required  id="" cols="30" placeholder="Masukan Alamat.." rows="10"></textarea>
                    </div>
                </div>
                    
                    
                    <div class="px-3 ">
                        <hr class="">
                    </div>
                    <div class=" flex justify-center">
                        <input type="submit" class="  font-bold text-white py-3 mt-10 px-8   rounded-full w-96 bg-gradient-to-r from-slate-400 to-slate-300 hover:bg-gradient-to-r hover:from-slate-300 hover:to-slate-400  hover:opacity-90 hover:shadow-lg text-lg transition" value="Submit">
                    </div>
                    
                    
            </div>
        </div>
    </div>
    </div>
   </section>
</body>
</html>