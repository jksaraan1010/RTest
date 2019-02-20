
<table class="bannertablewhite" width="100%">
	<tr>
		<td width="20%">
			<img class="imagedisplay" src="img/jp.JPG" alt="jp" width = "200" height = "190">
		</td>
		<td width="60%">
			<span class="banner">
				<marquee behavior="scroll" direction="center">Who Is Jasmine Saraan?</marquee>
			</span>
		</td>
		<td width="10%" align="center">
			<a href="home">Home</a>
		</td>
        <td width="10%" align="center">
			<a href="ContactUs">Contact Us</a>
		</td>


	</tr>
</table>

<table class="tables" width="100%" border = 2>
	<tr>
		<td width="15%" background="img/background.GIF">
			<br>
		</td>
		<td align = "center" width="70%">
			<form action="ContactUsStore" method="post">

         {{ csrf_field() }}
         <div class="form-group">
         <br></br>
         <br></br>

         Name: <input type="text" class="form-control text-center" placeholder="Enter Name" name="name"><br>
         <br></br>
         Email: <input type="email" class="form-control text-center" placeholder="Enter Email" name="email"><br>
         <br></br>
          Message:<br></br>
          <textarea name="message"  rows="10" cols="30">
				</textarea>
                <br></br>
<button type="submit" class="btn btn-primary btn-md" style="margin-left: 0px;margin: auto; display: block;"t>SEND</button>
         </div>
      </form>

		</td>
		<td width="15%" background="img/background.GIF">
			<br>
		</td>
	</tr>
</table>
