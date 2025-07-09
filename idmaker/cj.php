<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ID Card Editor</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.0/fabric.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    #canvas-container {
      border: 2px solid #000;
      display: inline-block;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body class="p-4">

  <h4 class="mb-3">🪪 ID Card Editor</h4>

  <div id="canvas-container">
    <canvas id="canvas" width="649" height="1018"></canvas>
  </div>

  <div class="mb-3">
    <label class="form-label">Upload Photo</label>
    <input type="file" id="upload-img" class="form-control mb-2">

    <label class="form-label">Add Text</label>
    <input type="text" id="text-input" class="form-control mb-2" placeholder="Enter text">

    <div class="d-flex gap-2">
      <button class="btn btn-primary" id="add-text">Add Text</button>
      <button class="btn btn-success" id="save-image">Export as Image</button>
    </div>
  </div>

  <script>
    const canvas = new fabric.Canvas('canvas');

    // Upload Image
    document.getElementById('upload-img').addEventListener('change', function (e) {
      const reader = new FileReader();
      reader.onload = function (f) {
        fabric.Image.fromURL(f.target.result, function (img) {
          img.set({
            left: 50,
            top: 50,
            scaleX: 0.3,
            scaleY: 0.3,
            hasRotatingPoint: true,
            cornerColor: 'blue',
          });
          canvas.add(img).setActiveObject(img);
        });
      };
      reader.readAsDataURL(e.target.files[0]);
    });

    // Add Text
    document.getElementById('add-text').addEventListener('click', function () {
      const inputText = document.getElementById('text-input').value;
      const text = new fabric.Textbox(inputText, {
        left: 100,
        top: 100,
        fontSize: 24,
        fontFamily: 'Arial',
        fill: '#000',
        editable: true,
      });
      canvas.add(text).setActiveObject(text);
    });

    // Export as Image
    document.getElementById('save-image').addEventListener('click', function () {
      const dataURL = canvas.toDataURL({ format: 'png', quality: 1 });
      const link = document.createElement('a');
      link.download = 'id_card.png';
      link.href = dataURL;
      link.click();
    });
  </script>
</body>
</html>
