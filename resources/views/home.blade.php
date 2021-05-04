<html>

@extends('csshome')
@extends('layouts.app')
<head>
	<meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
   
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">
   
       <title>{{ config('app.name', 'Laravel') }}</title>
   
       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
   
       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
       <!-- Styles -->
	   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<body>
	<a  style="color:rgb(0, 0, 0);float:right" class="page-title font-italic font-bold m-0 pt-3 color-black text-center" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
		</a>

    <div class="container">
		
		<section class="margin-top-content publish">
		
				
		<p class="page-title font-italic font-bold m-0 pt-3 color-black text-center" >PCR</p>
		
        <form method="post" action="/create" enctype="multipart/form-data">
		
		<div class="font-italic input-w">
			<label class="font-bold m-0">UhKit</label>
			<input type="text" class="font-italic" placeholder="Type UhKit here...">
		</div>
		
		<div class="font-italic input-w" style="margin-top:3%;">
            <span class="font-bold m-0">Patient Details</span>
            <br>
			<div id='col' style="margin-left:40px" style="margin-top:3%;">
				
                <span class="font-bold m-0">Patient Name</span>

				<input type="text" style="margin-right:2%"class="font-italic" placeholder="Type Name here...">
				
            	<span class="font-bold m-0">Nationality</span>
                <input type="text" style="margin-right:2%"class="font-italic" placeholder="Type Nationality...">
				
				<span class="font-bold m-0">Age</span>
                <input type="text" style="margin-right:0%"class="font-italic" placeholder="Type Age...">
              
				   
      

				
		
			<div class="font-italic input-w" style="float:right;margin-top:0px;">
				<span class="font-bold m-0">Accompanied Person</span>
				<input type="text" class="font-italic" placeholder="Type Accompanied Person...">
			</div>
			</div>
		</div>
		<div class="font-italic input-w" style="margin-top:3%;">
			<span class="font-bold d-block">Ambulance Number</span>
			@foreach($ambulances as $ambulance)
		<input type="checkbox" id="category">&nbsp;<?php echo $ambulance->plateNumber; ?></input>
			
			@endforeach
		</div>

		



		
		<div class="font-italic input-w"style="margin-top:3%;">
			<span class="font-bold m-0">Destination From</span>
			
				<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
					<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;"
							onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
					  <option></option>
					  @foreach($locations as $location)
					  <option value=<?php echo $location->descr; ?>><?php echo $location->descr; ?></option>
						@endforeach
					</select>
					<input type="text" name="displayValue" id="displayValue" 
						   placeholder="hospitals" onfocus="this.select()"
						   style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;"  >
					<input name="idValue" id="idValue" type="hidden">
				  </div>
				</div>
		
		<div class="font-italic input-w" style="margin-top:3%;">
			<span class="font-bold m-0">Destination To</span>
				<div style="position:relative;width:200px;height:25px;border:0;padding:0;margin:0;">
					<select style="position:absolute;top:0px;left:0px;width:200px; height:25px;line-height:20px;margin:0;padding:0;"
							onchange="document.getElementById('locationto').value=this.options[this.selectedIndex].text; document.getElementById('idto').value=this.options[this.selectedIndex].value;">
					  <option></option>
					  @foreach($locations as $location)
					  <option value=<?php echo $location->descr; ?>><?php echo $location->descr; ?></option>
						@endforeach
					</select>
					<input type="text" name="locationto" id="locationto" 
						   placeholder="hospitals" onfocus="this.select()"
						   style="position:absolute;top:0px;left:0px;width:183px;width:180px\9;#width:180px;height:23px; height:21px\9;#height:18px;border:1px solid #556;"  >
					<input name="idValue" id="idto" type="hidden">
				  </div>
				
		</div>
		<div class="font-italic input-w" style="margin-top:3%;">
			<span class="font-bold m-0">Crew:</span>
            <input type="text" class="font-italic" placeholder="Mission Leader">
            <input type="text" class="font-italic" placeholder="Driver">
            <input type="text" class="font-italic" placeholder="Rescuer-1">
            <input type="text" class="font-italic" placeholder="Rescuer-2">
		</div>
		<div class="text-right">
			<button type="submit" class="font-italic">Create</button><button type="button" class="btn-cancel font-italic">CANCEL</button>
		</div>
    </div>
</form>
</section>
</body>
</html>