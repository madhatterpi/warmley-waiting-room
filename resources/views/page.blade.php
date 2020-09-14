@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.hero-section')
  <div class="container my-6">
    <div class="row">
      <div class="col col-lg-12">
      @include('partials.content-page')
      </div>
    </div>
  
  </div>
  @endwhile
@endsection
