db.products.find({price: {$gt: 199, $lt:451}}, {name:1, type:1, _id:0});
