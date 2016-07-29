@extends('layout')

@section('contents')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="input-group">
      <form>
        <input type="text" name="search" class="form-control" placeholder="Type postcode to search restaurant." value="{{$postcode}}">
        <span class="input-group-btn">
          <button id="btn_search" class="btn btn-default" type="button">Search!</button>
        </span>
      </form>
    </div><!-- /input-group -->
    <div class="list">
      @forelse($data as $restaurant)
         <div class="item">
           <div class="row">
             <div class="col-xs-3 col-md-3">
               <a href="https://www.just-eat.co.uk/restaurants-{{$restaurant['UniqueName']}}">
                 <img src="{{$restaurant['Logo'][0]?$restaurant['Logo'][0]['StandardResolutionURL']:''}}">
               </a>
             </div>
             <div class="col-xs-6 col-md-6">
               <div class="row">
                 <div class="col-xs-12">
                   <a href="https://www.just-eat.co.uk/restaurants-{{$restaurant['UniqueName']}}">{{$restaurant['Name']}}</a>
                 </div>
                 <div class="col-xs-12 contents">
                   <p>Rate : {{$restaurant['RatingAverage']}}</p>
                   <ul>
                    @foreach($restaurant['CuisineTypes'] as $type)
                      <li>{{$type['Name']}}</li>
                    @endforeach
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-xs-3 col-md-3">
               <a href="/menu/{{$restaurant['Id']}}" class="btn btn-default form-control">Menu</a>
             </div>
           </div>
         </div>
      @empty
         <div class="item">
           <div class="row">
             <div class="col-xs-12 text-center">
               @if($postcode != "")
                 <h4>There is no restaurant.</h4>
               @endif
             </div>
           </div>
         </div>
      @endforelse
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
   $(function(){
       $("#btn_search").click(function(){
           if($("[name=search]").val()){ 
               document.location.href="/"+$("[name=search]").val();
           }
       });
   });
</script>
@endsection
