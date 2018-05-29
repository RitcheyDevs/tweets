@extends('layouts.app')

@section('content')
    <div id="recentTw" class="mainContainer2" style="height:auto; background-color:#990000; color:white">
        <h2><b>An Error Has Occured:</b></h2><br>
        <h4>The Page you requested doesn't exist, has been removed<br>or You don't have permission to view it!</h4><br>
        <h4>Error Message: {{$exception->getMessage()}}</h4><br>
        <h4><b><a href="/">[Please Click here to redirect you!]</a></b></h4>
        <br><br><br><br>
    </div>
    </div>

    </div>
    </div>
@endsection