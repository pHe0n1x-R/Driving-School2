 {{-- @include('partials.navbar') --}}

<div class="container">
<h1><center>PDFwithData</center></h1>
<div class="container">
<table class="tabletable-bordered">
<thead>
<tr><th>Brand</th><th>Logo</th></tr>
</thead>
<tbody>
@foreach($data as $car)
<tr><td>{{$car['name']}}</td><td><img src="{{$car['logo']}}"alt=""width="150px"></td></tr>
@endforeach
</tbody>
</table>
</div>
</div>