@extends('base')

@section('content')
<section class="main">
    <div class="main__gallery">
      <div class="container">
        <div class="row">
          <div class="col-12 offset-lg-3 col-lg-6">
            <div class="main__show img-thumbnail">
              <img src="/{{ $img[0]->name }}" alt="Картинка">
            </div>
            <!-- /.main__show -->
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