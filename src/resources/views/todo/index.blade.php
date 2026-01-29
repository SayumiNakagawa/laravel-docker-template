<!-- Section12で削除 -->

      @extends('layouts.base')
      @section('content')
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-left">
              <a class="btn btn-success" href="{{ route('todo.create') }}">ToDoを追加</a>
            </p>
            <div class="card">
              <div class="card-header">
                ToDo一覧
              </div>
              <div class="list-group list-group-flush">
                @foreach ($todos as $todo)
                  <div class="d-flex align-items-center p-2">
                    <span class="col-9">{{ $todo->content }}</span>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endsection
<!-- Section12で以下削除 -->



<!-- 以下元データ　上記Section10コピペ -->
  <!-- <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/todo">ToDo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"></ul>
          <ul class="navbar-nav ml-auto"></ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                ToDo一覧
              </div>
              <div class="list-group list-group-flush">
              </div>
            </div>
          </div>
        </div>
     </div>
    </main>
  </div>
</body> -->
</html>