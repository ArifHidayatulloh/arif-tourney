// form
function previewImage(event) {
    let fileInput = event.target;
    let reviewImage = document.getElementById('review')

    if(fileInput.files && fileInput.files[0]){
        let reader = new FileReader();

        reader.onload = function(e){
            reviewImage.src = e.target.result;
        }

        reader.readAsDataURL(fileInput.files[0]);
    }
}

document.getElementById('inputFile').addEventListener('change',previewImage);


