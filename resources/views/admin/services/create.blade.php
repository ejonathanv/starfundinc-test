<h1>
    Create a new service
</h1>
<form action="{{ route('services.store') }}" method="post">
    @csrf
    <div>
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="">Description:</label>
        <input type="text" name="description" value="{{ old('description') }}">
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="">Price:</label>
        <input type="text" name="price" value="{{ old('price') }}">
        @error('price')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="">Duration in minutes:</label>
        <input type="text" name="duration" value="{{ old('duration') }}">
        @error('duration')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">Submit</button>
</form>