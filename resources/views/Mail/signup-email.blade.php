Hello {{ $email_data['name'] }}
<br><br>
Welcome to website!
<br>
Please click the below link yo verify your email and activate your account !
<br><br>

<a href="http://localhost:8000/register/verify?code={{$email_data['verification_code']}}">Verify Here!</a>

<br><br>
Thank you!
<br>
