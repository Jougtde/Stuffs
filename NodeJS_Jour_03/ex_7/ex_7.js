db.products.find({_id: {$in:[1, 5, 10, 20]}}, {material:1, _id:0});
