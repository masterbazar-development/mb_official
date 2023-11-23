</main>
            </div>
        </div>
  
<script src="<?php echo $mainUrl; ?>mb-admin/assets/js/jquery.min.js"></script>
<script src="<?php echo $mainUrl; ?>mb-admin/assets/js/bootstrap5.bundle.min.js"></script>
<script src="<?php echo $mainUrl; ?>mb-admin/assets/js/scripts.js"></script>

<script src="<?php echo $mainurl;?>mb-admin/assets/js/jquery.min.js"></script>
<script src="<?php echo $mainurl;?>mb-admin/assets/js/bootstrap5.bundle.min.js"></script>
<script src="<?php echo $mainurl;?>mb-admin/assets/js/scripts.js"></script>

<script src="assets/summernote/summernote-lite.min.js"></script>
<script>
  $(document).ready(function() {
    $("#summernote").summernote();
    $('.dropdown-toggle').dropdown();
  });
  // $('#summernote').summernote('fontSize', 20);
  $('#summernote').summernote({
    fontSizeUnits: ['px', 'pt'],
    placeholder: 'Type Blog content Here',
    tabsize: 2,
    height: 400,
    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Rubik'],
    fontSizeUnits: ['px', 'pt'],
    styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
	],
  lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['fontname', ['fontname']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']],
      ['fontsize', ['fontsize']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']],
      
    ],

  });


$(document).ready(function() {
  $('#summernote').summernote({
    
    height: 300,
    callbacks: {
      onImageUpload: function(files) {
        // Create a FormData object to store the image file
        var formData = new FormData();
        formData.append('image', files[0]);

        // Send the image file to the server using AJAX
        $.ajax({
          url: 'upload.php',
          method: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            // Get the uploaded image path from the server response
            var imagePath = response;

            // Insert the uploaded image into the Summernote editor
            $('#summernote').summernote('insertImage', imagePath);
          }
        });
      }
    }
  });
});



//   $(document).ready(function() {
//   $('#summernote').summernote({
//     toolbar: [
//       // Specify your toolbar options here
//     ],
//     callbacks: {
//       onImageUpload: function(files) {
//         uploadImage(files[0]); // Assuming only one file is selected
//       }
//     }
//   });
  
//   function uploadImage(file) {
//     var formData = new FormData();
//     formData.append('image', file);
    
//     $.ajax({
//       url: 'upload.php', // Replace with your server-side script URL
//       method: 'POST',
//       data: formData,
//       processData: false,
//       contentType: false,
//       success: function(response) {
//         // Handle the uploaded image response
//         $('#summernote').summernote('insertImage', response);
//       },
//       error: function() {
//         alert('Image upload failed');
//       }
//     });
//   }
// });
</script>

</body>
</html>