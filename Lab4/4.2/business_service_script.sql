create database business_service;
use business_service;

create table businesses(
	business_id int not null primary key,
    name varchar(100) not null,
    address varchar(100) not null,
    city varchar(100) not null,
    telephone varchar(10) not null,
    url varchar(10) not null
);

create table categories(
	category_id int not null primary key,
    title varchar(100) not null,
    description varchar(100) not null
);

create table biz_categories(
	business_id int not null,
    category_id int not null,
    constraint pks primary key(business_id, category_id),
    foreign key (business_id) references businesses(business_id),
    foreign key (category_id) references categories(category_id)
);