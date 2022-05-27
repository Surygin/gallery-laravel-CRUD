@extends('base')

@section('content')
<section class="main">
    <div class="main__gallery">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="main__show img-thumbnail">
              <img src="/{{ $img[0]->name }}" alt="Картинка">
            </div>
            <!-- /.main__show -->
            <div class="main__gallery-action">
              <form action="/update/{{ $img[0]->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="form-control mb-1" type="file" name="image">
                <button class="btn btn-success">Загрузить</button>
              </form>
              <!-- /.btn btnwarrning -->
            </div>
            <!-- /.main__gallery-action -->
          </div>
          <!-- /.col-12 col-lg-4 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.main__gallery -->
  </section>
  <!-- /.main -->
@endsection