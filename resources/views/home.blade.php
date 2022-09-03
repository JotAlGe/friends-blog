home

<p>{{ auth()->id() }}</p>
<p>{{ auth()->user()->name }}</p>
<p>{{ auth()->user()->lastname }}</p>
<p>{{ auth()->user()->username }}</p>
<p>{{ auth()->user()->email }}</p>

<img src="{{ asset('assets/images/user.png') }}" width="50"><br>
<img src="{{ asset('assets/images/portada.png') }}" width="100%" height="300px">


<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Logout">
</form>
