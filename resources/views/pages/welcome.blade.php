@extends('layouts.default')
@section('content')
   
<div> 
    <div>
        <p class=startGiving>Start giving and receiving cash gifts to celebrate the kids you adore!</p>
    </div>

    <div class=infoFields>
            <p style="font-family:'Lato'">First Name</p>
            <hr style="height:2px;border-width:0;background-color:#b3a94f">
            <p style="font-family:'Lato'">Last Name</p>
            <hr style="height:2px;border-width:0;background-color:#b3a94f"">
            <p style="font-family:'Lato'">Email Address</p>
            <hr style="height:2px;border-width:0;background-color:#b3a94f"">
            <p style="font-family:'Lato'">Password - at least 8 characters with 1 number</p>
            <hr style="height:2px;border-width:0;background-color:#b3a94f"">
            <p style="font-family:'Lato'">Confirm Password</p>
            <hr style="height:2px;border-width:0;background-color:#b3a94f"">
            <p style="font-family:'Lato'"><div class=joinNowBorder> <a class=joinNow href="/success">JOIN NOW</a> </div></p>
    </div>

    <div>
        <img class=balloonsCorner src="balloons-corner.jpg" alt="balloon-corner">
    </div> 

    <div>
        <img class=eggRibbon src="egg-ribbon.jpg" alt="egg-ribbon">
    </div> 


</div>

@stop
