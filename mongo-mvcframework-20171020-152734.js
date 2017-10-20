
/** product_type indexes **/
db.getCollection("product_type").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** sessions indexes **/
db.getCollection("sessions").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** users indexes **/
db.getCollection("users").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** product_type records **/
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a686614f1217dc007a35"),
  "ten": "THỜI TRANG NAM",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:32:22.0Z"),
  "updateAt": ISODate("2017-10-20T07:32:22.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a68f614f1217dc007a36"),
  "ten": "NHÀ CỬA & ĐỜI SỐNG",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:32:31.0Z"),
  "updateAt": ISODate("2017-10-20T07:32:31.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a697614f1217dc007a37"),
  "ten": "ĐỒNG HỒ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:32:39.0Z"),
  "updateAt": ISODate("2017-10-20T07:32:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6a0614f1217dc007a38"),
  "ten": "VOUCHER & DỊCH VỤ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:32:48.0Z"),
  "updateAt": ISODate("2017-10-20T07:32:48.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6aa614f1217dc007a39"),
  "ten": "THỜI TRANG NỮ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:32:58.0Z"),
  "updateAt": ISODate("2017-10-20T07:32:58.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6b4614f1217dc007a3a"),
  "ten": "MÁY TÍNH & LAPTOP",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:33:08.0Z"),
  "updateAt": ISODate("2017-10-20T07:33:08.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6bd614f1217dc007a3b"),
  "ten": "TÚI VÍ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:33:17.0Z"),
  "updateAt": ISODate("2017-10-20T07:33:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6c6614f1217dc007a3c"),
  "ten": "THỂ THAO & DU LỊCH",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:33:26.0Z"),
  "updateAt": ISODate("2017-10-20T07:33:26.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6cd614f1217dc007a3d"),
  "ten": "ĐỒ CHƠI",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:33:33.0Z"),
  "updateAt": ISODate("2017-10-20T07:33:33.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6d5614f1217dc007a3e"),
  "ten": "ĐIỆN THOẠI & PHỤ KIỆN",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:33:41.0Z"),
  "updateAt": ISODate("2017-10-20T07:33:41.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6dd614f1217dc007a3f"),
  "ten": "SỨC KHỎE & SẮC ĐẸP",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:33:49.0Z"),
  "updateAt": ISODate("2017-10-20T07:33:49.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6e9614f1217dc007a40"),
  "ten": "GIÀY DÉP NAM",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:01.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:01.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6f5614f1217dc007a41"),
  "ten": "Ô TÔ - XE MÁY - XE ĐẠP",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:13.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:13.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a6fe614f1217dc007a42"),
  "ten": "MẸ & BÉ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:22.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:22.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a706614f1217dc007a43"),
  "ten": "MÁY ẢNH - MÁY QUAY PHIM",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:30.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:30.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a70d614f1217dc007a44"),
  "ten": "PHỤ KIỆN THỜI TRANG",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:37.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:37.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a715614f1217dc007a45"),
  "ten": "BÁCH HOÁ ONLINE",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:45.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:45.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a71e614f1217dc007a46"),
  "ten": "THIẾT BỊ ĐIỆN TỬ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:34:54.0Z"),
  "updateAt": ISODate("2017-10-20T07:34:54.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a726614f1217dc007a47"),
  "ten": "GIÀY DÉP NỮ",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:35:02.0Z"),
  "updateAt": ISODate("2017-10-20T07:35:02.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a72f614f1217dc007a48"),
  "ten": "THIẾT BỊ ĐIỆN GIA DỤNG",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:35:11.0Z"),
  "updateAt": ISODate("2017-10-20T07:35:11.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a738614f1217dc007a49"),
  "ten": "NHÀ SÁCH ONLINE",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T07:35:20.0Z"),
  "updateAt": ISODate("2017-10-20T07:35:20.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a761614f1217dc007a4a"),
  "ten": "Áo thun",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:36:01.0Z"),
  "updateAt": ISODate("2017-10-20T07:36:01.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a76c614f1217dc007a4b"),
  "ten": "Áo sơ mi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:36:12.0Z"),
  "updateAt": ISODate("2017-10-20T07:36:12.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a776614f1217dc007a4c"),
  "ten": "Áo khoác & Áo vest",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:36:22.0Z"),
  "updateAt": ISODate("2017-10-20T07:36:22.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a77f614f1217dc007a4d"),
  "ten": "Áo nỉ/ Áo len",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:36:31.0Z"),
  "updateAt": ISODate("2017-10-20T07:36:31.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a789614f1217dc007a4e"),
  "ten": "Đồ bộ/ Đồ mặc nhà",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:36:41.0Z"),
  "updateAt": ISODate("2017-10-20T07:36:41.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a799614f1217dc007a4f"),
  "ten": "Đồ đôi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:36:57.0Z"),
  "updateAt": ISODate("2017-10-20T07:36:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a7a3614f1217dc007a50"),
  "ten": "Quần",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:37:07.0Z"),
  "updateAt": ISODate("2017-10-20T07:37:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a7ad614f1217dc007a51"),
  "ten": "Balo/ Túi/ Ví",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:37:17.0Z"),
  "updateAt": ISODate("2017-10-20T07:37:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a7b7614f1217dc007a52"),
  "ten": "Mắt kính",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:37:27.0Z"),
  "updateAt": ISODate("2017-10-20T07:37:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a7c4614f1217dc007a53"),
  "ten": "Phụ kiện nam",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a686614f1217dc007a35"
  ],
  "createAt": ISODate("2017-10-20T07:37:40.0Z"),
  "updateAt": ISODate("2017-10-20T07:37:40.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a7ed614f1217dc007a54"),
  "ten": "Dụng cụ & Thiết bị tiện ích",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:38:21.0Z"),
  "updateAt": ISODate("2017-10-20T07:38:21.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a97c614f1217dc007a56"),
  "ten": "Đồ dùng nhà bếp & Phòng ăn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:00.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:00.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a985614f1217dc007a57"),
  "ten": "Chăn, Ga, Gối & Nệm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:09.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:09.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a98c614f1217dc007a58"),
  "ten": "Tủ đựng & Hộp lưu trữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:16.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:16.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a995614f1217dc007a59"),
  "ten": "Trang trí nhà cửa",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:25.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:25.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a99e614f1217dc007a5a"),
  "ten": "Đồ dùng phòng tắm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:34.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:34.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9a5614f1217dc007a5b"),
  "ten": "Đồ nội thất",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:41.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:41.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9ad614f1217dc007a5c"),
  "ten": "Đèn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:45:49.0Z"),
  "updateAt": ISODate("2017-10-20T07:45:49.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9b8614f1217dc007a5d"),
  "ten": "Ngoài trời & Sân vườn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:46:00.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:00.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9c0614f1217dc007a5e"),
  "ten": "Dụng cụ cầm tay",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a68f614f1217dc007a36"
  ],
  "createAt": ISODate("2017-10-20T07:46:08.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:08.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9c8614f1217dc007a5f"),
  "ten": "Đồng hồ nam",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a697614f1217dc007a37"
  ],
  "createAt": ISODate("2017-10-20T07:46:16.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:16.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9d2614f1217dc007a60"),
  "ten": "Đồng hồ nữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a697614f1217dc007a37"
  ],
  "createAt": ISODate("2017-10-20T07:46:26.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:26.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9dc614f1217dc007a61"),
  "ten": "Đồng hồ trẻ em",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a697614f1217dc007a37"
  ],
  "createAt": ISODate("2017-10-20T07:46:36.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:36.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9e9614f1217dc007a62"),
  "ten": "Phụ Kiện Đồng Hồ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a697614f1217dc007a37"
  ],
  "createAt": ISODate("2017-10-20T07:46:49.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:49.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9f3614f1217dc007a63"),
  "ten": "Nhà hàng - Ăn uống",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6a0614f1217dc007a38"
  ],
  "createAt": ISODate("2017-10-20T07:46:59.0Z"),
  "updateAt": ISODate("2017-10-20T07:46:59.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9a9fd614f1217dc007a64"),
  "ten": "Du lịch - Khách sạn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6a0614f1217dc007a38"
  ],
  "createAt": ISODate("2017-10-20T07:47:09.0Z"),
  "updateAt": ISODate("2017-10-20T07:47:09.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa05614f1217dc007a65"),
  "ten": "Sức khỏe - Làm đẹp",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6a0614f1217dc007a38"
  ],
  "createAt": ISODate("2017-10-20T07:47:17.0Z"),
  "updateAt": ISODate("2017-10-20T07:47:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa10614f1217dc007a66"),
  "ten": "Sự kiện - Giải trí",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6a0614f1217dc007a38"
  ],
  "createAt": ISODate("2017-10-20T07:47:28.0Z"),
  "updateAt": ISODate("2017-10-20T07:47:28.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa23614f1217dc007a67"),
  "ten": "Khóa học",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6a0614f1217dc007a38"
  ],
  "createAt": ISODate("2017-10-20T07:47:47.0Z"),
  "updateAt": ISODate("2017-10-20T07:47:47.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa2d614f1217dc007a68"),
  "ten": "Nạp tiền tài khoản",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6a0614f1217dc007a38"
  ],
  "createAt": ISODate("2017-10-20T07:47:57.0Z"),
  "updateAt": ISODate("2017-10-20T07:47:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa37614f1217dc007a69"),
  "ten": "Áo",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:48:07.0Z"),
  "updateAt": ISODate("2017-10-20T07:48:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa44614f1217dc007a6a"),
  "ten": "Đầm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:48:20.0Z"),
  "updateAt": ISODate("2017-10-20T07:48:20.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa52614f1217dc007a6b"),
  "ten": "Chân váy",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:48:34.0Z"),
  "updateAt": ISODate("2017-10-20T07:48:34.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa5b614f1217dc007a6c"),
  "ten": "Áo khoác & Áo vest",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:48:43.0Z"),
  "updateAt": ISODate("2017-10-20T07:48:43.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa65614f1217dc007a6d"),
  "ten": "Quần",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:48:53.0Z"),
  "updateAt": ISODate("2017-10-20T07:48:53.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa6f614f1217dc007a6e"),
  "ten": "Set trang phục & Jumpsuit",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:49:03.0Z"),
  "updateAt": ISODate("2017-10-20T07:49:03.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa7a614f1217dc007a6f"),
  "ten": "Đồ đôi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:49:14.0Z"),
  "updateAt": ISODate("2017-10-20T07:49:14.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa83614f1217dc007a70"),
  "ten": "Đồ lót, Đồ ngủ & Đồ mặc nhà",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:49:23.0Z"),
  "updateAt": ISODate("2017-10-20T07:49:23.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa8d614f1217dc007a71"),
  "ten": "Đồ bơi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:49:33.0Z"),
  "updateAt": ISODate("2017-10-20T07:49:33.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aa97614f1217dc007a72"),
  "ten": "Trang phục thể thao",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:49:43.0Z"),
  "updateAt": ISODate("2017-10-20T07:49:43.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aaa5614f1217dc007a73"),
  "ten": "Phụ kiện may mặc",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:49:57.0Z"),
  "updateAt": ISODate("2017-10-20T07:49:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aab1614f1217dc007a74"),
  "ten": "Trang Phục Đông",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:50:09.0Z"),
  "updateAt": ISODate("2017-10-20T07:50:09.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aabc614f1217dc007a75"),
  "ten": "Thời trang trung niên",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6aa614f1217dc007a39"
  ],
  "createAt": ISODate("2017-10-20T07:50:20.0Z"),
  "updateAt": ISODate("2017-10-20T07:50:20.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aae9614f1217dc007a76"),
  "ten": "Laptop",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:51:05.0Z"),
  "updateAt": ISODate("2017-10-20T07:51:05.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aaf5614f1217dc007a77"),
  "ten": "Máy Tính Bàn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:51:17.0Z"),
  "updateAt": ISODate("2017-10-20T07:51:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab00614f1217dc007a78"),
  "ten": "Linh Kiện Máy Tính",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:51:28.0Z"),
  "updateAt": ISODate("2017-10-20T07:51:28.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab0d614f1217dc007a79"),
  "ten": "Chuột, Bàn Phím và Phụ kiện khác",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:51:41.0Z"),
  "updateAt": ISODate("2017-10-20T07:51:41.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab16614f1217dc007a7a"),
  "ten": "Thiết Bị Mạng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:51:50.0Z"),
  "updateAt": ISODate("2017-10-20T07:51:50.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab1e614f1217dc007a7b"),
  "ten": "USB & Ổ Cứng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:51:58.0Z"),
  "updateAt": ISODate("2017-10-20T07:51:58.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab26614f1217dc007a7c"),
  "ten": "Máy In, Máy Scan & Máy Chiếu",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:52:06.0Z"),
  "updateAt": ISODate("2017-10-20T07:52:06.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab33614f1217dc007a7d"),
  "ten": "Phần Mềm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6b4614f1217dc007a3a"
  ],
  "createAt": ISODate("2017-10-20T07:52:19.0Z"),
  "updateAt": ISODate("2017-10-20T07:52:19.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab3d614f1217dc007a7e"),
  "ten": "Túi đeo chéo nữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:52:29.0Z"),
  "updateAt": ISODate("2017-10-20T07:52:29.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab47614f1217dc007a7f"),
  "ten": "Túi xách nữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:52:39.0Z"),
  "updateAt": ISODate("2017-10-20T07:52:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab50614f1217dc007a80"),
  "ten": "Balo thời trang",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:52:48.0Z"),
  "updateAt": ISODate("2017-10-20T07:52:48.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ab5e614f1217dc007a81"),
  "ten": "Ví/Bóp nữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:53:02.0Z"),
  "updateAt": ISODate("2017-10-20T07:53:02.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aba8614f1217dc007a83"),
  "ten": "Cặp văn phòng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:54:16.0Z"),
  "updateAt": ISODate("2017-10-20T07:54:16.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abb3614f1217dc007a84"),
  "ten": "Túi đựng tiện ích",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:54:27.0Z"),
  "updateAt": ISODate("2017-10-20T07:54:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abba614f1217dc007a85"),
  "ten": "Túi vải/Túi tote",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:54:34.0Z"),
  "updateAt": ISODate("2017-10-20T07:54:34.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abc3614f1217dc007a86"),
  "ten": "Phụ kiện túi ví khác",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6bd614f1217dc007a3b"
  ],
  "createAt": ISODate("2017-10-20T07:54:43.0Z"),
  "updateAt": ISODate("2017-10-20T07:54:43.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abd3614f1217dc007a87"),
  "ten": "Thể thao trong nhà",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:54:59.0Z"),
  "updateAt": ISODate("2017-10-20T07:54:59.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abe3614f1217dc007a88"),
  "ten": "Thể thao ngoài trời",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:55:15.0Z"),
  "updateAt": ISODate("2017-10-20T07:55:15.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abf0614f1217dc007a89"),
  "ten": "Thể thao dưới nước",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:55:28.0Z"),
  "updateAt": ISODate("2017-10-20T07:55:28.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9abfb614f1217dc007a8a"),
  "ten": "Giày & Trang phục thể thao",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:55:39.0Z"),
  "updateAt": ISODate("2017-10-20T07:55:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ac0f614f1217dc007a8b"),
  "ten": "Đồ bảo hộ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:55:59.0Z"),
  "updateAt": ISODate("2017-10-20T07:55:59.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ac7e614f1217dc007a8c"),
  "ten": "Phụ kiện",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:57:50.0Z"),
  "updateAt": ISODate("2017-10-20T07:57:50.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ac8a614f1217dc007a8d"),
  "ten": "Vali/ Túi/ Balô",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:58:02.0Z"),
  "updateAt": ISODate("2017-10-20T07:58:02.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ac99614f1217dc007a8e"),
  "ten": "Khác",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6c6614f1217dc007a3c"
  ],
  "createAt": ISODate("2017-10-20T07:58:17.0Z"),
  "updateAt": ISODate("2017-10-20T07:58:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aca6614f1217dc007a8f"),
  "ten": "Đồ chơi cho trẻ sơ sinh & trẻ nhỏ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6cd614f1217dc007a3d"
  ],
  "createAt": ISODate("2017-10-20T07:58:30.0Z"),
  "updateAt": ISODate("2017-10-20T07:58:30.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9acaf614f1217dc007a90"),
  "ten": "Đồ chơi giáo dục",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6cd614f1217dc007a3d"
  ],
  "createAt": ISODate("2017-10-20T07:58:39.0Z"),
  "updateAt": ISODate("2017-10-20T07:58:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9acba614f1217dc007a91"),
  "ten": "Đồ chơi vận động & Ngoài trời",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6cd614f1217dc007a3d"
  ],
  "createAt": ISODate("2017-10-20T07:58:50.0Z"),
  "updateAt": ISODate("2017-10-20T07:58:50.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9acc1614f1217dc007a92"),
  "ten": "Búp bê & Đồ chơi nhồi bông",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6cd614f1217dc007a3d"
  ],
  "createAt": ISODate("2017-10-20T07:58:57.0Z"),
  "updateAt": ISODate("2017-10-20T07:58:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9accd614f1217dc007a93"),
  "ten": "Đồ chơi nhân vật & nhập vai",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6cd614f1217dc007a3d"
  ],
  "createAt": ISODate("2017-10-20T07:59:09.0Z"),
  "updateAt": ISODate("2017-10-20T07:59:09.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9acd9614f1217dc007a94"),
  "ten": "Đồ Chơi Giải Trí",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6cd614f1217dc007a3d"
  ],
  "createAt": ISODate("2017-10-20T07:59:21.0Z"),
  "updateAt": ISODate("2017-10-20T07:59:21.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ace5614f1217dc007a95"),
  "ten": "Điện thoại & Tablet",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T07:59:33.0Z"),
  "updateAt": ISODate("2017-10-20T07:59:33.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9acf0614f1217dc007a96"),
  "ten": "Pin sạc dự phòng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T07:59:44.0Z"),
  "updateAt": ISODate("2017-10-20T07:59:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9acfb614f1217dc007a97"),
  "ten": "Pin, Cáp & Bộ sạc",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T07:59:55.0Z"),
  "updateAt": ISODate("2017-10-20T07:59:55.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad07614f1217dc007a98"),
  "ten": "Vỏ, Bao & Ốp lưng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T08:00:07.0Z"),
  "updateAt": ISODate("2017-10-20T08:00:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad0f614f1217dc007a99"),
  "ten": "Miếng dán màn hình",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T08:00:15.0Z"),
  "updateAt": ISODate("2017-10-20T08:00:15.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad1c614f1217dc007a9a"),
  "ten": "Sim",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T08:00:28.0Z"),
  "updateAt": ISODate("2017-10-20T08:00:28.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad25614f1217dc007a9b"),
  "ten": "Giá đỡ & Kẹp",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T08:00:37.0Z"),
  "updateAt": ISODate("2017-10-20T08:00:37.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad2f614f1217dc007a9c"),
  "ten": "Gậy chụp hình",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6d5614f1217dc007a3e"
  ],
  "createAt": ISODate("2017-10-20T08:00:47.0Z"),
  "updateAt": ISODate("2017-10-20T08:00:47.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad48614f1217dc007a9d"),
  "ten": "Chăm sóc da",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:01:12.0Z"),
  "updateAt": ISODate("2017-10-20T08:01:12.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad57614f1217dc007a9e"),
  "ten": "Son & Chăm sóc môi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:01:27.0Z"),
  "updateAt": ISODate("2017-10-20T08:01:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad62614f1217dc007a9f"),
  "ten": "Trang điểm da",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:01:38.0Z"),
  "updateAt": ISODate("2017-10-20T08:01:38.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad6c614f1217dc007aa0"),
  "ten": "Trang điểm mắt",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:01:48.0Z"),
  "updateAt": ISODate("2017-10-20T08:01:48.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad7b614f1217dc007aa1"),
  "ten": "Mỹ phẩm nam",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:02:03.0Z"),
  "updateAt": ISODate("2017-10-20T08:02:03.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad88614f1217dc007aa2"),
  "ten": "Tắm & Chăm sóc cơ thể",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:02:16.0Z"),
  "updateAt": ISODate("2017-10-20T08:02:16.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad93614f1217dc007aa3"),
  "ten": "Chăm sóc tóc",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:02:27.0Z"),
  "updateAt": ISODate("2017-10-20T08:02:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ad9c614f1217dc007aa4"),
  "ten": "Chăm sóc răng miệng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:02:36.0Z"),
  "updateAt": ISODate("2017-10-20T08:02:36.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ada6614f1217dc007aa5"),
  "ten": "Chăm sóc móng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:02:46.0Z"),
  "updateAt": ISODate("2017-10-20T08:02:46.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9adaf614f1217dc007aa6"),
  "ten": "Máy massage & Thiết bị y tế",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:02:55.0Z"),
  "updateAt": ISODate("2017-10-20T08:02:55.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9adb6614f1217dc007aa7"),
  "ten": "Dụng cụ làm đẹp",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:03:02.0Z"),
  "updateAt": ISODate("2017-10-20T08:03:02.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9adc2614f1217dc007aa8"),
  "ten": "Vệ sinh phụ nữ & Hỗ trợ tình dục",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:03:14.0Z"),
  "updateAt": ISODate("2017-10-20T08:03:14.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9adce614f1217dc007aa9"),
  "ten": "Nước hoa",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:03:26.0Z"),
  "updateAt": ISODate("2017-10-20T08:03:26.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9add8614f1217dc007aaa"),
  "ten": "Vitamin & Thực phẩm chức năng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:03:36.0Z"),
  "updateAt": ISODate("2017-10-20T08:03:36.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ade6614f1217dc007aab"),
  "ten": "Hoá Mỹ Phẩm & Khác",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6dd614f1217dc007a3f"
  ],
  "createAt": ISODate("2017-10-20T08:03:50.0Z"),
  "updateAt": ISODate("2017-10-20T08:03:50.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9adf8614f1217dc007aac"),
  "ten": "Giày thể thao/ Sneakers",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:04:08.0Z"),
  "updateAt": ISODate("2017-10-20T08:04:08.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae01614f1217dc007aad"),
  "ten": "Giày lười",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:04:17.0Z"),
  "updateAt": ISODate("2017-10-20T08:04:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae0b614f1217dc007aae"),
  "ten": "Giày tây",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:04:27.0Z"),
  "updateAt": ISODate("2017-10-20T08:04:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae15614f1217dc007aaf"),
  "ten": "Xăng-đan",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:04:37.0Z"),
  "updateAt": ISODate("2017-10-20T08:04:37.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae38614f1217dc007ab0"),
  "ten": "Dép",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:05:12.0Z"),
  "updateAt": ISODate("2017-10-20T08:05:12.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae42614f1217dc007ab1"),
  "ten": "Giày dép Unisex",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:05:22.0Z"),
  "updateAt": ISODate("2017-10-20T08:05:22.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae4b614f1217dc007ab2"),
  "ten": "Phụ kiện giày dép",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6e9614f1217dc007a40"
  ],
  "createAt": ISODate("2017-10-20T08:05:31.0Z"),
  "updateAt": ISODate("2017-10-20T08:05:31.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae58614f1217dc007ab3"),
  "ten": "Chăm sóc, sửa chữa xe",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6f5614f1217dc007a41"
  ],
  "createAt": ISODate("2017-10-20T08:05:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:05:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae62614f1217dc007ab4"),
  "ten": "Phụ kiện, phụ tùng xe máy",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6f5614f1217dc007a41"
  ],
  "createAt": ISODate("2017-10-20T08:05:54.0Z"),
  "updateAt": ISODate("2017-10-20T08:05:54.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae6b614f1217dc007ab5"),
  "ten": "Phụ kiện, phụ tùng ô tô",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6f5614f1217dc007a41"
  ],
  "createAt": ISODate("2017-10-20T08:06:03.0Z"),
  "updateAt": ISODate("2017-10-20T08:06:03.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae74614f1217dc007ab6"),
  "ten": "Mô-tô, xe máy, xe đạp",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6f5614f1217dc007a41"
  ],
  "createAt": ISODate("2017-10-20T08:06:12.0Z"),
  "updateAt": ISODate("2017-10-20T08:06:12.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae87614f1217dc007ab7"),
  "ten": "Thiết bị tiện ích",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6f5614f1217dc007a41"
  ],
  "createAt": ISODate("2017-10-20T08:06:31.0Z"),
  "updateAt": ISODate("2017-10-20T08:06:31.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae94614f1217dc007ab8"),
  "ten": "Thời trang bé gái",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:06:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:06:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9ae9e614f1217dc007ab9"),
  "ten": "Thời trang bé trai",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:06:54.0Z"),
  "updateAt": ISODate("2017-10-20T08:06:54.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aea9614f1217dc007aba"),
  "ten": "Quần áo & Phụ kiện sơ sinh",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:07:05.0Z"),
  "updateAt": ISODate("2017-10-20T08:07:05.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aeb5614f1217dc007abb"),
  "ten": "Đồ dùng cho bé",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:07:17.0Z"),
  "updateAt": ISODate("2017-10-20T08:07:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aec2614f1217dc007abc"),
  "ten": "Tã & Bỉm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:07:30.0Z"),
  "updateAt": ISODate("2017-10-20T08:07:30.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aecb614f1217dc007abd"),
  "ten": "Sữa & Đồ ăn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:07:39.0Z"),
  "updateAt": ISODate("2017-10-20T08:07:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aed8614f1217dc007abe"),
  "ten": "Ghế, Nôi, Cũi, Xe đẩy & Địu",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:07:52.0Z"),
  "updateAt": ISODate("2017-10-20T08:07:52.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aee4614f1217dc007abf"),
  "ten": "Vitamin, Quần áo & Đồ dùng cho mẹ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a6fe614f1217dc007a42"
  ],
  "createAt": ISODate("2017-10-20T08:08:04.0Z"),
  "updateAt": ISODate("2017-10-20T08:08:04.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aef7614f1217dc007ac0"),
  "ten": "Máy ảnh du lịch & chụp lấy liền",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:08:23.0Z"),
  "updateAt": ISODate("2017-10-20T08:08:23.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af01614f1217dc007ac1"),
  "ten": "Thẻ nhớ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:08:33.0Z"),
  "updateAt": ISODate("2017-10-20T08:08:33.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af0b614f1217dc007ac2"),
  "ten": "Camera giám sát & Webcam",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:08:43.0Z"),
  "updateAt": ISODate("2017-10-20T08:08:43.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af13614f1217dc007ac3"),
  "ten": "Máy ảnh DSLR",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:08:51.0Z"),
  "updateAt": ISODate("2017-10-20T08:08:51.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af1d614f1217dc007ac4"),
  "ten": "Máy ảnh không gương lật",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:09:01.0Z"),
  "updateAt": ISODate("2017-10-20T08:09:01.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af27614f1217dc007ac5"),
  "ten": "Máy quay phim",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:09:11.0Z"),
  "updateAt": ISODate("2017-10-20T08:09:11.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af31614f1217dc007ac6"),
  "ten": "Phụ kiện máy ảnh",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a706614f1217dc007a43"
  ],
  "createAt": ISODate("2017-10-20T08:09:21.0Z"),
  "updateAt": ISODate("2017-10-20T08:09:21.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af3e614f1217dc007ac7"),
  "ten": "Trang sức",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:09:34.0Z"),
  "updateAt": ISODate("2017-10-20T08:09:34.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af48614f1217dc007ac8"),
  "ten": "Kính mắt",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:09:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:09:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af52614f1217dc007ac9"),
  "ten": "Nón & Dù",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:09:54.0Z"),
  "updateAt": ISODate("2017-10-20T08:09:54.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af67614f1217dc007aca"),
  "ten": "Khăn, Tất & Găng tay",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:10:15.0Z"),
  "updateAt": ISODate("2017-10-20T08:10:15.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af71614f1217dc007acb"),
  "ten": "Phụ kiện tóc",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:10:25.0Z"),
  "updateAt": ISODate("2017-10-20T08:10:25.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af7b614f1217dc007acc"),
  "ten": "Dây lưng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:10:35.0Z"),
  "updateAt": ISODate("2017-10-20T08:10:35.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af84614f1217dc007acd"),
  "ten": "Hình xăm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:10:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:10:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af8e614f1217dc007ace"),
  "ten": "Phụ kiện cưới",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:10:54.0Z"),
  "updateAt": ISODate("2017-10-20T08:10:54.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9af9b614f1217dc007acf"),
  "ten": "Khẩu trang",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a70d614f1217dc007a44"
  ],
  "createAt": ISODate("2017-10-20T08:11:07.0Z"),
  "updateAt": ISODate("2017-10-20T08:11:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9afa8614f1217dc007ad0"),
  "ten": "Ăn vặt & Bánh kẹo",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:11:20.0Z"),
  "updateAt": ISODate("2017-10-20T08:11:20.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9afb0614f1217dc007ad1"),
  "ten": "Đồ uống",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:11:28.0Z"),
  "updateAt": ISODate("2017-10-20T08:11:28.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9afbb614f1217dc007ad2"),
  "ten": "Đồ hộp & Đóng gói",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:11:39.0Z"),
  "updateAt": ISODate("2017-10-20T08:11:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9afc4614f1217dc007ad3"),
  "ten": "Nấu ăn & Làm bánh",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:11:48.0Z"),
  "updateAt": ISODate("2017-10-20T08:11:48.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9afe1614f1217dc007ad4"),
  "ten": "Đậu & Hạt",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:12:17.0Z"),
  "updateAt": ISODate("2017-10-20T08:12:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9afe9614f1217dc007ad5"),
  "ten": "Đặc sản Việt",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:12:25.0Z"),
  "updateAt": ISODate("2017-10-20T08:12:25.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9aff2614f1217dc007ad6"),
  "ten": "Đồ thú cưng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:12:34.0Z"),
  "updateAt": ISODate("2017-10-20T08:12:34.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9affc614f1217dc007ad7"),
  "ten": "Quà biếu",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a715614f1217dc007a45"
  ],
  "createAt": ISODate("2017-10-20T08:12:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:12:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b007614f1217dc007ad8"),
  "ten": "Thiết bị âm thanh",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:12:55.0Z"),
  "updateAt": ISODate("2017-10-20T08:12:55.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b010614f1217dc007ad9"),
  "ten": "Thiết bị đeo thông minh",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:13:04.0Z"),
  "updateAt": ISODate("2017-10-20T08:13:04.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b019614f1217dc007ada"),
  "ten": "Android Tivi Box",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:13:13.0Z"),
  "updateAt": ISODate("2017-10-20T08:13:13.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b024614f1217dc007adb"),
  "ten": "Tivi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:13:24.0Z"),
  "updateAt": ISODate("2017-10-20T08:13:24.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b02e614f1217dc007adc"),
  "ten": "Phụ kiện tivi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:13:34.0Z"),
  "updateAt": ISODate("2017-10-20T08:13:34.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b036614f1217dc007add"),
  "ten": "Tai Nghe",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:13:42.0Z"),
  "updateAt": ISODate("2017-10-20T08:13:42.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b046614f1217dc007ade"),
  "ten": "Phụ kiện & Thiết bị game",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a71e614f1217dc007a46"
  ],
  "createAt": ISODate("2017-10-20T08:13:58.0Z"),
  "updateAt": ISODate("2017-10-20T08:13:58.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b050614f1217dc007adf"),
  "ten": "Giày cao gót",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:14:08.0Z"),
  "updateAt": ISODate("2017-10-20T08:14:08.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b05a614f1217dc007ae0"),
  "ten": "Giày đế bằng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:14:18.0Z"),
  "updateAt": ISODate("2017-10-20T08:14:18.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b066614f1217dc007ae1"),
  "ten": "Sandal",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:14:30.0Z"),
  "updateAt": ISODate("2017-10-20T08:14:30.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b06f614f1217dc007ae2"),
  "ten": "Giày cao gót/ Giày đế xuồng",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:14:39.0Z"),
  "updateAt": ISODate("2017-10-20T08:14:39.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b078614f1217dc007ae3"),
  "ten": "Bốt",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:14:48.0Z"),
  "updateAt": ISODate("2017-10-20T08:14:48.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b081614f1217dc007ae4"),
  "ten": "Guốc/Dép nữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:14:57.0Z"),
  "updateAt": ISODate("2017-10-20T08:14:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b089614f1217dc007ae5"),
  "ten": "Giày sneaker và Giày thể thao",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:15:05.0Z"),
  "updateAt": ISODate("2017-10-20T08:15:05.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b097614f1217dc007ae6"),
  "ten": "Phụ kiện giày",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a726614f1217dc007a47"
  ],
  "createAt": ISODate("2017-10-20T08:15:19.0Z"),
  "updateAt": ISODate("2017-10-20T08:15:19.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0a4614f1217dc007ae7"),
  "ten": "Đồ gia dụng nhà bếp",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a72f614f1217dc007a48"
  ],
  "createAt": ISODate("2017-10-20T08:15:32.0Z"),
  "updateAt": ISODate("2017-10-20T08:15:32.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0ad614f1217dc007ae8"),
  "ten": "Quạt & Máy nóng lạnh",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a72f614f1217dc007a48"
  ],
  "createAt": ISODate("2017-10-20T08:15:41.0Z"),
  "updateAt": ISODate("2017-10-20T08:15:41.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0c2614f1217dc007ae9"),
  "ten": "Thiết bị chăm sóc quần áo",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a72f614f1217dc007a48"
  ],
  "createAt": ISODate("2017-10-20T08:16:02.0Z"),
  "updateAt": ISODate("2017-10-20T08:16:02.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0d1614f1217dc007aea"),
  "ten": "Máy hút bụi & Thiết bị làm sạch",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a72f614f1217dc007a48"
  ],
  "createAt": ISODate("2017-10-20T08:16:17.0Z"),
  "updateAt": ISODate("2017-10-20T08:16:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0db614f1217dc007aeb"),
  "ten": "Đồ gia dụng lớn",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a72f614f1217dc007a48"
  ],
  "createAt": ISODate("2017-10-20T08:16:27.0Z"),
  "updateAt": ISODate("2017-10-20T08:16:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0e4614f1217dc007aec"),
  "ten": "Khác",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a72f614f1217dc007a48"
  ],
  "createAt": ISODate("2017-10-20T08:16:36.0Z"),
  "updateAt": ISODate("2017-10-20T08:16:36.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0f0614f1217dc007aed"),
  "ten": "Văn phòng phẩm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:16:48.0Z"),
  "updateAt": ISODate("2017-10-20T08:16:48.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b0f9614f1217dc007aee"),
  "ten": "Bộ bài, Cờ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:16:57.0Z"),
  "updateAt": ISODate("2017-10-20T08:16:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b103614f1217dc007aef"),
  "ten": "Nhạc cụ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:17:07.0Z"),
  "updateAt": ISODate("2017-10-20T08:17:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b117614f1217dc007af0"),
  "ten": "Quà lưu niệm",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:17:27.0Z"),
  "updateAt": ISODate("2017-10-20T08:17:27.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b11f614f1217dc007af1"),
  "ten": "Truyện Thiếu nhi",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:17:35.0Z"),
  "updateAt": ISODate("2017-10-20T08:17:35.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b128614f1217dc007af2"),
  "ten": "Sách Nuôi dạy con",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:17:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:17:44.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b131614f1217dc007af3"),
  "ten": "Sách Kỹ năng sống",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:17:53.0Z"),
  "updateAt": ISODate("2017-10-20T08:17:53.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b13f614f1217dc007af4"),
  "ten": "Sách Kinh tế",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:18:07.0Z"),
  "updateAt": ISODate("2017-10-20T08:18:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b149614f1217dc007af5"),
  "ten": "Sách Giáo dục",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:18:17.0Z"),
  "updateAt": ISODate("2017-10-20T08:18:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b156614f1217dc007af6"),
  "ten": "Sách Học ngoại ngữ",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:18:30.0Z"),
  "updateAt": ISODate("2017-10-20T08:18:30.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b15e614f1217dc007af7"),
  "ten": "Sách Văn học - Tiểu thuyết",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:18:38.0Z"),
  "updateAt": ISODate("2017-10-20T08:18:38.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b167614f1217dc007af8"),
  "ten": "Sách Chính trị - Pháp lý",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:18:47.0Z"),
  "updateAt": ISODate("2017-10-20T08:18:47.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b171614f1217dc007af9"),
  "ten": "Sách Văn hóa - Du lịch",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:18:57.0Z"),
  "updateAt": ISODate("2017-10-20T08:18:57.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b17b614f1217dc007afa"),
  "ten": "Sách Lịch sử",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:19:07.0Z"),
  "updateAt": ISODate("2017-10-20T08:19:07.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b185614f1217dc007afb"),
  "ten": "Sách Y học",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:19:17.0Z"),
  "updateAt": ISODate("2017-10-20T08:19:17.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b18e614f1217dc007afc"),
  "ten": "Sách Nông - Lâm - Ngư nghiệp",
  "icon": "",
  "thutu": "0",
  "id_parent": [
    "59e9a738614f1217dc007a49"
  ],
  "createAt": ISODate("2017-10-20T08:19:26.0Z"),
  "updateAt": ISODate("2017-10-20T08:19:26.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b199614f1217dc007afd"),
  "ten": "Sách Khoa học kỹ thuật",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T08:19:37.0Z"),
  "updateAt": ISODate("2017-10-20T08:19:37.0Z")
});
db.getCollection("product_type").insert({
  "_id": ObjectId("59e9b1a0614f1217dc007afe"),
  "ten": "Khác",
  "icon": "",
  "thutu": "0",
  "createAt": ISODate("2017-10-20T08:19:44.0Z"),
  "updateAt": ISODate("2017-10-20T08:19:44.0Z")
});

/** sessions records **/
db.getCollection("sessions").insert({
  "_id": ObjectId("59e47afcaa0eb0f104ba6a81"),
  "session_id": "tljuda0nd6055pol4nc9ha3pm0",
  "data": "",
  "timedout_at": NumberInt(1508158340),
  "expired_at": NumberInt(1508181915)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e549083e66a10ce849b5be"),
  "session_id": "t3dgh36eglss1m41t494erupk3",
  "data": "user_id|s:24:\"59d9b0a47247ae5c1400018b\";roles|C:23:\"MongoDB\\Model\\BSONArray\":55:{x:i:0;a:2:{i:0;s:5:\"Admin\";i:1;s:7:\"Manager\";};m:a:0:{}}",
  "timedout_at": NumberInt(1508215996),
  "expired_at": NumberInt(1508234664)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e575723e66a10ce849bb8a"),
  "session_id": "nftdftj6gciktvlafkmmc9sig1",
  "data": "user_id|s:24:\"59d9b0a47247ae5c1400018b\";roles|C:23:\"MongoDB\\Model\\BSONArray\":55:{x:i:0;a:2:{i:0;s:5:\"Admin\";i:1;s:7:\"Manager\";};m:a:0:{}}",
  "timedout_at": NumberInt(1508216041),
  "expired_at": NumberInt(1508246034)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e5757f3e66a10ce849bb96"),
  "session_id": "vda66ap930ga5gkuqm73vu27m4",
  "data": "",
  "timedout_at": NumberInt(1508240841),
  "expired_at": NumberInt(1508246047)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e699e33e66a10ce849ea7e"),
  "session_id": "qvv6hn28tffs25gl3osrq860s5",
  "data": "",
  "timedout_at": NumberInt(1508327663),
  "expired_at": NumberInt(1508349885)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e864843e66a10ce84a112e"),
  "session_id": "u8940sbtusdb9bsbdca0ha7057",
  "data": "user_id|s:24:\"59d9b0a47247ae5c1400018b\";roles|C:23:\"MongoDB\\Model\\BSONArray\":55:{x:i:0;a:2:{i:0;s:5:\"Admin\";i:1;s:7:\"Manager\";};m:a:0:{}}username|s:23:\"trungminhphan@gmail.com\";fullname|s:15:\"Phan Minh Trung\";",
  "timedout_at": NumberInt(1508414651),
  "expired_at": NumberInt(1508438308)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59e941ca3e66a10ce84a181f"),
  "session_id": "7avat2fd2r0i06qavdkioed7e7",
  "data": "user_id|s:24:\"59d9b0a47247ae5c1400018b\";roles|C:23:\"MongoDB\\Model\\BSONArray\":55:{x:i:0;a:2:{i:0;s:5:\"Admin\";i:1;s:7:\"Manager\";};m:a:0:{}}username|s:23:\"trungminhphan@gmail.com\";fullname|s:15:\"Phan Minh Trung\";",
  "timedout_at": NumberInt(1508493955),
  "expired_at": NumberInt(1508494954)
});

/** users records **/
db.getCollection("users").insert({
  "_id": ObjectId("59d9b0a47247ae5c1400018b"),
  "password": "122333",
  "roles": [
    "Admin"
  ],
  "username": "trungminhphan@gmail.com",
  "fullname": "Phan Minh Trung",
  "logs": [
    {
      "in": ISODate("2016-11-27T09:17:34.0Z")
    },
    {
      "out": ISODate("2016-11-27T09:19:01.0Z")
    },
    {
      "in": ISODate("2016-11-27T09:19:07.0Z")
    },
    {
      "out": ISODate("2016-11-27T09:19:17.0Z")
    },
    {
      "in": ISODate("2016-11-27T09:19:36.0Z")
    },
    {
      "out": ISODate("2016-11-27T09:46:51.0Z")
    },
    {
      "in": ISODate("2016-11-27T09:46:58.0Z")
    },
    {
      "out": ISODate("2016-11-27T10:24:38.0Z")
    },
    {
      "in": ISODate("2016-11-27T10:25:26.0Z")
    },
    {
      "out": ISODate("2016-11-27T10:25:52.0Z")
    },
    {
      "in": ISODate("2016-11-27T10:26:09.0Z")
    },
    {
      "out": ISODate("2016-11-27T10:26:36.0Z")
    },
    {
      "in": ISODate("2016-11-27T10:26:39.0Z")
    },
    {
      "in": ISODate("2016-11-27T14:10:55.0Z")
    },
    {
      "out": ISODate("2016-11-27T14:14:43.0Z")
    },
    {
      "in": ISODate("2016-11-27T14:14:49.0Z")
    },
    {
      "out": ISODate("2016-11-27T14:21:47.0Z")
    },
    {
      "in": ISODate("2016-11-27T14:22:13.0Z")
    },
    {
      "out": ISODate("2016-11-27T14:22:35.0Z")
    },
    {
      "in": ISODate("2016-11-27T14:22:41.0Z")
    },
    {
      "in": ISODate("2016-11-27T14:55:30.0Z")
    },
    {
      "in": ISODate("2016-11-28T01:15:42.0Z")
    },
    {
      "in": ISODate("2016-11-28T02:02:52.0Z")
    },
    {
      "in": ISODate("2016-11-28T02:06:43.0Z")
    },
    {
      "in": ISODate("2016-11-28T09:18:22.0Z")
    },
    {
      "in": ISODate("2016-11-29T08:34:30.0Z")
    },
    {
      "in": ISODate("2016-11-30T12:40:47.0Z")
    },
    {
      "out": ISODate("2016-11-30T12:41:27.0Z")
    },
    {
      "in": ISODate("2016-12-01T03:08:42.0Z")
    },
    {
      "in": ISODate("2016-12-02T03:20:15.0Z")
    },
    {
      "out": ISODate("2016-12-02T03:21:41.0Z")
    },
    {
      "in": ISODate("2016-12-02T03:21:42.0Z")
    },
    {
      "out": ISODate("2016-12-02T03:21:43.0Z")
    },
    {
      "in": ISODate("2016-12-02T03:21:49.0Z")
    },
    {
      "out": ISODate("2016-12-02T03:22:19.0Z")
    },
    {
      "in": ISODate("2016-12-06T02:54:16.0Z")
    },
    {
      "in": ISODate("2016-12-06T06:53:50.0Z")
    },
    {
      "in": ISODate("2016-12-07T06:50:20.0Z")
    },
    {
      "out": ISODate("2016-12-07T09:28:13.0Z")
    },
    {
      "in": ISODate("2016-12-08T06:42:32.0Z")
    },
    {
      "in": ISODate("2016-12-15T07:13:28.0Z")
    },
    {
      "out": ISODate("2016-12-15T07:38:47.0Z")
    },
    {
      "in": ISODate("2016-12-17T02:24:18.0Z")
    },
    {
      "in": ISODate("2016-12-19T01:44:33.0Z")
    },
    {
      "in": ISODate("2016-12-19T06:27:49.0Z")
    },
    {
      "in": ISODate("2016-12-22T01:52:38.0Z")
    },
    {
      "out": ISODate("2016-12-22T02:48:48.0Z")
    },
    {
      "in": ISODate("2016-12-22T02:48:57.0Z")
    },
    {
      "out": ISODate("2016-12-22T03:03:38.0Z")
    },
    {
      "in": ISODate("2016-12-22T03:06:42.0Z")
    },
    {
      "out": ISODate("2016-12-22T03:19:23.0Z")
    },
    {
      "in": ISODate("2016-12-22T03:20:38.0Z")
    },
    {
      "in": ISODate("2016-12-22T07:01:00.0Z")
    },
    {
      "in": ISODate("2016-12-22T09:44:30.0Z")
    },
    {
      "in": ISODate("2016-12-23T02:13:35.0Z")
    },
    {
      "in": ISODate("2016-12-23T03:24:49.0Z")
    },
    {
      "out": ISODate("2016-12-23T03:59:43.0Z")
    },
    {
      "in": ISODate("2016-12-23T04:16:09.0Z")
    },
    {
      "out": ISODate("2016-12-23T04:17:02.0Z")
    },
    {
      "in": ISODate("2016-12-23T06:21:51.0Z")
    },
    {
      "out": ISODate("2016-12-23T07:08:19.0Z")
    },
    {
      "in": ISODate("2016-12-23T08:00:31.0Z")
    },
    {
      "out": ISODate("2016-12-23T08:01:32.0Z")
    },
    {
      "in": ISODate("2016-12-23T08:15:52.0Z")
    },
    {
      "out": ISODate("2016-12-23T08:32:14.0Z")
    },
    {
      "in": ISODate("2016-12-23T08:32:39.0Z")
    },
    {
      "out": ISODate("2016-12-23T08:59:15.0Z")
    },
    {
      "in": ISODate("2016-12-23T09:37:00.728Z")
    },
    {
      "out": ISODate("2016-12-23T09:37:19.188Z")
    },
    {
      "in": ISODate("2016-12-23T12:40:14.0Z")
    },
    {
      "out": ISODate("2016-12-23T13:11:02.0Z")
    },
    {
      "in": ISODate("2016-12-23T13:16:48.0Z")
    },
    {
      "in": ISODate("2016-12-23T13:48:24.0Z")
    },
    {
      "in": ISODate("2016-12-29T12:40:16.0Z")
    },
    {
      "in": ISODate("2016-12-29T13:37:07.0Z")
    },
    {
      "in": ISODate("2017-01-01T13:13:45.0Z")
    },
    {
      "in": ISODate("2017-01-01T13:37:19.0Z")
    },
    {
      "in": ISODate("2017-10-08T04:59:25.0Z")
    },
    {
      "in": ISODate("2017-10-09T15:04:43.0Z")
    },
    {
      "in": ISODate("2017-10-09T17:06:42.0Z")
    },
    {
      "in": ISODate("2017-10-09T17:07:10.0Z")
    },
    {
      "in": ISODate("2017-10-09T17:09:21.0Z")
    },
    {
      "in": ISODate("2017-10-10T08:39:28.777Z")
    },
    {
      "out": ISODate("2017-10-10T08:41:45.961Z")
    },
    {
      "in": ISODate("2017-10-10T08:52:33.360Z")
    },
    {
      "in": ISODate("2017-10-10T12:45:01.969Z")
    },
    {
      "in": ISODate("2017-10-10T15:33:57.296Z")
    },
    {
      "out": ISODate("2017-10-10T15:38:44.392Z")
    },
    {
      "in": ISODate("2017-10-11T01:07:06.179Z")
    },
    {
      "out": ISODate("2017-10-11T01:09:54.992Z")
    },
    {
      "in": ISODate("2017-10-11T06:35:39.913Z")
    },
    {
      "in": ISODate("2017-10-11T07:34:17.154Z")
    },
    {
      "in": ISODate("2017-10-11T09:47:58.0Z")
    },
    {
      "in": ISODate("2017-10-11T13:01:46.0Z")
    },
    {
      "in": ISODate("2017-10-13T13:39:33.0Z")
    },
    {
      "out": ISODate("2017-10-13T13:49:37.0Z")
    }
  ],
  "status": "1",
  "phone": "09859854347",
  "address": "An Giang",
  "id": "59d9b0a47247ae5c1400018b",
  "hinhanh_aliasname": [
    
  ],
  "hinhanh_filename": [
    
  ],
  "updateAt": ISODate("2017-10-20T07:38:54.0Z")
});
