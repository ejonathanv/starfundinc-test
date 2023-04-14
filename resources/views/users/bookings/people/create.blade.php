<h1>
    Define who is coming, you can add more people later
</h1>

<p>
    Date: {{ $slot->start_at->format('d M, Y H:i') }} - {{ $slot->end_at->format('d M, Y H:i') }}
</p>

<form action="{{ route('booking.people.store', $slot) }}" method="post">
    @csrf
    <div>
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="">
            Service:
        </label>
        <select name="service_id">
            <option disabled selected value="">Select a service</option>
            @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
        @error('service_id')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Submit</button>
</form>