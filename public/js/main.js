    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('mainSearchInput');
        const suggestionsBox = document.getElementById('searchSuggestions');
        const wrapper = document.querySelector('.search-popover-wrapper');
        const closeButton = document.getElementById('closeSuggestions');

        searchInput.addEventListener('focus', function() {
            suggestionsBox.style.display = 'block';
        });

        closeButton.addEventListener('click', function() {
            suggestionsBox.style.display = 'none';
        });

        document.addEventListener('click', function(event) {
            const isClickInsideWrapper = wrapper.contains(event.target);
            if (!isClickInsideWrapper) {
                suggestionsBox.style.display = 'none';
            }
        });

        suggestionsBox.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('mainSearchInput');
    const suggestionsBox = document.getElementById('searchSuggestions');
    const searchBtn = document.querySelector('.search-bar-custom button');
    // Lấy tất cả các thẻ <a> trong hộp gợi ý để lọc
    const suggestionItems = Array.from(suggestionsBox.querySelectorAll('a'));

    /**
     * Hàm này thực hiện lọc các mục gợi ý dựa trên từ khóa nhập vào.
     * Lưu ý: Hàm này chỉ lọc các gợi ý CÓ SẴN trong HTML, không thực hiện tìm kiếm server-side.
     * @param {string} keyword - Từ khóa tìm kiếm.
     */
    function filterSuggestions(keyword) {
        let anyVisible = false;

        suggestionItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            // Kiểm tra xem nội dung của gợi ý có chứa từ khóa (không phân biệt hoa/thường) không
            if (text.includes(keyword.toLowerCase())) {
                item.style.display = 'flex'; // Hiển thị gợi ý
                anyVisible = true;
            } else {
                item.style.display = 'none'; // Ẩn gợi ý
            }
        });

        // Hiển thị hoặc ẩn toàn bộ hộp gợi ý tùy thuộc vào việc có mục nào được hiển thị hay không
        suggestionsBox.style.display = anyVisible ? 'block' : 'none';
    }

    // 1. Lắng nghe sự kiện 'input' (khi người dùng gõ chữ)
    searchInput.addEventListener('input', () => {
        filterSuggestions(searchInput.value);
    });

    // 2. Lắng nghe sự kiện 'click' trên nút "Tìm kiếm"
    searchBtn.addEventListener('click', () => {
        // Thực hiện lọc gợi ý khi nút tìm kiếm được nhấn
        filterSuggestions(searchInput.value);
        
        // **LƯU Ý QUAN TRỌNG:** // Nếu bạn muốn thực hiện tìm kiếm thực tế (chuyển trang hoặc gửi request đến server), 
        // bạn cần bổ sung logic tại đây, ví dụ:
        // window.location.href = `?action=search&keyword=${searchInput.value}`;
    });

    // 3. Hiển thị suggestions khi input được focus
    searchInput.addEventListener('focus', () => {
        // Luôn hiển thị gợi ý khi người dùng click vào ô tìm kiếm
        suggestionsBox.style.display = 'block';
    });

    // 4. Đóng suggestions khi click nút "Đóng"
    document.getElementById('closeSuggestions').addEventListener('click', () => {
        suggestionsBox.style.display = 'none';
    });
});


