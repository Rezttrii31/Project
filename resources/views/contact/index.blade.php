<h2>Formulir Contact</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="no_hp" placeholder="No. HP" value="{{ old('no_hp') }}"><br>
    <textarea name="message" placeholder="Message">{{ old('message') }}</textarea><br>
    <button type="submit">Kirim</button>
</form>
