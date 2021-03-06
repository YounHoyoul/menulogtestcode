@extends('layout')

@section('contents')
<div class="row">
  <div class="col-md-6">
    <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="Type postcode to search restaurant." value="{{$postcode}}">
      <span class="input-group-btn">
        <button id="btn_search" class="btn btn-default" type="button">Search!</button>
      </span>
    </div><!-- /input-group -->
    <div id="restaurant-list" class="list">
    </div>
  </div>
  <div id="menu-list" class="col-md-6 menu">
  </div>
</div>
@endsection

@section('scripts')
<script>
   "use strict";
   $(function(){
       $("#btn_search").click(function(){
           if($("[name=search]").val()){ 
               $("#menu-list").html("");
               $("#menu-list").removeClass('loading');
               $("#restaurant-list").html("");
               $("#restaurant-list").addClass('loading');
               $.ajax({
                   url:"/api/restaurant/"+$("[name=search]").val(),
                   dataType:'html',
                   cache: true, 
                   success: function(res) {
                       $("#restaurant-list").removeClass('loading');
                       $("#restaurant-list").html(res);
                       $(".btn-menu").click(function(evt){
                           evt.preventDefault();
                           var menu_url = $(this).attr("href");
                           var restaurant_name = $(this).data("restaurantName");
                           $("#menu-list").html("");
                           $("#menu-list").addClass('loading');

                           $.ajax({
                               url:menu_url,
                               dataType:'html',
                               cache: true, 
                               success: function(res) {
                                   $("#menu-list").removeClass('loading');
                                   $("#menu-list").html(res.replace(':RestaurantName',restaurant_name));
                               }
                           });
                       });
                   }
               });
           }
       });
   });
</script>
@endsection
