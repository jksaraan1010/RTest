<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
			<a href="/">Home</a>
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
         <form action="sendEmail" method="POST">
         <div class="form-group">
         <br></br>
         <br></br>

         Name <input type="text" class="form-control text-center" placeholder="Enter Name" name="name"><br>
         <br></br>
        Email <input type="email" class="form-control text-center" placeholder="Enter Email" name="email"><br>
         <br></br>
         <center>
        Message <br><textarea name="message"  rows="10" cols="30">
				</textarea>
                <br></br>
        </center>
            <button type="submit" class="btn btn-primary btn-md" style="margin-left: 0px;margin: auto; display: block;"t>SEND</button>
         <br></br>
         <br></br>


         </div>
      </form>

		</td>
		<td width="15%" background="img/background.GIF">
			<br>
		</td>
	</tr>
</table>
<table width="100%">
	<tr class="tables">
		<td width="100%">
			<span class="footer">
				<i> <center>Copyright &copy; 2019 Jasmine Saraan</a></i></center>
			</span>
		</td>
	</tr>
</table>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

