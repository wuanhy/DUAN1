-- TOUR MANAGEMENT DB 
DROP DATABASE IF EXISTS tour_db;
CREATE DATABASE tour_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE tour_db;

-- 1. Bảng User 
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,       
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,    
    phone VARCHAR(20),                
    address VARCHAR(255),            
    role INT DEFAULT 0 COMMENT '0: HDV, 1: Admin' 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Danh mục tour
CREATE TABLE tb_danhmuc (
    dm_id TINYINT PRIMARY KEY AUTO_INCREMENT,
    ten_danhmuc NVARCHAR(50) NOT NULL COMMENT 'Trong nước, Quốc tế, Custom',
    mo_ta TEXT
);

-- 3. Tour
CREATE TABLE tb_tour (
    tour_id INT PRIMARY KEY AUTO_INCREMENT,
    ma_tour VARCHAR(20) UNIQUE NOT NULL,
    ten_tour NVARCHAR(200) NOT NULL,
    dm_id TINYINT NOT NULL,
    gia_co_ban DECIMAL(12,0),
    so_cho_toi_da SMALLINT,
    trang_thai ENUM('draft','publish','stop') DEFAULT 'draft',
    FOREIGN KEY (dm_id) REFERENCES tb_danhmuc(dm_id)
) COMMENT 'Thông tin tour';

-- 4. Lịch trình ngày
CREATE TABLE tb_lich_trinh (
    lt_id INT PRIMARY KEY AUTO_INCREMENT,
    tour_id INT NOT NULL,
    ngay_thu TINYINT,
    tieu_de NVARCHAR(200),
    noi_dung TEXT,
    FOREIGN KEY (tour_id) REFERENCES tb_tour(tour_id) ON DELETE CASCADE
);

-- 5. Hình ảnh tour
CREATE TABLE tb_hinh_anh (
    ha_id INT PRIMARY KEY AUTO_INCREMENT,
    tour_id INT NOT NULL,
    url VARCHAR(500),
    is_thumbnail BOOLEAN DEFAULT 0,
    FOREIGN KEY (tour_id) REFERENCES tb_tour(tour_id) ON DELETE CASCADE
);

-- 6. Giá tour theo mùa
CREATE TABLE tb_gia_tour (
    gia_id INT PRIMARY KEY AUTO_INCREMENT,
    tour_id INT NOT NULL,
    tu_ngay DATE,
    den_ngay DATE,
    gia_nguoilon DECIMAL(12,0),
    gia_treem DECIMAL(12,0),
    FOREIGN KEY (tour_id) REFERENCES tb_tour(tour_id)
);

-- 7. HDV
CREATE TABLE tb_hdv (
    hdv_id INT PRIMARY KEY AUTO_INCREMENT,
    ho_ten NVARCHAR(100) NOT NULL,
    ngay_sinh DATE,
    phone VARCHAR(15),
    email VARCHAR(100),
    ngon_ngu VARCHAR(100),
    kinh_nghiem YEAR,
    trang_thai ENUM('rảnh','bận','nghỉ') DEFAULT 'rảnh'
);

-- 8. Lịch khởi hành
CREATE TABLE tb_lich_khoihanh (
    lkh_id INT PRIMARY KEY AUTO_INCREMENT,
    tour_id INT NOT NULL,
    ngay_khoihanh DATE NOT NULL,
    gio_khoihanh TIME,
    diem_tap_trung NVARCHAR(200),
    so_cho_con_lai SMALLINT,
    trang_thai ENUM('open','full','done','cancel') DEFAULT 'open',
    FOREIGN KEY (tour_id) REFERENCES tb_tour(tour_id)
);

-- 9. Booking (Đã sửa FK trỏ về bảng user mới)
CREATE TABLE tb_booking (
    booking_id INT PRIMARY KEY AUTO_INCREMENT,
    ma_booking VARCHAR(20) UNIQUE NOT NULL,
    lkh_id INT NOT NULL,
    user_id INT, -- Liên kết với bảng user(id)
    ten_khach NVARCHAR(100),
    phone VARCHAR(15),
    email VARCHAR(100),
    so_khach INT,
    tong_tien DECIMAL(12,0),
    tien_coc DECIMAL(12,0),
    trang_thai ENUM('chờ','cọc','hoàn','hủy') DEFAULT 'chờ',
    ngay_dat DATETIME DEFAULT NOW(),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id),
    FOREIGN KEY (user_id) REFERENCES user(id) -- SỬA Ở ĐÂY
);

-- 10. Chi tiết khách đoàn
CREATE TABLE tb_khach_doan (
    kh_id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT NOT NULL,
    ho_ten NVARCHAR(100),
    gio_tinh ENUM('nam','nữ','khác'),
    nam_sinh YEAR,
    cmnd_cccd VARCHAR(20),
    FOREIGN KEY (booking_id) REFERENCES tb_booking(booking_id) ON DELETE CASCADE
);

-- 11. Ghi chú đặc biệt
CREATE TABLE tb_ghi_chu (
    gc_id INT PRIMARY KEY AUTO_INCREMENT,
    kh_id INT NOT NULL,
    loai ENUM('ăn chay','dị ứng','bệnh lý','khác'),
    noi_dung NVARCHAR(500),
    FOREIGN KEY (kh_id) REFERENCES tb_khach_doan(kh_id)
);

-- 12. Phân bổ HDV
CREATE TABLE tb_phanbo_hdv (
    pb_id INT PRIMARY KEY AUTO_INCREMENT,
    lkh_id INT NOT NULL,
    hdv_id INT NOT NULL,
    vai_tro ENUM('chính','phụ'),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id),
    FOREIGN KEY (hdv_id) REFERENCES tb_hdv(hdv_id),
    UNIQUE(lkh_id, hdv_id)
);

-- 13. Check-in
CREATE TABLE tb_checkin (
    ci_id INT PRIMARY KEY AUTO_INCREMENT,
    kh_id INT NOT NULL,
    lkh_id INT NOT NULL,
    thoi_gian DATETIME,
    trang_thai ENUM('có mặt','vắng','muộn'),
    FOREIGN KEY (kh_id) REFERENCES tb_khach_doan(kh_id),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id)
);

-- 14. Nhật ký tour (Đã sửa FK trỏ về bảng user mới)
CREATE TABLE tb_nhatky (
    nk_id INT PRIMARY KEY AUTO_INCREMENT,
    lkh_id INT NOT NULL,
    ngay DATE,
    nguoi_nhap INT, -- Liên kết với bảng user(id)
    noi_dung TEXT,
    hinh_anh VARCHAR(1000),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id),
    FOREIGN KEY (nguoi_nhap) REFERENCES user(id) -- SỬA Ở ĐÂY
);

-- 15. Nhà cung cấp
CREATE TABLE tb_nhacungcap (
    ncc_id INT PRIMARY KEY AUTO_INCREMENT,
    ten_ncc NVARCHAR(200),
    loai_dich_vu ENUM('khách sạn','xe','nhà hàng','vé'),
    phone VARCHAR(15),
    dia_chi NVARCHAR(500)
);

-- 16. Đặt dịch vụ
CREATE TABLE tb_dat_dichvu (
    dv_id INT PRIMARY KEY AUTO_INCREMENT,
    lkh_id INT NOT NULL,
    ncc_id INT NOT NULL,
    ngay_su_dung DATE,
    chi_phi DECIMAL(12,0),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id),
    FOREIGN KEY (ncc_id) REFERENCES tb_nhacungcap(ncc_id)
);

-- 17. Báo cáo doanh thu
CREATE TABLE tb_doanhthu (
    dt_id INT PRIMARY KEY AUTO_INCREMENT,
    lkh_id INT NOT NULL,
    doanh_thu DECIMAL(12,0),
    ngay_cap_nhat DATE,
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id)
);

-- 18. Địa điểm
CREATE TABLE tb_diemden (
    dd_id INT PRIMARY KEY AUTO_INCREMENT,
    ten_diemden NVARCHAR(150) NOT NULL,
    mo_ta TEXT,
    dia_chi NVARCHAR(255),
    tinh_thanh NVARCHAR(100),
    quoc_gia NVARCHAR(100) DEFAULT 'Việt Nam',
    toa_do VARCHAR(100) COMMENT 'lat,long',
    tour_id INT NOT NULL,
    FOREIGN KEY (tour_id) REFERENCES tb_tour(tour_id) ON DELETE CASCADE
);

-- 19. Phương tiện di chuyển
CREATE TABLE tb_phuongtien (
    pt_id INT PRIMARY KEY AUTO_INCREMENT,
    loai_pt ENUM('xe du lịch','tàu','máy bay','xe bus','khác') DEFAULT 'xe du lịch',
    bien_so VARCHAR(20),
    so_cho_ngoi SMALLINT,
    ten_tai_xe NVARCHAR(100),
    phone_tai_xe VARCHAR(15),
    chi_phi DECIMAL(12,0),
    trang_thai ENUM('rảnh','đang chạy','bảo trì') DEFAULT 'rảnh'
);

-- 20. Phân bổ phương tiện
CREATE TABLE tb_phanbo_pt (
    pbpt_id INT PRIMARY KEY AUTO_INCREMENT,
    lkh_id INT NOT NULL,
    pt_id INT NOT NULL,
    tu_ngay DATE,
    den_ngay DATE,
    ghi_chu NVARCHAR(200),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id) ON DELETE CASCADE,
    FOREIGN KEY (pt_id) REFERENCES tb_phuongtien(pt_id),
    UNIQUE(lkh_id, pt_id)
);

-- 21. Khách sạn
CREATE TABLE tb_khachsan (
    ks_id INT PRIMARY KEY AUTO_INCREMENT,
    ten_ks NVARCHAR(200) NOT NULL,
    hang_sao TINYINT CHECK (hang_sao BETWEEN 1 AND 5),
    dia_chi NVARCHAR(255),
    phone VARCHAR(15),
    gia_moi_dem DECIMAL(12,0),
    mo_ta TEXT
);

-- 22. Phân bổ khách sạn
CREATE TABLE tb_phanbo_ks (
    pbks_id INT PRIMARY KEY AUTO_INCREMENT,
    lkh_id INT NOT NULL,
    ks_id INT NOT NULL,
    so_dem SMALLINT DEFAULT 1,
    checkin DATE,
    checkout DATE,
    ghi_chu NVARCHAR(200),
    FOREIGN KEY (lkh_id) REFERENCES tb_lich_khoihanh(lkh_id) ON DELETE CASCADE,
    FOREIGN KEY (ks_id) REFERENCES tb_khachsan(ks_id),
    UNIQUE(lkh_id, ks_id)
);

-- Index tối ưu tìm kiếm
CREATE INDEX idx_tour_ma ON tb_tour(ma_tour);
CREATE INDEX idx_booking_trangthai ON tb_booking(trang_thai);
CREATE INDEX idx_lkh_ngay ON tb_lich_khoihanh(ngay_khoihanh);