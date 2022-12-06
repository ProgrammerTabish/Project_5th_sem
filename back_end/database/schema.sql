CREATE TABLE user_info (
  uid integer primary key,
  username text not null,
  email varchar(20),
  phone int,
  address varchar(30)
);
describe user_info;
CREATE TABLE user (
  uid integer primary key,
  type text,
  FOREIGN KEY(uid) REFERENCES user_info(uid)
);
describe user;
CREATE TABLE user_profile (
  uid integer primary key,
  image_addr varchar(30),
  aboute_usr text,
  FOREIGN KEY(uid) REFERENCES user(uid)
);
describe user_profile;
CREATE TABLE details (
  prop_id integer primary key,
  type text,
  area varchar(30),
  rate integer,
  interest_rate varchar(10),
  emi varchar(30),
  image_addr varchar(30)
);
describe details;
CREATE TABLE proporty (
  prop_id integer primary key,
  uid integer,
  FOREIGN KEY(uid) REFERENCES user(uid),
  FOREIGN KEY(prop_id) REFERENCES details(prop_id)
);
describe proporty;
CREATE TABLE documents (
  prop_id integer primary key,
  pdf_addr varchar(30),
  FOREIGN KEY(prop_id) REFERENCES proporty(prop_id)
);
describe documents;
CREATE TABLE address (
  prop_id integer primary key,
  country text,
  state text,
  districs text,
  division text,
  city text,
  location varchar(20),
  plot_no integer,
  landmark varchar(20),
  FOREIGN KEY(prop_id) REFERENCES proporty(prop_id)
);
describe address;
CREATE TABLE reviews (
  uid integer primary key,
  prop_id integer,
  rating integer,
  comment varchar(50),
  FOREIGN KEY(prop_id) REFERENCES proporty(prop_id),
  FOREIGN KEY(uid) REFERENCES proporty(uid)
);
describe reviews;
