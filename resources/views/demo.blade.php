<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP verification</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter Phone number</label>
        <input type="text" id="number" placeholder="+91-858555555">
        <div id="recaptcha-container"></div>
        <button type="button" onclick="sendCode()">Sent Code</button>
    </form>

    <form action="" method="">
        <label for="">Enter verification code</label>
        <input type="text" id="verificationCode">
        <button type="button" onclick="verifyCode();">Verify Code</button>
    </form>

    <div id="successMessage" style="color:green; display:none;"></div>
    <div id="error" style="color:red; display:none;"></div>
    <div id="sentmessage" style="color:green; display:none;"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    <script>
        var firebaseconfig = {
            apiKey: "AIzaSyBYjJJAaZf3ZhpPgqKwk9jphduiPHEfLJM",
            authDomain: "demootp-57813.firebaseapp.com",
            projectId: "demootp-57813",
            storageBucket: "demootp-57813.appspot.com",
            messagingSenderId: "565776032136",
            appId: "1:565776032136:web:9b88fbeffbf3c91ea19a3d",
            measurementId: "G-Y9PB2FL5CP"   
        }
        firebase.initializeApp(firebaseconfig);
    </script>

    <script>
        window.onload = function(){
            render();
        }

        function render(){
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function sendCode(){
            var number = document.getElementById('number').value;
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult){
                window.confirmationResult = confirmationResult; 
                coderesult = confirmationResult;    
                
                $('#sentmessage').text("Message Sent Successfully");
                    $('#sentmessage').show();

            }).catch(function(error){
                    $('#error').text(error.message);
                    $('#error').show();
            });
        }
        function verifyCode(){
            var code = $('#verificationCode').val();
            coderesult.confirm(code).then(function(result){
                var user = result.user;

                $('#successMessage').text("User Registration Successfully");
                $('#successMessage').show(); 

            }).catch(function(){
                $('#error').text(error.message);
                $('#error').show();
            })
        }

    </script>
</body>
</html>