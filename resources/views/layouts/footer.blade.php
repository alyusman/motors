   <!--footer-->
   <footer class="sticky-footer">
       <div class="container">
           <div class="text-center">
               <small>Copyright &copy;Alyusman</small>
           </div>
       </div>
   </footer>
   </div>
   <!--/footer-->


   <!--basic scripts-->
   <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
   <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
   <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.js')}}"></script>
   <script src="{{asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>


   <!--sparkline-->
   <script src="{{asset('assets/vendor/sparkline/jquery.sparkline.js')}}"></script>
   <!--sparkline initialization-->
   <script src="{{asset('assets/vendor/js-init/sparkline/init-sparkline.js')}}"></script>

   <!--chartjs-->
   <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
   <!--chartjs initialization-->
   <script src="{{asset('assets/vendor/js-init/chartjs/init-doughnut-chart.js')}}"></script>
   <script src="{{asset('assets/vendor/js-init/chartjs/init-doughnut-chart2.js')}}"></script>
   <script src="{{asset('assets/vendor/js-init/chartjs/init-dash3-sales.js')}}"></script>

   <!--vectormap-->
   <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js')}}"></script>
   <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
   <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-us-aea.js')}}"></script>
   <!--vectormap initialization-->
   <script src="{{asset('assets/vendor/js-init/vmap/init-vmap-world.js')}}"></script>
   <script src="{{asset('assets/vendor/js-init/vmap/init-vmap-usa.js')}}"></script>

   <!--to do list-->
   <script src="{{asset('assets/vendor/icheck/skins/icheck.min.js')}}"></script>
   <!--to do list initialization-->
   <script src="{{asset('assets/vendor/js-init/init-todo-list.js')}}"></script>

   <!--datatables-->
   <script src="{{asset('assets/vendor/data-tables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>
   <!--init datatable-->
   <script src="{{asset('assets/vendor/js-init/init-datatable.js')}}"></script>

   <!--date picker-->
   <script src="{{asset('assets/vendor/date-picker/js/bootstrap-datepicker.min.js')}}"></script>
   <!--init date picker-->
   <script src="{{asset('assets/vendor/js-init/pickers/init-date-picker.js')}}"></script>
   <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

   <!--basic scripts initialization-->
   <script src="{{asset('assets/js/scripts.js')}}"></script>

   <script>
       // Example starter JavaScript for disabling form submissions if there are invalid fields
       (function() {
           'use strict';
           window.addEventListener('load', function() {
               // Fetch all the forms we want to apply custom Bootstrap validation styles to
               var forms = document.getElementsByClassName('needs-validation');
               // Loop over them and prevent submission
               var validation = Array.prototype.filter.call(forms, function(form) {
                   form.addEventListener('submit', function(event) {
                       if (form.checkValidity() === false) {
                           event.preventDefault();
                           event.stopPropagation();
                       }
                       form.classList.add('was-validated');
                   }, false);
               });
           }, false);
       })();

       function up() {
           window.location.href = "{{url('update')}}/" + id;
       }

       //    $(document).ready(function() {
       //        $('.detail').click(function() {
       //            console.log($(this).attr('data-value'));
       //        });
       //    });
   </script>



   </body>

   <!-- Mirrored from thevectorlab.net/dashlab-v1.3/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 03:25:18 GMT -->

   </html>
