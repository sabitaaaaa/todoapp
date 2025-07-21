<form action="{{ route('trek.recommend') }}" method="POST">
    @csrf
    <input type="number" name="duration" placeholder="Max Days">
    <input type="number" name="budget" placeholder="Max Budget">
    <select name="region">
        <option value="">Any Region</option>
        <option value="Everest">Everest</option>
        <option value="Annapurna">Annapurna</option>
    </select>
   
    <select name="altitude">
        <option value="">Any</option>
        <option value="Low">Low</option>
        <option value="Mid">Mid</option>
        <option value="High">High</option>
    </select>
    <label>Interest:</label>
    <input type="checkbox" name="interest[]" value="Nature">Nature
    <input type="checkbox" name="interest[]" value="Culture">Culture
    <input type="checkbox" name="interest[]" value="Adventure">Adventure
    <button type="submit">Get Recommendations</button>
</form>

