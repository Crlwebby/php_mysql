create table customers
(
    customerID int unsigned not null  auto_increment primary key,
    name char(50) not null,
    address char(100) not null,
    city char(30) not null
);

create table orders
(
    orderID int unsigned not null auto_increment primary key,
    customerID int unsigned not null,
    amount float(6,2),
    `Date` date not null,
    foreign key (customerID) references customers(customerID)
);

create table books
(
    ISBN char(13) not null primary key,
    author char(50),
    title char(100),
    price float(4,2)
);

create table order_items
(
    orderID int unsigned not null,
    ISBN char(13) not null,
    quantity tinyint unsigned,

    primary key(orderID,ISBN),
    foreign key(orderID) references orders(orderID),
    foreign key(ISBN) references books(ISBN)
);

create table book_reviews
(
    ISBN char(13) not null primary key,
    review text,

    foreign key(ISBN) references books(ISBN)
);