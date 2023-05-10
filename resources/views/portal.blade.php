@include('header')

<h1>Portal Page</h1>
<a href="/hej">Go to HELLO</a><br>
<a href="/kompis">Go to USER</a><br>
<a href="/omoss">Go to About Page</a><br>
<a href="/hem">Go to HOME Page</a><br>
<p>Previous Page={{URL::previous()}}</p><br>

<!-- Using the component banner here¨ -->
<x-logobanner data="Katten Gustav"/>

<!-- A footer here , blade template-->
@include('footer')