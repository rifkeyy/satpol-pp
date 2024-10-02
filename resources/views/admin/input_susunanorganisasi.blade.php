<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

      .post_title
      {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
      }

      .div_center
      {
        text-align: center;
        padding: 30px;
      }

      label
      {
        display: inline-block;
        width: 200px;
      }

    </style>

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">

      @if (session()->has('message'))
      
      <div class="alert alert-succes">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{session()->get('message')}}

      </div>

      @endif


      <h1 class="post_title">Susunan Organisasi</h1>

      <div>


        <form action="{{url('susunan_organisasi')}}" method="POST" enctype="multipart/form-data">

        @csrf


          <div class="div_center">

            <label>Nama</label>

            <input type="text" name="name" placeholder="Tambahkan Nama">

          </div>

          <div class="div_center">

            <label>NIP</label>

          <textarea name="nip" placeholder="Tuliskan NIP"></textarea>

          </div>
          <div class="div_center">

            <label>Jabatan</label>

          <textarea name="jabatan" placeholder="Tuliskan Jabatan"></textarea>

          </div>

          <div class="div_center">

            <label>Foto</label>

            <input type="file" name="image">

          </div>

          <div class="div_center">
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
          Simpan</button>

          </div>


        </form>


      </div>

      </div>
        @include('admin.footer')
  </body>
</html>