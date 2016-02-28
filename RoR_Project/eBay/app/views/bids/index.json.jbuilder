json.array!(@bids) do |bid|
  json.extract! bid, :id, :actual_bid, :max_bid, :product_id, :user_id
  json.url bid_url(bid, format: :json)
end
