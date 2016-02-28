json.array!(@labels) do |label|
  json.extract! label, :id, :title
  json.url label_url(label, format: :json)
end
