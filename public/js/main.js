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
    const suggestionItems = Array.from(suggestionsBox.querySelectorAll('a'));

    /**
     * @param {string} keyword 
     */
    function filterSuggestions(keyword) {
        let anyVisible = false;

        suggestionItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(keyword.toLowerCase())) {
                item.style.display = 'flex';
                anyVisible = true;
            } else {
                item.style.display = 'none'; 
            }
        });

        suggestionsBox.style.display = anyVisible ? 'block' : 'none';
    }

    searchInput.addEventListener('input', () => {
        filterSuggestions(searchInput.value);
    });

    searchBtn.addEventListener('click', () => {
        filterSuggestions(searchInput.value);
        
    });

    searchInput.addEventListener('focus', () => {
        suggestionsBox.style.display = 'block';
    });

    document.getElementById('closeSuggestions').addEventListener('click', () => {
        suggestionsBox.style.display = 'none';
    });
});
    document.addEventListener('DOMContentLoaded', function() {
        const addDayBtn = document.getElementById('add-day-btn');
        const daysContainer = document.getElementById('days-container');
        let dayCounter = 1;

        function handleRemoveDay(event) {
            const daySection = event.target.closest('.day-section');
            
            if (daySection && daysContainer.children.length > 1) { 
                daySection.remove();
                updateDayNumbers(); 
            } else if (daysContainer.children.length === 1) {
                alert("Không thể xóa ngày cuối cùng!");
            }
        }
        
        function addRemoveListeners() {
            daysContainer.querySelectorAll('.remove-day-btn').forEach(button => {
                button.removeEventListener('click', handleRemoveDay); 
                button.addEventListener('click', handleRemoveDay);
            });
        }
        
        function updateDayNumbers() {
            const daySections = daysContainer.querySelectorAll('.day-section');
            dayCounter = 0; 
            
            daySections.forEach((section, index) => {
                const newDayNum = index + 1;
                dayCounter = newDayNum;
                
                section.querySelector('h5').textContent = `🗓️ Ngày thứ ${newDayNum}`;
                
                section.querySelector(`[name^="activity"]`).name = `activity-${newDayNum}`;
                section.querySelector(`[name^="activity"]`).id = `activity-${newDayNum}`;
section.querySelector(`[name^="location"]`).name = `location-${newDayNum}`;
                section.querySelector(`[name^="location"]`).id = `location-${newDayNum}`;
                
                section.querySelector(`label[for^="activity"]`).setAttribute('for', `activity-${newDayNum}`);
                section.querySelector(`label[for^="location"]`).setAttribute('for', `location-${newDayNum}`);
                
                const removeBtn = section.querySelector('.remove-day-btn');
                if (removeBtn) {
                     removeBtn.style.display = (newDayNum > 1) ? 'inline-block' : 'none';
                }
            });
        }


        addDayBtn.addEventListener("click", function (e) {
    e.preventDefault();
    const dayIndex = dayCounter;
    dayCounter++;

    const newDayHTML = `
                <div class="day-section border p-3 mb-3 rounded" data-day="${dayIndex}">
                <input type="hidden" name="schedule[${dayIndex}][ngay_thu]" value="${dayIndex}"> 
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="text-primary mb-0">🗓️ Ngày thứ ${dayCounter}</h5>
                        <button type="button" class="btn btn-sm btn-danger remove-day-btn" data-day-index="${dayCounter}">
                            <i class="bi bi-trash"></i> - Xóa Ngày
                        </button>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="activity-${dayIndex}" class="form-label">Hoạt động</label>
                    <input type="text" class="form-control" id="activity-${dayIndex}" name="schedule[${dayIndex}][hoat_dong]" placeholder="Ví dụ: Tham quan Vịnh Hạ Long">
                        </div>
                        <div class="col-md-6">
                            <label for="location-${dayIndex}" class="form-label">Địa điểm</label>
                    <input type="text" class="form-control" id="location-${dayIndex}" name="schedule[${dayIndex}][dia_diem]" placeholder="Nhập địa điểm">
                        </div>
                        <div class="col-md-6">
                          <label for="anh-${dayIndex}" class="form-label">Ảnh hoạt động</label>
                          <div class="input-group">
                            <input type="file" id="anh-${dayIndex}" name="file_anh_ngay[]" class="form-control file-input-day" data-day-index="${dayIndex}"> 
                          </div>
                            <img id="preview-${dayCounter}" src="" alt="Xem trước ảnh" style="margin-top:10px; max-width:200px; display:none;">
                        </div>
                    </div>
                </div>
            `;

    daysContainer.insertAdjacentHTML("beforeend", newDayHTML);

    addRemoveListeners();
    updateDayNumbers();
    setupNewFileInputListeners(dayCounter);

    daysContainer.lastElementChild.scrollIntoView({ behavior: "smooth" });
  });
        
        addRemoveListeners();
        updateDayNumbers(); 
    });


