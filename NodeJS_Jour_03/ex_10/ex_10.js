db.products.insert( { _id: 31, name: "Platypus", price: 42000, material: "Heavy metal", type: "Mammal" } );
db.owners.update(
   { name: "Martin" },
   {
      name: "Martin",
      products: [8, 9, 14, 16, 21, 23, 31]
   },
   { upsert: true }
);
