json.array!(@pays) do |pay|
  json.extract! pay, :id, :capitale, :devise, :habitants
  json.url pay_url(pay, format: :json)
end
