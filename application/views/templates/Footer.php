<footer class="footer pt-3 bg-white shadow-sm mt-auto border-top">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 mb-lg-0 mb-3">
                <div class="text-center text-muted text-sm text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart text-danger"></i> by
                    <a href="https://www.instagram.com/theseaints.jpg/" class="font-weight-bold text-decoration-none text-dark" target="_blank">TheseaintDesign</a>
                    | Customized for <span class="fw-bold">Libra UI</span>.
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted pe-0">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    let books = [];
    let currentPage = 1;
    const booksPerPage = 8;

    const bookContainer = document.querySelector('#trending-books');
    const prevBtn = document.querySelector('#prevBtn');
    const nextBtn = document.querySelector('#nextBtn');
    const pageIndicator = document.querySelector('#pageIndicator');

    async function fetchBooks() {
        try {
            const response = await fetch('https://www.dbooks.org/api/recent');
            const data = await response.json();
            books = data.books;
            renderBooks();
            updatePaginationButtons();
        } catch (error) {
            console.error('Failed to fetch books:', error);
        }
    }

    async function fetchBookById(bookId) {
        try {
            const response = await fetch(`https://www.dbooks.org/api/book/${bookId}`);
            const data = await response.json();

            if (data.status !== "ok") {
                bookContainer.innerHTML = `<div class="alert alert-danger">Data buku tidak ditemukan.</div>`;
                return;
            }

            renderBookDetail(data);
        } catch (error) {
            console.error('Failed to fetch book by ID:', error);
            bookContainer.innerHTML = `<div class="alert alert-danger">Gagal mengambil data buku.</div>`;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const path = window.location.pathname;
        const match = path.match(/bacaonline\/(\d+)/);

        if (match) {
            const bookId = match[1];
            fetchBookById(bookId);
        } else {
            bookContainer.innerHTML = '<div class="alert alert-warning">ID buku tidak ditemukan di URL.</div>';
        }
    });

    function renderBooks() {
        bookContainer.innerHTML = ''; // Clear previous content
        const start = (currentPage - 1) * booksPerPage;
        const end = start + booksPerPage;
        const currentBooks = books.slice(start, end);

        currentBooks.forEach(book => {
            const card = document.createElement('div');
            card.className = 'col-md-3 mb-4';
            card.innerHTML = `
      <a href="http://localhost/webperpus/Libra/bacaonline/${book.id}">
        <div class="card h-100">
          <img src="${book.image}" class="card-img-top" alt="${book.title}">
          <div class="card-body">
            <h5 class="card-title">${book.title}</h5>
            <p class="card-text">${book.subtitle || 'No description available.'}</p>
          </div>
        </div>
        </a>
      `;
            bookContainer.appendChild(card);
        });

        pageIndicator.textContent = `Page ${currentPage}`;
    }

    function renderBookDetail(book) {
        const pdfUrl = encodeURIComponent(book.download); // URL download PDF-nya

        bookContainer.innerHTML = `
    <div class="col-12">
      <h2 class="mb-4">${book.title}</h2>
      <h5 class="text-muted mb-3">${book.subtitle || ''}</h5>
      <p><strong>Author:</strong> ${book.authors}</p>
      <p><strong>Publisher:</strong> ${book.publisher}</p>
      <p><strong>Year:</strong> ${book.year}</p>
      <p><strong>Pages:</strong> ${book.pages}</p>
      <p><strong>Language:</strong> ${book.language || 'N/A'}</p>

      <div class="mt-4">
        <iframe src="https://docs.google.com/gview?url=${pdfUrl}&embedded=true" width="100%" height="800px" frameborder="0"></iframe>
      </div>

      <div class="mt-3">
        <a href="${book.download}" class="btn btn-primary" target="_blank">Download PDF</a>
      </div>
    </div>
  `;
    }



    function updatePaginationButtons() {
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage * booksPerPage >= books.length;
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderBooks();
            updatePaginationButtons();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentPage * booksPerPage < books.length) {
            currentPage++;
            renderBooks();
            updatePaginationButtons();
        }
    });

    document.addEventListener('DOMContentLoaded', fetchBooks);
</script>
