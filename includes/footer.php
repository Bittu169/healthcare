<script>
        document.getElementById('signin').addEventListener('submit', function (event) {
            event.preventDefault();
            document.querySelectorAll('.error').forEach(error => error.textContent = ''); 
            let isValid = true;
            let name = document.getElementById('name').value.trim();
            let number = document.getElementById('number').value.trim();
            let email = document.getElementById('email').value.trim();
            let pass = document.getElementById('pass').value.trim();
            let cpass = document.getElementById('cpass').value.trim();

            let emailPattern = /^[^\s@]+@(gmail|outlook|yahoo)\.com$/;
            let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (!name) {
                document.getElementById('error_name').textContent = "* Name required";
                isValid = false;
            }

            if (!number || isNaN(number) || number.length !== 10) {
                document.getElementById('error_num').textContent = "* Valid 10-digit number required";
                isValid = false;
            }

            if (!email || !emailPattern.test(email)) {
                document.getElementById('error_email').textContent = "* Valid email required (gmail, outlook, yahoo)";
                isValid = false;
            }

            if (!pass || !passwordPattern.test(pass)) {
                document.getElementById('error_pass').textContent = "* Password must be at least 8 characters, with uppercase, lowercase, number, and special character";
                isValid = false;
            }

            if (pass !== cpass) {
                document.getElementById('error_cpass').textContent = "* Passwords do not match";
                isValid = false;
            }

            if (isValid) {
                this.submit(); 
            }
        });
    </script>
</body>
</html>
