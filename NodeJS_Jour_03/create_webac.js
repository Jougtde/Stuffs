conn = new Mongo("localhost:27017");
db = conn.getDB("webac");

function getId(name) {
    var ret = db.counters.findAndModify(
	{
	    query: { _id: name },
	    update: { $inc: {seq: 1} },
	    new: true
	}
    );

    return ret.seq;
}

db.counters.drop()
db.counters.insert(
    {
	_id: "productsid",
	seq: 0
    }
)
    
db.owners.drop()
db.owners.insert(
    [
	{
	    name: "Jeremy",
	    products: []
	},
	{
	    name: "Polo",
	    products: [1, 2]
	},
	{
	    name: "Hugo",
	    products: [3, 7, 12, 15, 27]
	},
	{
	    name: "Martin",
	    products: [8, 9, 14, 16, 21, 23]
	},
	{
	    name: "Loic",
	    products: [17, 18, 19, 24]
	},
	{
	    name: "Pierre",
	    products: [4, 10, 11, 25, 13, 30]
	},
	{
	    name: "Thibault",
	    products: [20, 5, 22, 6, 18]
	}
    ]
)

db.products.drop()
db.products.insert(
    [
	{
	    _id: getId("productsid"),
	    name: "Bucket of nothing",
	    price: 0,
	    material: "Metal",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Stool",
	    price: 50,
	    material: "Light wood",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Table",
	    price: 300,
	    material: "Heavy wood",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Spoon",
	    price: 500,
	    material: "Gold",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Dog",
	    price: 100,
	    material: "Flesh and fur",
	    type: "Mammal"
	},
	{
	    _id: getId("productsid"),
	    name: "Stool",
	    price: 200,
	    material: "Heavy wood",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Cursed chair",
	    price: 1,
	    material: "Cursed wood",
	    type: "Woodoo"
	},
	{
	    _id: getId("productsid"),
	    name: "Beautiful mirror",
	    price: 450,
	    material: "Gold and rubies",
	    type: "Beauty"
	},
	{
	    _id: getId("productsid"),
	    name: "Mockingbird",
	    price: 10,
	    material: "Flesh and feather",
	    type: "Bird"
	},
	{
	    _id: getId("productsid"),
	    name: "Computer",
	    price: 1000,
	    material: "Metal",
	    type: "Science",
	    comment: "Comes with Windows XP"
	},
	{
	    _id: getId("productsid"),
	    name: "Table",
	    price: 150,
	    material: "Wood",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Knife",
	    price: 5,
	    material: "Plastic",
	    type: "Cheap furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Chainsaw",
	    price: 342,
	    material: "Metal",
	    type: "Weapon"
	},
	{
	    _id: getId("productsid"),
	    name: "Lava bucket",
	    price: -100,
	    material: "Lava",
	    type: "Dangerous"
	},
	{
	    _id: getId("productsid"),
	    name: "Video Game",
	    price: 99,
	    material: "Plastic",
	    type: "Game"
	},
	{
	    _id: getId("productsid"),
	    name: "Ball",
	    price: 0,
	    material: "Rubber",
	    type: "Game"
	},
	{
	    _id: getId("productsid"),
	    name: "Pickaxe",
	    price: 70,
	    material: "Wood and metal",
	    type: "Tool"
	},
	{
	    _id: getId("productsid"),
	    name: "Cup of water",
	    price: 2,
	    material: "Plastic and water",
	    type: "Food"
	},
	{
	    _id: getId("productsid"),
	    name: "Jar",
	    price: 50,
	    material: "Plastic",
	    type: "Container"
	},
	{
	    _id: getId("productsid"),
	    name: "Military knife",
	    price: 290,
	    material: "Metal",
	    type: "Weapon"
	},
	{
	    _id: getId("productsid"),
	    name: "Jelly",
	    price: 40,
	    material: "Sugar",
	    type: "Food"
	},
	{
	    _id: getId("productsid"),
	    name: "Cursed puppet",
	    price: 400,
	    material: "Wool",
	    type: "Woodoo"
	},
	{
	    _id: getId("productsid"),
	    name: "Peanut",
	    price: 0,
	    material: "Peanut",
	    type: "Food"
	},
	{
	    _id: getId("productsid"),
	    name: "Jam",
	    price: 30,
	    material: "Slimy",
	    type: "Food"
	},
	{
	    _id: getId("productsid"),
	    name: "Sandwich",
	    price: 12,
	    material: "Bread",
	    type: "Food"
	},
	{
	    _id: getId("productsid"),
	    name: "Armor",
	    price: 800,
	    material: "Diamond",
	    type: "Weapon"
	},
	{
	    _id: getId("productsid"),
	    name: "Chicken",
	    price: 60,
	    material: "None",
	    type: "Bird"
	},
	{
	    _id: getId("productsid"),
	    name: "Bill Cipher",
	    price: 618,
	    material: "Unknown",
	    type: "Dangerous"
	},
	{
	    _id: getId("productsid"),
	    name: "Paper",
	    price: 35,
	    material: "Paper",
	    type: "Furniture"
	},
	{
	    _id: getId("productsid"),
	    name: "Axe",
	    price: 350,
	    material: "Metal",
	    type: "Tool"
	}
    ]
)
