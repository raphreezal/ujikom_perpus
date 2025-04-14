<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Baca Buku Online</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4.1.0/turn.min.css" />
  <style>
    body {
      background: #f3f3f3;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      padding: 20px;
    }

    #flipbook {
      width: 800px;
      height: 600px;
    }

    .page {
      background: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    canvas {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
  </style>
</head>
<body>

<div id="flipbook">
  <!-- Halaman-halaman akan dimasukkan di sini lewat JavaScript -->
</div>

<!-- PDF.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js"></script>

<!-- Turn.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4.1.0/turn.min.js"></script>

<script>
  const url = '<?= base_url('uploads/pdf/sample.pdf') ?>'; // Ganti dengan path file PDF

  const flipbook = document.getElementById('flipbook');
  const pdfjsLib = window['pdfjs-dist/build/pdf'];
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.worker.min.js';

  pdfjsLib.getDocument(url).promise.then(pdf => {
    const numPages = pdf.numPages;
    const loadPages = [];

    for (let pageNum = 1; pageNum <= numPages; pageNum++) {
      loadPages.push(pdf.getPage(pageNum).then(page => {
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        const viewport = page.getViewport({ scale: 1.5 });

        canvas.height = viewport.height;
        canvas.width = viewport.width;

        return page.render({ canvasContext: context, viewport }).promise.then(() => {
          const pageDiv = document.createElement('div');
          pageDiv.className = 'page';
          pageDiv.appendChild(canvas);
          flipbook.appendChild(pageDiv);
        });
      }));
    }

    Promise.all(loadPages).then(() => {
      $('#flipbook').turn({
        width: 800,
        height: 600,
        autoCenter: true,
        elevation: 50,
        gradients: true
      });
    });
  });
</script>

</body>
</html>
