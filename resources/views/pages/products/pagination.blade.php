{{-- Extends from Index --}}
@extends('index')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
  </div>
  <div>
    <form action="{{route('product.index')}}" method="get">
      <input type="text" name="search" placeholder="Type the name"/>
      <button>Search</button>
      <a type="button" href="" class="btn btn-success float-end">
        Insert Product
      </a>
    </form>
    <div class="table-responsive mt-4">
      @if ($findProduct->isEmpty())
        <p>It does not exist data</p>
      @else
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Name</th>
              <th>Value</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($findProduct as $product)
              <tr>
                <td>{{$product->name}}</td>
                <td>{{'R$' . '' . number_format($product->value, 2, ',', '.') }}</td>
                <td>
                  <a href="" class="btn btn-light btn-small">
                    Edit
                  </a>
                  <a href="{{ route('product.delete')}}" class="btn btn-danger btn-small">
                    Remove
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
@endsection