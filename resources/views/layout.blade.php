<!DOCTYPE html>
<html>
  <head>
    <title>MenuLog Test</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
      body{
        padding:20px 0px 0px 0px;
      }
      .list{
        margin-top : 20px;
        height : 500px;
        overflow-y: scroll;
        border: 1px solid #d0d0d0;
        padding: 0px 15px;    
      }
      .list .item{
        padding:7px 0px;
        margin:0px;
      }
      .list .item:hover{
        background:#f0f0f0;
      }
      .list .item+.item{
        border-top : 1px solid #d0d0d0;
      }
      .loading{
        height:200px;
        background : url('http://www.samsung.com/global/mv900f/img/loading_holder.gif') no-repeat center center; 
      }
      .contents ul{
        list-style-type: none; 
        -webkit-padding-start: 0px;
      }
      .contents ul>li{
        display:inline-block;
      }
      .menu#menu-list{
         min-height:300px;
         margin: 54px 0px;
         border: 1px solid #d0d0d0;
         padding: 15px;
      }
      .contents ul>li+li:before{
        content:", ";
      }
    </style>
  </head>
  <body>
    <div class="container">
      @yield('contents')
    </div>
    @yield('scripts')
  </body>
</html>
