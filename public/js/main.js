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
    document.addEventListener('DOMContentLoaded', function() {
        const addDayBtn = document.getElementById('add-day-btn');
        const daysContainer = document.getElementById('days-container');
        let dayCounter = 1;

        // Hàm xử lý việc xóa một ngày
        function handleRemoveDay(event) {
            const daySection = event.target.closest('.day-section');
            
            if (daySection && daysContainer.children.length > 1) { 
                daySection.remove();
                updateDayNumbers(); // Cập nhật lại số thứ tự
            } else if (daysContainer.children.length === 1) {
                alert("Không thể xóa ngày cuối cùng!");
            }
        }
        
        // Hàm để gán sự kiện click cho các nút xóa
        function addRemoveListeners() {
            daysContainer.querySelectorAll('.remove-day-btn').forEach(button => {
                button.removeEventListener('click', handleRemoveDay); 
                button.addEventListener('click', handleRemoveDay);
            });
        }
        
        // Hàm cập nhật lại số thứ tự sau khi xóa/thêm
        function updateDayNumbers() {
            const daySections = daysContainer.querySelectorAll('.day-section');
            dayCounter = 0; 
            
            daySections.forEach((section, index) => {
                const newDayNum = index + 1;
                dayCounter = newDayNum;
                
                // Cập nhật tiêu đề và thuộc tính input với Bootstrap classes
                section.querySelector('h5').textContent = `🗓️ Ngày thứ ${newDayNum}`;
                
                section.querySelector(`[name^="activity"]`).name = `activity-${newDayNum}`;
                section.querySelector(`[name^="activity"]`).id = `activity-${newDayNum}`;
section.querySelector(`[name^="location"]`).name = `location-${newDayNum}`;
                section.querySelector(`[name^="location"]`).id = `location-${newDayNum}`;
                
                // Cập nhật nhãn (label)
                section.querySelector(`label[for^="activity"]`).setAttribute('for', `activity-${newDayNum}`);
                section.querySelector(`label[for^="location"]`).setAttribute('for', `location-${newDayNum}`);
                
                // Hiển thị/Ẩn nút xóa
                const removeBtn = section.querySelector('.remove-day-btn');
                if (removeBtn) {
                     removeBtn.style.display = (newDayNum > 1) ? 'inline-block' : 'none';
                }
            });
        }


        // Logic khi nhấn "+ Thêm ngày mới"
        addDayBtn.addEventListener('click', function() {
            dayCounter++;
            
            // HTML mới sử dụng class Bootstrap
            const newDayHTML = `
                <div class="day-section border p-3 mb-3 rounded" data-day="${dayCounter}">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="text-primary mb-0">🗓️ Ngày thứ ${dayCounter}</h5>
                        <button type="button" class="btn btn-sm btn-danger remove-day-btn" data-day-index="${dayCounter}">
                            <i class="bi bi-trash"></i> - Xóa Ngày
                        </button>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="activity-${dayCounter}" class="form-label">Hoạt động</label>
                            <input type="text" class="form-control" id="activity-${dayCounter}" name="activity-${dayCounter}" placeholder="Ví dụ: Tham quan Vịnh Hạ Long">
                        </div>
                        <div class="col-md-6">
                            <label for="location-${dayCounter}" class="form-label">Địa điểm</label>
                            <input type="text" class="form-control" id="location-${dayCounter}" name="location-${dayCounter}" placeholder="Nhập địa điểm">
                        </div>
                    </div>
                </div>
            `;

            daysContainer.insertAdjacentHTML('beforeend', newDayHTML);
            
            addRemoveListeners(); 
            updateDayNumbers();

            daysContainer.lastElementChild.scrollIntoView({ behavior: 'smooth' });
        });
        
        // Khởi tạo ban đầu
        addRemoveListeners();
        updateDayNumbers(); 
    });


