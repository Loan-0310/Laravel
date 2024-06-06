create database demo;

use demo;

create table category (
    id int primary key auto_increment,
    name varchar(100) not null unique,
    created_at timestamp default current_timestamp,
    updated_at timestamp null  
);

create table product (
    id int primary key auto_increment,
    name varchar(100) not null,
    price float not null,
    sale_price float not null default '0',
    image text null,
    description text null,
    category_id int not null,
    foreign key (category_id) references category(id),
    created_at timestamp default current_timestamp,
    updated_at timestamp null  
);

create table customer (
    id int primary key auto_increment,
    name varchar(100) not null,
    email varchar(200) not null unique,
    password varchar(200) not null,
    address varchar(200) not null,
    phone varchar(20) not null unique,
    created_at timestamp default current_timestamp,
    updated_at timestamp null  
);

create table users (
    id int primary key auto_increment,
    name varchar(100) not null,
    email varchar(200) not null unique,
    password varchar(200) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp null  
);

create table oder (
    id int primary key auto_increment,
    name varchar(100) null,
    email varchar(200) null unique,
    address varchar(200) not null,
    phone varchar(20) null unique,
    status tinyint default '0',
    customer_id int not null,
    foreign key (customer_id) references customer(id),
    created_at timestamp default current_timestamp,
    updated_at timestamp null  
);

create table oderdetail (
    oder_id int not null,
    foreign key (oder_id) references oder(id),
    price float not null, 
    quantity int not null,
    product_id int not null,
    foreign key (product_id) references product(id),
    primary key (oder_id, product_id)
);

insert into category(name) value 
('Áo Khoác'), 
('Áo Phông'), 
('Áo Sơ Mi'), 
('Quần Dài Nam - Nữ'), 
('Quần Âu'); 

insert into product(name, price, sale_price, image, category_id, description) value 
('Áo Khoác Nỉ Đen', '432.124', '20', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/jd0105.jpg', 1, 'rất đẹp'), 
('Sơ Mi Kèm Phụ Kiện', '523.235', '30', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/ja04.jpg', 3, 'thoải mái'), 
('Quần Ulzzang', '325.235', '10', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/ja0304.jpg', 4 , 'hợp túi tiền'), 
('Công Sở', '1.234.252', '10', 'https://cdn0918.cdn4s1.com/media/ja0304/variation_13.jpg', 5, 'phù hợp với mọi dáng'), 
('Áo Croptop', '90.241', '20', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/jd0105-ghi.jpg', 2, 'sản phẩm đẹp'), 
('Sơ Mi Thanh Lịch', '244.235', '10', 'https://cdn0918.cdn4s1.com/media/jd0105/image_9.jpg', 3, 'sản phẩm tốt'), 
('Quần Nỉ', '125.235', '30', 'https://cdn0918.cdn4s1.com/media/jd0105/image_8.jpg', 4, 'bền và đẹp'), 
('Công Sở Xanh', '1.437.365', '10', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/ja02.jpg', 5, 'đẹp và thoải mái'), 
('Khoác Nỉ Tím', '241.124', '5', 'https://cdn0918.cdn4s1.com/media/san-pham/ja02/image_7.png', 1, 'thoải mái'), 
('Sơ Mi Xanh', '234.124', '10', 'https://cdn0918.cdn4s1.com/media/san-pham/ja02/variation_11.jpg', 3, 'bền'), 
('Quần Ống Rộng', '325.352', '40', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/ja0102.jpg', 4, 'đẹp'), 
('Đồng Phục Âu', '2.325.143', '20', 'https://cdn0918.cdn4s1.com/media/san-pham/ja0102/image_7%20(1).jpg', 5, 'chắc chắn'), 
('Khoác Lông Cừu', '1.235.235', '30', 'https://cdn0918.cdn4s1.com/media/san-pham/ja0102/variation_9.jpg', 1, 'thời trang bền'), 
('Áo Phông Rộng', '124.234', '40', 'https://cdn0918.cdn4s1.com/media/banner/anh-bia-tron/ja01.jpg', 2, 'đẹp và rát bền'), 
('Quần Xuông Dài', '300.323', '10', 'https://cdn0918.cdn4s1.com/media/ja0101/variation_13.jpg', 4, 'hợp'), 
('Trang Phục Âu', '1.242.234', '10', 'https://cdn0918.cdn4s1.com/media/ja0101/variation_10.jpg', 5, 'đẹp và thoải mái'), 
('Khoác Nỉ Xám', '242.245', '10', 'https://cdn0918.cdn4s1.com/media/ja0101/ja0101-new/thiet-ke-chua-co-ten-3.png', 1, 'đẹp và thoải mái'), 
('Áo Phông Nam Đen', '90.241', '10', 'https://cdn0918.cdn4s1.com/media/ja0101/variation_11.jpg', 2, 'đẹp và thoải mái'); 

