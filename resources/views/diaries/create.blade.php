<x-navigation></x-navigation>
<x-slot:title>Izveidot dienasgramatas ierakstu</x-slot:title>
<h1>Izveidot dienasgramatas ierakstu</h1>
<form method="POST" action="/diaries">
    @csrf
  <input name="title" />
  @error("title")
  <p>{{ $message }}</p>
@enderror
    <textarea name="body"></textarea>
    @error("body")
    <p>{{ $message }}</p>
@enderror
    <input type="date" name="date" />
    @error("date")
    <p>{{ $message }}</p>
@enderror
  <button>Saglabāt</button>
</form>
         