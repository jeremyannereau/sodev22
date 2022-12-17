<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
 <script>
   tinymce.init({
    selector: 'textarea',  // note the comma at the end of the line!
    //plugins: 'code',  // note the comma at the end of the line!
    toolbar: 'code',  // last reminder, note the comma!
    menubar: false,
    plugins: 'advlist',
    advlist_bullet_styles: 'square',
    advlist_number_styles: 'lower-alpha,lower-roman,upper-alpha,upper-roman'
 });
 </script>
