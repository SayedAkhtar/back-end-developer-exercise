@extends('layouts.app')
@section('content')
    

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          @yield('post')

          <!-- Pagination -->
          {{-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="{{$posts->prev_page_url()}}">← Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="{{$posts->next_page_url()}}">Newer →</a>
            </li>
          </ul> --}}
          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          @include('sidebar')
          
        </div>
          
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection
