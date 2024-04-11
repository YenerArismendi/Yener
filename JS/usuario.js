
       document.getElementById('image-input').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function(event) {
        var imageUrl = event.target.result;
        document.getElementById('current-image').src = imageUrl;
    };

    reader.readAsDataURL(file);
});

  