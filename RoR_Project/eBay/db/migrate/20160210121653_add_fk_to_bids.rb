class AddFkToBids < ActiveRecord::Migration
  def change
    add_foreign_key :bids, :products
    add_foreign_key :bids, :users
  end
end
