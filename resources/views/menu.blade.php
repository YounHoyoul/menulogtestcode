@extends('layout')

@section('contents')
  @forelse($data as $menu)
    <div class="row">
      <div class="col-md-4 col-md-offset-4 text-center">
        <h3>{{$menu['Title']}}</h3>
      </div>
      @foreach($menu['Categories'] as $category) 
        <div class="col-md-4 col-md-offset-4">
          <h4>{{$category['Name']}}</h4>
          @foreach($category['Products'] as $product)
            <div class="row">
              <div class="col-md-8">
                {{$product['Synonym']}} {{$product['Name']}}
              </div>
              <div class="col-md-4 text-right">
                £{{number_format($product['Price'],2)}}
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </div>
  @empty
    <div class="row">
      <div class="col-xs-12 text-center">
        <h4>There is no menu.</h4>
      </div>
    </div>
  @endforelse
@endsection
