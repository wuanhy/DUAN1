document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("mainSearchInput");
  const suggestionsBox = document.getElementById("searchSuggestions");
  const wrapper = document.querySelector(".search-popover-wrapper");
  const closeButton = document.getElementById("closeSuggestions");

  searchInput.addEventListener("focus", function () {
    suggestionsBox.style.display = "block";
  });

  closeButton.addEventListener("click", function () {
    suggestionsBox.style.display = "none";
  });

  document.addEventListener("click", function (event) {
    const isClickInsideWrapper = wrapper.contains(event.target);
    if (!isClickInsideWrapper) {
      suggestionsBox.style.display = "none";
    }
  });

  suggestionsBox.addEventListener("click", function (event) {
    event.stopPropagation();
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("mainSearchInput");
  const suggestionsBox = document.getElementById("searchSuggestions");
  const searchBtn = document.querySelector(".search-bar-custom button");
  const suggestionItems = Array.from(suggestionsBox.querySelectorAll("a"));

  /**
   * @param {string} keyword
   */
  function filterSuggestions(keyword) {
    let anyVisible = false;

    suggestionItems.forEach((item) => {
      const text = item.textContent.toLowerCase();
      if (text.includes(keyword.toLowerCase())) {
        item.style.display = "flex";
        anyVisible = true;
      } else {
        item.style.display = "none";
      }
    });

    suggestionsBox.style.display = anyVisible ? "block" : "none";
  }

  searchInput.addEventListener("input", () => {
    filterSuggestions(searchInput.value);
  });

  searchBtn.addEventListener("click", () => {
    filterSuggestions(searchInput.value);
  });

  searchInput.addEventListener("focus", () => {
    suggestionsBox.style.display = "block";
  });

  document.getElementById("closeSuggestions").addEventListener("click", () => {
    suggestionsBox.style.display = "none";
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const addDayBtn = document.getElementById("add-day-btn");
  const daysContainer = document.getElementById("days-container");


  function handleRemoveDay(event) {
    const daySection = event.target.closest(".day-section");
    const ltrIdInput = daySection.querySelector('input[name$="[ltr_id]"]');
    if (ltrIdInput && ltrIdInput.value) {
      alert("Không thể xóa");
      return;
    }

    if (daySection && daysContainer.children.length > 1) {
      daySection.remove();
      updateDayNumbers();
    } else if (
      daysContainer.children.length === 1 &&
      daySection.querySelector('input[name$="[ltr_id]"]') == null
    ) {
      daySection.remove();
      dayCounter = 0;
    } else if (daysContainer.children.length === 1 && ltrIdInput) {
      alert("Không thể xóa");
    }
  }

  function addRemoveListeners() {
    daysContainer.querySelectorAll(".remove-day-btn").forEach((button) => {
      button.removeEventListener("click", handleRemoveDay);
      button.addEventListener("click", handleRemoveDay);
    });
  }

  function updateDayNumbers() {
    const daySections = daysContainer.querySelectorAll(".day-section");
    if (daySections.length > 0) {
      let maxIndex = 0;
      daySections.forEach((section) => {
        const dayIndex = parseInt(section.getAttribute("data-day"));
        if (dayIndex > maxIndex) {
          maxIndex = dayIndex;
        }
      });
      dayCounter = maxIndex + 1;
    } else {
      dayCounter = 0;
    }
  }

  function setupNewFileInputListeners(index) {
    const fileInput = document.querySelector(
      `.file-input-day[data-day-index="${index}"]:not([data-listener-added])`
    );
    if (fileInput) {
      fileInput.setAttribute("data-listener-added", "true");
      fileInput.addEventListener("change", function (event) {
        const preview = document.getElementById(`preview-${index}`);
        if (event.target.files && event.target.files[0]) {
          const reader = new FileReader();
          reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = "block";
          };
          reader.readAsDataURL(event.target.files[0]);
        } else {
          preview.style.display = "none";
          preview.src = "";
        }
      });
    }
  }
  addDayBtn.addEventListener("click", function (e) {
    e.preventDefault();

    const currentDays = daysContainer.querySelectorAll(".day-section").length;
    const nextDayNumber = currentDays + 1;

    const newDayHTML = `
                <div class="day-section border p-3 mb-3 rounded" data-day="${nextDayNumber}">
    <input type="hidden" name="schedule[${nextDayNumber}][ngay_thu]" value="${nextDayNumber}"> 
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="text-primary mb-0">🗓️ Ngày thứ ${nextDayNumber}</h5>
        <button type="button" class="btn btn-sm btn-danger remove-day-btn" data-day-index="${nextDayNumber}">
            <i class="bi bi-trash"></i> - Xóa Ngày
        </button>
    </div>
    
    <div class="row g-3">
        <div class="col-md-6">
            <label for="hoat_dong_${nextDayNumber}" class="form-label">Hoạt động</label>
            <div class="input-group">
                <input type="text" class="form-control" id="hoat_dong_${nextDayNumber}" 
                    name="schedule[${nextDayNumber}][hoat_dong]" 
                    placeholder="Ví dụ: Tham quan Lăng Bác">
            </div>
        </div>

        <div class="col-md-6">
            <label for="dia_diem_${nextDayNumber}" class="form-label">Địa điểm</label>
            <div class="input-group">
                <input type="text" class="form-control" id="dia_diem_${nextDayNumber}" 
                    name="schedule[${nextDayNumber}][dia_diem]" 
                    placeholder="Nhập địa điểm">
            </div>
        </div>

        <div class="col-md-6">
            <label for="anh_${nextDayNumber}" class="form-label">Ảnh hoạt động</label>
            <div class="input-group">
                <input type="file" id="anh_${nextDayNumber}" 
                    name="file_anh_ngay[${nextDayNumber}]" 
                    class="form-control file-input-day" 
                    data-day-index="${nextDayNumber}">
            </div>

            <img id="preview-${nextDayNumber}" src="" alt="Xem trước ảnh"
                style="margin-top:10px; max-width:200px; display:none;">
        </div>
    </div>
</div>

          `;

    daysContainer.insertAdjacentHTML("beforeend", newDayHTML);

    addRemoveListeners();

    setupNewFileInputListeners(nextDayNumber);

    daysContainer.lastElementChild.scrollIntoView({ behavior: "smooth" });
  });
  daysContainer.querySelectorAll(".day-section").forEach((section, index) => {
    const dataDayIndex = parseInt(section.getAttribute("data-day"));
    setupNewFileInputListeners(dataDayIndex);
  });

  addRemoveListeners();
});
