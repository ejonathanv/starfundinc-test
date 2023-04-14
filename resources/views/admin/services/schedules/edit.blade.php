<h1>
    Edit the schedule for {{ $service->name }} 
</h1>
<form action="{{ route('schedule.store', $service) }}" method="post">
    @csrf
    <div>
        <label for="">Day of week:</label>
        <select name="day_of_week">
            <option disabled selected value="">Select a day</option>
            <option value="0">Monday</option>
            <option value="1">Tuesday</option>
            <option value="2">Wednesday</option>
            <option value="3">Thursday</option>
            <option value="4">Friday</option>
            <option value="5">Saturday</option>
            <option value="6">Sunday</option>
        </select>
        @error('day_of_week')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="">Start at:</label>
        <input type="time" name="start_at" value="{{ old('start_at') }}">
        @error('start_at')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="">End at:</label>
        <input type="time" name="end_at" value="{{ old('end_at') }}">
        @error('end_at')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Submit</button>
</form>

<div>
    <h1>Current schedule</h1>
    <ul>
        @foreach($service->schedules as $schedule)
            <li>
                {{ $schedule->day }}: {{ $schedule->start_at }} - {{ $schedule->end_at }}
            </li>
        @endforeach
    </ul>
</div>