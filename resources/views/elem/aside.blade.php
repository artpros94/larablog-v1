
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">Категории</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          Все рубрики
        </a>
      </li>
      @foreach($categories as $category)
      <li>
        <a href="#" class="nav-link link-dark">
          {{ $category['title'] }}
        </a>
      </li>
      @endforeach
    </ul>
    <hr>
  </div>