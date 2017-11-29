<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>

    @include('includes.header')
    
	
	<section id="section1-calculate">
	    <div class="container">
	        <h1 class="calculate-header">CALCULATE HOUR</h1>
	    </div>
	</section>

	<section id="section2-calculate">
	    <div class="container">
	    	<div><a href="/"><h4>< BACK TO HOME</h4></a></div>
	    	
	    	<div class="main-manu">
	    		<a href="">ประเภทบังคับเข้าร่วม</a> | <a href="">ประเภทไม่บังคับเข้าร่วม</a>
	    		<table align="center">
	    			<tr>
	    				<td>กิจกรรม</td>
	    				<td>จำนวนชั่วโมงกิจกรรม</td>
	    				<td>กำลังจะเข้าร่วม</td>
	    				<td>เข้าร่วมแล้ว</td>
	    			</tr>
	    			<tr>
	    				<td>กิจกรรมที่1</td>
	    				<td>20</td>
	    				<td>
	    					<input type="checkbox"/>
	    					<!-- <input type="checkbox" id="cbtest" />
    						<label for="cbtest" class="check-box"></label>  -->
    					</td>
	    				<td>
	    					<input type="checkbox"/>
	    					<!-- <input type="checkbox" id="cbtest" />
    						<label for="cbtest" class="check-box"></label>  -->
    					</td>
	    			</tr>

	    			
	    			<hr>
	    		</table>
	    	</div>
	        

	    </div>
	</section>

    <footer class="row">
        @include('includes.footer')
    </footer>
    	@include('includes.js')

</body>
</html>
