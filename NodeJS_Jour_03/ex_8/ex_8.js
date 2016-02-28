db.products.aggregate(
    {
	$match : {type : "Furniture"}
    },
    {
	$group : { _id : "$type", sum : { $sum : 1 } }
    }
  );
