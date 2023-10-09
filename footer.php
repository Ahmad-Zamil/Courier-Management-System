</div>
<footer class="main-footer">
    <div class="copyright_text text-center">
        <p>
            Copyright ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            All rights reserved | Developed by <a href="https://www.srsoftbd.xyz/" target="_blank">SR Soft BD</a>
        </p>
    </div>
</footer>

</div>

</div>



<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>


<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>

<script>
    function displayQuestion(answer) {

        document.getElementById(answer + 'Question').style.display = "block";

        if (answer == "sdf") { // hide the div that is not selected

            document.getElementById('noQuestion').style.display = "none";

        } else if (answer == "no") {

            document.getElementById('yesQuestion').style.display = "none";

        }

    }
</script>


</body>

</html>