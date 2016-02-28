db.products.find({"material" : {$regex : ".*wood*"}}, {name:1, _id:0});
