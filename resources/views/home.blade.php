@extends('base')

@section('content')
<section class="main">
    <div class="main__gallery">
      <div class="container">
        <div class="row">
          @foreach($images as $img)
          <div class="col-12 col-lg-4">
            <div class="main__gallery-item">
              <div class="main__gallery-img">
                <img class="img-thumbnail" src="{{ $img->name }}" alt="Картинка">
              </div>
              <!-- /.main__gallery-img -->
              <div class="main__gallery-action">
                <a href="/show/{{ $img->id }}" class="btn btn-info">Посмотртеть</a>
                <a href="/edit/{{ $img->id }}" class="btn btn-warning">Редактировать</a>
                <a href="/delete/{{ $img->id }}" class="btn btn-danger">Удалить</a>
                <!-- /.btn btnwarrning -->
              </div>
              <!-- /.main__gallery-action -->
            </div>
            <!-- /.main__gallery-item -->
          </div>
          <!-- /.col-12 col-lg-4 -->
          @endforeach
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.main__gallery -->
  </section>
  <!-- /.main -->
@endsection
