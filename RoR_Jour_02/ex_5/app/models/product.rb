class Product < ActiveRecord::Base

  validates :title, length: { in: 3..50 }
  validates :price, numericality: { greater_than: 0 }
  validates :description, length: { minimum: 2 }, allow_blank: true

end
