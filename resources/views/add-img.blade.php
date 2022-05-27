@extends('base')

@section('content')
<section class="main">
    <div class="main__gallery">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h2>Добавить изображение</h2>
            <div class="main__gallery-action">
              <form action="/create" method="POST" enctype="multipart/form-data">
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