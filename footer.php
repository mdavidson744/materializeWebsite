    <!-- Footer -->
    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col s12 l6">
                    <h5>About Me</h5>
                    <p>Mark Davidson</p>
                    <p>4th year Bsc computer science student</p>
                    <p>Fd Computer Science</p>
                    <p>Northern Ireland</p>
                </div>
                <div class="col s12 l4 offset-2">
                    <h5>Connect</h5>
                    <ul>
                        <li class="grey-text text-lighten-3"><a href="mailto:mdavidson744@gmail.com">Email: mdavidson744@gmail.com</a></li>
                        <li class="grey-text text-lighten-3"><a href="https://github.com/mdavidson744" target="_blank">Github</a></li>
                        <li class="grey-text text-lighten-3"><a href="#">Linked In</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4">
            <div class="container center-align">&copy; 2021 Mark Davidson</div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.tooltipped').tooltip();
        $('.scrollspy').scrollSpy();
    });

    // email button
    $(function () {
  $('#emailLink').on('click', function (event) {
      event.preventDefault();
    alert("Huh");
    var email = 'mdavidson744@gmail.com';
    var subject = ('#subject');
    var emailBody = 'Some blah';
    window.location = 'mailto:' + email + '?subject=' + subject + '&body=' +   emailBody;
  });
});
</script>
</body>
</html>