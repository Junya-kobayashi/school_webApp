create table items(
    id serial,
    name varchar,
    price int,
    description varchar,
    buyer int,
    seller int,
    sold_out boolean DEFAULT false,
    pict varchar
)