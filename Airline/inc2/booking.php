<link rel="stylesheet" href="css/booking.css">
<div class="form-container">
  <div class="tab active-tab">Flight ✈️</div><br><br>
  <form> 
    <div class="radio-container">
      <input type="radio" id="round-trip" name="trip" value="round-trip" class="radio-input" checked>
      <label for="round-trip">Round trip</label>
      <input type="radio" id="one-way" name="trip" value="one-way" class="radio-input">
      <label for="one-way">One way</label>
    </div>
    
    <label class="date-label" for="from">From:</label>
    <input type="text" id="from" name="from" class="input-field" placeholder="Choose" list="from-list">
    <datalist id="from-list">
        <option value="Prishtina"></option>
        <option value="Tirana"></option>
        <option value="Shkup"></option>
        <option value="Italy"></option>
        <option value="Germany"></option>
        <option value="Budapest"></option>
        <option value="France"></option>
        <option value="United States"></option>
    </datalist>
    <label class="date-label" for="to">To:</label>
    <input type="text" id="to" name="to" class="input-field" placeholder="Choose" list="to-list">
    <datalist id="to-list">
        <option value="France"></option>
        <option value="Canada"></option>
        <option value="Mexico"></option>
        <option value="United States"></option>
        <option value="Italy"></option>
        <option value="Germany"></option>
        <option value="Budapest"></option>
        <option value="Tirane"></option>
    </datalist>
    
    <label class="date-label" for="depart">Depart:</label>
    <input type="date" id="depart" name="depart" class="input-field">

    <label class="date-label" for="return">Return:</label>
    <input type="date" id="return" name="return" class="input-field">
    
    <label class="date-label" for="passengers">Number of passengers:</label>
    <select id="passengers" name="passengers" class="select-dropdown">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    <label class="date-label" for="komente">Comment:</label>
    <textarea name="komente"></textarea>
    <button type="button" id="search-btn" class="search-btn">🔍 Search</button>
    <script>
    document.getElementById('search-btn').addEventListener('click', function() {
      var isFlightAvailable = Math.random() < 0.5; // 50% chance for each
      if (isFlightAvailable) {
        alert('The flight is available! You can book it.');
      } else {
        alert('Sorry, the flight is not available at the moment.');
      }
      });
      </script>
  </form>
</div>