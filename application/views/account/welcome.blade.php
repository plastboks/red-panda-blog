@layout('base')
@section('title')
Alexanders dope blog
@endsection
@section('content')
<h1>Holla!</h1>
<p> Welcome back {{ Auth::user()->username }}</p>
@endsection
