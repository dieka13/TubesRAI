@extends('master_layout')

@section('content')
<div class="callout">
	<h2>Biodata</h2>
	<form>
	  <label>Kelas
	    <input type="text" name="kelas" value="{{ $biodata->kelas or "" }}">
	  </label>
	  <label>
	    How many puppies?
	    <input type="number" value="100">
	  </label>
	  <label>
	    What books did you read over summer break?
	    <textarea placeholder="None"></textarea>
	  </label>
	  <label>Select Menu
	    <select>
	      <option value="husker">Husker</option>
	      <option value="starbuck">Starbuck</option>
	      <option value="hotdog">Hot Dog</option>
	      <option value="apollo">Apollo</option>
	    </select>
	  </label>
	</form>
</div>
@stop