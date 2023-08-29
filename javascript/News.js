const itemsPerPage = 4; // จำนวนบล็อกที่แสดงในแต่ละหน้า
  let currentPage = 1; // หน้าปัจจุบัน

  function showPage(page) {
    const newsBlocks = document.getElementsByClassName('news');
    const totalPages = Math.ceil(newsBlocks.length / itemsPerPage);

    // ซ่อนบล็อกทั้งหมด
    for (let i = 0; i < newsBlocks.length; i++) {
      newsBlocks[i].style.display = 'none';
    }

    // คำนวณบล็อกที่จะแสดงในหน้าปัจจุบัน
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const blocksToShow = Array.from(newsBlocks).slice(startIndex, endIndex);

    // แสดงบล็อกที่ต้องการในหน้าปัจจุบัน
    for (let i = 0; i < blocksToShow.length; i++) {
      blocksToShow[i].style.display = 'block';
    }

    // อัพเดตหมายเลขหน้า
    const pageNumbers = document.getElementsByClassName('page-number');
    for (let i = 0; i < pageNumbers.length; i++) {
      pageNumbers[i].classList.remove('active');
    }
    pageNumbers[page - 1].classList.add('active');
  }

  function goToPage(page) {
    const newsBlocks = document.getElementsByClassName('news');
    if (page < 1 || page > Math.ceil(newsBlocks.length / itemsPerPage)) {
      return; // หากหมายเลขหน้าไม่ถูกต้อง ไม่ทำอะไร
    }

    // ยกเลิกสีของตัวเลขหน้าปัจจุบัน
    const currentPageNumber = document.querySelector('.page-number.active');
    if (currentPageNumber) {
      currentPageNumber.classList.remove('active');
    }

    currentPage = page;
    showPage(currentPage);

    // เพิ่มสีเข้มให้กับตัวเลขหน้าที่เลือก
    const selectedPageNumber = document.querySelector(`.page-number:nth-child(${currentPage})`);
    if (selectedPageNumber) {
      selectedPageNumber.classList.add('active');
    }
  }

  function goToPrevPage() {
    if (currentPage > 1) {
      goToPage(currentPage - 1);
    }
  }

  function goToNextPage() {
    if (currentPage < Math.ceil(newsBlocks.length / itemsPerPage)) {
      goToPage(currentPage + 1);
    }
  }

  function createPagination() {
    const newsBlocks = document.getElementsByClassName('news');
    const totalPages = Math.ceil(newsBlocks.length / itemsPerPage);

    const paginationContainer = document.createElement('div');
    paginationContainer.className = 'pagination';

    // สร้างหมายเลขหน้า
    for (let i = 1; i <= totalPages; i++) {
      const pageNumber = document.createElement('span');
      pageNumber.className = 'page-number';
      pageNumber.textContent = i;
      pageNumber.addEventListener('click', () => goToPage(i));
      paginationContainer.appendChild(pageNumber);
    }

    document.getElementById('pageNumbers').appendChild(paginationContainer);
  }

  // แสดงหน้าแรกเมื่อโหลดหน้า
  document.addEventListener('DOMContentLoaded', () => {
    const newsBlocks = document.getElementsByClassName('news');
    const totalPages = Math.ceil(newsBlocks.length / itemsPerPage);

    showPage(currentPage);
    createPagination();
  });