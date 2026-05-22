@if(Auth::user()->role == 'admin')
@include('navPage.admin')
@else
@include('navPage.supervisor')
@endif